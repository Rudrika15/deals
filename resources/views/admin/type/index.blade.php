@extends('extra.master')
@section('title', 'Brand beans | Notification ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Notification</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('type.create') }}" class="btn btn-primary btn-sm">Add Notification</a>
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
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($type as $type)
                                    <tr>
                                        <td>{{ $type->title }}</td>
                                        <td><a class="btn btn-info btn-sm" href="{{ route('type.edit', $type->id) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('type.delete', $type->id) }}">Delete</a>
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
