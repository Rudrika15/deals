@extends('extra.master')
@section('title', 'Brand beans | Slogan Create')
@section('content')
    <div class='container'>
        <div class='row pt-2'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Change Email</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form" action="{{ route('change.email') }}" method="post">
                            @csrf
                            <div class="mb-3">

                                <label for="formFile" class="form-label">Enter email</label>
                                <input class="form-control" value="{{ $user->email }}" type="text" id="email" name="email"><br>

                                <button type="submit" class="btn btn-sm btn-success my-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='row pt-2'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Change Password</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form" action="{{ route('change.password') }}" method="post">
                            @csrf
                            <div class="mb-3">

                                <label for="formFile" class="form-label">Enter Current Password</label>
                                <input class="form-control" type="text" id="oldpassword" name="oldpassword">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Enter New Password</label>
                                <input class="form-control" type="text" id="newpassword" name="newpassword">
                            </div>
                            <div class="mb-3">

                                <label for="formFile" class="form-label">Enter Confirm Password</label>
                                <input class="form-control" type="text" id="confirmpassword" name="confirmpassword">

                            </div>
                            <button type="submit" class="btn btn-sm btn-success my-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
