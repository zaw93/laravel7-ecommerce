<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('category.index') }}">
        <img src="{{ asset('backend/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="ni ni-chart-bar-32 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
              <i class="ni ni-ungroup text-success"></i>
              <span class="nav-link-text">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('subcategory.index') }}">
              <i class="ni ni-tag text-info"></i>
              <span class="nav-link-text">Subcategory</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('item.index') }}">
              <i class="ni ni-bag-17 text-warning"></i>
              <span class="nav-link-text">Item</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('brand.index') }}">
              <i class="ni ni-collection text-danger"></i>
              <span class="nav-link-text">Brand</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('order.index') }}">
              <i class="ni ni-basket text-primary"></i>
              <span class="nav-link-text">Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-circle-08 text-gray-700"></i>
              <span class="nav-link-text">Customers</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
