<div class="header-top">
  <div class="container">
    <div class="header-left">
      <div class="header-dropdown">
        <a href="">MMK</a>
        <div class="header-menu">
          <ul>
            <li><a href="#">USD</a></li>
            <li><a href="#">MMK</a></li>
          </ul>
        </div><!-- End .header-menu -->
      </div><!-- End .header-dropdown -->

      <div class="header-dropdown">
        <a href="">Eng</a>
        <div class="header-menu">
          <ul>
            <li><a href="#">English</a></li>
            <li><a href="#">Myanmar</a></li>
          </ul>
        </div><!-- End .header-menu -->
      </div><!-- End .header-dropdown -->
    </div><!-- End .header-left -->

    <div class="header-right">
      <ul class="top-menu">
        <li>
          <a href="">Links</a>
          <ul>
            <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
            @guest
              <li><a href="{{ route('login') }}"><i class="icon-user"></i>Login / Register</a></li>
            @else
              <li class="dropdown profile-dropdown">
                <a class="dropdown-toggle" role="button" data-toggle="dropdown">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="" class="dropdown-item">
                    {{ __('My Account') }}
                  </a>
                  <a href="" class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest

          </ul>
        </li>
      </ul><!-- End .top-menu -->
    </div><!-- End .header-right -->
  </div>
</div><!-- End .header-top -->
