@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Set the Teachers content on the school site</p>
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
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="{{ route('teachers.create') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="teacher_name">Teacher Name:</label>
                                        <input type="text" class="form-control input-default " placeholder="Teacher Name"
                                        id="teacher_name" name="teacher_name">
                                        @error('teacher_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="teacher_position">Teacher Position:</label>
                                        <input type="text" class="form-control input-default " placeholder="Teacher Position"
                                            id="teacher_position" name="teacher_position">
                                        @error('teacher_position') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="input-group  mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="teacher_img" name="teacher_img">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('teacher_img') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WYSIWYG for admission here -->


@endsection