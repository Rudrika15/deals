@extends('extra.master')
@section('title', 'Brand beans | Offer ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Offer </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('offer.create') }}" class="btn btn-primary btn-sm">Add Offer</a>
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
                                    <th> Is Festival</th>
                                    <th> Title</th>
                                    <th> Poster</th>
                                    <th> Font Size</th>
                                    <th> Font Family</th>
                                    <th> Font Color</th>
                                    <th> Number of Product</th>
                                    <th> Poster Height</th>
                                    <th> Poster Width</th>
                                    <th> Title Position Top</th>
                                    <th> Title Position Left</th>
                                    <th width="280px"> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offer as $offer)
                                    <tr>
                                        <td>{{ $offer->is_festival }}</td>
                                        <td>{{ $offer->title }}</td>
                                        <td><img src="{{ url('poster') }}/{{ $offer->poster }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                        <td>{{ $offer->fontSize }}</td>
                                        <td>{{ $offer->fontFamily }}</td>
                                        <td>{{ $offer->fontColor }}</td>
                                        <td>{{ $offer->noOfProduct }}</td>
                                        <td>{{ $offer->posterHeight }}</td>
                                        <td>{{ $offer->posterWidth }}</td>
                                        <td>{{ $offer->titlePositionTop }}</td>
                                        <td>{{ $offer->titlePositionLeft }}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('offer.edit', $offer->id) }}">Edit</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('offer.offerdetail', $offer->id) }}">Detail</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('offer.delete', $offer->id) }}">Delete</a>
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
