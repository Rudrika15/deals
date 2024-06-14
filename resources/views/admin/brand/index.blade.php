@extends('extra.master')
@section('title', 'Brand beans | Brand ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3> Brand List </h3>
                    </div>

                    <div>
                        <a href="{{ route('admin.brand.create') }}" class="btn btn-primary btn-sm">Add Brand</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> Mobile Number</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->mobileno }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.brand.offer.create') }}/{{ $data->id }}">Add Offers</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    @endsection
