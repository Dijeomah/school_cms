@extends('layouts.admin.app')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, {! User !}!</h4>
                    <p class="mb-0">Set the Events content on the school site</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('events.create') }}" class="btn btn-primary">Create New</a>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Event Title</th>
                                    <th scope="col">Event Detail</th>
                                    <th scope="col">Event Location</th>
                                    <th scope="col">Event Time</th>
                                    <th scope="col">Event Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $event_data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $event_data->event_title }}</td>
                                    <td>{!! Str::limit($event_data->event_detail, 50, '...') !!}</td>
                                    <td>{{ $event_data->event_location }}</td>
                                    <td>{{ $event_data->event_time }}</td>
                                    <td>{{ $event_data->event_date }}</td>
                                    <td><a href="{{ route('events.edit', $event_data->id) }}"
                                            class="btn btn-xs btn btn-outline-info mb-1 "><i
                                                class="fa fa-pencil color-danger"></i></a>
                                        <form action="{{ route('events.destroy', $event_data->id) }}" method="POST">
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