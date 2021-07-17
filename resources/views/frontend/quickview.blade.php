<div class="container quickView-container">
  <div class="quickView-content">
    <div class="row">
      <div class="col-lg-7 col-md-6">
        <div class="row">
          <div class="product-left">
            <a href="#one" class="carousel-dot active">
              <img src="{{ $item->photo_path }}">
            </a>
            <a href="#two" class="carousel-dot">
              <img src="{{ $item->photo_path }}">
            </a>
            <a href="#three" class="carousel-dot">
              <img src="{{ $item->photo_path }}">
            </a>
            <a href="#four" class="carousel-dot">
              <img src="{{ $item->photo_path }}">
            </a>
          </div>
          <div class="product-right">
            <div class="owl-carousel owl-theme owl-nav-inside owl-light mb-0" data-toggle="owl" data-owl-options='{
 "dots": false,
 "nav": false, 
 "URLhashListener": true,
 "responsive": {
 "900": {
 "nav": true,
 "dots": true
 }
 }
 }'>
              <div class="intro-slide" data-hash="one">
                <img src="{{ $item->photo_path }}" alt="Image Desc">
              </div><!-- End .intro-slide -->

              <div class="intro-slide" data-hash="two">
                <img src="{{ $item->photo_path }}" alt="Image Desc">
              </div><!-- End .intro-slide -->

              <div class="intro-slide" data-hash="three">
                <img src="{{ $item->photo_path }}" alt="Image Desc">
              </div><!-- End .intro-slide -->

              <div class="intro-slide" data-hash="four">
                <img src="{{ $item->photo_path }}" alt="Image Desc">
              </div><!-- End .intro-slide -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <h2 class="product-title">{{ $item->name }}</h2>
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

        <div class="ratings-container">
          <div class="ratings">
            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
          </div><!-- End .ratings -->
          <span class="ratings-text">( 2 Reviews )</span>
        </div><!-- End .rating-container -->

        <p class="product-txt">{{ Str::limit($item->description, 120) }}</p>


        <div class="details-filter-row details-row-size">
          <label for="qty">Qty:</label>
          <div class="product-details-quantity">
            <input type="number" id="qty" class="form-control qty-input" data-key="{{ $item->id }}" value="1"
              min="1" max="10" step="1" data-decimals="0" required>
          </div><!-- End .product-details-quantity -->
        </div><!-- End .details-filter-row -->

        <div class="product-details-action">
          <div class="details-action-wrapper">
            <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
          </div><!-- End .details-action-wrapper -->
          <button id="quickView-addToCart" class="btn-product btn-cart" data-id="{{ $item->id }}"
            data-name="{{ $item->name }}" data-photo="{{ $item->photo_path }}" data-price="{{ $item->price }}"
            data-discount="{{ $item->discount }}">
            <span>add to cart</span>
          </button>
        </div>

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
        </div>
      </div>
    </div>
  </div>
</div>
