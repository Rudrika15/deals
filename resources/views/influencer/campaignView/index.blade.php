@extends('extra.master')
@section('title', 'Brand beans | Brand Campaign')
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
                        <h3>Brand Campaigns</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($campaign as $data)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 border-end">
                                                    <h4 class="card-title"> {{ $data->title }}</h4>
                                                    <img src="{{ asset('campaignPhoto') }}/{{ $data->photo }}" alt="image" class="img-thumbnail w-100">

                                                    <h4 class="card-subtitle mb-2 text-success">
                                                        &#8377; {{ $data->price }}
                                                    </h4>
                                                </div>
                                                <div class="col-md-4" style="padding-top:35px;">

                                                    <p class="card-text"><b>Description</b>: {{ $data->detail }}.</p>

                                                    <p class="card-text"><b>Rules</b>: {{ $data->rule }}</p>
                                                    <p class="card-text"><b>Eligible Criteria</b>: {{ $data->eligibleCriteria }}
                                                    </p>
                                                    <p class="card-text"><b>Target Gender</b>: {{ $data->targetGender }}</p>
                                                    <p class="card-text"><b>Target Age Group</b>: {{ $data->targetAgeGroup }}</p>
                                                    <p class="card-text"><b>Start Date</b>: {{ $data->startDate }}</p>
                                                    <p class="card-text"><b>End Date</b>: {{ $data->endDate }}</p>

                                                </div>
                                                <div class="col-md-4" style="padding-top:35px;">
                                                    <p class="card-text"><b>Apply For Last Date</b>: {{ $data->applyForLastDate }}.
                                                    </p>
                                                    <p class="card-text"><b>Task</b>: {{ $data->task }}</p>
                                                    <p class="card-text"><b>Max Application</b>: {{ $data->maxApplication }}</p>
                                                    <p class="card-text"><b>Status</b>:
                                                        <span class="text-success">{{ $data->status }}</span>
                                                    </p>
                                                    @if ($campaignCount == 1)
                                                        <a class="btn btn-success btn-sm" href="{{ route('brand.campaign.campaign.step') }}/{{ $data->id }}">Campaign Steps</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div style="display: flex; justify-content: end">
                                                @if ($campaignCount == 0)
                                                    <form action="{{ route('influencer.campaignApply') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="campaignId" value="{{ $data->id }}">
                                                        <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                    </form>
                                                @else
                                                    Already applied
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
