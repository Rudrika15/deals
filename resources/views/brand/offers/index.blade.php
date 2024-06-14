@extends('extra.master')
@section('title', 'Brand beans | Brand Offers')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="">
                        <h4 class="">Brand Offers</h4>
                    </div>
                    <div class="">
                        <a href="{{ route('brand.offers.create') }}" class="btn btn-primary btn-sm">Add Offers</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> Title</th>
                                    <th> Photo</th>
                                    <th> Description</th>
                                    <th> Price</th>
                                    <th> Location</th>
                                    <th> Validity</th>
                                    <th> Terms & Conditions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offers as $offer)
                                    <tr>
                                        <td>{{ $offer->title }} </td>
                                        <td><img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" class="img-thumbnail w-50"> </td>
                                        <td>{{ $offer->description }} </td>
                                        <td>{{ $offer->offerPrice }} </td>
                                        <td>{{ $offer->location }} </td>
                                        <td>{{ $offer->validity }} </td>
                                        <td>{{ $offer->termsAndConditions }} </td>
                                        <td>
                                            <a href="{{ route('brand.offers.edit', $offer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('brand.offers.delete', $offer->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @if (!empty($brandPoints))
                            {{ $brandPoints->links() }}
                        @endif
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
