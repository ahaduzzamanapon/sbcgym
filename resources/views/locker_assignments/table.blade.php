<div class="table-responsive">
    <table class="table" id="lockerAssignments-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Locker Id</th>
                <th>Member Id</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lockerAssignments as $key => $lockerAssignment)
            <tr>
                <td>{{ $lockerAssignment->assignment_id }}</td>
            <td>{{ $lockerAssignment->locker_number }}</td>
            <td>{{ $lockerAssignment->member_name }}</td>
            <td>{{ $lockerAssignment->start_date }}</td>
            <td>{{ $lockerAssignment->end_date }}</td>
            <td>{{ $lockerAssignment->status }}</td>
            <td>{{ $lockerAssignment->created_at }}</td>
            <td>{{ $lockerAssignment->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['lockerAssignments.destroy', $lockerAssignment->assignment_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lockerAssignments.edit', [$lockerAssignment->assignment_id]) }}" class='btn btn-outline-primary btn-xs'><i
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
