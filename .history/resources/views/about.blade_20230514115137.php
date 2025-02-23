@extends('layout.master')

@section('dynblock')

 {{-- <!-- about section start -->
 <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image_2"><img src="asset/images/img-2.png"></div>
        </div>
        <div class="col-md-6">
          <h1 class="about_text">ABOUT</h1>
          <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
          <div class="shop_bt_2"><a href="#">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end --> --}}

  <!-- about section start -->
 <div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <h1>ABOUT US</h1>
        </div>
    {{-- <div class="col-md-12">
        <div class="image_2"><img src="asset/images/img-2.png"></div>
    </div> --}}
      <div class="row">
        <div class="col-md-8">
          <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
        </div>
          <div class="col-md-4">
            <h2>Our Expertise</h2>
            <ul>
                <li>○ Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                {{-- <li>○</li> --}}
            </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- about section end -->

@stop
