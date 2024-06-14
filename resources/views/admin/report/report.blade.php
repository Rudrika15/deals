@extends('extra.master')
@section('title', 'Brand beans | Notification ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User Details</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('adminsubscription.index') }}?type=free" id="sp1" class="btn btn-sm btn-danger margin-bottom-10">FREE</a>
                        <a href="{{ route('adminsubscription.index') }}?type=paid" id="sp2" class="btn btn-sm btn-success margin-bottom-10" style="margin-left: 5px; ">PAID</a>
                        <a href="{{ route('adminsubscription.index') }}" id="sp2" class="btn btn-sm btn-secondary margin-bottom-10" style="margin-left: 5px; ">Reset</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                        if (isset($_GET['type'])) {
                            $type = $_GET['type'];
                        } else {
                            $type = 'free';
                        }
                        if ($type === 'paid') {
                            ?>
                            <div class="d-flex justify-content-between m-2">
                                <div class="">
                                    <h3>Paid User List</h3>
                                </div>
                                <div class="">
                                    <a class="btn btn-info btn-sm" href="{{ route('export.users') }}?type=paid">Export</a>
                                </div>
                            </div>
                            <table class="table table-bordered t2">
                                <thead>
                                    <tr>
                                        <th> Name</th>
                                        <th> Email</th>
                                        <th> Mobile Number</th>
                                        <th> Package</th>
                                        <th> Validity</th>
                                        <th> Payment Id</th>
                                        <th> Profile Photo</th>
                                        <th> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paiduser as $paiduser)
                                        <tr>
                                            <td>{{ $paiduser->name }}</td>
                                            <td>{{ $paiduser->email }}</td>
                                            <td>{{ $paiduser->mobileno }}</td>
                                            <td>{{ $paiduser->package }}</td>
                                            <td>{{ $paiduser->validity }}</td>

                                            <td>
                                                @foreach ($paiduser->razor as $razor)
                                                    {{ $razor->payment_id }}
                                                @endforeach
                                            </td>

                                            <td><img src="{{ url('profile') }}/{{ $paiduser->profilePhoto }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                            <td>
                                                <form action="{{ route('users.updateStatus', ['id' => $paiduser->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    @if ($paiduser->status == 'Active')
                                                        <button class="update-status btn btn-xs btn-rounded btn-bordered btn-success" data-user-id="{{ $paiduser->id }}">Active</button>
                                                    @else
                                                        <button class="update-status btn btn-xs btn-rounded btn-bordered btn-danger" data-user-id="{{ $paiduser->id }}">Inactive</button>
                                                    @endif

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <?php
                        } else {
                        ?>
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <h3>Free User List</h3>
                                </div>
                                <div class="">
                                    <a class="btn btn-info btn-sm" href="{{ route('export.users') }}?type=free">Export</a>
                                </div>
                            </div>
                            <table class="table table-bordered t1">
                                <thead>
                                    <tr>
                                        <th> Name</th>
                                        <th> Email</th>
                                        <th> Mobile Number</th>
                                        <th> Profile Photo</th>
                                        <th> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->mobileno }}</td>
                                            <td><img src="{{ url('profile') }}/{{ $user->profilePhoto }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                            <td>
                                                <form action="{{ route('users.updateStatus', ['id' => $user->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    @if ($user->status == 'Active')
                                                        <button class="update-status  btn btn-xs btn-success" data-user-id="{{ $user->id }}">Active</button>
                                                    @else
                                                        <button class="update-status  btn btn-xs btn-danger" data-user-id="{{ $user->id }}">Inactive</button>
                                                    @endif

                                                </form>
                                            </td>
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

    <script>
        document.querySelectorAll('.update-status').forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-user-id');
                fetch(`/users/${userId}/update-status`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                }).then(response => {
                    if (response.ok) {
                        alert('User status updated successfully.');
                        // You can perform further actions or UI updates here if needed
                    } else {
                        alert('Error updating user status.');
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating user status.');
                });
            });
        });
    </script>

@endsection
