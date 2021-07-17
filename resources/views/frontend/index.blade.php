@extends('layouts.frontend.app')

@section('header-bottom')
  <div class="header-bottom sticky-header">
    <div class="container">
      <div class="header-left">
        <div class="dropdown category-dropdown">
          <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" data-display="static" title="Browse Categories">
            Browse Categories <i class="icon-angle-down"></i>
          </a>

          <div class="dropdown-menu">
            <nav class="side-nav">
              <ul class="menu-vertical sf-arrows">

                @foreach ($categories as $category)
                  <li>
                    <a class="sf-with-ul">{{ $category->name }}</a>

                    <ul style="display: none;">
                      @foreach ($category->subcategories as $subcategory)
                        <li><a href="">{{ $subcategory->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                @endforeach

              </ul><!-- End .menu-vertical -->
            </nav><!-- End .side-nav -->
          </div><!-- End .dropdown-menu -->
        </div><!-- End .category-dropdown -->
      </div><!-- End .header-left -->

      <div class="header-center">
        <nav class="main-nav">
          <ul class="menu sf-arrows sf-js-enabled" style="touch-action: pan-y;">
            <li class="megamenu-container active">
              <a href="index.html" class="sf-with-ul">Home</a>
            </li>
            <li class="">
              <a href="category.html" class="sf-with-ul">Shop</a>

              <div class="megamenu megamenu-md" style="display: none;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="menu-col">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                          <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-market.html"><span>Shop Market<span
                                    class="tip tip-new">New</span></span></a></li>
                          </ul>

                          <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                          <ul>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                    class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                          </ul>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                          <div class="menu-title">Product Category</div><!-- End .menu-title -->
                          <ul>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                    class="tip tip-new">New</span></span></a></li>
                          </ul>
                          <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                          <ul>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="dashboard.html">My Account</a></li>
                            <li><a href="#">Lookbook</a></li>
                          </ul>
                        </div><!-- End .col-md-6 -->
                      </div><!-- End .row -->
                    </div><!-- End .menu-col -->
                  </div><!-- End .col-md-8 -->

                  <div class="col-md-4">
                    <div class="banner banner-overlay">
                      <a href="category.html" class="banner banner-menu">
                        <img src="{{ asset('frontend/assets/images/menu/banner-1.jpg') }}" alt="Banner">

                        <div class="banner-content banner-content-top">
                          <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span>
                          </div><!-- End .banner-title -->
                        </div><!-- End .banner-content -->
                      </a>
                    </div><!-- End .banner banner-overlay -->
                  </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
              </div><!-- End .megamenu megamenu-md -->
            </li>
            <li class="">
              <a href="product.html" class="sf-with-ul">Product</a>

              <div class="megamenu megamenu-sm" style="display: none;">
                <div class="row no-gutters">
                  <div class="col-md-6">
                    <div class="menu-col">
                      <div class="menu-title">Product Details</div><!-- End .menu-title -->
                      <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="product-centered.html">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span
                                class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                      </ul>
                    </div><!-- End .menu-col -->
                  </div><!-- End .col-md-6 -->

                  <div class="col-md-6">
                    <div class="banner banner-overlay">
                      <a href="category.html">
                        <img src="{{ asset('frontend/assets/images/menu/banner-2.jpg') }}" alt="Banner">

                        <div class="banner-content banner-content-bottom">
                          <div class="banner-title text-white">New Trends<br><span><strong>spring
                                2019</strong></span></div><!-- End .banner-title -->
                        </div><!-- End .banner-content -->
                      </a>
                    </div><!-- End .banner -->
                  </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
              </div><!-- End .megamenu megamenu-sm -->
            </li>
            <li class="">
              <a href="#" class="sf-with-ul">Pages</a>

              <ul style="display: none;">
                <li>
                  <a href="about.html" class="sf-with-ul">About</a>

                  <ul style="display: none;">
                    <li><a href="about.html">About 01</a></li>
                    <li><a href="about-2.html">About 02</a></li>
                  </ul>
                </li>
                <li>
                  <a href="contact.html" class="sf-with-ul">Contact</a>

                  <ul style="display: none;">
                    <li><a href="contact.html">Contact 01</a></li>
                    <li><a href="contact-2.html">Contact 02</a></li>
                  </ul>
                </li>
                <li><a href="login.html">Login</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="404.html">Error 404</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
              </ul>
            </li>
            <li class="">
              <a href="blog.html" class="sf-with-ul">Blog</a>

              <ul style="display: none;">
                <li><a href="blog.html">Classic</a></li>
                <li><a href="blog-listing.html">Listing</a></li>
                <li>
                  <a href="#" class="sf-with-ul">Grid</a>
                  <ul style="display: none;">
                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="sf-with-ul">Masonry</a>
                  <ul style="display: none;">
                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="sf-with-ul">Mask</a>
                  <ul style="display: none;">
                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="sf-with-ul">Single Post</a>
                  <ul style="display: none;">
                    <li><a href="single.html">Default with sidebar</a></li>
                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="elements-list.html" class="sf-with-ul">Elements</a>

              <ul style="display: none;">
                <li><a href="elements-products.html">Products</a></li>
                <li><a href="elements-typography.html">Typography</a></li>
                <li><a href="elements-titles.html">Titles</a></li>
                <li><a href="elements-banners.html">Banners</a></li>
                <li><a href="elements-product-category.html">Product Category</a></li>
                <li><a href="elements-video-banners.html">Video Banners</a></li>
                <li><a href="elements-buttons.html">Buttons</a></li>
                <li><a href="elements-accordions.html">Accordions</a></li>
                <li><a href="elements-tabs.html">Tabs</a></li>
                <li><a href="elements-testimonials.html">Testimonials</a></li>
                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                <li><a href="elements-portfolio.html">Portfolio</a></li>
                <li><a href="elements-cta.html">Call to Action</a></li>
                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
              </ul>
            </li>
          </ul><!-- End .menu -->
        </nav><!-- End .main-nav -->
      </div>
      <!-- End .header-center -->

      <div class="header-right">
        <i class="la la-lightbulb-o"></i>
        <p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
      </div>
    </div><!-- End .container -->
  </div><!-- End .header-bottom -->
@endsection

@section('content')

  <div class="intro-slider-container mb-5">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
      data-owl-options='{"dots": true,"nav": false, "responsive": { "1200": {"nav": true,"dots": false}}}'>
      <div class="intro-slide"
        style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/slider/slide-1.png') }});">
        <div class="container intro-content">
          <div class="row justify-content-end">
            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
              <h3 class="intro-subtitle text-third">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
              <h1 class="intro-title">Beats by</h1>
              <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

              <div class="intro-price">
                <sup class="intro-old-price">$349,95</sup>
                <span class="text-third">
                  $279<sup>.99</sup>
                </span>
              </div><!-- End .intro-price -->

              <a href="category.html" class="btn btn-primary btn-round">
                <span>Shop More</span>
                <i class="icon-long-arrow-right"></i>
              </a>
            </div><!-- End .col-lg-11 offset-lg-1 -->
          </div><!-- End .row -->
        </div><!-- End .intro-content -->
      </div><!-- End .intro-slide -->

      <div class="intro-slide"
        style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/slider/slide-2.png') }});">
        <div class="container intro-content">
          <div class="row justify-content-end">
            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
              <h3 class="intro-subtitle text-primary">New Arrival</h3><!-- End .h3 intro-subtitle -->
              <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1><!-- End .intro-title -->

              <div class="intro-price">
                <sup>Today:</sup>
                <span class="text-primary">
                  $999<sup>.99</sup>
                </span>
              </div><!-- End .intro-price -->

              <a href="category.html" class="btn btn-primary btn-round">
                <span>Shop More</span>
                <i class="icon-long-arrow-right"></i>
              </a>
            </div><!-- End .col-md-6 offset-md-6 -->
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
            <img src="{{ asset('frontend/assets/images/demos/demo-4/banners/banner-1.png') }}" alt="Banner">
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
            <img src="{{ asset('frontend/assets/images/demos/demo-4/banners/banner-2.jpg') }}" alt="Banner">
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
            <img src="{{ asset('frontend/assets/images/demos/demo-4/banners/banner-3.png') }}" alt="Banner">
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
      <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
        data-owl-options='{
                                                                                                                                                                                                                              "nav": true, 
                                                                                                                                                                                                                              "dots": true,
                                                                                                                                                                                                                              "margin": 20,
                                                                                                                                                                                                                              "loop": false,
                                                                                                                                                                                                                              "responsive": {
                                                                                                                                                                                                                                "0": {
                                                                                                                                                                                                                                  "items":2
                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                "480": {
                                                                                                                                                                                                                                  "items":2
                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                "768": {
                                                                                                                                                                                                                                  "items":3
                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                "992": {
                                                                                                                                                                                                                                  "items":4
                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                "1200": {
                                                                                                                                                                                                                                  "items":5
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                              }
                                                                                                                                                                                                                            }'>

        @foreach ($new_arrivals as $new_arrival)
          <div class="product product-2">
            <figure class="product-media">
              <span class="product-label label-circle label-new">New</span>
              <img src="{{ asset($new_arrival->photo_path) }}" alt="{{ $new_arrival->name }}" class="product-image">

              <div class="product-action-vertical">
                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
              </div><!-- End .product-action -->

              <div class="product-action">
                <button class="btn-product btn-cart quick-addToCart" data-id="{{ $new_arrival->id }}"
                  data-name="{{ $new_arrival->name }}" data-photo="{{ $new_arrival->photo_path }}"
                  data-price="{{ $new_arrival->price }}" data-discount="{{ $new_arrival->discount }}">
                  <span>add tocart</span>
                </button>
                <a href="{{ route('quickview', $new_arrival) }}" class="btn-product btn-quickview" title="Quick view">
                  <span>quick view</span>
                </a>
              </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
              <div class="product-cat">
                <a href="">{{ $new_arrival->subcategory->name }}</a>
              </div><!-- End .product-cat -->
              <h3 class="product-title"><a href="{{ route('product', $new_arrival) }}">{{ $new_arrival->name }}</a>
              </h3>
              <!-- End .product-title -->
              @if ($new_arrival->discount)
                <div class="product-price">
                  <span class="new-price">{{ number_format($new_arrival->discount, 0, '', ',') }} Ks</span>
                  <span class="old-price">Was {{ number_format($new_arrival->price, 0, '', ',') }} Ks</span>
                </div>
              @else
                <div class="product-price">
                  {{ number_format($new_arrival->price, 0, '', ',') }} Ks
                </div><!-- End .product-price -->
              @endif

              <div class="ratings-container">
                <div class="ratings">
                  <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class="ratings-text">( 4 Reviews )</span>
              </div><!-- End .rating-container -->
            </div><!-- End .product-body -->
          </div><!-- End .product -->
        @endforeach


      </div><!-- End .owl-carousel -->

    </div><!-- End .tab-content -->
  </div><!-- End .container -->

  <div class="mb-6"></div><!-- End .mb-6 -->

  <div class="container">
    <div class="cta cta-border mb-5"
      style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/bg-1.jpg') }});">
      <img src="{{ asset('frontend/assets/images/demos/demo-4/camera.png') }}" alt="camera" class="cta-img">
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
        <div class="deal"
          style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/deal/bg-1.jpg') }});">
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
        <div class="deal"
          style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/deal/bg-2.jpg') }});">
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
    <div class="owl-carousel mb-5 owl-simple owl-loaded owl-drag" data-toggle="owl"
      data-owl-options='{"nav": false, 
                                                                                                                                                                                                                                                    "dots": true,
                                                                                                                                                                                                                                                    "margin": 30,
                                                                                                                                                                                                                                                    "loop": false,
                                                                                                                                                                                                                                                    "responsive": {
                                                                                                                                                                                                                                                        "0": {
                                                                                                                                                                                                                                                            "items":2
                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                        "420": {
                                                                                                                                                                                                                                                            "items":3
                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                        "600": {
                                                                                                                                                                                                                                                            "items":4
                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                        "900": {
                                                                                                                                                                                                                                                            "items":5
                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                        "1024": {
                                                                                                                                                                                                                                                            "items":6
                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                        "1280": {
                                                                                                                                                                                                                                                            "items":6,
                                                                                                                                                                                                                                                            "nav": true,
                                                                                                                                                                                                                                                            "dots": false
                                                                                                                                                                                                                                                        }
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
                                                                                                                                                            "0": {
                                                                                                                                                              "items":2
                                                                                                                                                            },
                                                                                                                                                            "480": {
                                                                                                                                                              "items":2
                                                                                                                                                            },
                                                                                                                                                            "768": {
                                                                                                                                                              "items":3
                                                                                                                                                            },
                                                                                                                                                            "992": {
                                                                                                                                                              "items":4
                                                                                                                                                            },
                                                                                                                                                            "1200": {
                                                                                                                                                              "items":5
                                                                                                                                                            }
                                                                                                                                                          }
                                                                                                                                                        }'>

          @foreach ($hot_deals as $hot_deal)
            <div class="product product-2">
              <figure class="product-media">
                <span class="product-label label-circle label-sale">Sale</span>
                <img src="{{ asset($hot_deal->photo_path) }}" alt="{{ $hot_deal->name }}" class="product-image">

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                  <button class="btn-product btn-cart quick-addToCart" data-id="{{ $hot_deal->id }}"
                    data-name="{{ $hot_deal->name }}" data-photo="{{ $hot_deal->photo_path }}"
                    data-price="{{ $hot_deal->price }}" data-discount="{{ $hot_deal->discount }}">
                    <span>add tocart</span>
                  </button>
                  <a href="{{ route('quickview', $hot_deal) }}" class="btn-product btn-quickview"
                    title="Quick view"><span>quick
                      view</span></a>
                </div><!-- End .product-action -->
              </figure><!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">{{ $hot_deal->subcategory->name }}</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a href="{{ route('product', $hot_deal) }}">{{ $hot_deal->name }}</a></h3>
                <!-- End .product-title -->
                @if ($hot_deal->discount)
                  <div class="product-price">
                    <span class="new-price">{{ number_format($hot_deal->discount, 0, '', ',') }} Ks</span>
                    <span class="old-price">Was {{ number_format($hot_deal->price, 0, '', ',') }} Ks</span>
                  </div>
                @else
                  <div class="product-price">
                    {{ number_format($hot_deal->price, 0, '', ',') }} Ks
                  </div><!-- End .product-price -->
                @endif

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                  </div><!-- End .ratings -->
                  <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->
              </div><!-- End .product-body -->
            </div><!-- End .product -->
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
        <a href="" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
      </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="products">
      <div class="row justify-content-center">
        @foreach ($recommended_items as $recommended_item)
          <div class="col-6 col-md-4 col-lg-3">
            <div class="product product-2">

              <figure class="product-media product-recommended-media">

                @if ($recommended_item->discount)
                  <span class="product-label label-circle label-sale">Sale</span>
                @endif
                <img src="{{ $recommended_item->photo_path }}" alt="{{ $recommended_item->name }}"
                  class="product-image">

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                </div><!-- End .product-action -->

                <div class="product-action">
                  <button class="btn-product btn-cart quick-addToCart" data-id="{{ $recommended_item->id }}"
                    data-name="{{ $recommended_item->name }}" data-photo="{{ $recommended_item->photo_path }}"
                    data-price="{{ $recommended_item->price }}" data-discount="{{ $recommended_item->discount }}">
                    <span>add tocart</span>
                  </button>
                  <a href="{{ route('quickview', $recommended_item) }}" class="btn-product btn-quickview"
                    title="Quick view"><span>quick
                      view</span></a>
                </div><!-- End .product-action -->

              </figure><!-- End .product-media -->


              <div class="product-body">
                <div class="product-cat">
                  <a href="#">{{ $recommended_item->subcategory->name }}</a>
                </div><!-- End .product-cat -->
                <h3 class="product-title"><a
                    href="{{ route('product', $recommended_item) }}">{{ $recommended_item->name }}</a></h3>
                <!-- End .product-title -->
                @if ($recommended_item->discount)
                  <div class="product-price">
                    <span class="new-price">{{ number_format($recommended_item->discount, 0, '', ',') }} Ks</span>
                    <span class="old-price">Was {{ number_format($recommended_item->price, 0, '', ',') }} Ks</span>
                  </div>
                @else
                  <div class="product-price">
                    {{ number_format($recommended_item->price, 0, '', ',') }} Ks
                  </div><!-- End .product-price -->
                @endif
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                  </div><!-- End .ratings -->
                  <span class="ratings-text">( 4 Reviews )</span>
                </div><!-- End .rating-container -->

              </div><!-- End .product-body -->
            </div><!-- End .product -->
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

  <div class="icon-boxes-container bg-transparent">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="icon-box icon-box-side">
            <span class="icon-box-icon text-dark">
              <i class="icon-rocket"></i>
            </span>
            <div class="icon-box-content">
              <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
              <p>Orders $50 or more</p>
            </div><!-- End .icon-box-content -->
          </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-3 -->

        <div class="col-sm-6 col-lg-3">
          <div class="icon-box icon-box-side">
            <span class="icon-box-icon text-dark">
              <i class="icon-rotate-left"></i>
            </span>

            <div class="icon-box-content">
              <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
              <p>Within 30 days</p>
            </div><!-- End .icon-box-content -->
          </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-3 -->

        <div class="col-sm-6 col-lg-3">
          <div class="icon-box icon-box-side">
            <span class="icon-box-icon text-dark">
              <i class="icon-info-circle"></i>
            </span>

            <div class="icon-box-content">
              <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
              <p>when you sign up</p>
            </div><!-- End .icon-box-content -->
          </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-3 -->

        <div class="col-sm-6 col-lg-3">
          <div class="icon-box icon-box-side">
            <span class="icon-box-icon text-dark">
              <i class="icon-life-ring"></i>
            </span>

            <div class="icon-box-content">
              <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
              <p>24/7 amazing services</p>
            </div><!-- End .icon-box-content -->
          </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-3 -->
      </div><!-- End .row -->
    </div><!-- End .container -->
  </div><!-- End .icon-boxes-container -->

  <div class="cta bg-image bg-dark pt-4 pb-5 mb-0"
    style="background-image: url({{ asset('frontend/assets/images/demos/demo-4/bg-5.jpg') }});">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6">
          <div class="cta-heading text-center">
            <h3 class="cta-title text-white">Get The Latest Deals</h3><!-- End .cta-title -->
            <p class="cta-desc text-white">and receive <span class="font-weight-normal">$20 coupon</span> for first
              shopping</p><!-- End .cta-desc -->
          </div><!-- End .text-center -->

          <form action="#">
            <div class="input-group input-group-round">
              <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address"
                aria-label="Email Adress" required>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><span>Subscribe</span><i
                    class="icon-long-arrow-right"></i></button>
              </div><!-- .End .input-group-append -->
            </div><!-- .End .input-group -->
          </form>
        </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
      </div><!-- End .row -->
    </div><!-- End .container -->
  </div><!-- End .cta -->
@endsection
