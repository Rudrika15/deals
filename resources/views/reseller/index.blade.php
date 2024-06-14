@extends('extra.master')
@section('title', 'Brand beans | Reseller')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Reseller</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('reseller.create') }}" class="btn btn-primary btn-sm">Back</a>
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
                                    <th> Mobile No</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reseller as $reseller)
                                    <tr>
                                        <td>{{ $reseller->name }}</td>
                                        <td>{{ $reseller->mobileno }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ route('reseller.edit', $reseller->id) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('reseller.delete', $reseller->id) }}">Delete</a>
                                            <a class="btn btn-info btn-sm" href="{{ route('reseller.addAmount', $reseller->id) }}">Add Amount</a>
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
