@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Update Gallery content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Gallery</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-muted text-center mb-2">
                                Update Gallery
                            </h3>
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="{{route('gallery.update', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " placeholder="Gallery Title"
                                            id="gallery_title" name="gallery_title" value="{{ $data->gallery_title }}">
                                        @error('gallery_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                            <img src="{{ asset('gallery_images/'.$data->gallery_img) }}" width="w-25" alt="">
                                    </div>
                                    <div class="form-group">
                                        <div class="alert alert-warning">
                                            <p>Re-upload image to continue</p>
                                        </div>
                                    </div>
                                    <div class="input-group  mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gallery_img" name="gallery_img" value="{{ asset('gallery_images/'.$data->gallery_img) }}">
                                            <label class="custom-file-label">{{ asset('gallery_images/'.$data->gallery_img) }}</label>
                                        </div>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection