<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Molla - Bootstrap eCommerce Template</title>
  <meta name="keywords" content="HTML5 Template">
  <meta name="description" content="Molla - Bootstrap eCommerce Template">
  <meta name="author" content="p-themes">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="{{ asset('frontend/assets/images/icons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32"
    href="{{ asset('frontend/assets/images/icons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16"
    href="{{ asset('frontend/assets/images/icons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('frontend/assets/images/icons/site.html') }}">
  <link rel="mask-icon" href="{{ asset('frontend/assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}">
  <meta name="apple-mobile-web-app-title" content="Molla">
  <meta name="application-name" content="Molla">
  <meta name="msapplication-TileColor" content="#cc9966">
  <meta name="msapplication-config" content="{{ asset('frontend/assets/images/icons/browserconfig.xml') }}">
  <meta name="theme-color" content="#ffffff">
  <!-- Ajax Meta Tag --->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/line-awesome/css/line-awesome.min.css') }}">
  <!-- Plugins CSS File -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/owl-carousel/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jquery.countdown.css') }}">
  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/skins/skin-demo-4.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/demos/demo-4.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nouislider/nouislider.css') }}">
</head>

<body>
  <div class="page-wrapper">
    <header class="header header-intro-clearance header-4">
      <div class="header-top">
        <div class="container">
          <div class="header-left">
            <div class="header-dropdown">
              <a href="#">USD</a>
              <div class="header-menu">
                <ul>
                  <li><a href="#">EUR</a></li>
                  <li><a href="#">USD</a></li>
                </ul>
              </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->

            <div class="header-dropdown">
              <a href="#">Eng</a>
              <div class="header-menu">
                <ul>
                  <li><a href="#">English</a></li>
                  <li><a href="#">French</a></li>
                  <li><a href="#">Spanish</a></li>
                </ul>
              </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->
          </div><!-- End .header-left -->

          <div class="header-right">
            <ul class="top-menu">
              <li>
                <a href="#">Links</a>
                <ul>
                  <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  @guest
                    <li><a href="{{ route('login') }}"><i class="icon-user"></i>Login</a></li>
                  @else
                    <li class="dropdown profile-dropdown">
                      <a class="dropdown-toggle" role="button" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="" class="dropdown-item">
                          {{ __('My Account') }}
                        </a>
                        <a href="" class="dropdown-item"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                          @csrf
                        </form>
                      </div>
                    </li>
                  @endguest

                </ul>
              </li>
            </ul><!-- End .top-menu -->
          </div><!-- End .header-right -->
        </div>
      </div><!-- End .header-top -->

      <div class="header-middle">
        <div class="container">
          <div class="header-left">
            <button class="mobile-menu-toggler">
              <span class="sr-only">Toggle mobile menu</span>
              <i class="icon-bars"></i>
            </button>

            <a href="index.html" class="logo">
              <img src="{{ asset('frontend/assets/images/demos/demo-4/logo.png') }}" alt="Molla Logo" width="105"
                height="25">
            </a>
          </div><!-- End .header-left -->

          <div class="header-center">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
              <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
              <form class="search-form" action="#" method="get">
                <div class="header-search-wrapper search-wrapper-wide">
                  <label for="search_input" class="sr-only">Search</label>
                  <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                  <input type="search" class="form-control" name="search_input" id="search_input"
                    placeholder="Search product ..." required autocomplete="off">
                </div><!-- End .header-search-wrapper -->


                <div id="search-dropdown" class="search-dropdown dropdown-search-products">
                  {{-- <div class="product">
                    <figure class="search-image-container">
                      <a href="" class="product-image">
                        <img src="/storage/images/item/1626036950-ipad-air-select-wifi-gold-202009.png"
                          alt=" Apple iPad Air Wi-Fi Gold 64GB">
                      </a>
                    </figure>

                    <div class="product-search-details">
                      <h4 class="product-search-title">
                        <a href="product.html">Apple iPad Air Wi-Fi Gold 64GB</a>
                      </h4>
                      <span class="product-search-price"><strike>1,350,000 Ks</strike></span>
                      <span class="product-search-price new-price ml-2">1,200,000 Ks</span>
                    </div>
                  </div>

                  <div class="product">
                    <figure class="search-image-container">
                      <a href="" class="product-image">
                        <img src="/storage/images/item/1626036950-ipad-air-select-wifi-gold-202009.png"
                          alt=" Apple iPad Air Wi-Fi Gold 64GB">
                      </a>
                    </figure>

                    <div class="product-search-details">
                      <h4 class="product-search-title">
                        <a href="product.html">Apple iPad Air Wi-Fi Gold 64GB</a>
                      </h4>
                      <span class="product-search-price">1,350,000 Ks</span>
                    </div>
                  </div> --}}
                </div><!-- End .cart-product -->

              </form>
            </div><!-- End .header-search -->
          </div>

          <div class="header-right">
            <div class="wishlist">
              <a href="wishlist.html" title="Wishlist">
                <div class="icon">
                  <i class="icon-heart-o"></i>
                  <span class="wishlist-count badge">3</span>
                </div>
                <p>Wishlist</p>
              </a>
            </div><!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-display="static">
                <div class="icon">
                  <i class="icon-shopping-cart"></i>
                  <span class="cart-count">0</span>
                </div>
                <p>Cart</p>
              </a>

              <div id="dropdown-cart-menu" class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-products">
                  <!-- Display from local storage -->
                </div><!-- End .cart-product -->

                <div class="dropdown-cart-total">
                  <span>Total</span>

                  <span class="cart-total-price dropdown-cart-total-price">0</span>
                </div><!-- End .dropdown-cart-total -->

                <div class="dropdown-cart-action">
                  <a href="{{ route('cart') }}" class="btn btn-primary">View Cart</a>
                  <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                      class="icon-long-arrow-right"></i></a>
                </div><!-- End .dropdown-cart-total -->
              </div><!-- End .dropdown-menu -->
            </div><!-- End .cart-dropdown -->
          </div><!-- End .header-right -->
        </div><!-- End .container -->
      </div><!-- End .header-middle -->

      @yield('header-bottom')

    </header><!-- End .header -->

    <main class="main">

      @yield('content')

    </main><!-- End .main -->

    <footer class="footer">

      @yield('footer-cta')

      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-about">
                <img src="{{ asset('frontend/assets/images/demos/demo-4/logo-footer.png') }}" class="footer-logo"
                  alt="Footer Logo" width="105" height="25">
                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu
                  erat. </p>

                <div class="widget-call">
                  <i class="icon-phone"></i>
                  Got Question? Call us 24/7
                  <a href="tel:#">+0123 456 789</a>
                </div><!-- End .widget-call -->
              </div><!-- End .widget about-widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="about.html">About Molla</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">How to shop on Molla</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul><!-- End .widget-list -->
              </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Payment Methods</a></li>
                  <li><a href="#">Money-back guarantee!</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">Terms and conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul><!-- End .widget-list -->
              </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Sign In</a></li>
                  <li><a href="cart.html">View Cart</a></li>
                  <li><a href="#">My Wishlist</a></li>
                  <li><a href="#">Track My Order</a></li>
                  <li><a href="#">Help</a></li>
                </ul><!-- End .widget-list -->
              </div><!-- End .widget -->
            </div><!-- End .col-sm-6 col-lg-3 -->
          </div><!-- End .row -->
        </div><!-- End .container -->
      </div><!-- End .footer-middle -->

      <div class="footer-bottom">
        <div class="container">
          <p class="footer-copyright">Copyright © 2021 Molla Store. All Rights Reserved.</p>
          <!-- End .footer-copyright -->
          <figure class="footer-payments">
            <img src="{{ asset('frontend/assets/images/payments.png') }}" alt="Payment methods" width="272"
              height="20">
          </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
      </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
  </div><!-- End .page-wrapper -->
  <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

  <div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
      <span class="mobile-menu-close"><i class="icon-close"></i></span>

      <form action="#" method="get" class="mobile-search">
        <label for="mobile-search" class="sr-only">Search</label>
        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
          required>
        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
      </form>

      <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab"
            aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
            aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
          <nav class="mobile-nav">
            <ul class="mobile-menu">
              <li class="active">
                <a href="index.html">Home</a>

                <ul>
                  <li><a href="index-1.html">01 - furniture store</a></li>
                  <li><a href="index-2.html">02 - furniture store</a></li>
                  <li><a href="index-3.html">03 - electronic store</a></li>
                  <li><a href="index-4.html">04 - electronic store</a></li>
                  <li><a href="index-5.html">05 - fashion store</a></li>
                  <li><a href="index-6.html">06 - fashion store</a></li>
                  <li><a href="index-7.html">07 - fashion store</a></li>
                  <li><a href="index-8.html">08 - fashion store</a></li>
                  <li><a href="index-9.html">09 - fashion store</a></li>
                  <li><a href="index-10.html">10 - shoes store</a></li>
                  <li><a href="index-11.html">11 - furniture simple store</a></li>
                  <li><a href="index-12.html">12 - fashion simple store</a></li>
                  <li><a href="index-13.html">13 - market</a></li>
                  <li><a href="index-14.html">14 - market fullwidth</a></li>
                  <li><a href="index-15.html">15 - lookbook 1</a></li>
                  <li><a href="index-16.html">16 - lookbook 2</a></li>
                  <li><a href="index-17.html">17 - fashion store</a></li>
                  <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                  <li><a href="index-19.html">19 - games store</a></li>
                  <li><a href="index-20.html">20 - book store</a></li>
                  <li><a href="index-21.html">21 - sport store</a></li>
                  <li><a href="index-22.html">22 - tools store</a></li>
                  <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                  <li><a href="index-24.html">24 - extreme sport store</a></li>
                </ul>
              </li>
              <li>
                <a href="category.html">Shop</a>
                <ul>
                  <li><a href="category-list.html">Shop List</a></li>
                  <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                  <li><a href="category.html">Shop Grid 3 Columns</a></li>
                  <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                  <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                          class="tip tip-hot">Hot</span></span></a></li>
                  <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                  <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                  <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                          class="tip tip-new">New</span></span></a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  <li><a href="#">Lookbook</a></li>
                </ul>
              </li>
              <li>
                <a href="product.html" class="sf-with-ul">Product</a>
                <ul>
                  <li><a href="product.html">Default</a></li>
                  <li><a href="product-centered.html">Centered</a></li>
                  <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a>
                  </li>
                  <li><a href="product-gallery.html">Gallery</a></li>
                  <li><a href="product-sticky.html">Sticky Info</a></li>
                  <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                  <li><a href="product-fullwidth.html">Full Width</a></li>
                  <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Pages</a>
                <ul>
                  <li>
                    <a href="about.html">About</a>

                    <ul>
                      <li><a href="about.html">About 01</a></li>
                      <li><a href="about-2.html">About 02</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="contact.html">Contact</a>

                    <ul>
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
              <li>
                <a href="blog.html">Blog</a>

                <ul>
                  <li><a href="blog.html">Classic</a></li>
                  <li><a href="blog-listing.html">Listing</a></li>
                  <li>
                    <a href="#">Grid</a>
                    <ul>
                      <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                      <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                      <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                      <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Masonry</a>
                    <ul>
                      <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                      <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                      <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                      <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Mask</a>
                    <ul>
                      <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                      <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Single Post</a>
                    <ul>
                      <li><a href="single.html">Default with sidebar</a></li>
                      <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                      <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="elements-list.html">Elements</a>
                <ul>
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
            </ul>
          </nav><!-- End .mobile-nav -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
          <nav class="mobile-cats-nav">
            <ul class="mobile-cats-menu">
              <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
              <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
              <li><a href="#">Beds</a></li>
              <li><a href="#">Lighting</a></li>
              <li><a href="#">Sofas & Sleeper sofas</a></li>
              <li><a href="#">Storage</a></li>
              <li><a href="#">Armchairs & Chaises</a></li>
              <li><a href="#">Decoration </a></li>
              <li><a href="#">Kitchen Cabinets</a></li>
              <li><a href="#">Coffee & Tables</a></li>
              <li><a href="#">Outdoor Furniture </a></li>
            </ul><!-- End .mobile-cats-menu -->
          </nav><!-- End .mobile-cats-nav -->
        </div><!-- .End .tab-pane -->
      </div><!-- End .tab-content -->

      <div class="social-icons">
        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
      </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
  </div><!-- End .mobile-menu-container -->


  <!-- Newsletter Modal -->
  {{-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="row no-gutters bg-white newsletter-popup-content">
          <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
            <div class="banner-content text-center">
              <img src="{{ asset('frontend/assets/images/popup/newsletter/logo.png') }}" class="logo" alt="logo"
                width="60" height="15">
              <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
              <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
              <form action="#">
                <div class="input-group input-group-round">
                  <input type="email" class="form-control form-control-white" placeholder="Your Email Address"
                    aria-label="Email Adress" required>
                  <div class="input-group-append">
                    <button class="btn" type="submit"><span>go</span></button>
                  </div><!-- .End .input-group-append -->
                </div><!-- .End .input-group -->
              </form>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
              </div><!-- End .custom-checkbox -->
            </div>
          </div>
          <div class="col-xl-2-5col col-lg-5 ">
            <img src="{{ asset('frontend/assets/images/popup/newsletter/img-1.jpg') }}" class="newsletter-img"
              alt="newsletter">
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Plugins JS File -->
  <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.hoverIntent.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/superfish.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap-input-spinner.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.elevateZoom.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.plugin.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
  <!-- Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/demos/demo-4.js') }}"></script>

  <!-- Custom JS File -->
  <script src="{{ asset('frontend/assets/js/custom-functions.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/all.js') }}"></script>
  @stack('scripts')
</body>


<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->

</html>
