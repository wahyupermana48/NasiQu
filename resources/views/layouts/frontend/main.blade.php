<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NasiQu | Aplikasi Penghimpun Donasi</title>
        <link rel="icon" type="image/x-icon" href="assets/logo2.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">

        @include('layouts.frontend.navbar')

        <div class="">
            @yield('content')
        </div>
        
    
        @include('layouts.frontend.footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
          <script>
            function myFunction() {
              document.getElementById("price").stepUp(11000);
              document.getElementById("biaya").stepUp(10000);
              document.getElementById("dev").stepUp(1000);
              document.getElementById("ammount").stepUp(1);
              let biaya = document.getElementById("biaya").value;
              document.getElementById("bungkus").innerHTML = biaya;
              let dev = document.getElementById("dev").value;
              document.getElementById("develop").innerHTML = dev;
            }
            function myFunction1() {
              document.getElementById("price").stepDown(11000);
              document.getElementById("biaya").stepDown(10000);
              document.getElementById("dev").stepDown(1000);
              document.getElementById("ammount").stepDown(1);
              let biaya = document.getElementById("biaya").value;
              document.getElementById("bungkus").innerHTML = biaya;
              let dev = document.getElementById("dev").value;
              document.getElementById("develop").innerHTML = dev;
            }

            
            </script>
    </body>
</html>