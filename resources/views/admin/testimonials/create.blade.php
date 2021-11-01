@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Set the Testimonials content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Testimonials</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form enctype="multipart/form-data" action="{{ route('testimonials.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default " placeholder="Full Name"
                                            id="name" name="name">
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control input-default summernote" id="message" name="message" cols="30" rows="10"></textarea>
                                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
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