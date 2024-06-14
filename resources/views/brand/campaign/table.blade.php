
@if (count($campaign) > 0)
    <div class="row">
        <div class="col-md-8">
            @foreach ($campaign as $data)
                <div class="card">

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="card-title text-center">{{ $data->title }}
                                <hr>
                            </h3>
                            @if (isset($data->photo))
                                <img class="img-fluid" src="{{ asset('campaignPhoto') }}/{{ $data->photo }}" alt="Card image cap" />
                            @else
                                <img class="img-fluid" src="{{ asset('asset/img/defaultCover.jpg') }}" alt="Card image cap" />
                            @endif
                        </div>
                        <div class="col-md-12 ">
                            <div class="card-body">


                                <div class="text-center">
                                    <strong>Details</strong>
                                    <p class="card-text">{{ $data->detail }}</p>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <strong>price</strong>
                                        <p class="card-text">{{ $data->price }}</p>
                                        <strong>Rules</strong>
                                        <p class="card-text" style="word-wrap: break-word;">{{ $data->rule }}</p>
                                        <strong>Eligible Criteria</strong>
                                        <p class="card-text">{{ $data->eligibleCriteria }}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <strong>Start Date</strong>
                                        <p class="card-text">{{ $data->startDate }}</p>
                                        <strong>End Date</strong>
                                        <p class="card-text">{{ $data->endDate }}</p>
                                        <strong>Apply For Last Date</strong>
                                        <p class="card-text">{{ $data->applyForLastDate }}</p>

                                    </div>
                                    <div class="col-md-4">
                                        <strong>Target Gender</strong>
                                        <p class="card-text">{{ $data->targetGender }}</p>
                                        <strong>Target Age Group</strong>
                                        <p class="card-text">{{ $data->targetAgeGroup }}</p>
                                        <strong>Max Application</strong>
                                        <p class="card-text">{{ $data->maxApplication }}</p>
                                    </div>
                                </div>

                                <div class="" style="display: flex; justify-content: end; margin: 10px">
                                    <a style="margin-right: 10px;" class="btn btn-success btn-info btn-sm" href="{{ route('brand.campaign.edit', $data->id) }}">Edit</a>
                                    <a class="btn btn-success btn-danger btn-sm" href="{{ route('brand.campaign.delete', $data->id) }}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>


        <div class="col-md-4">
            <h3 style="border-bottom: 1px solid gray; padding-bottom: 5px">
                Top Most related Influencer
            </h3>
            @if (isset($influencer))
                <div class="col-md-12">
                    @foreach ($influencer as $influencerData)
                        <a href="{{ route('brand.influencerProfile') }}/{{ $influencerData->id }}/{{ Auth::user()->id }}">

                            <div class="card">
                                <div class="text-center">
                                    @if (isset($influencerData->profilePhoto))
                                        <img src="{{ asset('profile') }}/{{ $influencerData->profilePhoto }}" style="border: 1px solid white; border-radius: 20%" width="200px" alt="image">
                                    @else
                                        <img src="{{ asset('images/defaultPerson.jpg') }}" class="img-thumbnail" style="border: 1px solid white; border-radius: 20%" width="200px" alt="image">
                                    @endif
                                </div>
                                <div class="card-body text-dark">
                                    {{-- <h3 class="card-title">{{ $influencerData->name }}</h3> --}}
                                    <p class="card-text fw-bold"><span>@</span>{{ $influencerData->username }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach


                </div>
            @else
                <div class="text-center">
                    <div style="margin-bottom: 50px;">
                        <p>[If you want find top most related influencer for your campaign please
                            update your profile and select your brand category]</p>
                    </div>

                    <span class="text-muted ">
                        No Influencer Found
                    </span>
                </div>
            @endif
        </div>


    </div>
@else
    <div class="text-center" style="margin-top: 200px;">
        <span class="text-muted " style="font-weight: 500; font-size: 20px;">No Campaign Found</span>
    </div>
@endif
