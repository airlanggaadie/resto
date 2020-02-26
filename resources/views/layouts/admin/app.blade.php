<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  @include('includes.admin.style')
</head>

<body class="dark-edition">
  <div class="wrapper ">
    @include('includes.admin.sidebar')
    <div class="main-panel">
     @include('includes.admin.navbar')
      @yield('content')
      </div>
      @include('includes.admin.footer')
    </div>
  </div>
  @include('includes.admin.script')
</body>

</html>