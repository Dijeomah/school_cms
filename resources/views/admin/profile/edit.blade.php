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
                                <div class="dropdown ml-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown"
                                        aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to
                                            close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
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
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-info mb-1" data-toggle="modal"
                                                data-target="#sendMessageModal">Create Account</a>
                                        </div>
                                    </div>
                                    <!-- Create New Account Modal -->
                                    <div class="modal fade" id="sendMessageModal">
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
                                                        <form action="{{ route('register') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Name</strong></label>
                                                                <input type="text" name="name" :value="old('name')"
                                                                    class="form-control" placeholder="Full Name"
                                                                    required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1"><strong>Email</strong></label>
                                                                <input type="email" name="email" :value="old('email')"
                                                                    class="form-control" placeholder="hello@example.com"
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
                                                                <select name="role" id="role" class="form-control">
                                                                    <option value="admin">Admin</option>
                                                                    <option value="staff">Staff</option>
                                                                </select>
                                                            </div>
                                                            <div class="text-center mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-block">Create</button>
                                                            </div>
                                                        </form>
                                                        {{-- <div class="new-account mt-3">
                                                            <p>Already have an account? <a class="text-primary"
                                                                    href="{{ route('login') }}">Sign
                                                                    in</a></p>
                                                        </div> --}}
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
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                            class="nav-link active show">Edit Accounts</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <div class="auth-form">
                                                    <form action="{{route('profile.update', $users->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        
                                                        <div class="form-group">
                                                            <label class="mb-1"><strong>Name</strong></label>
                                                            <input type="text" name="name" value="{{ $users->name }}"
                                                                class="form-control" placeholder="Full Name" required
                                                                autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1"><strong>Email</strong></label>
                                                            <input type="email" name="email" value="{{ $users->email }}"
                                                                class="form-control" placeholder="hello@example.com"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1"><strong>Password</strong></label>
                                                            <input type="password" class="form-control" name="password"
                                                                placeholder="Password" required autocomplete="new-password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1"><strong>Confirm
                                                                    Password</strong></label>
                                                            <input type="password" class="form-control"
                                                                name="password_confirmation" placeholder="Password" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="mb-1" for="role"><strong>User
                                                                    Role</strong></label>
                                                            <select name="role" id="role" class="form-control">
                                                                <option value="admin">Admin</option>
                                                                <option value="staff">Staff</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-block">Update</button>
                                                        </div>
                                                    </form>
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
    </div>
</div>

@endsection