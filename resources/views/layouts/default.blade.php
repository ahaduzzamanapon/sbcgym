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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/iconmind.css') }}">

    <!-- global css -->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    {{-- //<script src="https://cdn.tailwindcss.com"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

    {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>



    <style>
    #demo {
        position: relative;

        overflow: auto;
    }
    </style>
    <style>
    .dataTables_wrapper {
        overflow-x: scroll;
    }

    .chosen-single {
        padding: 6px !important;
        height: fit-content !important;
    }
    </style>
    <!-- end of global css -->

    <!-- vendors  css -->
    @yield('header_styles')
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
            <h3
                style="display: flex;width: -webkit-fill-available;place-content: center;font-size: x-large;width: -moz-available;">
                {{ !empty($setting) ? $setting->name : 'Gym Master' }} -
                {{ !empty($setting) ? $setting->slogan : 'Gym Master' }} </h3>



            @php

            $today_registered_notification=[];
            $payment_pending=[];
            $schedule_book=[];

            $today_registered_notification = DB::table('members')
            ->whereDate('created_at', '=', date('Y-m-d'))
            ->get();

            $payment_pending = DB::table('purchase_payments')
            ->join('purchasepackages', 'purchase_payments.purchase_purchase_id', '=', 'purchasepackages.id')
            ->join('members', 'purchasepackages.member_id', '=', 'members.id')
            ->select('purchase_payments.*', 'members.mem_name','members.last_name')
            ->where('purchase_payments.payment_status', 1)
            ->get();

            $schedule_book = DB::table('schedulebookings')
            ->join('members', 'schedulebookings.member_id', '=', 'members.id')
            ->join('assets_managements', 'schedulebookings.asset_id', '=', 'assets_managements.id')
            ->select('schedulebookings.*', 'members.mem_name', 'assets_managements.item_name')
            ->where('schedulebookings.status', 1)
            ->get();

            $diet_chart_request = DB::table('diet_chart_requests')
            ->join('members', 'diet_chart_requests.member', '=', 'members.id')
            ->select('diet_chart_requests.*', 'members.mem_name')
            ->where('diet_chart_requests.status', 'pending')
            ->get();
            
            @endphp
            <div class="navbar-right ml-auto">
                <ul class="navbar-nav nav flex" style="display: flex;flex-direction: row;flex-wrap: nowrap;gap: 10px;">
                    @if (if_can('show_all_data'))
                        <li class="dropdown notifications-menu nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" id="navbarDropdown"
                                style="padding: 0 15px;border-radius: 7px;">
                                <span
                                    style="background: red;position: absolute;border-radius: 50px;height: auto;width: fit-content;padding: 0px 6px;font-size: 9px;font-weight: bolder;right: 5px;color: white;">{{count($today_registered_notification) + count($payment_pending) + count($schedule_book)+count($diet_chart_request)}}</span>
                                <i class="im im-icon-Bell fs-16"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">
                                <li class="dropdown-footer" style="padding: 5px;">
                                    <h4 style="white-space: nowrap;font-size: 16px;">Today Registered:
                                        {{count($today_registered_notification)}}</h4>
                                </li>
                                @foreach ($today_registered_notification as $notification)
                                <li class="dropdown-footer">
                                    <a class="dropdown-item"
                                        href="{{ route('members.details', ['id' => $notification->id]) }}">
                                        <span style="font-size: 13px;"><i class="im im-icon-Boy fs-16"></i>
                                            {{ $notification->mem_name }} {{ $notification->last_name }} -
                                            {{ $notification->mem_email }} </span>
                                    </a>
                                </li>
                                @endforeach
                                <li class="dropdown-footer" style="padding: 5px;">
                                    <h4 style="white-space: nowrap;font-size: 16px;">Payment Pending:
                                        {{count($payment_pending)}}</h4>
                                </li>
                                @foreach ($payment_pending as $notification)
                                <li class="dropdown-footer">
                                    <a class="dropdown-item"
                                        href="{{ route('purchasePackages.make_payment', $notification->purchase_purchase_id) }}">
                                        <span><i class="im im-icon-Dollar fs-16"></i> {{ $notification->mem_name }}
                                            {{ $notification->last_name }} - {{ $notification->payment_number }} Payment
                                            Amount -{{ $notification->payment_amount }} </span>
                                    </a>
                                </li>
                                @endforeach
                                <li class="dropdown-footer" style="padding: 5px;">
                                    <h4 style="white-space: nowrap;font-size: 16px;">Schedule Booking:
                                        {{count($payment_pending)}}</h4>
                                </li>
                                @foreach ($schedule_book as $notification)
                                <li class="dropdown-footer">
                                    <a class="dropdown-item"
                                        href="{{ route('schedulebookings.edit', [$notification->id]) }}">
                                        <span><i class="im im-icon-Calendar-2 fs-16"></i> {{ $notification->mem_name }} -
                                            {{ $notification->booking_date }} {{ $notification->booking_time }} For
                                            {{ $notification->item_name }} </span>
                                    </a>
                                </li>
                                @endforeach
                                <li class="dropdown-footer" style="padding: 5px;">
                                    <h4 style="white-space: nowrap;font-size: 16px;">Diet Chart Request:
                                        {{count($diet_chart_request)}}</h4>
                                </li>
                                @foreach ($diet_chart_request as $notification)
                                <li class="dropdown-footer">
                                    <a class="dropdown-item"
                                        href="{{ route('dietChartRequests.edit', [$notification->id]) }}">
                                        <span><i class="im im-icon-Calendar-2 fs-16"></i> {{ $notification->mem_name }} -
                                            requested diet chart </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                    <li class="dropdown notifications-menu nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdown"
                            style="border: 1px solid #a9a9a9;padding: 0 17px;border-radius: 7px;">
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
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    @php
    $member = DB::table('members')->find(Auth::user()->member_id);
    if ($member && $member->term_con !== 'yes') {
    echo '<script>
    Swal.fire({
        text: "Please update your profile and accept terms and conditions",
        icon: "warning",
        showCancelButton: false,
        confirmButtonText: "Go to Profile",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "' . route('members.admission_form') . '";
        }
    });
    </script>';
    }
    @endphp



    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- Start of vendor js -->
    @yield('footer_scripts')

    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>




    <script>
    document.body.style.zoom = "90%";
    </script>

    {{-- <script>
        $(document).ready(function() {
            $('input').attr('required', 'required');
        });
    </script> --}}

    <style>
    .top_solver {
        top: -161px !important;
    }
    </style>

    <script>
    $(document).ready(function() {
        var ww = $(window).width();
        console.log(ww);
        $(window).resize(function() {
            checkWidth();
        });
    });

    function checkWidth() {
        var ww = $(window).width();
        console.log(ww);

        if (ww < 767) {
            $('.sidebar-res').css('margin-left', '');
        }

        if (ww < 992) {
            console.log('rhb');
            $('.left-aside').addClass('top_solver');
        } else {
            $('.left-aside').removeClass('top_solver');
        }

    }
    </script>


</body>

</html>