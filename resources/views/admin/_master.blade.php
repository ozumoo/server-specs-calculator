<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Dashboard | Werashy Admin </title>
  
  <link rel="apple-touch-icon" href="{{asset('admin_theme/assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('/admin_theme/assets/images/favicon.ico')}}">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('admin_theme/global/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_theme/global/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{asset('/admin_theme/assets/css/site.css')}}">

  
  <link rel="stylesheet" href="{{asset('admin_theme/global/vendor/datatables-bootstrap/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('admin_theme/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css')}}">
  <link rel="stylesheet" href="{{asset('admin_theme/global/vendor/datatables-responsive/dataTables.responsive.css')}}">
  <link rel="stylesheet" href="{{asset('admin_theme/assets/examples/css/tables/datatable.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('admin_theme/global/fonts/material-design/material-design.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_theme/global/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    {{-- OWN CSS --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('/admin_theme/assets/css/site-rtl.css')}}">
  

  
  
  {{--  DATE PICKER --}}
  @stack('styles')
  
  <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="{{asset('main_style.css')}}">

    
</head>
  <body class="animsition">
    <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    
    @include('admin.partials._header')
    

    @include('admin.partials._sidebar')
    
    @yield('content')
    <!-- Page -->
   
    <!-- End Page -->
    <!-- Footer -->
    @include('admin.partials._footer')

    <!-- Core  -->
    <script src="{{asset('/admin_theme/global/vendor/babel-exter')}}nal-helpers/babel-external-helpers.js"></script>
    <script src="{{asset('/admin_theme/global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/tether/tether.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('/admin_theme/global/vendor/asscrollable/jqu')}}ery-asScrollable.js"></script>
    <script src="{{asset('/admin_theme/global/vendor/ashoverscroll/jqu')}}ery-asHoverScroll.js"></script>

    <!-- Scripts -->
    <script src="{{asset('/admin_theme/global/js/State.js')}}"></script>
    <script src="{{asset('/admin_theme/global/js/Component.js')}}"></script>
    <script src="{{asset('/admin_theme/global/js/Plugin.js')}}"></script>
    <script src="{{asset('/admin_theme/global/js/Base.js')}}"></script>
    <script src="{{asset('/admin_theme/global/js/Config.js')}}"></script>
    <script src="{{asset('/admin_theme/assets/js/Section/Menubar.js')}} "></script>
    <script src="{{asset('/admin_theme/assets/js/Section/GridMenu.js')}} "></script>
    <script src="{{asset('/admin_theme/assets/js/Section/Sidebar.js')}} "></script>
    <script src="{{asset('/admin_theme/assets/js/Section/PageAside.js')}} "></script>
    <script src="{{asset('/admin_theme/assets/js/Plugin/menu.js')}} "></script>
    <script src="{{asset('admin_theme/global/js/config/colors.js')}}"></script>
    <script src="{{asset('/admin_theme/assets/js/config/tour.js')}} "></script>

    <!-- Page -->
    <script src="{{asset('/admin_theme/assets/js/Site.js')}}"></script>
    <script src="{{asset('/admin_theme/assets/examples/js/dashboard/v1.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  
{{-- Ezzat Assets-Js --}}
{{-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 --}}
  
  {{-- LFM --}}
  <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
  <link rel="stylesheet" href="/vendor/laravel-filemanager/css/cropper.min.css">
  <link rel="stylesheet" href="/vendor/laravel-filemanager/css/lfm.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  
    <!-- ... -->
      {{-- <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script> --}}
      <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    {{-- <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
      <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    @stack('scripts')
  
  </body>
</html>