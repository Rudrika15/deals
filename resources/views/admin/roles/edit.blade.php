@extends('extra.master')
@section('title', 'Brand beans | Roles Edit')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Roles Edit</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>

                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    <div class="row">
                                        @foreach ($permission as $value)
                                            <div class="col-md-3">
                                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                                    {{ $value->name }}</label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <br>
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
