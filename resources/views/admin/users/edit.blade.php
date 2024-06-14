@extends('extra.master')
@section('title', 'Brand beans | User Edit')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User Edit</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Password:</strong>
                                                    {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Confirm Password:</strong>
                                                    {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                                                </div>
                                            </div> -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Role:</strong>
                                    {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                                </div>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mobile Number:</strong>
                                    {!! Form::text('mobileno', null, ['placeholder' => 'Enter Mobile Number', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center py-2">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
