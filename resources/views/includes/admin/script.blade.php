
<!-- Bootstrap core JavaScript-->
<script src="{{ url('contoh/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('contoh/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('contoh/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('contoh/js/sb-admin-2.min.js') }}"></script>

<script>
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("#berbaris").attr("src","{{ asset('frontend/img/berbaris-1.png') }}")    
    if ($(".sidebar").hasClass("toggled")) {
      $("#berbaris").attr("src","{{ asset('frontend/img/20200129_154329_0000.png') }}")
    };
  });
</script>