@extends('extra.master')
@section('title', 'Brand beans | Banner ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Banner </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm">Add Banner</a>
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
                                    <th> Photo</th>
                                    <th> Sequence</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banner as $banner)
                                    <tr>
                                        <td><img src="{{ url('bannerphoto') }}/{{ $banner->photo }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                        <td>{{ $banner->sequence }}</td>
                                        <td><a class="btn btn-danger btn-sm" href="{{ route('banner.delete', $banner->id) }}">Delete</a>
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
