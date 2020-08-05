<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | Abd. Asis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Saya Software Engineer berasal dari Indonesia, dengan bahasa pemrograman utama PHP suka bekerja dengan framework Laravel selain senang di bagian Backend juga senang dalam bagian Frontend, selain ngoding saya juga senang menulis artikel dari pengetahuan yang sudah saya pelajari. selain PHP ada Beberapa teknologi yang saya sukai seperti ReactJS, Pyhthon (Django)" name="description" />
        <meta content="Abd. Asis" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/materialdesignicons.min.css" />
        @yield('css')
        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/style.css" />

    </head>

    <body>

        <!--Navbar Start-->
        @include('includes.navbar')

        @yield('content')

        <!-- Navbar End -->


        <!-- footer start -->
        @include('includes.footer')
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.easing.min.js"></script>
        <script src="{{ url('/') }}/assets/js/scrollspy.min.js"></script>

        @yield('js')
        <!-- custom js -->
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2a9f204211fc0012520e87&product=sop' async='async'></script>

        <script src="{{ url('/') }}/assets/js/app.js"></script>
    </body>

</html>
