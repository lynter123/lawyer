<!--MASTER1 Page is for -->
<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.header')
</head>
<body>
	<!-- Navbar section start -->
    {{-- <nav>
        @include('layout.nav')
    </nav> --}}
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align: center">
            {{-- <div class="logo" style="margin-right: 100px"><a href="index.html"><img src="asset/images/logo.png"></a></div> --}}
            <div class="logo" style="margin-right: 100px"><a href="index.html"><img src="asset/images/HBSLaw-New-Logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>
    </div>
	<!-- Navbar section end -->

    <!-- Block Dynamic -->

    @yield('dynblock')

    <!-- Block Dynamic End -->

   <!-- footer section start -->
   {{-- <footer>
    @include('layout.footer')
   </footer> --}}
  <!-- footer section end -->

  <!-- copyright section start -->
  {{-- <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2023 All Right Reserved By CS262-WebII Course <a href="https://html.design/"></p>
    </div>
  </div> --}}
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
