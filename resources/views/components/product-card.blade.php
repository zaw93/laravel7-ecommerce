<div class="product product-7">
  <figure class="product-media">
    {{ $slot }}

    {{-- <a href="product.html"> --}}
    <img src="{{ asset($item->photo_path) }}" alt="{{ $item->name }}" class="product-image">
    {{-- </a> --}}

    <div class="product-action-vertical">
      <a href="" class="btn-product-icon btn-wishlist">
        <span>add to wishlist</span>
      </a>
      <a href="{{ route('quickview', $item) }}" class="btn-product-icon btn-quickview" title="Quick view">
        <span>Quick view</span>
      </a>
    </div><!-- End .product-action-vertical -->

    <div class="product-action">
      <button class="btn-product btn-cart quick-addToCart" data-id="{{ $item->id }}" data-name="{{ $item->name }}"
        data-photo="{{ $item->photo_path }}" data-price="{{ $item->price }}"
        data-discount="{{ $item->discount }}">
        <span>add tocart</span>
        <div class="spinner-border" role="status" aria-hidden="true"></div>
      </button>
    </div><!-- End .product-action -->
  </figure><!-- End .product-media -->

  <div class="product-body">
    <div class="product-cat">
      <a href="#">{{ $item->subcategory->name }}</a>
    </div><!-- End .product-cat -->
    <h3 class="product-title"><a href="{{ route('product', $item) }}">{{ $item->name }}</a></h3>
    <!-- End .product-title -->
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
  </div><!-- End .product-body -->
</div><!-- End .product -->
