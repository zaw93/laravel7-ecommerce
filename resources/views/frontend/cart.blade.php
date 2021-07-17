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
  <div class="page-header text-center"
    style="background-image: url({{ asset('frontend/assets/images/page-header-bg.jpg') }})">
    <div class="container">
      <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="cart">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <table id="shoppingcart-table" class="table table-cart table-mobile">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>

              <tbody id="cart-tbody">
                <!----- Insert from localStorage ----->

              </tbody>
            </table><!-- End .table table-wishlist -->

            <div class="cart-bottom">
              <div class="cart-discount">
                <form action="#">
                  <div class="input-group">
                    <input type="text" class="form-control" required placeholder="coupon code">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary-2" type="submit"><i
                          class="icon-long-arrow-right"></i></button>
                    </div><!-- .End .input-group-append -->
                  </div><!-- End .input-group -->
                </form>
              </div><!-- End .cart-discount -->

              <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
            </div><!-- End .cart-bottom -->
          </div><!-- End .col-lg-9 -->
          <aside class="col-lg-3">
            <div class="summary summary-cart">
              <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

              <table class="table table-summary">
                <tbody>
                  <tr class="summary-subtotal">
                    <td>Subtotal:</td>
                    <td class="subtotal">0</td>
                  </tr><!-- End .summary-subtotal -->
                  <tr class="summary-shipping">
                    <td>Shipping:</td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr class="summary-shipping-row">
                    <td>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                      </div><!-- End .custom-control -->
                    </td>
                    <td>$0.00</td>
                  </tr><!-- End .summary-shipping-row -->

                  <tr class="summary-shipping-row">
                    <td>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="standart-shipping">Standard</label>
                      </div><!-- End .custom-control -->
                    </td>
                    <td>$10.00</td>
                  </tr><!-- End .summary-shipping-row -->

                  <tr class="summary-shipping-row">
                    <td>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                        <label class="custom-control-label" for="express-shipping">Express</label>
                      </div><!-- End .custom-control -->
                    </td>
                    <td>$20.00</td>
                  </tr><!-- End .summary-shipping-row -->


                  <tr class="summary-total">
                    <td>Total:</td>
                    <td class="total">0</td>
                  </tr><!-- End .summary-total -->
                </tbody>
              </table><!-- End .table table-summary -->

              <a href="javascript:void(0)" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
            </div><!-- End .summary -->

            <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i
                class="icon-refresh"></i></a>
          </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
      </div><!-- End .container -->
    </div><!-- End .cart -->
  </div><!-- End .page-content -->
@endsection


@push('scripts')
  <script src="{{ asset('frontend/assets/js/cart.js') }}"></script>
@endpush
