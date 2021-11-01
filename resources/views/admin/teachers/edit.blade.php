@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Update the Teacher content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Teachers</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-muted text-center mb-2">
                                Update Teacher
                            </h3>
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="{{route('teachers.update', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="teacher_name" ><strong>Teacher Name: </strong></label>
                                        <input type="text" class="form-control input-default " placeholder="Teacher Name"
                                            id="teacher_name" name="teacher_name" value="{{ $data->teacher_name }}">
                                        @error('teacher_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="teacher_position" ><strong>Teacher Position:</strong> </label>
                                        <input type="text" class="form-control input-default " placeholder="Teacher Position"
                                            id="teacher_position" name="teacher_position" value="{{ $data->teacher_position }}">
                                        @error('teacher_position') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                            <img src="{{ asset('teacher_images/'.$data->teacher_img) }}" width="w-25" alt="">
                                    </div>
                                    <div class="input-group  mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="teacher_img" name="teacher_img" value="{{ $data->teacher_img }}">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="alert alert-warning solid alert-square "><strong>Warning!</strong> Re-upload image for it to take effect.</div>
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