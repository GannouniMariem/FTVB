<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('front-office.partials._head')
</head>

<body>
  
  <div id="preloader">
    <img class="preloader" src="/front-office/images/preloader.gif" alt="">
  </div>

  <section class="container-fluid p-0">      
        @include('front-office.partials._nav')
  </section>

   @yield('content')

   <!-- Footer -->    
  @include('front-office.partials._footer')

  @include('front-office.partials._script')

</body>

</html>

