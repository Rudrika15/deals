@extends('extra.master')
@section('title', 'Brand beans | Refferd Users')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Refferd Users</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('refer.index') }}?type=free" class="btn btn-sm btn-danger me-2">FREE</a>
                            <a href="{{ route('refer.index') }}?type=paid" class="btn btn-sm btn-primary me-2">PAID</a>
                        </div>

                        <div class=" row">
                            <?php
                        if (isset($_GET['type'])) {
                            $type = $_GET['type'];
                        } else {
                            $type = 'free';
                        }
                        if ($type === 'paid') {
                        ?>
                            <h3>Paid User List</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <?php
                        } else {
                        ?>
                            <h3>Free User List</h3>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
