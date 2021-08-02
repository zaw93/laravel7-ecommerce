@extends('layouts.frontend.app')

@section('content')
  <div class="page-header text-center"
    style="background-image: url({{ asset('frontend/assets/images/page-header-bg.jpg') }})">
    <div class="container">
      <h1 class="page-title">Checkout<span>Shop</span></h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->
  <nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="checkout">
      <div class="container">
        <form action="#">
          <div class="row">
            <div class="col-lg-9">
              <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
              <div class="row">
                <div class="col-sm-6">
                  <label>First Name *</label>
                  <input type="text" class="form-control" required>
                </div><!-- End .col-sm-6 -->

                <div class="col-sm-6">
                  <label>Last Name *</label>
                  <input type="text" class="form-control" required>
                </div><!-- End .col-sm-6 -->
              </div><!-- End .row -->

              <label>Company Name (Optional)</label>
              <input type="text" class="form-control">

              <label>Country *</label>
              <input type="text" class="form-control" required>

              <label>Street address *</label>
              <input type="text" class="form-control" placeholder="House number and Street name" required>
              <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required>

              <div class="row">
                <div class="col-sm-6">
                  <label>Town / City *</label>
                  <input type="text" class="form-control" required>
                </div><!-- End .col-sm-6 -->

                <div class="col-sm-6">
                  <label>State / County *</label>
                  <input type="text" class="form-control" required>
                </div><!-- End .col-sm-6 -->
              </div><!-- End .row -->

              <div class="row">
                <div class="col-sm-6">
                  <label>Postcode / ZIP *</label>
                  <input type="text" class="form-control" required>
                </div><!-- End .col-sm-6 -->

                <div class="col-sm-6">
                  <label>Phone *</label>
                  <input type="tel" class="form-control" required>
                </div><!-- End .col-sm-6 -->
              </div><!-- End .row -->

              <label>Email address *</label>
              <input type="email" class="form-control" required>

              <label>Order notes (optional)</label>
              <textarea class="form-control" cols="30" rows="4"
                placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
            </div><!-- End .col-lg-9 -->


            <aside class="col-lg-3">
              <div class="summary">
                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                <table class="table table-summary">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td><a href="#">Beige knitted elastic runner shoes</a></td>
                      <td>$84.00</td>
                    </tr>

                    <tr>
                      <td><a href="#">Blue utility pinafore denimdress</a></td>
                      <td>$76,00</td>
                    </tr>
                    <tr class="summary-subtotal">
                      <td>Subtotal:</td>
                      <td>$160.00</td>
                    </tr><!-- End .summary-subtotal -->
                    <tr>
                      <td>Shipping:</td>
                      <td>Free shipping</td>
                    </tr>
                    <tr class="summary-total">
                      <td>Total:</td>
                      <td>$160.00</td>
                    </tr><!-- End .summary-total -->
                  </tbody>
                </table><!-- End .table table-summary -->

                <div class="accordion-summary">
                  <h3 class="checkout-title">Payment Methods</h3>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                    <label class="custom-control-label" for="free-shipping">Cash on Delivery</label>
                  </div><!-- End .custom-control -->

                </div><!-- End .accordion -->

                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                  <span class="btn-text">Place Order</span>
                  <span class="btn-hover-text">Proceed to Checkout</span>
                </button>
              </div><!-- End .summary -->
            </aside><!-- End .col-lg-3 -->
          </div><!-- End .row -->
        </form>
      </div><!-- End .container -->
    </div><!-- End .checkout -->
  </div><!-- End .page-content -->
@endsection
