<div class="nav-header">
    <a href="{{ route('admin') }}" class="brand-logo">
        @foreach ($site_branding as $site_branding)
        <img src="{{ asset('school_images/'.$site_branding->school_img) }}" width="50%" alt="">
        @endforeach
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>