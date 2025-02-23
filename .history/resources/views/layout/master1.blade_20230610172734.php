<!--MASTER1 is for SIGN UP AND REGISTER PAGE-->
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
    {{-- <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align: center">
            <div class="logo" style="margin-right: 100px"><a href="/"><img src="asset/images/HBSLaw-New-Logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div> --}}
	<!-- Navbar section end -->

    <!-- Block Dynamic -->

    @yield('dynblock')

    <!-- Block Dynamic End -->

   <!-- footer section start -->
   {{-- <footer>
    @include('layout.footer')
   </footer> --}}
  <!-- footer section end -->


</body>
</html>
