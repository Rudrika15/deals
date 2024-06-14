@extends('extra.master')
@section('title', 'Brand beans | Brands')
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
                        <h3>Brands</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            @foreach ($brand as $data)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"> {{ $data->name }}
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted"> {{ $data->email }}
                                            </h6>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                                {{ $data->mobileno }}
                                            </h6>
                                            <a href="{{ route('influencer.campaignView') }}/{{ $data->brand->userId }}" class="btn btn-sm btn-success">View Campaign</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
