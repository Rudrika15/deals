@extends('extra.master')
@section('title', 'Brand beans | State')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>State</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('state.create') }}" class="btn btn-primary btn-sm">Add State</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> State Name</th>
                                    <th> Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($state as $state)
                                    <tr>
                                        <td>{{ $state->sname }}</td>
                                        <td><a href="{{ route('state.edit') }}/{{ $state->id }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('state.delete') }}/{{ $state->id }}" class="btn btn-danger btn-sm">Delete</a>
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
