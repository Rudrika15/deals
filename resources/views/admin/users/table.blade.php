<table id="" class="table table-bordered">
    <thead>
        <tr>
            <?php
            $i = 1;
            ?>
            <th> Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Roles</th>
            <th width="30%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->mobileno }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge bg-secondary text-dark">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    {{-- <a class="btn btn-info btn-sm" href="{{ route('accountpost.show', $user->id) }}">Details</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
