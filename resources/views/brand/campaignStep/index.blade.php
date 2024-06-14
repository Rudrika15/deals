@extends('extra.master')
@section('title', 'Brand beans | Campaign Step')
@section('content')
    <div class='container'>
        <!-- Add this to your Blade template -->

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
                        <h3>Campaign Step</h3>
                    </div>
                    <div class=" p-2">
                        <a class="btn btn-primary" href="{{ route('brand.campaign.step.create') }}">
                            Add Campaign step
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('brand.campaignStep.table')
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
