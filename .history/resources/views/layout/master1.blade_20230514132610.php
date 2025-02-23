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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/people">PEOPLE</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="video.html">OUR EXPERTISE</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        OUR EXPERTISE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">AIRCRAFT LEASING & PURCHASE</a>
                      <a class="dropdown-item" href="#">BANKING & FINANCE</a>
                      <a class="dropdown-item" href="#">CAPITAL MARKET AND M&A</a>
                      <a class="dropdown-item" href="#">CONSTRUCTION & REAL ESTATE DEVELOPEMENT</a>
                      <a class="dropdown-item" href="#">CUSTOMS AND TAX</a>
                      <a class="dropdown-item" href="#">DISPUTE RESOLUTION AND LITIGATION</a>
                      <a class="dropdown-item" href="#">ENERGY, INFASTRUCTURE & MINING</a>
                      <a class="dropdown-item" href="#">FOREIGN DESKS</a>
                      <a class="dropdown-item" href="#">GAMING, HOSPITALITY & TOURISM</a>
                      <a class="dropdown-item" href="#">GENERAL CORPORATE & INTVESTMENT</a>
                      <a class="dropdown-item" href="#">INSURANCE AND TRUST</a>
                      <a class="dropdown-item" href="#">INTELLETUAL PROPERTY RIGHTS</a>
                      <a class="dropdown-item" href="#">LABOR AND INDUSTRIAL RELATIONS</a>
                      <a class="dropdown-item" href="#">TELECOMMUNICATION AND TECHNOLOGY</a>
                      {{-- <a class="dropdown-item" href="#"></a> --}}
                    </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/annoucement">ANNOUCEMENT</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="contact.html">CAREER</a>
                  </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="/contact">CONTACT US</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#"><img src="asset/images/search-icon.png"></a>
                </li> --}}
                <li class="nav-item active">
                  <a class="nav-link" href="/signin">SIGN IN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">REGISTER</a>
                </li>
              </ul>
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
