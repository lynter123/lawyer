@extends('layout.master')


@section('dynblock')
<!-- search section start -->
<div class="about_section layout_padding">
<div class="container">

    <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <div class="search">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control" placeholder="Search Expertise">
          <button class="btn btn-primary">Search</button>
        </div>
      </div>
    </div>
</div>
</div>
<!-- search section end -->

<!-- Expertise section start -->
<div class="product_section layout_padding1">
    <div class="container">
      <div class="product_text">Our <span style="color: #5ca0e9;">Expertise</span></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3 style="color: #5ca0e9;"" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Primary card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">Grid Box 2</div>
                <div class="col-md-3">Grid Box 3</div>
                <div class="col-md-3">Grid Box 4</div>
              </div>
            <div class="row">
                <div class="col-md-3">Grid Box 5</div>
                <div class="col-md-3">Grid Box 6</div>
                <div class="col-md-3">Grid Box 7</div>
                <div class="col-md-3">Grid Box 8</div>
            </div>
      </div>
    </div>
</div>

<!-- Expertise section end -->

  {{-- <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="asset/images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="asset/images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
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
  <!-- product section start -->
  <div class="product_section layout_padding">
    <div class="container">
      <div class="product_text">Our <span style="color: #5ca0e9;">products</span></div>
      <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
      <div class="product_section_2">
        <div class="row">
          <div class="col-md-6">
            <div class="image_2"><img src="asset/images/img-3.png"></div>
            <div class="price_text">Price $ <span style="color: #3a3a38;">200</span></div>
            <h1 class="game_text">Video Game</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
          </div>
          <div class="col-md-6">
            <div class="image_2"><img src="asset/images/img-3.png"></div>
            <div class="price_text">Price $ <span style="color: #3a3a38;">300</span></div>
            <h1 class="game_text">Video Game</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
          </div>
        </div>
      </div>
      <div class="see_main">
        <div class="see_bt"><a href="#">See More</a></div>
      </div>
    </div>
  </div>
  <!-- product section end -->
  <!-- video section start -->
  <div class="video_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="video_text_2">3d video game</h1>
          <h1 class="controller_text_2">remoto control</h1>
          <p class="banner_text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
          <div class="shop_bt"><a href="#">Shop Now</a></div>
        </div>
        <div class="col-md-6">
          <div class="image_4"><img src="asset/images/img-4.png"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- video section end -->
  <!-- testimonial section start -->
  <div class="testimonial_section layout_padding">
    <div class="container">
      <h1 class="testimonial_text">Testimonial</h1>
      <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <div class="testimonial_section_2">
        <div class="box_main">
          <div class="quote_icon"><img src="asset/images/quote-icon.png"></div>
          <p class="dolor_text"> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
          <div class="client_main">
            <div class="client_left">
              <div class="images_5"><img src="asset/images/img-5.png"></div>
            </div>
            <div class="client_right">
              <h1 class="sandy_text">Sandy Delex</h1>
              <p class="sandy_text_1">Reprehenderit</p>
            </div>
          </div>
        </div>
      </div>
      <div class="see_main">
        <div class="see_bt"><a href="#">See More</a></div>
      </div>
    </div>
  </div>
  <!-- testimonial section end --> --}}

@stop
