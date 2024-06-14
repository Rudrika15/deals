@extends('extra.master')
@section('title', 'Brand beans | User List')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User List</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('reseller.user.create') }}" class="btn btn-primary btn-sm">Add User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th> Mobile No</th>
                                    <th> Package</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->mobileno }}</td>

                                        <td width="40%">{{ $user->title }}
                                            @if ($user->package != 'FREE')
                                                <br>
                                                <b>Price : </b>{{ $user->price }}
                                                <details>
                                                    {{ $user->details }}
                                                </details>
                                            @endif
                                        </td>

                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ route('reseller.user.edit', $user->id) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('reseller.user.delete', $user->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <!-- /.card-content -->
        </div>

    @endsection
