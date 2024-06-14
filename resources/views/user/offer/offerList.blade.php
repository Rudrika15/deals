@extends('extra.master')
@section('title', 'Brand beans | My Purchase Offer list')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>My Purchase Offers</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Validity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offers as $offer)
                                        <tr>
                                            <td>
                                                @foreach ($offer->offer as $offerName)
                                                    {{ $offerName->title }}
                                                @endforeach
                                            </td>
                                            <td>{{ $offer->validity }}</td>
                                            <td>{{ $offer->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
