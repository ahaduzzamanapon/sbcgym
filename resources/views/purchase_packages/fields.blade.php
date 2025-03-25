@php
    if (if_can('male-access')) {
        $packages = DB::table('packages')->where('pack_status', 1)->where('branch_id', 1)->get();
    } elseif (if_can('female-access')) {
        $packages = DB::table('packages')->where('pack_status', 1)->where('branch_id', 2)->get();
    } else {
        $packages = DB::table('packages')->where('pack_status', 1)->get();
    }
    // dd($packages);
@endphp
<div class="row">
    @include('componant.member_select')
    {{-- <input type="hidden" id="member_id" name="member_id" value="{{ isset($member_id) ? $member_id : '' }}"> --}}
    <div class="form-group col-md-4">
        {!! Form::label('package_id', 'Package Id:', ['class' => 'control-label']) !!}
        {!! Form::select('package_id', $packages->pluck('pack_name', 'id')->prepend('Select Package', ''), null, [
            'class' => 'form-control',
            'required' => 'required',
        ]) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('amount', 'Amount:', ['class' => 'control-label']) !!}
        {!! Form::number('amount', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('tax', 'Vat Percentage:', ['class' => 'control-label']) !!}
        {!! Form::number('tax', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('admission_fee', 'Admission Fee:', ['class' => 'control-label']) !!}
        {!! Form::number('admission_fee', null, ['class' => 'form-control','onkeyup' => 'calculate()']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('gross_amount', 'Gross Amount:', ['class' => 'control-label']) !!}
        {!! Form::number('gross_amount', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('coupons_id', 'Coupon Code:', ['class' => 'control-label']) !!}
        {!! Form::text('coupons_id', null, ['class' => 'form-control', 'id' => 'coupons_id']) !!}
        <span class="text-danger" id="coupons_id_error"></span>
        <span class="text-success" id="coupons_id_success"></span>
        <input type="hidden" name="coupon_idd" id="coupon_idd">
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('coupon_amount', 'Coupon Amount:', ['class' => 'control-label']) !!}
        {!! Form::number('coupon_amount', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('pay_amount', 'Pay Amount:', ['class' => 'control-label']) !!}
        {!! Form::number('pay_amount', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('due_amount', 'Due Amount:', ['class' => 'control-label']) !!}
        {!! Form::number('due_amount', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
        {!! Form::select('status', ['' => 'Select Status', '1' => 'Pending', '2' => 'Due', '3' => 'Full Paid'], null, [
            'class' => 'form-control',
            'readonly',
            'required' => 'required',
        ]) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('expired_date', 'Expired Date:', ['class' => 'control-label']) !!}
        {!! Form::date('expired_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('due_date', 'Due Date:', ['class' => 'control-label']) !!}
        {!! Form::date('due_date', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row" style="display: flex;align-items: center;gap: 22px;">
            <h1>Payment Details </h1>
            <span class="text-danger">Please payment on <strong id="payment_number_marchent"></strong> </span>
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
            {!! Form::number('payment_amount', null, ['class' => 'form-control', 'required', 'readonly']) !!}
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
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('purchasePackages.index') }}" class="btn btn-danger">Cancel</a>
</div>

@section('footer_scripts')

    <script>
        $(document).ready(function() {
            $('#coupons_id').on('input', function() {
                var coupons_id = $(this).val();
                $.ajax({
                    url: "{{ route('coupons.check') }}",
                    type: "POST",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'coupons_id': coupons_id
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {



                            if(response.data['type'] == 0){
                                $('#coupon_amount').val(response.data['amount']);
                            }else{
                                amount=$('#gross_amount').val();
                                $('#coupon_amount').val((amount*response.data['amount'])/100);
                            }

                            $('#coupon_idd').val(response.data['id']);


                            $('#coupons_id_error').text('');
                            $('#coupons_id_success').text('Valid Coupons Code');


                        } else {
                            $('#coupon_amount').val(0);
                            $('#coupons_id_error').text('Invalid Coupons Code Or Expired');
                            $('#coupons_id_success').text('');
                        }
                        calculate()
                    }
                });

            })
        })
    </script>

    <script>
        // Automatically convert input to lowercase
        document.getElementById('coupons_id').addEventListener('input', function() {
            this.value = this.value.toLowerCase();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#package_id').on('change', function() {
                var package_id = $(this).val();
                $.ajax({
                    url: "{{ route('packages.check') }}",
                    type: "POST",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'package_id': package_id
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            $('#amount').val(response.data['pack_admission_fee']);
                            $('#expired_date').val(response.expire_date);
                        } else {
                            $('#amount').val(0);
                            $('#expired_date').val('');
                        }
                        calculate()
                    }
                });

            })
        })
    </script>
    <script>
        function calculate() {
            console.log('calculate');

            var amount = document.getElementById('amount').value;
            var coupon_amount = document.getElementById('coupon_amount').value;
            var admission_fee = document.getElementById('admission_fee').value;
            if (coupon_amount == '') {
                coupon_amount = 0;
            }
            var tax = document.getElementById('tax').value;
            if (tax == '') {
                tax = 0;
            }
            var total = parseFloat(amount) + ((parseFloat(amount) * parseFloat(tax)) / 100) - parseFloat(coupon_amount)+parseFloat(admission_fee);

            document.getElementById('gross_amount').value = total;
            var pay_amount = document.getElementById('pay_amount').value;
            if (pay_amount == '') {
                pay_amount = 0;
            }
            var due_amount = total - parseFloat(pay_amount);
            document.getElementById('due_amount').value = due_amount;
            if (pay_amount == 0) {
                document.getElementById('status').value = 1;
            }
            if (pay_amount > 0 && due_amount > 0) {
                document.getElementById('status').value = 2;
            }
            if (pay_amount > 0 && due_amount == 0) {
                document.getElementById('status').value = 3;
            }

            $('#payment_amount').val(pay_amount);



        }
    </script>
    <script>
        $(document).ready(function() {
            $('#tax').on('input', function() {
                calculate()
            })
            $('#pay_amount').on('input', function() {
                calculate()
            })
            $('#pay_amount').on('input', function() {
                calculate()
            })

            // setInterval(() => {
            //     $('#package_id').trigger('change');
            //     $('#coupons_id').trigger('input');
            // }, 1000);
            calculate()
        })
    </script>
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
@stop
