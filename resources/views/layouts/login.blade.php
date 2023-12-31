<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('Cars Repair') }} - @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap.css')}}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/demo/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/vendor/images/favicon.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="{{ asset('build/assets/app-e5178921.css') }}">

    <link rel="stylesheet" href="{{asset('admin/vendor/css/myStyle.css')}}">
</head>
<body>

<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        @yield('content')
    </main>
</div>


<!-- plugins:js -->
<script src="{{asset('admin/vendor/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('admin/vendor/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/vendor/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('admin/vendor/js/material.js')}}"></script>
<script src="{{asset('admin/vendor/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('admin/vendor/js/dashboard.js')}}"></script>
<script src="{{asset('admin/vendor/js/preloader.js')}}"></script>
</body>
</html>
