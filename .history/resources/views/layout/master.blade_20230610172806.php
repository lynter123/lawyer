<!--MASTER1 is for SIGN UP AND REGISTER PAGE-->
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

</body>
</html>
