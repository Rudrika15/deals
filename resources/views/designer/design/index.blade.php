@extends('extra.master')
@section('title', 'Brand beans | Slogans List')
@section('content')
    <div class='container'>
        <!-- Add this to your Blade template -->

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
                        <h3>Slogans List</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('designer.design.table')
                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
