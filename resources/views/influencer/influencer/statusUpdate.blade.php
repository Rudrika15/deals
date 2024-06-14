@extends('extra.master')
@section('title', 'Brand beans | Influencer Status Update')
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
                    <div class="p-2">
                        <h3>Influencer Status Update</h3>
                    </div>
                    <div>
                        <a href="{{ route('influencer.list') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">


                <div class="card-content">
                    <div class="container-fluid">
                        <div class="card" style="width: 30%;">

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <form action="{{ route('influencer.statusEditCode') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $profile->userId }}" name="influencerId" id="" placeholder="">

                                            <h2>{{ $profile->profile->username }}</h2>
                                            <div class="form-check">
                                                <label>
                                                    Is Featured
                                                    @if ($profile->is_featured == 'on')
                                                        <input class="form-check-input" type="checkbox" name="is_featured" value="{{ $profile->is_featured }}" id="" checked>
                                                    @else
                                                        <input class="form-check-input" type="checkbox" name="is_featured" value="on" id="">
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label>
                                                    Is Trending
                                                    @if ($profile->is_trending == 'on')
                                                        <input class="form-check-input" type="checkbox" name="is_trending" value="{{ $profile->is_trending }}" id="" checked>
                                                    @else
                                                        <input class="form-check-input" type="checkbox" name="is_trending" value="on" id="">
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label>
                                                    Is BrandBeans Verified
                                                    @if ($profile->is_brandBeansVerified == 'on')
                                                        <input class="form-check-input" name="is_brandBeansVerified" type="checkbox" value="{{ $profile->is_brandBeansVerified }}" id="" checked>
                                                    @else
                                                        <input class="form-check-input" name="is_brandBeansVerified" type="checkbox" value="on" id="">
                                                    @endif
                                                </label>

                                            </div>
                                            <div class="text-center">

                                                <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
