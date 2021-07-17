@extends('layouts.backend.app')

@section('content')

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Create Item Form</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><i class="fas fa-home text-white"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Item</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('item.index') }}" class="btn btn-icon btn-neutral">
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
                <h3 class="mb-0">Create Item Form</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <h6 class="heading-small text-muted mb-4">Create New Item</h6>
              <div class="pl-lg-4">

                {{-- Codeno Input --}}
                <div class="form-group row">
                  <label for="codeno" class="col-md-2 col-form-label form-control-label">Codeno</label>
                  <div class="col-md-10">
                    <input class="form-control @error('codeno') is-invalid @enderror" type="text" name="codeno" value=""
                      id="codeno">
                    @error('codeno')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- Name Input --}}
                <div class="form-group row">
                  <label for="name" class="col-md-2 col-form-label form-control-label">Name</label>
                  <div class="col-md-10">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value=""
                      id="name">
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- Photo Input --}}
                <div class="form-group row">
                  <label for="photo" class="col-md-2 col-form-label form-control-label">Photo</label>
                  <div class="col-md-10">
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" value=""
                      id="photo">
                    @error('photo')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- Gallery Input --}}

                {{-- Price Input --}}
                <div class="form-group row">
                  <label class="col-md-2 col-form-label form-control-label">Price</label>
                  <div class="col-md-10">
                    <div class="nav-wrapper">
                      <ul class="nav nav-tabs flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link px-md-4 mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                            href="#tabs-icons-text-1" role="tab">Unit Price</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link px-md-4 mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                            href="#tabs-icons-text-2" role="tab">Discount</a>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                        aria-labelledby="tabs-icons-text-1-tab">
                        <div class="input-group">
                          <input class="form-control @error('unit_price') is-invalid @enderror" type="text"
                            name="unit_price" value="" id="unit_price">
                          <div class="input-group-append">
                            <span class="input-group-text">Ks</span>
                          </div>
                        </div>
                        @error('unit_price')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                        aria-labelledby="tabs-icons-text-2-tab">
                        <div class="input-group">
                          <input class="form-control @error('discount') is-invalid @enderror" type="text" name="discount"
                            value="" id="discount">
                          <div class="input-group-append">
                            <span class="input-group-text">Ks</span>
                          </div>
                        </div>
                        @error('discount')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>

                {{-- Description Input --}}
                <div class="form-group row">
                  <label for="description" class="col-md-2 col-form-label form-control-label">Description</label>
                  <div class="col-md-10">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"
                      id="description"></textarea>
                    @error('description')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- Description Input with Text Editor --}}
                {{-- <div class="form-group row">
                  <label for="full-des" class="col-md-2 col-form-label form-control-label">Full Des</label>
                  <div class="col-md-10 h-100">
                    <div data-toggle="quill" data-quill-placeholder="Full Description"></div>
                  </div>
                </div> --}}


                {{-- Brand Input --}}
                <div class="form-group row">
                  <label for="brand" class="col-md-2 col-form-label form-control-label">Brand</label>
                  <div class="col-md-10">
                    <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id" id="brand">
                      <option>Choose Brand</option>
                      @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">
                          {{ $brand->name }}
                        </option>
                      @endforeach
                    </select>
                    @error('brand_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- Subcategory Input --}}
                <div class="form-group row">
                  <label for="subcategory" class="col-md-2 col-form-label form-control-label">Subcategory</label>
                  <div class="col-md-10">
                    <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id"
                      id="subcategory">
                      <option>Choose Subcategory</option>
                      @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">
                          {{ $subcategory->name }}
                        </option>
                      @endforeach
                    </select>
                    @error('subcategory_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-md-10 offset-md-2">
                    <button class="btn btn-icon btn-primary" type="submit">
                      <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                      <span class="btn-inner--text">Save</span>
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
