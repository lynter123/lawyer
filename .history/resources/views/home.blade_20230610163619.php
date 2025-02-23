@extends('layout.master')


@section('dynblock')
<!-- search section start -->
<div class="about_section layout_padding">
<div class="container">

    <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <div class="search">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control" placeholder="Search Lawyer">
          <button class="btn btn-primary">Search</button>
        </div>
      </div>
    </div>
</div>
</div>
<!-- search section end -->

<!-- Expertise section start -->
{{--<div class="product_section layout_padding1">
    <div class="container">
      <div class="product_text">Our <span style="color: #5ca0e9;">Lawyers'</span> Expertise</div>
            <div class="row">
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
                <div class="col-md-3 height d-flex justify-content-center align-items-center">
                    <button class="btn" style="background-color: #5ca0e9;" type="button"><p><span style="color: white;">EXPERTISE CATEGORY</span></p></button>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<!-- Expertise section end -->

{{-- AIRCRAFT LEASING & PURCHASE
BANKING & FINANCE
CAPITAL MARKET AND M&A
CONSTRUCTION & REAL ESTATE DEVELOPEMENT
CUSTOMS AND TAX
DISPUTE RESOLUTION AND LITIGATION
ENERGY, INFASTRUCTURE & MINING
FOREIGN DESKS
GAMING, HOSPITALITY & TOURISM
GENERAL CORPORATE & INTVESTMENT
INSURANCE AND TRUST
INTELLETUAL PROPERTY RIGHTS --}}

  <!-- banner section start -->
  {{-- <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="video_text">AIRCRAFT LEASING & </h1>
                        <h1 class="controller_text">PURCHASE</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                    </div>
                    <div class="col-md-6">
                        <div class="image_1"><img src="asset/images/img-1.png"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="video_text">BANKING &</h1>
                        <h1 class="controller_text">FINANCE</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                    </div>
                    <div class="col-md-6">
                        <div class="image_1"><img src="asset/images/img-1.png"></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="video_text">CAPITAL MARKET and</h1>
                        <h1 class="controller_text">M&A</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                    </div>
                <div class="col-md-6">
                    <div class="image_1"><img src="asset/images/img-1.png"></div>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div> --}}

  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">AIRCRAFT LEASING &</h1>
                <h1 class="controller_text">PURCHASE</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="asset/images/img-1.png"></div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">BANKING &</h1>
                <h1 class="controller_text">FINANCE</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="asset/images/img-1.png"></div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">CAPITAL MARKET and</h1>
                <h1 class="controller_text">M&A</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="asset/images/img-1.png"></div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->

@stop
