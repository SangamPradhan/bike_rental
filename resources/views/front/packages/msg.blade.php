
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
                title: "Bike & Scooty Rent Pokhara",
                html: `<div style="text-align: center;">
                           <p style="margin-bottom: 15px; font-weight: bold;">Booking Successful! Your adventure starts soon.</p>
                           <p style="margin-bottom: 10px; font-size: 0.9em; color: #666;">Scan below for advance payment or contact us.</p>
                           <img src="{{ asset('assets/img/fonepay.png') }}" alt="Payment QR" 
                                style="width: 200px; height: auto; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin: 10px auto;">
                           <p style="margin-top: 15px; font-style: italic; color: #008080;">
                               Please send the payment screenshot to our WhatsApp.
                               <br>
                               <a href="https://wa.me/9843237842" style="color: #25D366; font-weight: bold; text-decoration: none; display: inline-flex; align-items: center; gap: 5px; margin-top: 5px;">
                                  <span class="material-symbols-outlined" style="font-size: 18px;">chat</span> Message on WhatsApp
                               </a>
                           </p>
                       </div>`,
                icon: "success",
                confirmButtonText: "GOT IT",
                confirmButtonColor: "#f7941d",
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
