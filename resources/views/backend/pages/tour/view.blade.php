@extends('backend.master')

@section('main')



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Tour View </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>



    <div class="container"><br><br><br>
      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $tourView->tittle }}</h4>
          </div>
          <div>
           <img height="100px" width="100px" src="{{ '/uploads/uploads/'.$tourView->image }}" alt="">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">{{ $tourView->price }} Tk <small class="text-muted">/ Person</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Location: {{ $tourView->location }} </li>
              <li>Duration: {{ $tourView->duration }} Days</li>
              <li>Date: {{ $tourView->from_date }} to {{ $tourView->to_date }} </li>

            </ul>

          </div>
        </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>



@endsection
