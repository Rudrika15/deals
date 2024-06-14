@extends('extra.master')
@section('title', 'Brand beans | Brand Activity')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Brand Activity</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin.brand.activity.create') }}" class="btn btn-primary btn-sm">Add Activity</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> title</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities as $data)
                                    <tr>
                                        <td>
                                            {{ $data->title }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.brand.activity.edit') }}/{{ $data->id }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('admin.brand.activity.delete') }}/{{ $data->id }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
