<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Hotel;

class SslController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function indexHotel(Request $request ,$id)
    {

        $request->validate([
            "name"=>'required',
            "email"=>'required',
            "address"=>'required',
            "phone"=>'required',

        ]);
        //dd($request->all());


        // dd($id);

       $hotels = Hotel::find($id);

       $hotels = Hotel::findOrFail($id);

       if ($hotels->no_of_room > 0) {
           $hotels->no_of_room--;
           $hotels->save();
       }else {
           // If seat_count is 0, return an error response or perform any necessary actions
           Alert::error('error', 'No seats available for booking.');
           return redirect()->back();

       }


        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction information are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $hotels->rent; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); //tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->name;
        $post_data['cus_email'] = $request->email;
        $post_data['cus_add1'] = $request->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $request->phone;
        $post_data['cus_fax'] = "";
        $post_data['hotel_id'] = $request->hotel_id;

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('hotel_books')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'hotel_id' => $post_data['hotel_id'],   //hotel id
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function successful(Request $request)
    {
        echo "Transaction is Successful";
        return to_route('landing.page');
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        # Check order status in the order table against the transaction id.
        $order_details = DB::table('hotel_books')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details) {
            if ($order_details->status == 'Pending') {
                $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

                if ($validation) {
                    /*
                    That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update the order status
                    in the order table as Processing or Complete.
                    Here you can also send SMS or email for a successful transaction to the customer
                    */
                    $update_product = DB::table('hotel_books')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "<br >Transaction is successfully Completed";

                    // Redirect to the landing page
                    Alert::toast()->success('Thank You For Booking');
                    return redirect()->route('landing.page')->with('success', 'Thank You For Booking');
                }
            } elseif ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
                /*
                 That means through IPN, the order status was already updated. Now you can just show the customer that the transaction is completed. No need to update the database.
                 */
                echo "Transaction is successfully Completed";
            } else {
                # That means something wrong happened. You can redirect the customer to your product page.
                echo "Invalid Transaction";
            }
        } else {

            echo "Invalid Transaction ID";
        }
    }


    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('hotel_books')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('hotel_books')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            echo "Transaction is already Successful";

        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('hotel_books')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('hotel_books')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }



}

