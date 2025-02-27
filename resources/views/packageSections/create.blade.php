@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Create Package Section @parent
@stop

@section('header_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Create Package Section</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'packageSections.store', 'files' => true]) !!}

                <!-- Title Field -->
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <!-- Image Field -->
                <div class="form-group">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::file('image', ['class' => 'dropify', 'data-height' => '200', 'required']) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    <div class="custom-control custom-switch">
                        {!! Form::checkbox('status', 1, true, ['class' => 'custom-control-input', 'id' => 'status_switch']) !!}
                        {!! Form::label('status_switch', 'Active', ['class' => 'custom-control-label']) !!}
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-3">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('packageSections.index') }}" class="btn btn-default">Cancel</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection

@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
