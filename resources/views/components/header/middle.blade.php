<div class="header-middle">
  <div class="container">
    <div class="header-left">
      <button class="mobile-menu-toggler">
        <span class="sr-only">Toggle mobile menu</span>
        <i class="icon-bars"></i>
      </button>

      <a href="{{ route('index') }}" class="logo">
        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Molla Logo" width="105" height="25">
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
            {{-- <span>Total</span>
            <span class="cart-total-price dropdown-cart-total-price">0</span> --}}
          </div><!-- End .dropdown-cart-total -->

          <div class="dropdown-cart-action">
            <a href="{{ route('cart') }}" class="btn btn-primary">View Cart</a>
            <a href="" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
          </div><!-- End .dropdown-cart-total -->
        </div><!-- End .dropdown-menu -->
      </div><!-- End .cart-dropdown -->
    </div><!-- End .header-right -->
  </div><!-- End .container -->
</div><!-- End .header-middle -->
