@extends('extra.master')
@section('title', 'Brand Beans | Referred Users')
@section('content')
<div class='container mt-4'>
    <div class='row mb-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between align-items-center">
                <h3>Referred Users</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('refer.index') }}?type=free"
                            class="btn btn-sm btn-outline-danger me-2">Free</a>
                        <a href="{{ route('refer.index') }}?type=paid" class="btn btn-sm btn-outline-primary">Paid</a>
                    </div>

                    <?php
                        $type = isset($_GET['type']) ? $_GET['type'] : 'free';
                    ?>

                    <h4 class="mb-3">
                        {{ $type === 'paid' ? 'Paid User List' : 'Free User List' }}
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center" style="width: 70px;">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; ?>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="text-center">{{ $index++ }}</td>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if($type === 'free')
                    <div class="d-flex justify-content-end mt-3">
                        {{ $users->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection