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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="{{ url('contoh/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ url('FrontEnd/img/berbaris-logo.png')}}">

    <link rel="stylesheet" href="{{url('css/selectnone.css')}}">

    
</head>
<body>

    <cimiko>
        <div class="container-fluid" style="background-image: url(https://eatforum.org/content/uploads/2018/05/table_with_food_top_view_900x700.jpg); height: 100vh; background-size: cover; background-repeat: no-repeat;">
            @include('includes.resto.resto-home.version')
            <div class="">
                <div class="row justify-content-center">
                    @include('includes.resto.resto-home.iklan')

                    @yield('content')
                </div>
            </div>
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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>

<script>
    $('#demoDefaultSelection').ddslick({
    data: ddData,
    defaultSelectedIndex:2
});
</script>
</html>