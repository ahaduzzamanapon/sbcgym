@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Classes @parent
@stop

@section('header_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb text-center">
            <h1>Classes</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="card border">
            <div class="card-header border text-right">
                <a class="btn btn-primary" href="{{ route('packageClasses.create') }}">
                    <i class="fa fa-plus"></i> Add New
                </a>
            </div>
            <div class="card-body border">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="border text-center">Title</th>
                                <th class="border text-center">Image</th>
                                <th class="border text-center">Status</th>
                                <th class="border text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $class)
                                <tr>
                                    <td class="border align-middle">{{ $class->title }}</td>
                                    <td class="border align-middle">
                                        <img src="{{ asset('images/classes/' . $class->image) }}" alt="{{ $class->title }}"
                                            class="img-thumbnail border mx-auto d-block" style="max-width: 80px; height: auto;">
                                    </td>
                                    <td class="border align-middle">
                                        @if ($class->status)
                                            <span class="badge badge-success border ">Active</span>
                                        @else
                                            <span class="badge badge-danger border">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="border align-middle">
                                        {!! Form::open([
                                            'route' => ['packageClasses.destroy', $class->id],
                                            'method' => 'delete',
                                            'class' => 'd-inline delete-form',
                                        ]) !!}
                                        <div class='btn-group'>
                                            <a href="{{ route('packageClasses.edit', [$class->id]) }}"
                                                class='btn btn-info btn-md border'>
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                                'type' => 'button',
                                                'class' => 'btn btn-danger btn-md border delete-btn',
                                            ]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        @endif

        // Delete confirmation with SweetAlert
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            let form = $(this).closest('.delete-form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
