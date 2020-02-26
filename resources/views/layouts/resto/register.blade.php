<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('contoh/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('contoh/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ url('FrontEnd/img/20200129_154329_0000.png')}}">
</head>
<body>

    <cimiko>
            @include('includes.resto.resto-home.navbar')
        <div class="container-fluid my-5">

            @yield('content')
        </div>
    </cimiko>
    
</body>

<!-- Bootstrap core JavaScript-->
<script src="{{ url('contoh/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('contoh/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('contoh/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('contoh/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ url('contoh/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('contoh/js/demo/chart-area-demo.js') }} "></script>
<script src="{{ url('contoh/js/demo/chart-pie-demo.js') }}"></script>
</html>