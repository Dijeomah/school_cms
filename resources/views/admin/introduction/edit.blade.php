@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Update the Home Introduction content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home-Intro</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-muted text-center mb-2">
                                Update Home Introduction
                            </h3>
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="/admin/introduction/{{ $data->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " placeholder="School Name"
                                            id="intro_title" name="intro_title" value="{{ $data->intro_title }}">
                                        @error('intro_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                            <img src="{{ asset('intro_images/'.$data->intro_img) }}" width="w-25" alt="">
                                    </div>
                                    <div class="input-group  mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="intro_img" name="intro_img" value="{{ $data->intro_img }}">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="alert alert-warning solid alert-square "><strong>Warning!</strong> Re-upload image for it to take effect.</div>
                                    <div class="form-group">
                                        <textarea class="form-control input-default summernote" id="intro_msg" name="intro_msg"cols="30" rows="10">{!! $data->intro_msg !!}</textarea>
                                        @error('intro_msg') <span class="text-danger">{{ $message }}</span> @enderror
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