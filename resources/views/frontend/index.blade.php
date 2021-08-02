@extends('layouts.frontend.app')

@section('content')

  <div class="intro-slider-container mb-5">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
      data-owl-options='{"dots": true,"nav": false, "responsive": { "1200": {"nav": true,"dots": false}}}'>
      <div class="intro-slide" style="background-image: url({{ asset('frontend/assets/images/slider/slide-1.png') }});">
        <div class="container intro-content">
          <div class="row justify-content-end">
            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
              <h3 class="intro-subtitle text-primary">New Arrival</h3><!-- End .h3 intro-subtitle -->
              <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1><!-- End .intro-title -->

              <div class="intro-price">
                <sup>Today:</sup>
                <span class="text-primary">
                  2,500,000 Ks
                </span>
              </div><!-- End .intro-price -->

              <a href="{{ route('shop') }}" class="btn btn-primary btn-round">
                <span>Shop More</span>
                <i class="icon-long-arrow-right"></i>
              </a>
            </div><!-- End .col-md-6 offset-md-6 -->
          </div><!-- End .row -->
        </div><!-- End .intro-content -->
      </div><!-- End .intro-slide -->

      <div class="intro-slide" style="background-image: url({{ asset('frontend/assets/images/slider/slide-2.png') }});">
        <div class="container intro-content">
          <div class="row justify-content-end">
            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
              <h3 class="intro-subtitle text-third">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
              <h1 class="intro-title">Beats by</h1>
              <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

              <div class="intro-price">
                <sup class="intro-old-price">400,000 Ks</sup>
                <span class="text-third">
                  350,000 Ks
                </span>
              </div><!-- End .intro-price -->

              <a href="{{ route('shop') }}" class="btn btn-primary btn-round">
                <span>Shop More</span>
                <i class="icon-long-arrow-right"></i>
              </a>
            </div><!-- End .col-lg-11 offset-lg-1 -->
          </div><!-- End .row -->
        </div><!-- End .intro-content -->
      </div><!-- End .intro-slide -->
    </div><!-- End .intro-slider owl-carousel owl-simple -->

    <span class="slider-loader"></span><!-- End .slider-loader -->
  </div><!-- End .intro-slider-container -->

  <div class="container">
    <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->

    <div class="cat-blocks-container">
      <div class="row">
        @foreach ($categories->random(6) as $category)
          <div class="col-6 col-sm-4 col-lg-2">
            <a href="" class="cat-block">
              <figure>
                <span class="mx-5 p-3">
                  <img src="{{ asset($category->photo_path) }}" alt="{{ $category->name }}">
                </span>
              </figure>

              <h3 class="cat-block-title">{{ $category->name }}</h3><!-- End .cat-block-title -->
            </a>
          </div><!-- End .col-sm-4 col-lg-2 -->
        @endforeach

      </div><!-- End .row -->
    </div><!-- End .cat-blocks-container -->
  </div><!-- End .container -->

  <div class="mb-4"></div><!-- End .mb-4 -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="banner banner-overlay banner-overlay-light">
          <a href="#">
            <img src="{{ asset('frontend/assets/images/banners/banner-1.png') }}" alt="Banner">
          </a>

          <div class="banner-content">
            <h4 class="banner-subtitle"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
            <h3 class="banner-title"><a href="#">Save $150 <strong>on Samsung <br>Galaxy Note9</strong></a></h3>
            <!-- End .banner-title -->
            <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
          </div><!-- End .banner-content -->
        </div><!-- End .banner -->
      </div><!-- End .col-md-4 -->

      <div class="col-md-6 col-lg-4">
        <div class="banner banner-overlay banner-overlay-light">
          <a href="#">
            <img src="{{ asset('frontend/assets/images/banners/banner-2.jpg') }}" alt="Banner">
          </a>

          <div class="banner-content">
            <h4 class="banner-subtitle"><a href="#">Time Deals</a></h4><!-- End .banner-subtitle -->
            <h3 class="banner-title"><a href="#"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a></h3>
            <!-- End .banner-title -->
            <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
          </div><!-- End .banner-content -->
        </div><!-- End .banner -->
      </div><!-- End .col-md-4 -->

      <div class="col-md-6 col-lg-4">
        <div class="banner banner-overlay banner-overlay-light">
          <a href="#">
            <img src="{{ asset('frontend/assets/images/banners/banner-3.png') }}" alt="Banner">
          </a>

          <div class="banner-content">
            <h4 class="banner-subtitle"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
            <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3>
            <!-- End .banner-title -->
            <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
          </div><!-- End .banner-content -->
        </div><!-- End .banner -->
      </div><!-- End .col-lg-4 -->
    </div><!-- End .row -->
  </div><!-- End .container -->

  <div class="mb-3"></div><!-- End .mb-5 -->

  <div class="container new-arrivals">
    <div class="heading heading-flex mb-3">
      <div class="heading-left">
        <h2 class="title">New Arrivals</h2><!-- End .title -->
      </div><!-- End .heading-left -->
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel just-action-icons-sm">
      <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{ 
                        "nav": true,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": { 
                          "0": { "items":2 }, 
                          "480": { "items":2 },
                          "768": { "items":3 },
                          "992": { "items":4 },
                          "1200": { "items":5 }
                        }
                      }'>
        @foreach ($new_arrivals as $item)
          <x-product-card :item="$item">
            <span class="product-label label-circle label-new">New</span>
          </x-product-card>
        @endforeach
      </div><!-- End .owl-carousel -->
    </div><!-- End .tab-content -->
  </div><!-- End .container -->

  <div class="mb-6"></div><!-- End .mb-6 -->

  <div class="container">
    <div class="cta cta-border mb-5" style="background-image: url({{ asset('frontend/assets/images/bg-1.jpg') }});">
      <img src="{{ asset('frontend/assets/images/camera.png') }}" alt="camera" class="cta-img">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="cta-content">
            <div class="cta-text text-right text-white">
              <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
            </div><!-- End .cta-text -->
            <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i
                class="icon-long-arrow-right"></i></a>
          </div><!-- End .cta-content -->
        </div><!-- End .col-md-12 -->
      </div><!-- End .row -->
    </div><!-- End .cta -->
  </div><!-- End .container -->

  <div class="container">
    <div class="heading text-center mb-3">
      <h2 class="title">Deals & Outlet</h2><!-- End .title -->
      <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
    </div><!-- End .heading -->

    <div class="row">
      <div class="col-lg-6 deal-col">
        <div class="deal" style="background-image: url({{ asset('frontend/assets/images/deal/bg-1.jpg') }});">
          <div class="deal-top">
            <h2>Deal of the Day.</h2>
            <h4>Limited quantities. </h4>
          </div><!-- End .deal-top -->

          <div class="deal-content">
            <h3 class="product-title"><a href="product.html">Home Smart Speaker with Google Assistant</a></h3>
            <!-- End .product-title -->

            <div class="product-price">
              <span class="new-price">$129.00</span>
              <span class="old-price">Was $150.99</span>
            </div><!-- End .product-price -->

            <a href="product.html" class="btn btn-link"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a>
          </div><!-- End .deal-content -->

          <div class="deal-bottom">
            <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
          </div><!-- End .deal-bottom -->
        </div><!-- End .deal -->
      </div><!-- End .col-lg-6 -->

      <div class="col-lg-6 deal-col">
        <div class="deal" style="background-image: url({{ asset('frontend/assets/images/deal/bg-2.jpg') }});">
          <div class="deal-top">
            <h2>Your Exclusive Offers.</h2>
            <h4>Sign in to see amazing deals.</h4>
          </div><!-- End .deal-top -->

          <div class="deal-content">
            <h3 class="product-title"><a href="product.html">Certified Wireless Charging Pad for iPhone / Android</a></h3>
            <!-- End .product-title -->

            <div class="product-price">
              <span class="new-price">$29.99</span>
            </div><!-- End .product-price -->

            <a href="login.html" class="btn btn-link"><span>Sign In and Save money</span><i
                class="icon-long-arrow-right"></i></a>
          </div><!-- End .deal-content -->

          <div class="deal-bottom">
            <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
          </div><!-- End .deal-bottom -->
        </div><!-- End .deal -->
      </div><!-- End .col-lg-6 -->
    </div><!-- End .row -->

    <div class="more-container text-center mt-1 mb-5">
      <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i
          class="icon-long-arrow-right"></i></a>
    </div><!-- End .more-container -->
  </div><!-- End .container -->


  <div class="container">
    <hr class="mb-0">
    <h2 class="title title-border my-5">Shop by Brands</h2><!-- End .title -->
    <div class="owl-carousel mb-5 owl-simple owl-loaded owl-drag" data-toggle="owl" data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 30,
                "loop": false,
                "responsive": {
                  "0": { "items":2 },
                  "420": { "items":3 },
                  "600": { "items":4 },
                  "900": { "items":5 },
                  "1024": { "items":6 },
                  "1280": { "items":6, "nav": true, "dots": false }
                }
              }'>
      <div class="owl-stage-outer">
        <div class="owl-stage"
          style="transform: translate3d(0px, 0px, 0px); transition: all 0.4s ease 0s; width: 1398px;">
          @foreach ($brands->random(10) as $brand)
            <div class="owl-item" style="width: 169.667px; margin-right: 30px;">
              <a href="" class="brand">
                <img src="{{ $brand->photo_path }}" alt="{{ $brand->name }}">
              </a>
            </div>
          @endforeach
        </div>
      </div>
      <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i
            class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i
            class="icon-angle-right"></i></button></div>
      <div class="owl-dots disabled"></div>
    </div>
  </div>

  <div class="bg-light pt-5 pb-6">
    <div class="container trending-products">
      <div class="heading heading-flex mb-3">
        <div class="heading-left">
          <h2 class="title">Hot Deals Products</h2><!-- End .title -->
        </div><!-- End .heading-left -->
      </div><!-- End .heading -->

      <div class="tab-content tab-content-carousel just-action-icons-sm">
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
          data-owl-options='{
                "nav": true, 
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                  "0": { "items":2 },
                  "480": { "items":2 },
                  "768": { "items":3 },
                  "992": { "items":4 },
                  "1200": { "items":5 }
                }
            }'>
          @foreach ($hot_deals as $item)
            <x-product-card :item="$item">
              <span class="product-label label-circle label-sale">Sale</span>
            </x-product-card>
          @endforeach
        </div><!-- End .owl-carousel -->
      </div><!-- End .tab-content -->
    </div><!-- End .container -->
  </div><!-- End .bg-light pt-5 pb-6 -->

  <div class="mb-5"></div><!-- End .mb-5 -->

  <div class="container for-you">
    <div class="heading heading-flex mb-3">
      <div class="heading-left">
        <h2 class="title">Recommendation For You</h2><!-- End .title -->
      </div><!-- End .heading-left -->

      <div class="heading-right">
        <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
      </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="products">
      <div class="row justify-content-center">
        @foreach ($recommended_items as $item)
          <div class="col-6 col-md-4 col-lg-3">
            <x-product-card :item="$item">
              @if ($item->discount)
                <span class="product-label label-circle label-sale">Sale</span>
              @endif
            </x-product-card>
          </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
        @endforeach


      </div><!-- End .row -->
    </div><!-- End .products -->
  </div><!-- End .container -->

  <div class="mb-4"></div><!-- End .mb-4 -->

  <div class="container">
    <hr class="mb-0">
  </div><!-- End .container -->

@endsection

@section('footer-cta')
  <x-footer.cta />
@endsection
