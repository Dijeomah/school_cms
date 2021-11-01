@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Set the Gallery content on the slider site</p>
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
                            <a href="{{ route('gallery.create') }}" class="btn btn-primary">Create New</a>
                            <table class="table table-striped table-hover">
                                @if ($data->count() == 0)
                                <h3 class="text-danger text-center">No Gallery Content...</h3>
                                @else
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Gallery Title</th>
                                        <th scope="col">Gallery Image</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $gallery_data)
                                    <tr>
                                            <td>{{ $gallery_data->id }}</td>
                                            <td>{{ $gallery_data->gallery_title }}</td>
                                            <td> <img src="{{ asset('gallery_images/'.$gallery_data->gallery_img) }}" width="40%" alt=""></td>
                                            <td><a href="{{ route('gallery.edit', $gallery_data->id) }}" class="btn btn-xs btn btn-outline-info mb-1 "><i class="fa fa-pencil color-danger"></i></a>
                                                <form action="{{ route('gallery.destroy', $gallery_data->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash color-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                @endif

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection