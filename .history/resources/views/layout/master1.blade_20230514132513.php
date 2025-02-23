<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.header')
</head>
<body>
	<!-- Navbar section start -->
    <nav>
        @include('layout.nav')
    </nav>
	<!-- Navbar section end -->

    <!-- Block Dynamic -->

    @yield('dynblock')

    <!-- Block Dynamic End -->

   <!-- footer section start -->
   <footer>
    @include('layout.footer')
   </footer>
  <!-- footer section end -->

  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2023 All Right Reserved By CS262-WebII Course <a href="https://html.design/"></p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/jquery-3.0.0.min.js"></script>
    <script src="asset/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="asset/js/custom.js"></script>
    <!-- javascript -->
    <script src="asset/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });
    });
    </script>
</body>
</html>
