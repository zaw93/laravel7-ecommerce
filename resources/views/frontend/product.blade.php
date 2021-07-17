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
  <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container d-flex align-items-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">{{ $item->subcategory->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $item->name }}</li>
      </ol>

    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="container">
      <div id="product-details-top" class="product-details-top mb-2">
        <div class="row">
          <div class="col-md-6">
            <div class="product-gallery product-gallery-vertical">
              <div class="row">
                <figure class="product-main-image">
                  <img id="product-zoom" src="{{ asset('frontend/assets/images/products/single/1.jpg') }}"
                    data-zoom-image="{{ asset('frontend/assets/images/products/single/1-big.jpg') }}"
                    alt="product image">

                  <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                    <i class="icon-arrows"></i>
                  </a>
                </figure><!-- End .product-main-image -->

                <div id="product-zoom-gallery" class="product-image-gallery">
                  <a class="product-gallery-item active" href="#"
                    data-image="{{ asset('frontend/assets/images/products/single/1.jpg') }}"
                    data-zoom-image="{{ asset('frontend/assets/images/products/single/1-big.jpg') }}">
                    <img src="{{ asset('frontend/assets/images/products/single/1-small.jpg') }}" alt="product side">
                  </a>

                  <a class="product-gallery-item" href="#"
                    data-image="{{ asset('frontend/assets/images/products/single/2.jpg') }}"
                    data-zoom-image="{{ asset('frontend/assets/images/products/single/2-big.jpg') }}">
                    <img src="{{ asset('frontend/assets/images/products/single/2-small.jpg') }}" alt="product cross">
                  </a>

                  <a class="product-gallery-item" href="#"
                    data-image="{{ asset('frontend/assets/images/products/single/3.jpg') }}"
                    data-zoom-image="{{ asset('frontend/assets/images/products/single/3-big.jpg') }}">
                    <img src="{{ asset('frontend/assets/images/products/single/3-small.jpg') }}"
                      alt="product with model">
                  </a>

                  <a class="product-gallery-item" href="#"
                    data-image="{{ asset('frontend/assets/images/products/single/4.jpg') }}"
                    data-zoom-image="{{ asset('frontend/assets/images/products/single/4-big.jpg') }}">
                    <img src="{{ asset('frontend/assets/images/products/single/4-small.jpg') }}" alt="product back">
                  </a>
                </div><!-- End .product-image-gallery -->
              </div><!-- End .row -->
            </div><!-- End .product-gallery -->
          </div><!-- End .col-md-6 -->

          <div class="col-md-6">
            <div class="product-details">
              <h1 class="product-title">{{ $item->name }}</h1><!-- End .product-title -->

              <div class="ratings-container">
                <div class="ratings">
                  <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
              </div><!-- End .rating-container -->

              @if ($item->discount)
                <div class="product-price">
                  <span class="new-price">{{ number_format($item->discount, 0, '', ',') }} Ks</span>
                  <span class="old-price">Was {{ number_format($item->price, 0, '', ',') }} Ks</span>
                </div>
              @else
                <div class="product-price">
                  {{ number_format($item->price, 0, '', ',') }} Ks
                </div><!-- End .product-price -->
              @endif

              <div class="product-content">
                <p>{{ Str::limit($item->description, 150) }}</p>
              </div><!-- End .product-content -->

              <div id="product-details-qty" class="details-filter-row details-row-size">
                <label for="qty">Qty:</label>
                <div class="product-details-quantity">
                  <input type="number" id="qty" class="form-control qty-input" data-key="{{ $item->id }}" value="1"
                    min="1" max="10" step="1" data-decimals="0" required>
                </div><!-- End .product-details-quantity -->
              </div><!-- End .details-filter-row -->

              <div class="product-details-action">
                <button class="btn-product btn-cart product-addToCart" data-id="{{ $item->id }}"
                  data-name="{{ $item->name }}" data-photo="{{ $item->photo_path }}"
                  data-price="{{ $item->price }}" data-discount="{{ $item->discount }}">
                  <span>add to cart</span>
                </button>

                <div class="details-action-wrapper">
                  <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                </div><!-- End .details-action-wrapper -->
              </div><!-- End .product-details-action -->

              <div class="product-details-footer">

                <div class="product-cat">
                  <div class="mb-1">
                    <span>Brand:</span>
                    <a href="">{{ $item->brand->name }}</a>
                  </div>
                  <div>
                    <span>Category:</span>
                    <a href="#">{{ $item->subcategory->category->name }}</a>,
                    <a href="#">{{ $item->subcategory->name }}</a>
                  </div>
                </div><!-- End .product-cat -->

                <div class="social-icons social-icons-sm">
                  <span class="social-label">Share:</span>
                  <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                  <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                  <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                  <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div>
              </div><!-- End .product-details-footer -->
            </div><!-- End .product-details -->
          </div><!-- End .col-md-6 -->
        </div><!-- End .row -->
      </div><!-- End .product-details-top -->
    </div><!-- End .container -->

    <div class="product-details-tab product-details-extended">
      <div class="container">
        <ul class="nav nav-pills justify-content-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab"
              aria-controls="product-desc-tab" aria-selected="true">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab"
              aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
          </li>
        </ul>
      </div><!-- End .container -->

      <div class="tab-content">
        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
          <div class="product-desc-content">
            <div class="container">
              <h3>Product Information</h3>
              <p>{{ $item->description }}</p>
            </div><!-- End .container -->

          </div><!-- End .product-desc-content -->
        </div><!-- .End .tab-pane -->

        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
          <div class="reviews">
            <div class="container">
              <h3>Reviews (2)</h3>
              <div class="review">
                <div class="row no-gutters">
                  <div class="col-auto">
                    <h4><a href="#">Samanta J.</a></h4>
                    <div class="ratings-container">
                      <div class="ratings">
                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                      </div><!-- End .ratings -->
                    </div><!-- End .rating-container -->
                    <span class="review-date">6 days ago</span>
                  </div><!-- End .col -->
                  <div class="col">
                    <h4>Good, perfect size</h4>

                    <div class="review-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda
                        asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis
                        doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                    </div><!-- End .review-content -->

                    <div class="review-action">
                      <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                      <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                    </div><!-- End .review-action -->
                  </div><!-- End .col-auto -->
                </div><!-- End .row -->
              </div><!-- End .review -->

              <div class="review">
                <div class="row no-gutters">
                  <div class="col-auto">
                    <h4><a href="#">John Doe</a></h4>
                    <div class="ratings-container">
                      <div class="ratings">
                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                      </div><!-- End .ratings -->
                    </div><!-- End .rating-container -->
                    <span class="review-date">5 days ago</span>
                  </div><!-- End .col -->
                  <div class="col">
                    <h4>Very good</h4>

                    <div class="review-content">
                      <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet.
                        Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis
                        perspiciatis beatae!</p>
                    </div><!-- End .review-content -->

                    <div class="review-action">
                      <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                      <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                    </div><!-- End .review-action -->
                  </div><!-- End .col-auto -->
                </div><!-- End .row -->
              </div><!-- End .review -->
            </div><!-- End .container -->
          </div><!-- End .reviews -->
        </div><!-- .End .tab-pane -->
      </div><!-- End .tab-content -->
    </div><!-- End .product-details-tab -->

    <div class="container">
      <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
      <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
        data-owl-options='{
                                                                                                                                                                        "nav": false, 
                                                                                                                                                                        "dots": true,
                                                                                                                                                                        "margin": 20,
                                                                                                                                                                        "loop": false,
                                                                                                                                                                        "responsive": {
                                                                                                                                                                            "0": {
                                                                                                                                                                                "items":1
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
                                                                                                                                                                                "items":4,
                                                                                                                                                                                "nav": true,
                                                                                                                                                                                "dots": false
                                                                                                                                                                            }
                                                                                                                                                                        }
                                                                                                                                                                    }'>

        @foreach ($related_items as $related_item)
          <div class="product product-7">
            <figure class="product-media">
              @if ($related_item->discount)
                <span class="product-label label-circle label-sale">Sale</span>
              @endif
              <img src="{{ $related_item->photo_path }}" alt="{{ $related_item->name }}" class="product-image">


              <div class="product-action-vertical">
                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                {{-- <a href="{{ route('quickview', $related_item) }}" class="btn-product-icon btn-quickview"
                  title="Quick view"><span>Quickview</span>
                </a> --}}
              </div><!-- End .product-action-vertical -->

              <div class="product-action">
                <button class="btn-product btn-cart quick-addToCart" data-id="{{ $related_item->id }}"
                  data-name="{{ $related_item->name }}" data-photo="{{ $related_item->photo_path }}"
                  data-price="{{ $related_item->price }}" data-discount="{{ $related_item->discount }}">
                  <span>add to cart</span>
                </button>
              </div><!-- End .product-action -->
            </figure><!-- End .product-media -->

            <div class="product-body">
              <div class="product-cat">
                <a href="#">{{ $related_item->subcategory->name }}</a>
              </div><!-- End .product-cat -->
              <h3 class="product-title"><a href="product.html">{{ $related_item->name }}</a></h3>
              <!-- End .product-title -->
              @if ($related_item->discount)
                <div class="product-price">
                  <span class="new-price">{{ number_format($related_item->discount, 0, '', ',') }} Ks</span>
                  <span class="old-price">Was {{ number_format($related_item->price, 0, '', ',') }} Ks</span>
                </div>
              @else
                <div class="product-price">
                  {{ number_format($related_item->price, 0, '', ',') }} Ks
                </div><!-- End .product-price -->
              @endif
              <div class="ratings-container">
                <div class="ratings">
                  <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class="ratings-text">( 2 Reviews )</span>
              </div><!-- End .rating-container -->

            </div><!-- End .product-body -->
          </div><!-- End .product -->
        @endforeach


      </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
  </div><!-- End .page-content -->
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

@push('scripts')
  <script src="{{ asset('frontend/assets/js/product-detail.js') }}"></script>
@endpush
