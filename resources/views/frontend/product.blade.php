@extends('layouts.frontend.app')

@section('content')
  <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container d-flex align-items-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item">
          <a href="{{ route('collection', $item->subcategory) }}">{{ $item->subcategory->name }}</a>
        </li>
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
                  <img id="product-zoom" src="{{ asset($item->photo_path) }}"
                    data-zoom-image="{{ asset($item->photo_path) }}" alt="product image">

                  <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                    <i class="icon-arrows"></i>
                  </a>
                </figure><!-- End .product-main-image -->

                <div id="product-zoom-gallery" class="product-image-gallery">
                  <a class="product-gallery-item" href="#" data-image="{{ asset($item->photo_path) }}"
                    data-zoom-image="{{ asset($item->photo_path) }}">
                    <img src="{{ asset($item->photo_path) }}" alt="{{ $item->name }}">
                  </a>
                  @foreach ($item->gallery_photos as $gallery_photo)
                    <a class="product-gallery-item" href="#" data-image="{{ asset($gallery_photo->photo_path) }}"
                      data-zoom-image="{{ asset($gallery_photo->photo_path) }}">
                      <img src="{{ asset($gallery_photo->photo_path) }}" alt="{{ $item->name }}">
                    </a>
                  @endforeach
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
                <p>{!! Str::limit($item->description, 150) !!}</p>
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
                  <div class="spinner-border" role="status" aria-hidden="true"></div>
                </button>

                <div class="details-action-wrapper">
                  <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                </div><!-- End .details-action-wrapper -->
              </div><!-- End .product-details-action -->

              <div class="product-details-footer">

                <div class="product-cat">
                  <div class="mb-1">
                    <span>Brand:</span>
                    <a href="#">{{ $item->brand->name }}</a>
                  </div>
                  <div>
                    <span>Category:</span>
                    <a href="#">{{ $item->subcategory->category->name }}</a>,
                    <a href="{{ route('collection', $item->subcategory) }}">{{ $item->subcategory->name }}</a>
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
              <p>{!! $item->description !!}</p>
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
      <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                  "0": { "items":1 },
                  "480": { "items":2 },
                  "768": { "items":3 },
                  "992": { "items":4 },
                  "1200": { "items":4, "nav": true, "dots": false }
                }
              }'>
        @foreach ($related_items as $item)
          <x-product-card :item="$item">
            @if ($item->discount)
              <span class="product-label label-circle label-sale">Sale</span>
            @endif
          </x-product-card>
        @endforeach
      </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
  </div><!-- End .page-content -->
@endsection



@section('footer-cta')
  <x-footer.cta />
@endsection

@push('scripts')
  <script src="{{ asset('frontend/assets/js/product-detail.js') }}"></script>
@endpush
