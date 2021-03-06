<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>@yield('title')</title>
    <!-- Fontfaces CSS-->
    <link href="{{ asset('dashboard_theme/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('dashboard_theme/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('dashboard_theme/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{ asset('dashboard_theme/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard_theme/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Main CSS-->
    <link href="{{ asset('dashboard_theme/css/theme.css')}}" rel="stylesheet" media="all">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>



@yield('body')


<!-- Jquery JS-->
{{--<script src="{{ asset('dashboard_theme/vendor/jquery-3.2.1.min.js')}}"></script>--}}

<!-- Bootstrap JS-->
<script src="{{ asset('dashboard_theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('dashboard_theme/vendor/slick/slick.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/wow/wow.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{ asset('dashboard_theme/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('dashboard_theme/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{ asset('dashboard_theme/js/main.js')}}"></script>



</html>
<!-- end document-->
