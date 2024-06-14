@extends('extra.master')
@section('title', 'Brand beans | Create Campaign Step')
@section('content')
    <div class='container'>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class=" row ">
                                <div class="pricing-table">
                                    @foreach ($pricing as $pricings)
                                        <div class="col col-first">
                                            <div class="thead">
                                                <div class="center-v">Points for</div>
                                            </div>
                                            @foreach ($pricings->brandPackageDetails as $foractivity)
                                                @foreach ($foractivity->activity as $activity)
                                                    <div class="td">{{ $activity->title }}</div>
                                                @endforeach
                                            @endforeach
                                            <div class="td"></div>

                                        </div>
                                        <div class="col">
                                            {{-- bg-blue-2 --}}
                                            <div class="thead bg-blue-1">
                                                <h4>{{ $pricings->title }}</h4>


                                                <span style="font-size: 20px; font-weight: 500"><span class="currency">₹</span>{{ $pricings->price }}</span><br>
                                                <span style="font-size: 15px">{{ $pricings->points }} <small>Points</small></span>

                                                {{-- <span style=" position: relative;width: 20px;text-align: left; font-size: 30px;">
                                                </span> --}}

                                            </div>
                                            @foreach ($pricings->brandPackageDetails as $detail)
                                                <div class="td">
                                                    {{-- {{ $detail->details }}- --}}
                                                    {{ $detail->points }}</div>
                                            @endforeach
                                            <form action="{{ route('pay') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="amount" value="{{ $pricings->price }}">
                                                <div class="td"><button class="btn-order js__popup_open" data-target="#register-form-popup-2">ORDER NOW</button></div>
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>



@endsection
