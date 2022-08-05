<!doctype html>
<html>
<head>
   @include('includes.promote.head')
</head>

<body>


   <header>
       @include('includes.promote.header')
   </header>


   <div>

   @yield('content')

    </div>

   <!-- START ต้อวไว้ด้านล่างเพื่อให้ Scripy หา Objเจอ -->
   <script src="{{ asset('template/promote/js/jquery-3.3.1.min.js') }}"></script>
   <script src="{{ asset('template/promote/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('template/promote/js/player.js') }}"></script>
   <script src="{{ asset('template/promote/js/jquery.nice-select.min.js') }}"></script>
   <script src="{{ asset('template/promote/js/mixitup.min.js') }}"></script>
   <script src="{{ asset('template/promote/js/jquery.slicknav.js') }}"></script>
   <script src="{{ asset('template/promote/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('template/promote/js/main.js') }}"></script>
    <!-- END ต้อวไว้ด้านล่างเพื่อให้ Scripy หา Objเจอ -->
   </body>

</html>
