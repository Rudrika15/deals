<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-sm btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                @can('role-edit')
                @endcan
                @if ($role->name != 'Admin')
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endcan
                @endif
            </td>
        </tr>
    @endforeach

</table>
