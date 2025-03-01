<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LUXELOCKS')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/north_hair_product/assets/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/north_hair_product/assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/north_hair_product/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/north_hair_product/assets/css/output.css') }}">

    <style>
        /* Loader Styles */
        #loader-wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .loader {
          width: 50px;
          aspect-ratio: 1;
          display: grid;
          border: 4px solid #0000;
          border-radius: 50%;
          border-color: #ccc #0000;
          animation: l16 1s infinite linear;
        }
        .loader::before,
        .loader::after {
          content: "";
          grid-area: 1/1;
          margin: 2px;
          border: inherit;
          border-radius: 50%;
        }
        .loader::before {
          border-color: #B7954C #0000;
          animation: inherit;
          animation-duration: .5s;
          animation-direction: reverse;
        }
        .loader::after {
          margin: 8px;
        }
        @keyframes l16 {
          100%{transform: rotate(1turn)}
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>

    <!-- Main Content -->
    <div id="content">
        @yield('app')
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ asset('assets/north_hair_product/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/north_hair_product/assets/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/north_hair_product/assets/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/north_hair_product/assets/js/script.js') }}"></script>

    <script>
        // Hide loader after 1.5 seconds
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.getElementById("loader-wrapper").style.display = "none";
            }, 1500);
        });

        // Alternative: Hide loader when page fully loads
        // window.addEventListener("load", function () {
        //     document.getElementById("loader-wrapper").style.display = "none";
        // });
    </script>

</body>

</html>
