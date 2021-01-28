<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MojaGwarancja.pl - Twoja gwarancja</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="MojaGwarancja.pl - Twoja gwarancja">
    <meta name="author" content="mojaGwarancja">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="">
    <meta name="keywords"
          content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.mojaGwarancja.com/pixel-pro">
    <meta property="og:title" content="MojaGwarancja.pl - Twoja gwarancja">
    <meta property="og:description"
          content="">
    <meta property="og:image"
          content="https://mojaGwarancja.s3.us-east-2.amazonaws.com/public/products/pixel-pro/pixel-pro-preview.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('assets/home/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('assets/home/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/home/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::asset('assets/home/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{URL::asset('assets/home/img/favicon/safari-pinned-tab.svg')}}'" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.3"
          type="text/css" media="all">
    <link type="text/css" href="{{URL::asset('assets/home/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/home/vendor/@glidejs/glide/dist/css/glide.core.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/home/vendor/@glidejs/glide/dist/css/glide.theme.min.css')}}">
    <link type="text/css" href="{{URL::asset('assets/home/css/pixel.css')}}" rel="stylesheet">
    <script src="{{URL::asset('assets/home/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


</head>
<body>
@yield('header')
<main>
    @yield('preloader')

    <div id="app">
        @yield('content')
    </div>

</main>
@yield('footer')
<script>
    init();
</script>
<script src="{{URL::asset('assets/home/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/headroom.js/dist/headroom.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/prismjs/prism.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/vivus/dist/vivus.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/@glidejs/glide/dist/glide.min.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/countup.js/dist/countUp.umd.js')}}"></script>
<script src="{{URL::asset('assets/home/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/pixel.js')}}"></script>
</body>
</html>
