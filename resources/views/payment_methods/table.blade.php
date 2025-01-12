<div class="table-responsive">
    <table class="table" id="paymentMethods-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Branch Id</th>
        <th>Payment Number</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($paymentMethods as $key => $paymentMethod)
            <tr>
                <td>{{ $paymentMethod->id }}</td>
            <td>{{ $paymentMethod->name }}</td>
            <td>{{ $paymentMethod->multi_branch_name }}</td>
            <td>{{ $paymentMethod->payment_number }}</td>
            <td>{{ $paymentMethod->created_at }}</td>
            <td>{{ $paymentMethod->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['paymentMethods.destroy', $paymentMethod->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('paymentMethods.show', [$paymentMethod->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        <a href="{{ route('paymentMethods.edit', [$paymentMethod->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
