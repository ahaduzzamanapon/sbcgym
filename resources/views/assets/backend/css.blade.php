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
 <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">

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

 <style>
     .top_solver {
         top: -161px !important;
     }
 </style>

 @stack('backend_css')
