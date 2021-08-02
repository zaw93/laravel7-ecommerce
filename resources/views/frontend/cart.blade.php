@extends('layouts.frontend.app')

@section('content')
  <div class="page-header text-center"
    style="background-image: url({{ asset('frontend/assets/images/page-header-bg.jpg') }})">
    <div class="container">
      <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="cart">
      <div class="container">
        <form action="#">
          <div class="row">
            <div class="col-lg-9">
              <table id="shoppingcart-table" class="table table-cart table-mobile">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody id="cart-tbody">
                  <!----- Insert from localStorage ----->

                </tbody>
              </table><!-- End .table table-wishlist -->

              <div class="cart-bottom">
                <div class="cart-discount">

                  <div class="input-group">
                    <input type="text" class="form-control" required placeholder="coupon code">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary-2" type="submit"><i
                          class="icon-long-arrow-right"></i></button>
                    </div><!-- .End .input-group-append -->
                  </div><!-- End .input-group -->

                </div><!-- End .cart-discount -->

                <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
              </div><!-- End .cart-bottom -->
            </div><!-- End .col-lg-9 -->

            <aside class="col-lg-3">
              <div class="summary summary-cart">
                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                <table class="table table-summary">
                  <tbody>
                    <tr class="summary-subtotal">
                      <td>Subtotal:</td>
                      <td class="subtotal">0</td>
                    </tr><!-- End .summary-subtotal -->
                    <tr class="summary-shipping">
                      <td>Shipping:</td>
                      <td>&nbsp;</td>
                    </tr>

                    <tr class="summary-shipping-row">
                      <td>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                          <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                        </div><!-- End .custom-control -->
                      </td>
                      <td>0 Ks</td>
                    </tr><!-- End .summary-shipping-row -->

                    <tr class="summary-shipping-row">
                      <td>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                          <label class="custom-control-label" for="standart-shipping">Standard</label>
                        </div><!-- End .custom-control -->
                      </td>
                      <td>3,000 Ks</td>
                    </tr><!-- End .summary-shipping-row -->

                    <tr class="summary-shipping-row">
                      <td>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                          <label class="custom-control-label" for="express-shipping">Express</label>
                        </div><!-- End .custom-control -->
                      </td>
                      <td>5,000 Ks</td>
                    </tr><!-- End .summary-shipping-row -->


                    <tr class="summary-total">
                      <td>Total:</td>
                      <td class="total">0</td>
                    </tr><!-- End .summary-total -->
                  </tbody>
                </table><!-- End .table table-summary -->

                <a href="javascript:void(0)" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
              </div><!-- End .summary -->

              <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i
                  class="icon-refresh"></i></a>
            </aside><!-- End .col-lg-3 -->
          </div><!-- End .row -->
        </form>
      </div><!-- End .container -->
    </div><!-- End .cart -->
  </div><!-- End .page-content -->
@endsection


@push('scripts')
  <script src="{{ asset('frontend/assets/js/cart.js') }}"></script>
@endpush
