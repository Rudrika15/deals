@extends('extra.master')
@section('title', 'Brand beans | Feedbacks')
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
                    <div class="">
                        <h4 class=""> Portfolio</h4>
                    </div>
                    <div class="">
                        <a href="{{ route('influencer.portfolio.create') }}" class="btn btn-primary btn-sm">Add Portfolio</a>
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
                                    <th> Photo</th>
                                    {{-- <th> Type</th> --}}
                                    {{-- <th> Details</th> --}}
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $portfolio)
                                    <tr>
                                        <td>
                                            @if ($portfolio->type == 'Photo')
                                                <img src="{{ asset('cardimage') }}/{{ $portfolio->image }}" title="{{ $portfolio->title }}" alt="image" style="height: 300px; width: 300px;">
                                            @endif
                                            @if ($portfolio->type == 'Video')
                                                <iframe width="300" height="300" src="https://www.youtube.com/embed/{{ $portfolio->image }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            @endif
                                        </td>
                                        {{-- <td>{{ $portfolio->type }}</td>
                                        <td>{{ $portfolio->details }}</td> --}}
                                        <td>
                                            {{-- <a class="btn btn-primary btn-sm"
                                                href="{{ route('influencer.portfolio.edit') }}/{{ $portfolio->id }}">Edit</a> --}}
                                            <a class="btn btn-danger btn-sm" href="{{ route('influencer.portfolio.delete') }}/{{ $portfolio->id }}">Delete</a>
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
