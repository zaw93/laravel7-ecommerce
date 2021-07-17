@extends('layouts.backend.app')

@section('content')

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Order Detail</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><i class="fas fa-home text-white"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('order.index') }}" class="btn btn-icon btn-neutral">
              <span class="btn-inner--icon"><i class="fas fa-angle-double-left"></i></span>
              <span class="btn-inner--text">Back</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page content -->
  <div class="container-fluid mt--6">

    <!-- Table -->
    <div class="row">
      <div class="col">

        <div class="card">
          <!-- Card header -->
          <div class="card-header px-5">
            <h3 class="mb-0">Order Detail</h3>
          </div>

          <div class="card-body px-5">

            <div class="row mb-4">
              <div class="col-6">
                <img src="{{ asset('backend/assets/img/brand/blue.png') }}" class="img-fluid w-25" alt="brand logo">
              </div>
              <div class="col-6">
                <h3 class="text-right">Date: {{ Carbon\Carbon::now()->toFormattedDateString() }}</h3>
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-4">
                <div class="text-muted">From</div>
                <div class="font-weight-bold">Argon Inc.</div>
                <div class="text-muted">123 Rangoon Avenue</div>
                <div class="text-muted">New Valley Township</div>
                <div class="text-muted">Yangon, Myanmar</div>
                <div class="text-muted">Phone: 091234567</div>
                <div class="text-muted">Email: admin@gmail.com</div>
              </div>

              <div class="col-md-4">
                <div class="text-muted">To</div>
                <div class="font-weight-bold">John Doe</div>
                <div class="text-muted">321 Mandalay Avenue</div>
                <div class="text-muted">Old Monastery Township</div>
                <div class="text-muted">Mandalay, Myanmar</div>
                <div class="text-muted">Phone: 097654321</div>
                <div class="text-muted">Email: johndoe@gmail.com</div>
              </div>

              <div class="col-md-4">
                <div class="font-weight-bold">Invoice: #{{ $order->voucherno }}</div>
                <div>
                  <span class="font-weight-bold">Order Date: </span>
                  {{ Carbon\Carbon::parse($order->orderdate)->toDayDateTimeString() }}
                </div>
                <div class="mt-2">
                  <span class="font-weight-bold">Total: </span>
                  {{ number_format($order->total, 0, '', ',') }} Ks
                </div>
              </div>
            </div>


            <div class="table-responsive">
              <table class="table align-items-center table-flush table-striped">
                <thead class="thead-light">
                  <tr>
                    <th>PRODUCT</th>
                    <th>CODE NO</th>
                    <th>QUANTITY</th>
                    <th>UNIT PRICE</th>
                    <th>SUBTOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($order->items as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->codeno }}</td>
                      <td>{{ $item->pivot->qty }}</td>
                      <td>
                        @if ($item->discount)
                          {{ number_format($item->discount, '0', '', ',') }} Ks
                        @else
                          {{ number_format($item->price, '0', '', ',') }} Ks
                        @endif
                      </td>
                      <td>
                        @if ($item->discount)
                          {{ number_format($item->discount * $item->pivot->qty, '0', '', ',') }} Ks
                        @else
                          {{ number_format($item->price * $item->pivot->qty, '0', '', ',') }} Ks
                        @endif
                      </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>



@endsection
