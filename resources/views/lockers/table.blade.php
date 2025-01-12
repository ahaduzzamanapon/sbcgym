<div class="table-responsive">
    <table class="table" id="lockers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Locker Number</th>
        <th>Location</th>
        <th>Status</th>
        <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lockers as $key => $locker)
            <tr>
                <td>{{ $locker->id }}</td>
            <td>{{ $locker->locker_number }}</td>
            <td>{{ $locker->location }}</td>
            <td>{{ $locker->status }}</td>
            <td>{{ $locker->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['lockers.destroy', $locker->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lockers.show', [$locker->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        <a href="{{ route('lockers.edit', [$locker->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
