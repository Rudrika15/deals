@extends('extra.master')
@section('title', 'Brand beans | Packages ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Packages </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin.brand.package.create') }}" class="btn btn-primary btn-sm">Add Packages</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> Title</th>
                                    <th> Price</th>
                                    <th> Points</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brandPackage as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->points }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.brand.package.edit') }}/{{ $data->id }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('admin.brand.package.delete') }}/{{ $data->id }}">Delete</a>
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.brand.package.detail.index') }}/{{ $data->id }}">Package Details</a>
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
