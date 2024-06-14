@extends('extra.master')
@section('title', 'Brand beans | Influencer Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Influencer Category</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('influencer.create') }}" class="btn btn-primary btn-sm">Add Influencer Category</a>
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
                                    <th> Category Icon</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($influencerCategory as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td><img src="{{ asset('influencerCategory') }}/{{ $data->categoryIcon }}" alt="image" style="height: 50px; width: 50px;"></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('influencer.edit') }}/{{ $data->id }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('influencer.delete') }}/{{ $data->id }}">Delete</a>
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
