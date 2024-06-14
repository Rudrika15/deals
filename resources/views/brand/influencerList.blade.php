@extends('extra.master')
@section('title', 'Brand beans | Create Campaign Step')
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
                <form action="{{ route('brand.influencerList') }}" method="get">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <select name="category" class="form-control">
                                <option selected disabled>Select Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->name }}" @if ($cat->name == request('category')) selected @endif>
                                        {{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <div class="my-3">

                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                <a href="{{ route('brand.influencerList') }}" class="btn btn-light btn-sm">Reset</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row ">
                            <style>
                                .infludiv:hover {
                                    box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
                                }
                            </style>
                            @foreach ($influencer as $influencers)
                                <div class="col-md-3 p-1">
                                    <a href="{{ route('brand.influencerProfile') }}/{{ $influencers->id }}/{{ Auth::user()->id }}" class="text-dark">
                                        <div class="card infludiv">
                                            @if (isset($influencers->profilePhoto))
                                                <img src="{{ asset('profile') }}/{{ $influencers->profilePhoto }}" class="img-thumbnail" height="300px"alt="...">
                                            @else
                                                <img src="{{ asset('images/defaultPerson.jpg') }}" class="img-thumbnail" height="300px" alt="...">
                                            @endif
                                            <div class="card-body">
                                                <h5 class="card-title"> {{ $influencers->name }}</h5>

                                                {{-- <h5 class="card-title"> <a href="https://instagram.com/{{ $influencers->influencer->instagramUrl }}"> {{ $influencers->influencer->instagramUrl }}</a></h5> --}}
                                                {{-- <h5 class="card-title"> <a href="https://instagram.com/{{ $influencers->influencer->instagramUrl }}" target="_blank"> {{ $influencers->username }}</a></h5> --}}

                                                {{-- <p class="card-text">{{ $influencers->card->about }}</p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>





@endsection
