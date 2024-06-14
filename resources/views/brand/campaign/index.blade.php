@extends('extra.master')
@section('title', 'Brand beans | Slogans List')
@section('content')
    <div class='container'>
        <!-- Add this to your Blade template -->
        @if ($message = Session::get('warnings'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="alert alert-warning" role="alert">
                    <span style="font-weight: 600">Note:</span> {{ $message }}<span> Please update your balance clicking on
                        <a href="{{ route('pricing.index') }}"> to upgrade your plan</a> </span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class='row pt-5'>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Campaigns</h3>
                    </div>
                    <div class=" p-2">
                        <a class="btn btn-primary" href="{{ route('brand.campaign.create') }}">
                            Add Campaign
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @include('brand.campaign.table')
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
