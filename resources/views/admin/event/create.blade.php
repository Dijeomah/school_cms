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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('events.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-sm-6 mt-2 ">
                                        <input type="text" class="form-control input-default " placeholder="Event Title"
                                            id="event_title" name="event_title">
                                        @error('event_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6 mt-2 ">
                                        <input type="time" class="form-control input-default " placeholder="Event Time"
                                            id="event_time" name="event_time">
                                        @error('event_time') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6 mt-2 ">
                                        <input type="date" class="form-control input-default " placeholder="Event Date"
                                            id="event_date" name="event_date">
                                        @error('event_date') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6 mt-2  ">
                                        <input type="text" class="form-control input-default "
                                            placeholder="Event Location" id="event_location" name="event_location">
                                        @error('event_location') <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 mt-2 mb-2 ">
                                        <textarea class="form-control input-default summernote" name="event_detail" id="event_detail" cols="30" rows="10"></textarea>
                                        @error('event_detail') <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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