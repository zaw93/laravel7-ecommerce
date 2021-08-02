@extends('layouts.frontend.app')

@section('content')

  <div class="page-header text-center"
    style="background-image: url({{ asset('frontend/assets/images/page-header-bg.jpg') }})">
    <div class="container">
      <h1 class="page-title">{{ $subcategory->name }}</h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->

  <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('index') }}">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
          <a href="{{ route('shop') }}">Shop</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="{{ route('collection', $subcategory) }}">{{ $subcategory->name }}</a>
        </li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">

          <div class="toolbox">

            <div class="toolbox-right">
              <div class="toolbox-sort">
                <label for="sortby">Sort by:</label>
                <div class="select-custom">
                  <select name="sortby" id="sortby" class="form-control">
                    <option value="popularity" selected="selected">Most Popular</option>
                    <option value="rating">Most Rated</option>
                    <option value="date">Date</option>
                  </select>
                </div>
              </div><!-- End .toolbox-sort -->
            </div><!-- End .toolbox-right -->
          </div><!-- End .toolbox -->

          <div class="products mb-3">
            <div class="row justify-content-start">
              @foreach ($items as $item)
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                  <x-product-card :item="$item">
                    @if ($item->discount)
                      <span class="product-label label-circle label-sale">Sale</span>
                    @endif
                  </x-product-card>
                </div>
              @endforeach
              <!-- End .col-sm-6 col-lg-4 col-xl-3 -->
            </div><!-- End .row -->
          </div><!-- End .products -->

          {{ $items->links() }}

        </div><!-- End .col-lg-9 -->

        <!-- Sidebar -->
        <aside class="col-lg-3 order-lg-first">
          <div class="sidebar sidebar-shop">
            <div class="widget widget-clean">
              <label>Filters:</label>
              <a href="#" class="sidebar-filter-clear">Clean All</a>
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

                    <div class="filter-item">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cat-{{ $subcategory->id }}">
                        <label class="custom-control-label"
                          for="cat-{{ $subcategory->id }}">{{ $subcategory->name }}</label>
                      </div><!-- End .custom-checkbox -->
                      <span class="item-count">
                        @if ($subcategory->items)
                          {{ $subcategory->items->count() }}
                        @else
                          0
                        @endif
                      </span>
                    </div><!-- End .filter-item -->

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
                    @foreach ($brands as $brand)
                      <div class="filter-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="b-{{ $loop->index }}">
                          <label class="custom-control-label" for="b-{{ $loop->index }}">{{ $brand->name }}</label>
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
                  </div><!-- End .filter-price -->
                </div><!-- End .widget-body -->
              </div><!-- End .collapse -->
            </div><!-- End .widget -->
          </div><!-- End .sidebar sidebar-shop -->
        </aside><!-- End .col-lg-3 -->
      </div><!-- End .row -->
    </div><!-- End .container -->
  </div><!-- End .page-content -->

@endsection


@section('plugin-scripts')
  <script src="{{ asset('frontend/assets/js/wNumb.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
@endsection
