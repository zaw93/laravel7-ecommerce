@extends('layouts.backend.app')

@section('content')

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Order List</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><i class="fas fa-home text-white"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
              </ol>
            </nav>
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
          <div class="card-header">
            <h3 class="mb-0">Order List</h3>
          </div>

          <div class="table-responsive py-4">
            <table class="table table-flush align-items-center" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>DATE</th>
                  <th>VOUCHER NO</th>
                  <th>CUSTOMER</th>
                  <th>TOTAL</th>
                  <th>STATUS</th>
                  <th>ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>{{ Carbon\Carbon::parse($order->orderdate)->toFormattedDateString() }}</td>
                    <td>{{ $order->voucherno }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ number_format($order->total, 0, '', ',') }} Ks</td>
                    <td>
                      @switch($order->status)
                        @case(0)
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i>
                            <span class="status">pending</span>
                          </span>
                        @break
                        @case(1)
                          <span class="badge badge-dot mr-4">
                            <i class="bg-info"></i>
                            <span class="status">confirm</span>
                          </span>
                        @break
                        @case(2)
                          <span class="badge badge-dot mr-4">
                            <i class="bg-default"></i>
                            <span class="status">deliver</span>
                          </span>
                        @break
                        @case(3)
                          <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status">success</span>
                          </span>
                        @break
                        @case(4)
                          <span class="badge badge-dot mr-4">
                            <i class="bg-danger"></i>
                            <span class="status">cancel</span>
                          </span>
                        @break
                      @endswitch
                    </td>
                    <td>
                      <a href="{{ route('order.edit', $order) }}" class="btn btn-icon btn-info">
                        <span class="btn-inner--icon"><i class="fas fa-info"></i></span>
                      </a>
                      <button type="button" data-route="{{ route('subcategory.destroy', $order) }}" data-toggle="modal"
                        data-target="#deleteModal" class="btn btn-icon btn-danger btn-delete">
                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                      </button>
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


  <!-- Delete Modal -->
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <i class="fas fa-exclamation-triangle fa-3x text-danger"></i>
            <h4 class="heading mt-4">Are you sure you want to delete?</h4>
          </div>
        </div>
        <form action="" method="POST" id="deleteModalForm">
          <div class="modal-footer">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection


@section('script')
  <script>
    $(document).ready(function() {
      $('.btn-delete').click(function() {
        var actionAttr = $(this).data('route');
        $('#deleteModalForm').attr('action', actionAttr);
        // $('#deleteModal').modal('show');
      });
    });
  </script>
@endsection
