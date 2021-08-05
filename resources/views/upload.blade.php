@extends('layouts.app') 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="col-6 text-center alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $error }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif

            @if (Session::has('success'))
                <div class="col-6 text-center alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bold"> <h5> Upload Images</h5> </div>
                    <div class="card-body">
                        <form action="{{ url('upload/store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Image Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="image title" required autofocus />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Image Description</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="image description" required />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Upload Images</label>
                                        <input class="form-control-file" type="file" id="image" name="image" required>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-md">Upload</button>
                                    <button type="reset" class="btn btn-danger btn-md ml-3">cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection