@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Purchase Package @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Payment details</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Payment Mode</th>
                                <th>Payment Date</th>
                                <th>Payment Amount</th>
                                <th>Payment Note</th>
                                <th>Payment Number</th>
                                <th>Payment Status</th>
                                <th>Payment Method Name</th>
                                <th>Payment Method Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment_details as $key => $payment_detail)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $payment_detail->payment_mode }}</td>
                                    <td>{{ $payment_detail->payment_date }}</td>
                                    <td>{{ $payment_detail->payment_amount }}</td>
                                    <td>{{ $payment_detail->payment_note }}</td>
                                    <td>{{ $payment_detail->payment_number }}</td>
                                    <td>{{ $payment_detail->payment_status==1?'Pending':'Approved' }}
                                        @if ($payment_detail->payment_status==1)
                                        <a href="{{ route('purchasePackages.payment_approve', $payment_detail->id) }}" class="btn btn-primary">Approve</a>
                                        @endif
                                    </td>

                                    <td>{{ $payment_detail->payment_method_name }}</td>
                                    <td>{{ $payment_detail->payment_method_number }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12" style="display: flex;flex-direction: column;gap: 10px;">
                            <span>Total Amount: <strong>{{ $sale->gross_amount }}</strong></span>
                            <span>Pay Amount: <strong>{{ $sale->pay_amount }}</strong></span>
                            <span>Due Amount: <strong>{{ $sale->due_amount }}</strong></span>
                            <input type="hidden" name="due_amount" id="due_amount" value="{{ $sale->due_amount }}">
                        </div>

                    </div>
                </div>





                <form action="{{ route('purchasePackages.payment_store') }}" method="post">
                    @csrf
                    <input type="hidden" name="member_id" id="member_id" value="{{ $sale->member_id }}">
                    <input type="hidden" name="sale_id" id="sale_id" value="{{ $sale->id }}">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="display: flex;align-items: center;gap: 22px;">
                                <h1>Payment Details </h1>
                                <span class="text-danger">Please payment on <strong id="payment_number_marchent"></strong>
                                </span>
                            </div>
                        </div>
                        <?php
                        ?>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_mode', 'Payment Mode:', ['class' => 'control-label']) !!}
                                {!! Form::select('payment_mode', ['' => 'Select Payment Mode'], null, [
                                    'class' => 'form-control',
                                    'required',
                                    'onchange' => 'get_number()',
                                ]) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_date', 'Payment Date:', ['class' => 'control-label']) !!}
                                {!! Form::date('payment_date', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_amount', 'Payment Amount:', ['class' => 'control-label']) !!}
                                {!! Form::number('payment_amount', null, ['class' => 'form-control', 'required', 'max' => $sale->due_amount]) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_note', 'Payment Note:', ['class' => 'control-label']) !!}
                                {!! Form::text('payment_note', null, ['class' => 'form-control', 'required', 'placeholder' => 'Transaction ID']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_doc', 'Payment Document:', ['class' => 'control-label']) !!}
                                {!! Form::file('payment_doc', ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                {!! Form::label('payment_number', 'Payment Number:', ['class' => 'control-label']) !!}
                                {!! Form::text('payment_number', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group col-md-4 {{ if_can('show_all_data') ? '' : 'd-none' }}">
                                {!! Form::label('payment_status', 'Payment Status:', ['class' => 'control-label']) !!}
                                {!! Form::select('payment_status', ['1' => 'Pending', '2' => 'Approved'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('purchasePackages.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@section('footer_scripts')
    <script>
        var payment_json = ''
        $(document).ready(function() {
            const memberId = $('#member_id').val();
            get_payment_method_by_member(memberId);
        });


        function get_payment_method_by_member(member_id) {
            console.log('member_id', member_id);


            payment_json = '';
            $.ajax({
                url: "{{ route('get_payment_method_by_member') }}",
                type: "POST",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'member_id': member_id
                },
                dataType: 'json',
                success: function(response) {
                    payment_json = response
                    $('#payment_mode').empty();
                    $('#payment_mode').append('<option value="">Select Payment Mode</option>');
                    $.each(response, function(index, payment_method) {
                        $('#payment_mode').append('<option value="' + payment_method.id + '">' +
                            payment_method.name + '</option>');
                    });
                }
            });
        }

        function get_number() {
            var payment_mode = $('#payment_mode').val();
            var payment_method = payment_json.find(payment_method => payment_method.id == payment_mode);
            $('#payment_number_marchent').html(payment_method.payment_number + ' (' + payment_method.name + ')');
        }
    </script>
@endsection
@endsection
