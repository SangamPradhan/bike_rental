@if (Session::has('success'))
<script>
    swal("Booking Successful. Your reservation has been confirmed.");
  </script>
@endif


@if (Session::has('error'))
<script>

swal("Booking Successful. Your reservation has been confirmed.");

 </script>
@endif
