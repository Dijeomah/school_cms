@extends('layouts.admin.app')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, {! User !}!</h4>
                    <p class="mb-0">Set the Home Introduction content on the school site</p>
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
                        <a href="{{ route('teachers.create') }}" class="btn btn-primary">Create New</a>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Teacher Name</th>
                                    <th scope="col">Teacher Position</th>
                                    <th scope="col">Teacher Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $teacher_data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher_data->teacher_name }}</td>
                                    <td>{{ $teacher_data->teacher_position }}</td>
                                    <td> <img src="{{ asset('teacher_images/'.$teacher_data->teacher_img) }}"
                                            width="20%" alt=""></td>
                                    <td><a href="{{ route('teachers.edit', $teacher_data->id) }}"
                                            class="btn btn-xs btn btn-outline-info mb-1 "><i
                                                class="fa fa-pencil color-danger"></i></a>
                                        <form action="{{ route('teachers.destroy', $teacher_data->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-xs"><i
                                                    class="fa fa-trash color-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection