
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <!-- Include SweetAlert2 from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Custom style for the SweetAlert2 popup to reduce padding */
        .custom-swal-popup {
            padding: 10px !important;
        }
    </style>
</head>
<body>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Gratifying Spa",
                html: `<p style="text-align: center; margin: 0; padding: 0;">Booking Successful. Reservations confirmed.</p>
                       <p style="text-align: center; margin: 0; padding: 0;">Pay Here</p>
                       <img src="{{ asset('assets/img/fonepay.png') }}" alt="Scanner"
                            style="width: 150px; height: auto; display: block; margin: 0 auto;">
                       <p style="text-align: center; margin: 0; padding: 0; font-style: italic; color: skyblue;">
                           For payment confirmation, please send a screenshot of the payment to our WhatsApp number.
                           <a href="https://wa.me/9843237842" style="color: #00662f; text-decoration: underline;">Click here</a>
                       </p>`,
                icon: "success",
                confirmButtonText: "OK",
                confirmButtonColor: "#00662f",
                customClass: {
                    popup: 'custom-swal-popup'
                }
            });
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            Swal.fire({
                title: "Sorry!",
                text: "{{ Session::get('error') }}",
                icon: "error",
                confirmButtonText: "OK",
                confirmButtonColor: "#daa520",
                customClass: {
                    popup: 'custom-swal-popup'
                }
            });
        </script>
    @endif
</body>
</html>
