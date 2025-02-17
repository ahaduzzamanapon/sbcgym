@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Edit Class @parent
@stop

@push('backend_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Edit Class</h1>
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
                {!! Form::model($class, [
                    'route' => ['packageClasses.update', $class->id],
                    'method' => 'patch',
                    'files' => true,
                ]) !!}

                <!-- Title Field -->
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <!-- Image Field -->
                <div class="form-group">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::file('image', [
                        'class' => 'dropify',
                        'data-height' => '200',
                        'data-default-file' => asset('images/classes/' . $class->image),
                    ]) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    <div class="custom-control custom-switch">
                        {!! Form::checkbox('status', 1, null, ['class' => 'custom-control-input', 'id' => 'status_switch']) !!}
                        {!! Form::label('status_switch', 'Active', ['class' => 'custom-control-label']) !!}
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-3">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('packageClasses.index') }}" class="btn btn-default">Cancel</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('backend_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
