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
</body>
</html>
