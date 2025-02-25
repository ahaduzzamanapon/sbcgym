<div class="table-responsive">
    <table class="table " id="dietChartRequests-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Member</th>
        <th>Note</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dietChartRequests as $key => $dietChartRequest)
            <tr>
                <td>{{ $dietChartRequest->id }}</td>
            <td>{{ $dietChartRequest->member_name }}</td>
            <td>{{ $dietChartRequest->note }}</td>
            <td>{{ $dietChartRequest->created_at }}</td>
            <td>{{ $dietChartRequest->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['dietChartRequests.destroy', $dietChartRequest->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dietChartRequests.show', [$dietChartRequest->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        <a href="{{ route('dietChartRequests.edit', [$dietChartRequest->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
