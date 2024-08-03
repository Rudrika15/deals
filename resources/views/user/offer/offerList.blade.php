@extends('extra.master')
@section('title', 'Brand Beans | My Purchase Offer List')
@section('content')
<div class='container mt-4'>
    <div class='row mb-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between">
                <h3>My Purchase Offers</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th> <!-- Index column -->
                                    <th class="text-center">Offer Name</th>
                                    <th class="text-center">Validity</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offers as $index => $offer)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td> <!-- Display index starting from 1 -->
                                    <td class="text-center">
                                        @foreach ($offer->offer as $offerName)
                                        {{ $offerName->title }}
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{ $offer->validity }}</td>
                                    <td class="text-center">{{ $offer->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-3">
                            {{ $offers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection