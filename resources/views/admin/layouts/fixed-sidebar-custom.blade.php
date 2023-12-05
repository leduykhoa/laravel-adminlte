<?php
/*
 *  ............(¯`'•.
 *  ..............(¯'•(¯'•............_/)/)
 *  ...............(¯'•.(¯'•.......((.....((
 *  ................(¯`'•(¯'•...((.)..(. ‘ /)
 *  .................(¯`'•.(¯'((.)....|\_/
 *  .....,,,~”¯¯¯`'¯(_¸´(_.)......|
 *  ...(((./...........................)__
 *  ..((((.\......),,...........(...../__`\
 *  ..))))..\ . .//...¯¯¯¯¯¯¯' \.../... / /
 *  .(((...../ .// .............. | ./...../
 *  .))).....| ||.................| |...........♥♥♥
 *  ((........) \.................) \...........\|/
 *  .^^^^.""'"'.^^^^^^^..""".^^^^.""""
 *  ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°)
 *  ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦
 *  
 *  Copyright © 2009-2021 Lê Duy Khoa. All rights reserved.
 *  Mail: leduykhoa060690@gmail.com
 *  Skype: leduykhoa060690
 *  Website: http://web-fast.com
 *  Mobile: +84973421508
 *  Date: 2021/01/11
 *  Time: 07:08:50
 */

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Khoald CMS') }}</title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Nunito">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  @yield('style-pre')
  <!-- Styles -->
  <link href="{{ mix('css/app-admin-common.css') }}" rel="stylesheet">
  @yield('style')
  @yield('style-end')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('admin.layouts.include.navbar')
    @include('admin.layouts.include.main-sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @include('admin.layouts.include.breadcrumb')
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    @include('admin.layouts.include.footer')
  </div>
  <!-- ./wrapper -->
  @yield('script-pre')
  <!-- Scripts -->
  <script src="{{ mix('js/app-admin-common.js') }}" type="text/javascript" defer></script>
  @yield('script')
  @yield('script-end')
</body>

</html>