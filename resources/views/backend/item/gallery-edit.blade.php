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
                <h3 class="mb-0">Create Item Gallery</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Upload Item Gallery Photos</h6>
            <div class="pl-lg-4">

              <div class="form-group row">
                <label class="col-md-2 col-form-label form-control-label">Gallery Photos</label>
                <div class="col-md-10">
                  @foreach ($item->gallery_photos as $gallery_photo)
                    <img src="{{ $gallery_photo->photo_path }}" alt="photo" class="gallery-image img-fluid mb-3">
                  @endforeach
                  <form id="myDropzone" class="dropzone dropzone-multiple dz-clickable"
                    action="{{ route('item.gallery-update', $item) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                      <li id="template" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <div class="avatar">
                              <img class="avatar-img rounded" data-dz-thumbnail>
                            </div>
                          </div>
                          <div class="col ml--3">
                            <h4 class="mb-1" data-dz-name>...</h4>
                            <p class="small text-muted mb-0" data-dz-size>...</p>
                          </div>
                          <div class="col-auto">
                            <a href="#" data-dz-remove>
                              <i class="fas fa-times"></i>
                            </a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                  <button id="dropzoneSubmit" class="btn btn-icon btn-primary" type="submit">
                    <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                    <span class="btn-inner--text">Upload</span>
                  </button>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('script')
  <script>
    Dropzone.autoDiscover = false;

    $(document).ready(function() {
      var preview = $('.dz-preview');
      var previewTemplate = preview.html();

      // Clear preview html
      preview.html('');

      var myDropzone = new Dropzone('#myDropzone', {
        paramName: 'photos',
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFilesize: 1,
        maxFiles: 4,
        acceptedFiles: '.jpg, .jpeg, .png, .webp, .svg',
        thumbnailWidth: null,
        thumbnailHeight: null,
        previewsContainer: '.dz-preview',
        previewTemplate: previewTemplate,
      });

    });

    Dropzone.options.myDropzone = {
      // The setting up of the dropzone
      init: function() {
        var myDropzone = this;

        // First change the button to actually tell Dropzone to process the queue.
        $('#dropzoneSubmit').click(function(e) {
          e.preventDefault();
          e.stopPropagation();
          myDropzone.processQueue();
        });

        // on add file
        this.on('addedfile', function(file) {
          // console.log(file);
        });

        this.on('successmultiple', function() {
          if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
            this.removeAllFiles();
          }
        });

      }
    };
  </script>
@endsection
