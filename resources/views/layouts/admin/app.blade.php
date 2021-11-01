<!DOCTYPE html>
<html lang="en">
    
    <!-- Mirrored from owlio.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 12:15:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{$title }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/summernote/summernote.css')}}" rel="stylesheet">
    {{-- @include('templates.admin.froala_css'); --}}

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
            @include('templates.admin.nav-header');
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        @include('templates.admin.header');
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            @include('templates.admin.sidebar');
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
            @include('templates.admin.footer')
        <!--**********************************
            Footer end
        ***********************************-->

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
]    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>	
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>

    {{-- Summernote editor --}}
    <script src="{{ asset('assets/vendor/summernote/js/summernote.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins-init/summernote-init.js')}}"></script>

	<!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/custom.min.js')}}"></script>
	<script src="{{ asset('assets/js/deznav-init.js')}}"></script>

    {{-- froala script here --}}
    {{-- @include('templates.admin.froala_js'); --}}
    
    <script type="text/javascript">
        $(document).ready(function(){
                          $('.summernote').summernote();
                          })
      </script>

</body>

</html>