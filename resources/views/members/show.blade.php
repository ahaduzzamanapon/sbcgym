@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Members @parent
@stop

@section('header_styles')
    <style>
        .progress-circle {
            position: relative;
            width: 96px;
            height: 96px;
        }

        .progress-circle svg {
            transform: rotate(-90deg);
        }

        .progress-circle circle {
            fill: none;
            stroke-width: 2;
        }

        .progress-circle circle.bg {
            stroke: #e5e7eb;
        }

        .progress-circle circle.progress {
            stroke-dasharray: 283;
            stroke-linecap: round;
        }
        .progress-circle .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .progress-circle .progress-text .progress-value {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .progress-circle .progress-text .progress-unit {
            font-size: 0.8rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
@stop

@section('content')
    <div class="d-flex min-vh-100 justify-content-center align-items-center">
        @include('members.show_fields')
    </div>
@endsection

@section('footer_scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.progress-circle').each(function() {
                var progress = $(this).data('progress');
                var progressCircle = $(this).find('.progress-circle');
                var progressCircleBg = progressCircle.find('.bg');
                var progressCircleProgress = progressCircle.find('.progress');

                progressCircleBg.css('stroke-dasharray', progress + ' 283');
                progressCircleProgress.css('stroke-dashoffset', progress);
            });

            // Show sweet alert if success message exists
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif
        });
    </script>
@stop
