@extends('extra.master')
@section('title', 'Brand beans | Product')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3> Product</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Points</th>
                                <th>photo</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($product as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->points }}</td>
                                    <td><img src="{{ url('product') }}/{{ $product->photo }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                    <td>

                                        <a class="btn btn-primary" href="{{ route('product.edit') }}/{{ $product->id }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ route('product.delete') }}/{{ $product->id }}">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>

            </div>
            <!-- /.card-content -->
        </div>

    @endsection
