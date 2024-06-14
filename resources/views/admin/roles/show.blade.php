@extends('extra.master')
@section('title', 'Brand beans | Role Show')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Role Show</h3>
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

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $role->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permissions:</strong>
                                    <br>
                                    @if (!empty($rolePermissions))
                                        @foreach ($rolePermissions as $v)
                                            <label class="label label-success">{{ $v->name }},</label>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
