@extends('extra.master')
@section('title', 'Brand beans | Brand Campaign')
@section('content')

    <div class='container'>
        <div class='row'>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Influencer Package</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('influencer.package.create') }}" class="btn btn-primary">Add</a>
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
                                    <th> Description</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{!! $data->description !!}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('influencer.package.edit') }}/{{ $data->id }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('influencer.package.delete') }}/{{ $data->id }}">Delete</a>
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
