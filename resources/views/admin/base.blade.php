<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href=" {{ asset('assets/img/voting-box.png') }} " rel="icon">

    <title>@yield('title')</title>

    <!-- Custom fonts for dashboard template-->
    <link href=" {{asset('Admin/dashboard/vendor/fontawesome-free/css/all.css') }} " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{asset('Admin/dashboard/css/sb-admin-2.min.css')}} " rel="stylesheet">


    <!-- Custom styles for Register form-->

    <link href="{{asset("Admin/registerForm/vendor/mdi-font/css/material-design-iconic-font.min.css")}}" rel="stylesheet"
          media="all">
    <link href="{{asset("Admin/registerForm/vendor/font-awesome-4.7/css/font-awesome.min.css")}}" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{asset("Admin/dashboard/css/sb-admin-2.min.css")}}" rel="stylesheet">
    <link href="{{asset("Admin/registerForm/vendor/select2/select2.min.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("Admin/registerForm/vendor/datepicker/daterangepicker.css")}}" rel="stylesheet" media="all">
    <link href="{{asset("Admin/registerForm/css/main.css")}}" rel="stylesheet" media="all">

</head>
    @yield('content')
</html>
