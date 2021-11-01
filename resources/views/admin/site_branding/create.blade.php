@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Set the content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Branding</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="{{ route('admin.site_branding') }}" method="POST">
                                    @csrf
                                    <div>
                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " placeholder="School Name"
                                            id="school_name" name="school_name">
                                        @error('school_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default "
                                            placeholder="School Description" id="school_desc" name  ="school_desc">
                                        @error('school_desc') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="input-group  mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="school_img" name  ="school_img">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        @error('school_img') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control input-default summernote" id="school_footer" name="school_footer" cols="30" rows="10"></textarea>
                                        @error('school_footer') <span class="text-danger">{{ $message }}</span> @enderror
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