<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                       <div class="input-group search-area d-lg-inline-flex d-none mr-5">
                            <div class="input-group-append">
                                <a href="javascript:void(0);" class="input-group-text">
                                    <i class="flaticon-381-search-2"></i>
                                </a>
                            </div>
                            <input type="text" class="form-control" placeholder="Search here">
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    @auth
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/profile/pic1.jpg')}}" width="20" alt="" class="rounded-circle"/>
                            <div class="header-info">
                                <span>{{ Auth::user()->name }}</span>
                                <small>{{ Auth::user()->role }}</small>
                            </div>
                            <i class="fa fa-caret-down ml-3 mr-2 " aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('profile.index') }}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"> 
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                            </form>
                        </div>
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/profile/pic1.jpg')}}" width="20" alt="" class="rounded-circle"/>
                            <div class="header-info">
                                <span>Guest</span>
                                <small>Please Login</small>
                            </div>
                            <i class="fa fa-caret-down ml-3 mr-2 " aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('login') }}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Login </span>
                            </a>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</div>