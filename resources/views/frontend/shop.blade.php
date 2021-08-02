@extends('layouts.frontend.app')

@section('content')

  <div class="page-header text-center"
    style="background-image: url({{ asset('frontend/assets/images/page-header-bg.jpg') }})">
    <div class="container">
      <h1 class="page-title">Shop All Products</h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->

  <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="container">
      <form action="{{ route('shop.filter') }}" method="post">
        @csrf

        <div class="row">
          <div class="col-lg-9">

            <div class="toolbox">
              <div class="toolbox-right">
                <div class="toolbox-sort">
                  <label for="sortby">Sort by:</label>
                  <div class="select-custom">
                    <select name="sortBy" class="form-control" onchange="this.form.submit();">
                      <option value="">Default</option>
                      <option value="date_asc" @if (!empty(request('sortBy')) && request('sortBy') == 'date_asc') selected @endif>Date, old to new</option>
                      <option value="date_desc" @if (!empty(request('sortBy')) && request('sortBy') == 'date_desc') selected @endif>Date, new to old</option>
                      <option value="price_asc" @if (!empty(request('sortBy')) && request('sortBy') == 'price_asc') selected @endif>Price, low to high</option>
                      <option value="price_desc" @if (!empty(request('sortBy')) && request('sortBy') == 'price_desc') selected @endif>Price, high to low</option>
                    </select>
                  </div>
                </div><!-- End .toolbox-sort -->
              </div><!-- End .toolbox-right -->
            </div><!-- End .toolbox -->

            <div class="products mb-3">
              <div class="row justify-content-start">
                @if ($items->count() > 0)
                  @foreach ($items as $item)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                      <x-product-card :item="$item">
                        @if ($item->discount)
                          <span class="product-label label-circle label-sale">Sale</span>
                        @endif
                      </x-product-card>
                    </div>
                  @endforeach
                @else
                  <div class="mt-5 mx-auto">
                    <p class="h5 font-weight-normal">
                      <i class="icon-exclamation-circle mr-3"></i>No products available yet.
                    <p>
                  </div>
                @endif
                <!-- End .col-sm-6 col-lg-4 col-xl-3 -->
              </div><!-- End .row -->
            </div><!-- End .products -->

            {{ $items->appends($_GET)->links() }}

          </div><!-- End .col-lg-9 -->

          <!-- Sidebar -->
          <aside class="col-lg-3 order-lg-first">
            <div class="sidebar sidebar-shop">
              <div class="widget widget-clean">
                <label>Filters:</label>
              </div><!-- End .widget widget-clean -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                  <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                    Category
                  </a>
                </h3><!-- End .widget-title -->

                <div class="collapse show" id="widget-1">
                  <div class="widget-body">
                    <div class="filter-items filter-items-count">
                      @if (request('category'))
                        @php
                          $catIds = explode(',', request('category'));
                        @endphp
                      @endif
                      @foreach ($categories as $category)
                        <div class="filter-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" @if (request('category') && in_array($category->id, $catIds)) checked @endif class="custom-control-input" id="cat-{{ $category->id }}"
                              name="category[]" onchange="this.form.submit();" value="{{ $category->id }}">
                            <label class="custom-control-label"
                              for="cat-{{ $category->id }}">{{ $category->name }}</label>
                          </div><!-- End .custom-checkbox -->
                          <span class="item-count">
                            @if ($category->items)
                              {{ $category->items->count() }}
                            @else
                              0
                            @endif
                          </span>
                        </div><!-- End .filter-item -->
                      @endforeach
                    </div><!-- End .filter-items -->
                  </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
              </div><!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                  <a data-toggle="collapse" href="#widget-brand" role="button" aria-expanded="true"
                    aria-controls="widget-4">
                    Brand
                  </a>
                </h3><!-- End .widget-title -->

                <div class="collapse show" id="widget-brand">
                  <div class="widget-body">
                    <div class="filter-items filter-items-count">
                      @if (request('brand'))
                        @php
                          $bIds = explode(',', request('brand'));
                        @endphp
                      @endif
                      @foreach ($brands as $brand)
                        <div class="filter-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" @if (request('brand') && in_array($brand->id, $bIds)) checked @endif class="custom-control-input" id="b-{{ $brand->id }}" name="brand[]"
                              onchange="this.form.submit();" value="{{ $brand->id }}">
                            <label class="custom-control-label" for="b-{{ $brand->id }}">{{ $brand->name }}</label>
                          </div><!-- End .custom-checkbox -->
                          <span class="item-count">
                            @if ($brand->items)
                              {{ $brand->items->count() }}
                            @else
                              0
                            @endif
                          </span>
                        </div><!-- End .filter-item -->
                      @endforeach
                    </div><!-- End .filter-items -->
                  </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
              </div><!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                  <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                    Price
                  </a>
                </h3><!-- End .widget-title -->

                <div class="collapse show" id="widget-5">
                  <div class="widget-body">
                    <div class="filter-price">
                      <div class="filter-price-text">
                        Price:
                        <span id="filter-price-range"></span>
                      </div><!-- End .filter-price-text -->

                      <div id="price-slider"></div><!-- End #price-slider -->

                      <div class="mt-3">
                        <input type="hidden" id="price_range" name="price_range" value="@if (!empty(request('price'))) {{ request('price') }} @endif">
                        <button type="submit" class="btn btn-primary">Filter</button>
                      </div>
                    </div><!-- End .filter-price -->
                  </div><!-- End .widget-body -->
                </div><!-- End .collapse -->
              </div><!-- End .widget -->
            </div><!-- End .sidebar sidebar-shop -->
          </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
      </form>
    </div><!-- End .container -->
  </div><!-- End .page-content -->

@endsection


@section('plugin-scripts')
  <script src="{{ asset('frontend/assets/js/wNumb.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
@endsection

@push('scripts')
  <script>
    $(document).ready(function() {
      // Slider For category pages / filter price
      if (typeof noUiSlider === "object") {
        var priceSlider = document.getElementById("price-slider");

        // Check if #price-slider elem is exists if not return
        // to prevent error logs
        if (priceSlider == null) return;

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        if (urlParams.has('price')) {
          var price = urlParams.get('price').split('-');
          var start = price[0];
          var end = price[1];
        }


        noUiSlider.create(priceSlider, {
          start: [`${start ? start : {{ $min_price }}}`, `${end ? end : {{ $max_price }}}`],
          connect: true,
          step: 10,
          margin: 10000,
          range: {
            min: {{ $min_price }},
            max: {{ $max_price }}
          },
          // tooltips: true,
          format: wNumb({
            decimals: 0,
            thousand: ",",
            suffix: " Ks"
          })
        });

        // Update Price Range
        priceSlider.noUiSlider.on("update", function(values, handle) {
          $("#filter-price-range").text(values.join(" - "));
        });

        // Get Price Range
        priceSlider.noUiSlider.on("update", function(values, handle) {
          let min_price_str = values[0];
          let max_price_str = values[1];
          let min_price = min_price_str.replace(/[, Ks]+/g, "").trim();
          let max_price = max_price_str.replace(/[, Ks]+/g, "").trim();
          $('#price_range').val(`${min_price}-${max_price}`);
        });
      }


    });
  </script>
@endpush
