@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, {! User !}!</h4>
                        <p class="mb-0">Set the Admission content on the school site</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Admission</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($data->count() == 0)
                                <a href="{{ route('admission.create') }}" class="btn btn-primary">Create New</a>
                            @else                                
                            <table class="table table-striped table-hover">
                                @foreach ($data as $admission_data)
                                <a href="{{ route('admission.edit', $admission_data->id) }}" class="btn btn-info mb-2">Edit</a>

                                <thead>
                                    <tr>
                                        <th scope="col">Admission Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $admission_data->admission_title }}</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th scope="col">About Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{!! $admission_data->admission_text !!}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection