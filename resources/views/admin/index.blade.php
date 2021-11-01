@extends('layouts.admin.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head d-flex flex-wrap mb-sm-4 mb-3 align-items-center">
                <div class="mr-auto  d-lg-block mb-3">
                    <h2 class="text-black mb-0 font-w700">Dashboard</h2>
                    <p class="mb-0">Welcome {{ Auth::user()->name }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card card-bx">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">	
                                    <h2 class="text-black font-w700">{{ $sliders->count() }}</h2>
                                    <p class="mb-0 text-black font-w600">Total Sliders</p>
                                    {{-- <span ><b class="text-success mr-1">+0,5%</b>than last month</span> --}}
                                </div>
                                <div class="d-inline-block">
                                    <svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M57.4998 47.5001C57.4998 48.1631 57.2364 48.799 56.7676 49.2678C56.2987 49.7367 55.6629 50.0001 54.9998 50.0001H24.9998C24.3368 50.0001 23.7009 49.7367 23.2321 49.2678C22.7632 48.799 22.4998 48.1631 22.4998 47.5001C22.4998 43.5218 24.0802 39.7065 26.8932 36.8935C29.7063 34.0804 33.5216 32.5001 37.4998 32.5001H42.4998C46.4781 32.5001 50.2934 34.0804 53.1064 36.8935C55.9195 39.7065 57.4998 43.5218 57.4998 47.5001ZM39.9998 10.0001C38.022 10.0001 36.0886 10.5866 34.4441 11.6854C32.7996 12.7842 31.5179 14.346 30.761 16.1732C30.0041 18.0005 29.8061 20.0112 30.192 21.951C30.5778 23.8908 31.5302 25.6726 32.9288 27.0711C34.3273 28.4697 36.1091 29.4221 38.0489 29.8079C39.9887 30.1938 41.9994 29.9957 43.8267 29.2389C45.6539 28.482 47.2157 27.2003 48.3145 25.5558C49.4133 23.9113 49.9998 21.9779 49.9998 20.0001C49.9998 17.3479 48.9463 14.8044 47.0709 12.929C45.1955 11.0536 42.652 10.0001 39.9998 10.0001ZM17.4998 10.0001C15.522 10.0001 13.5886 10.5866 11.9441 11.6854C10.2996 12.7842 9.0179 14.346 8.26102 16.1732C7.50415 18.0005 7.30611 20.0112 7.69197 21.951C8.07782 23.8908 9.03022 25.6726 10.4287 27.0711C11.8273 28.4697 13.6091 29.4221 15.5489 29.8079C17.4887 30.1938 19.4994 29.9957 21.3267 29.2389C23.1539 28.482 24.7157 27.2003 25.8145 25.5558C26.9133 23.9113 27.4998 21.9779 27.4998 20.0001C27.4998 17.3479 26.4463 14.8044 24.5709 12.929C22.6955 11.0536 20.152 10.0001 17.4998 10.0001ZM17.4998 47.5001C17.4961 44.8741 18.0135 42.2735 19.0219 39.8489C20.0304 37.4242 21.5099 35.2238 23.3748 33.3751C21.8487 32.7989 20.2311 32.5025 18.5998 32.5001H16.3998C12.7153 32.5067 9.18366 33.9733 6.57833 36.5786C3.97301 39.1839 2.50643 42.7156 2.49982 46.4001V47.5001C2.49982 48.1631 2.76321 48.799 3.23205 49.2678C3.70089 49.7367 4.33678 50.0001 4.99982 50.0001H17.9498C17.6588 49.1984 17.5066 48.3529 17.4998 47.5001Z" fill="#1E33F2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card card-bx">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">	
                                    <h2 class="text-black font-w700">{{ $gallery->count() }}</h2>
                                    <p class="mb-0 text-black font-w600">Total Gallery Image</p>
                                    {{-- <span ><b class="text-danger mr-1">-2%</b>than last month</span> --}}
                                </div>
                                <div class="d-inline-block">
                                    <svg class="primary-icon" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M59.0284 17.8807L30.7862 3.81817C30.2918 3.57103 29.7082 3.57103 29.2138 3.81817L0.971602 17.8807C0.375938 18.1794 0 18.787 0 19.4531C0 20.1192 0.375938 20.7268 0.971602 21.0255L29.2138 35.088C29.4609 35.2116 29.7305 35.2734 30 35.2734C30.2695 35.2734 30.5391 35.2116 30.7862 35.088L59.0284 21.0255C59.6241 20.7268 60 20.1192 60 19.4531C60 18.787 59.6241 18.1794 59.0284 17.8807Z" fill="#1E33F2"/>
                                        <path d="M56.4844 46.1441V26.2285L52.9688 27.9863V46.1441C50.9271 46.8722 49.4531 48.805 49.4531 51.0937V54.6093C49.4531 55.5809 50.2393 56.3671 51.2109 56.3671H58.2422C59.2138 56.3671 60 55.5809 60 54.6093V51.0937C60 48.805 58.526 46.8722 56.4844 46.1441Z" fill="#1E33F2"/>
                                        <path d="M32.3586 38.2329C31.6308 38.5967 30.8154 38.789 30 38.789C29.1846 38.789 28.3692 38.5967 27.6414 38.2329L10.5469 29.7441V33.5156C10.5469 40.4147 19.1578 45.8203 30 45.8203C40.8422 45.8203 49.4531 40.4147 49.4531 33.5156V29.7441L32.3586 38.2329Z" fill="#1E33F2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0 header-cal">
                            <div class="mr-auto pr-3">
                                <h4 class="text-black font-w700">Accounts Created</h4>
                                <p class="mb-0">You have <strong>{{ Auth::user()->count() }}</strong> active accounts</p>
                            </div>								
                        </div>		
                        <div class="card-body text-center event-calender pb-2">
                            <input type='text' class="form-control d-none" id='datetimepicker1' />
                        </div>
                    </div>
                </div>
            </div>	
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card widget-media">
                                <div class="card-header border-0 pb-3 ">
                                    <div class="mr-auto pr-3">
                                        <h4 class="text-black font-w700 fs-24">Accounts Created</h4>
                                        <p class="fs-16 mb-0 ">You have <strong>{{ Auth::user()->count() }}</strong> active accounts</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-0">
                                    <div class="table-responsive intuition-table">
                                        <table class="table card-table">
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center intuition-profile">
                                                            <div class="info">
                                                                <h5 class=" mb-0"><a class="text-black" href="javascript:void()">{{ $user->name }}</a></h5>
                                                                <span class="">{{ $user->email }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <svg class="mr-1 mr-sm-2 mt-2 primary-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 8.00006V14.0001C19.9983 15.5908 19.3656 17.1159 18.2407 18.2408C17.1159 19.3656 15.5908 19.9983 14 20.0001H8.00002C7.7348 20.0001 7.48045 20.1054 7.29291 20.293C7.10537 20.4805 7.00002 20.7348 7.00002 21.0001C7.00002 21.2653 7.10537 21.5196 7.29291 21.7072C7.48045 21.8947 7.7348 22.0001 8.00002 22.0001H14C16.121 21.9976 18.1544 21.154 19.6542 19.6542C21.1539 18.1545 21.9976 16.121 22 14.0001V8.00006C22 7.73484 21.8947 7.48049 21.7071 7.29295C21.5196 7.10542 21.2652 7.00006 21 7.00006C20.7348 7.00006 20.4804 7.10542 20.2929 7.29295C20.1054 7.48049 20 7.73484 20 8.00006Z" fill="#1E33F2"/>
                                                                <path d="M14 18.9999C15.3256 18.9983 16.5965 18.4711 17.5338 17.5337C18.4712 16.5964 18.9984 15.3255 19 13.9999V6.99991C18.9984 5.67431 18.4712 4.40344 17.5338 3.4661C16.5965 2.52876 15.3256 2.00147 14 1.99991H7C5.6744 2.00147 4.40353 2.52876 3.46619 3.4661C2.52885 4.40344 2.00156 5.67431 2 6.99991V13.9999C2.00156 15.3255 2.52885 16.5964 3.46619 17.5337C4.40353 18.4711 5.6744 18.9983 7 18.9999H14ZM7.81 9.41401L9.0883 11.1816L13.3207 7.26561C13.5155 7.08547 13.7738 6.99009 14.0389 7.00044C14.304 7.01079 14.5542 7.12603 14.7343 7.32081C14.9144 7.51558 15.0098 7.77394 14.9995 8.03904C14.9891 8.30414 14.8739 8.55427 14.6791 8.73441L9.6187 13.4159C9.51484 13.5119 9.39179 13.5848 9.25767 13.6298C9.12355 13.6748 8.98142 13.6908 8.84067 13.6767C8.69991 13.6627 8.56373 13.619 8.44112 13.5484C8.31852 13.4779 8.21227 13.3821 8.1294 13.2675L6.19 10.5858C6.04241 10.3707 5.98474 10.1064 6.0293 9.8493C6.07387 9.59223 6.21713 9.36276 6.42853 9.20985C6.63992 9.05694 6.9027 8.9927 7.1608 9.03085C7.4189 9.06899 7.65187 9.20649 7.81 9.41401Z" fill="#1E33F2"/>
                                                            </svg>
                                                            <div class="info-2">
                                                                <h4 class="mb-0 text-primary font-w700 text-nowrap">{{ Str::upper($user->role) }}</h4>
                                                                <span class="">User Type</span>
                                                            </div>
                                                        </div>	
                                                    </td>
                                                    <td class="text-right price">
                                                        @if ($user->role == 'admin')
                                                        <h4 class="font-w700"><span class="badge badge-success light">Admin</span></h4>
                                                        @else
                                                        <h4 class="font-w700"><span class="badge badge-primary light">Staff</span></h4>
                                                        @endif
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
            </div>
        </div>	
    </div>

@endsection