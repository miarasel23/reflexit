<!DOCTYPE html>
<html lang="EN-BN">
@include('frontend.include.css')
<body class="defult-home">
  <!--Preloader area start here-->
  <div id="loader" class="loader">
    <div class="loader-container"></div>
  </div>
  <!-- Main content Start -->
  <div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header">
      <!--Header Start-->
      @include('frontend.partials.header')
      <!--Header End-->
    </div>
    <!--Full width header End-->
    @include('frontend.partials.sliderHome')

     @yield('content')

    <!-- Portfolio End -->
  </div>

  <!-- Main content End -->

  @include('frontend.partials.footer')

  <!-- start scrollUp  -->
  <div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
  </div>
  <!-- End scrollUp  -->



  @include('frontend.include.scripts')
</body>

</html>
