<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>All Store BD</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="All Store BD">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/b2c/assets/img/logo.png') }}">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800,400italic,800italic', 'Poppins:300,400,500,600,700,800',
                    'Oswald:300,400,500,600,700,800'
                ]
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ asset('assets/b2c/assets/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/b2c/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/b2c/assets/css/custom.css') }}">



    @yield('style')
    <!-- Main CSS File -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/b2c/assets/css/demo36.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('assets/b2c/assets/css/demo36.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/b2c/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> --}}


    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/b2c/assets/vendor/fontawesome-free/css/all.min.css') }}"> --}}

</head>

<body>
    @yield('app')


    <!-- End .newsletter-popup -->
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('assets/b2c/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/b2c/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/b2c/assets/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/b2c/assets/js/plugins.min.js') }}"></script> 
    <script src="{{ asset('assets/b2c/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/b2c/assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/b2c/assets/js/jquery.countdown.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/b2c/assets/js/main.min.js') }}"></script>
</body>


</html>
