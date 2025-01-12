<tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $paymentMethod->id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('name', 'Name:') !!}</th>
    <td>{{ $paymentMethod->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('branch_id', 'Branch Id:') !!}</th>
    <td>{{ $paymentMethod->branch_id }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('payment_number', 'Payment Number:') !!}</th>
    <td>{{ $paymentMethod->payment_number }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $paymentMethod->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $paymentMethod->updated_at }}</td>
</tr>


