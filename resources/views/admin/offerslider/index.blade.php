@extends('extra.master')
@section('title', 'Brand beans | Offer Slider')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Offer Slider</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('offerSlider.create') }}" class="btn btn-primary btn-sm">Add Offer</a>
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
                                    <th> Image</th>
                                    <th> Status</th>

                                    <th width="280px"> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offerslider as $slider)
                                    <tr>

                                        <td><img src="{{ url('offerSlider') }}/{{ $slider->image }}" class="img-thumbnail" style="width:300px;height:250px"></td>
                                        <td>{{ $slider->status }}</td>
                                        <td>
                                            {{-- <a class="btn btn-info btn-sm" href="{{ route('offerSlider.edit', $slider->id) }}">Edit</a> --}}
                                            <a class="btn btn-danger btn-sm" href="{{ route('offerSlider.delete', $slider->id) }}">Delete</a>
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
