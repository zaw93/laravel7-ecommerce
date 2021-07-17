@extends('layouts.backend.app')

@section('content')

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Edit Category Form</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><i class="fas fa-home text-white"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('category.index') }}" class="btn btn-icon btn-neutral">
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
    <div class="row">
      <div class="col-xl-10 m-auto order-xl-1">

        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-12">
                <h3 class="mb-0">Edit Category Form</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('category.update', $category) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <h6 class="heading-small text-muted mb-4">Edit Exisiting Category</h6>
              <div class="pl-lg-4">

                <div class="form-group row">
                  <label for="name" class="col-md-2 col-form-label form-control-label">Name</label>
                  <div class="col-md-10">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                      value="{{ $category->name }}" id="name">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="photo" class="col-md-2 col-form-label form-control-label">Photo</label>
                  <div class="col-md-10">
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo">
                    @error('photo')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <img src="{{ $category->photo_path }}" alt="photo" class="avatar avatar-xl bg-white mt-3">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-10 offset-md-2">
                    <button class="btn btn-icon btn-primary" type="submit">
                      <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                      <span class="btn-inner--text">Update</span>
                    </button>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
