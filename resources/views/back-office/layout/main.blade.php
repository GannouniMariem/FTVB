<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('back-office.partials._head')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

  <section class="container-fluid p-0">      
        @include('back-office.partials._navbar')
  </section>
        @include('back-office.partials._sideBar')

   @yield('content')

   <!-- Footer -->    

  @include('back-office.partials._script')

</body>

</html>