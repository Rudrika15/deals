@extends('extra.master')
@section('title', 'Brand beans | User List')
@section('content')
    <div class='container'>
        <!-- Add this to your Blade template -->

        <div class='row pt-5'>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User List</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-3">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <select name="roleSearch" class="form-control" id="">
                                <option disabled selected>--Search Role wise--</option>

                                @foreach ($userRoles as $item)
                                    <option>{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Reset</a>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @include('admin.users.table')
                        {{ $data->links() }}
                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
