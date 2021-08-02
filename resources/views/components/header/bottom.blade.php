@props(['categories'])

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
                      <li><a href="{{ route('collection', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
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
          <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }} mr-5">
            <a href="{{ route('index') }}">Home</a>
          </li>
          <li class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }} mr-5">
            <a href="{{ route('shop') }}">Shop</a>
          </li>
          <li class="mr-5">
            <a href="">About</a>
          </li>
          <li class="mr-5">
            <a href="">Contact</a>
          </li>
          <li class="">
            <a href="">FAQ</a>
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
