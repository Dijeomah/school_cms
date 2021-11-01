@extends('layouts.admin.app')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ Auth::user()->name }}</h4>
                                    <p>{{ Str::upper(Auth::user()->role) }}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                    <p>Email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">{{ Auth::user()->count() }}</h3><span>Accounts</span>
                                            </div>
                                        </div>
                                        {{-- <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-info mb-1" data-toggle="modal"
                                                data-target="#sendMessageModal">Create Account</a>
                                        </div> --}}
                                    </div>
                                    <!-- Create New Account Modal -->
                                    {{-- <div class="modal fade" id="sendMessageModal">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Create New Account</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="auth-form">
                                                        <h4 class="text-center mb-4">Create new account</h4>
                                                        <form action="/register" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Name</strong></label>
                                                                <input type="text" name="name" class="form-control" placeholder="Full Name" :value="old('name')"
                                                                    required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Email</strong></label>
                                                                <input type="email" name="email" class="form-control"  :value="old('email')" placeholder="hello@example.com"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Password</strong></label>
                                                                <input type="password" class="form-control"
                                                                    name="password" value="Password" required
                                                                    autocomplete="new-password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Confirm
                                                                        Password</strong></label>
                                                                <input type="password" class="form-control"
                                                                    name="password_confirmation" value="Password"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1" for="role"><strong>User
                                                                        Role</strong></label>
                                                                <select name="role" id="role" :value="old('role')" class="form-control">
                                                                    <option value="admin">Admin</option>
                                                                    <option value="staff" selected>Staff</option>
                                                                </select>
                                                            </div>
                                                            <div class="text-center mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-block">Create</button>
                                                            </div>
                                                        </form>
                                                        <div class="new-account mt-3">
                                                            <p>Already have an account? <a class="text-primary"
                                                                    href="{{ route('login') }}">Sign
                                                                    in</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                            class="nav-link active show">All Accounts</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:50px;">
                                                                    <div
                                                                        class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input" id="checkAll"
                                                                            required="">
                                                                        <label class="custom-control-label"
                                                                            for="checkAll"></label>
                                                                    </div>
                                                                </th>
                                                                <th><strong>#</strong></th>
                                                                <th><strong>Name</strong></th>
                                                                <th><strong>Email</strong></th>
                                                                <th><strong>Role</strong></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $user)

                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheckBox2" required="">
                                                                        <label class="custom-control-label"
                                                                            for="customCheckBox2"></label>
                                                                    </div>
                                                                </td>
                                                                <td><strong>{{ $loop->iteration }}</strong></td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="w-space-no">{{ $user->name
                                                                            }}</span>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center"><i
                                                                            class="fa fa-circle text-success mr-1"></i>
                                                                        {{ $user->role }}</div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        @if (Auth::user()->role == 'staff')
                                                                            
                                                                        @else
                                                                        <a href="{{ route('profile.edit', $user->id) }}"
                                                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                                class="fa fa-pencil"></i></a>
                                                                                <form
                                                                                    action="{{ route('profile.destroy', $user->id) }}"
                                                                                    method="POST">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger shadow btn-xs sharp"><i
                                                                                            class="fa fa-trash"></i></button>
                                                                                </form>
                                                                        @endif
                                                                    </div>
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
                            <!-- Modal -->
                            <div class="modal fade" id="replyModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Post Reply</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <textarea class="form-control" rows="4">Message</textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection