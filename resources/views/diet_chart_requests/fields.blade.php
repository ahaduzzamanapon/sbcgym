<!-- Member Field -->

@php
if ( if_can( 'show_all_data' ) ){
    $members = \App\Models\Member::all()->pluck('mem_name', 'id');
}else{
    $members = \App\Models\Member::where('id', auth()->user()->member_id)->pluck('mem_name', 'id');
}
@endphp
<div class="form-group">
    <div class="row">
        {!! Form::label('member', 'Member:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('member', $members, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Note Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('note', 'Note:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('member', ['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>





<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dietChartRequests.index') }}" class="btn btn-danger">Cancel</a>
</div>
