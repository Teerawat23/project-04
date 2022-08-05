<!doctype html>
<html>
<head>
   @include('includes.admin.head')
</head>

<body>

   <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
         @include('includes.admin.header_sidebar')
      </nav>
      <div class="container-fluid page-body-wrapper">
         <nav class="navbar p-0 fixed-top d-flex flex-row">
            @include('includes.admin.header_navbar')
         </nav>
         <div class="main-panel">
            @yield('content')
            <footer class="footer">
               @include('includes.admin.footer')
            </footer>
         </div>
      </div>
   </div>

   <!-- START ชั่วคราวต้องไว้ด้านล่าง เพื่อให้ scripy หา object เจอ -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('template/admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('template/admin/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('template/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/admin/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/admin/js/misc.js') }}"></script>
    <script src="{{ asset('template/admin/js/settings.js') }}"></script>
    <script src="{{ asset('template/admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('template/admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
   <!-- END ชั่วคราวต้องไว้ด้านล่าง เพื่อให้ scripy หา object เจอ -->
</body>
</html>