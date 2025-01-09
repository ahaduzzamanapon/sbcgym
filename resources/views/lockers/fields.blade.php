<!-- Locker Number Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('locker_number', 'Locker Number:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('locker_number', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Location Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('location', 'Location:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', ['available' => 'available', ' occupied' => ' occupied', 'maintenance' => 'maintenance'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lockers.index') }}" class="btn btn-danger">Cancel</a>
</div>
