<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="" href="{{ route('admin') }}">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                    <span class="nav-text">Accounts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('profile.index') }}">Profile</a></li>
                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">New Account</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('register') }}">Create</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                    <span class="nav-text">Site Branding</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('site-branding.index') }}">Branding</a></li>
                    <li><a href="{{ route('sliders.index') }}">Sliders</a></li>
                    <li><a href="{{ route('introduction.index') }}">Home-Intro</a></li>
                    <li><a href="{{ route('teachers.index') }}">Teachers</a></li>
                    <li><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                    <span class="nav-text">Pages Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('about.index') }}">About Us</a></li>
                    <li><a href="{{ route('admission.index') }}">Admission</a></li>
                    <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                    <li><a href="{{ route('teachers.index') }}">Contact Us</a></li>
                </ul>
            </li>
        </ul>

        <div class="copyright">
            <p><strong> School Admin </strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by Schoolville Limited</p>
        </div>
    </div>
</div>