@extends('extra.master')
@section('title', 'Brand beans | City')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3> City</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('city.create') }}" class="btn btn-primary btn-sm">Add City</a>
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
                                    <th> City Name</th>
                                    <th> State Name</th>
                                    <th> Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($city as $city)
                                    <tr>
                                        <td>{{ $city->city }}</td>
                                        <td>{{ $city->sname }}</td>


                                        <td><a href="{{ route('city.edit') }}/{{ $city->id }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('city.delete') }}/{{ $city->id }}" class="btn btn-danger btn-sm">Delete</a>
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
