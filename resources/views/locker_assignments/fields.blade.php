<div class="row">
    <!-- Member Id Field -->
    @include('componant.member_select')
    @php
        $lockers = DB::table('lockers')
            ->whereIn('status', ['available', 'occupied'])
            ->get();
    @endphp
    <!-- Locker Id Field -->
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('locker_id', 'Locker Id:', ['class' => 'control-label']) !!}
            {!! Form::select('locker_id', $lockers->pluck('locker_number', 'id')->prepend('Select Locker', ''), null, [
                'class' => 'form-control',
            ]) !!}
        </div>
    </div>
    <!-- Start Date Field -->
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('start_date', 'Start Date:', ['class' => 'control-label']) !!}
            {!! Form::date('start_date', null, ['class' => 'form-control', 'id' => 'start_date']) !!}
        </div>
    </div>
{{-- </div>
<div class="row"> --}}
    <!-- End Date Field -->
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('end_date', 'End Date:', ['class' => 'control-label']) !!}
            {!! Form::date('end_date', null, ['class' => 'form-control', 'id' => 'end_date']) !!}
        </div>
    </div>
    <!-- Status Field -->
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
            {!! Form::select('status', ['active' => 'Active', ' expired' => ' Expired'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lockerAssignments.index') }}" class="btn btn-danger">Cancel</a>
</div>
