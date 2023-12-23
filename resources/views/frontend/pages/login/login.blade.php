<style>
  
body {
  background-image:url('https://cdn.pixabay.com/photo/2016/03/04/19/36/beach-1236581_1280.jpg');
  background-position:center;
  background-size:cover;

}

.container {
    padding: 110px;
}

.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 {
 border:0 solid #fff;
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}

</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title></title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> --}}
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

    <form action="{{ route('login.process') }}" method="post" enctype="multipart/form-data">
@csrf
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <h1 class='text-white'>Tour Management System</h1>
              <div class="form-login"></br>
                <a class="btn btn-success" href="{{ url('/') }}">Go Home</a>
                <h4>Secure Login </h4>
                </br>
                <input type="email" id="userEmail" name="email" class="form-control input-sm chat-input" placeholder="Email"/>
                </br></br>
                <input type="password" name="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password"/>

                @if($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif

                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                           <button type="submit" class="btn btn-danger">Login</button>
                        </span>
                </div>
            </div>
        </div>
    </div>
    </br></br></br>
    <!--footer-->

    <!--//footer-->
</div>
</form>
</body>
</html>
