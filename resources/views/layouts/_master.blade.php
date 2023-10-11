<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  @include('layouts.partials._meta')

  <title>Hospital Management System</title>
  @include('layouts.partials._global_css')
</head>

<body>
  @include('layouts.partials._preloader')

  <div id="main-wrapper">
    @include('layouts.partials._nav_header')
    @include('layouts.includes.chatbox')

    @include('layouts.header')

    @include('layouts.sidebar')

    <div class="content-body">
      @yield('content')
    </div>

    @include('layouts.footer')
    
  </div>
  @include('layouts.partials._global_js')
  @stack('page_js')
  @stack('custom_js')
</body>

</html>