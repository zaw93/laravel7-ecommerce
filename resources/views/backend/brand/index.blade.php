@extends('layouts.backend.app')

@section('content')

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Brand List</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><i class="fas fa-home text-white"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brand</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('brand.create') }}" class="btn btn-icon btn-neutral">
              <span class="btn-inner--icon"><i class="fas fa-plus-square"></i></span>
              <span class="btn-inner--text">Create</span>
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
          <div class="card-header">
            <h3 class="mb-0">Brand List</h3>
          </div>

          <div class="table-responsive py-4">
            <table class="table table-flush align-items-center" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>NAME</th>
                  <th>CREATED AT</th>
                  <th>ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($brands as $brand)
                  <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>
                      <img src="{{ '/storage/' . $brand->photo }}" class="avatar avatar-xl bg-white mr-5" alt="">
                      {{ $brand->name }}
                    </td>
                    <td>{{ $brand->created_at->toFormattedDateString() }}</td>
                    <td>
                      <a href="{{ route('brand.edit', $brand) }}" class="btn btn-icon btn-info">
                        <span class="btn-inner--icon"><i class="far fa-edit"></i></span>
                      </a>
                      <button type="button" data-route="{{ route('brand.destroy', $brand) }}" data-toggle="modal"
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
