@extends('extra.master')
@section('title', 'Brand beans | Role List')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Role List</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @include('admin.roles.table')
                        {{ $roles }}

                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
