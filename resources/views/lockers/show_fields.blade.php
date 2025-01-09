<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $locker->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('locker_number', 'Locker Number:') !!}</th>
    <td>{{ $locker->locker_number }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('location', 'Location:') !!}</th>
    <td>{{ $locker->location }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ $locker->status }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $locker->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $locker->updated_at }}</td>
</tr>


