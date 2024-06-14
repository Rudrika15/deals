@extends('extra.master')
@section('title', 'Brand beans | Influencer Packages')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Influencer Packages</h3>
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
                                    <th> Influencer</th>
                                    <th> Title</th>
                                    <th> Price</th>
                                    <th> Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($influencerPackages as $data)
                                    <tr>

                                        <td>
                                            @foreach ($data->user as $user)
                                                {{ $user->name }}
                                            @endforeach
                                        </td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{!! $data->description !!}</td>
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
