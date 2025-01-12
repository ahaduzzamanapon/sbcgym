<!-- Name Field -->
<div class="col-md-3">
    <div class="form-group">
            {!! Form::label('name', 'Name:',['class'=>'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    @php
    $multi_branchs = DB::table('multi_branchs')->get();
    @endphp
<!-- Branch Id Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('branch_id', 'Branch Id:',['class'=>'control-label']) !!}
        {!! Form::select('branch_id', $multi_branchs->pluck('branch_name', 'id')->prepend('Select Branch', ''), null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Payment Number Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('payment_number', 'Payment Number:',['class'=>'control-label']) !!}
        {!! Form::text('payment_number', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('paymentMethods.index') }}" class="btn btn-danger">Cancel</a>
</div>
