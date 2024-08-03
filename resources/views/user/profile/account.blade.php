@extends('extra.master')
@section('title', 'Brand Beans | Account Settings')
@section('content')

<div class='container mt-4'>
    <!-- Change Email Section -->
    <div class='row mb-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between align-items-center">
                <h3>Change Email</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('change.email') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">New Email Address</label>
                            <input class="form-control" value="{{ $user->email }}" type="email" id="email" name="email"
                                placeholder="Enter your new email" required>
                            {{-- <small class="form-text text-muted">Your email will be updated to this address.</small> --}}
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-lg">Update Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Section -->
    <div class='row mt-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between align-items-center">
                <h3>Change Password</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('change.password') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="oldpassword" class="form-label">Current Password</label>
                            <input class="form-control" type="password" id="oldpassword" name="oldpassword"
                                placeholder="Enter your current password" required>
                        </div>
                        <div class="mb-4">
                            <label for="newpassword" class="form-label">New Password</label>
                            <input class="form-control" type="password" id="newpassword" name="newpassword"
                                placeholder="Enter your new password" required>
                        </div>
                        <div class="mb-4">
                            <label for="confirmpassword" class="form-label">Confirm New Password</label>
                            <input class="form-control" type="password" id="confirmpassword" name="confirmpassword"
                                placeholder="Re-enter your new password" required>
                            <small class="form-text text-danger">*<strong>Ensure that the new password and confirmation
                                match.</strong></small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-lg">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection