<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        @php
            if (!Auth::check()) {
                // dd("Please login first");
                // redirect(route('welcome'));
            }
            $setting = DB::table('sitesettings')->first();
        @endphp
        @section('title')| {{ !empty($setting) ? $setting->name : 'Gym Master' }} -
        {{ !empty($setting) ? $setting->slogan : 'Gym Master' }} @show
    </title>
  
    <!-- global css -->
    @include('assets.backend.css')
    <!-- end of global css -->

    <!-- vendors  css -->
    @yield('header_styles')
    {{-- end of vendors  css --}}
</head>

<body>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
            <a href="javascript:void(0)" class="ml-100 toggle-right d-xl-none d-lg-block">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="{{ asset('img/images/toggle.png') }}" alt="logo" />
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <h3 style="display: flex;width: -webkit-fill-available;place-content: center;font-size: x-large;width: -moz-available;">
                {{ !empty($setting) ? $setting->name : 'Gym Master' }} -
                {{ !empty($setting) ? $setting->slogan : 'Gym Master' }} </h3>

            <div class="navbar-right ml-auto">
                <ul class="navbar-nav nav">
                    <li class="dropdown notifications-menu nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdown" style="border: 1px solid #a9a9a9;padding: 0 17px;border-radius: 7px;">
                            <i class="im im-icon-Boy fs-16"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">

                            <li class="dropdown-footer">
                                @if (!empty(Auth::user()) && Auth::user()->member_id != null)
                                    <a class="dropdown-item"
                                        href="{{ route('members.details', ['id' => Auth::user()->member_id]) }}">
                                        Profile
                                    </a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper">


        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-aside" style="min-height: 100vh;height: 100vh;">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar metismenu sidebar-res">
                @include('layouts/leftmenu')
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>



        <!--            right side bar ----------->
        <aside class="right-aside">
            @yield('content')
        </aside>
    </div>
    <!-- ./wrapper -->
    <!-- Footer end -->
    <!-- SCRIPTS -->
    <!-- global js -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

   


    @php
        $member = DB::table('members')->find(Auth::user()->member_id);
        if ($member && $member->term_con !== 'yes') {
            echo "<script>
                Swal.fire({
                    text: 'Please update your profile and accept terms and conditions',
                    icon: 'warning',
                    showCancelButton: false,
                    confirmButtonText: 'Go to Profile',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '".route('members.admission_form')."';
                    }
                });
            </script>";
        }
    @endphp


    <!-- global js -->  
    @include('assets.backend.js')
    <!-- end of global js -->

    <!-- Start of vendor js -->
    @yield('footer_scripts')
    <!-- end of vendor js -->




</body>

</html>
