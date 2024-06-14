@extends('extra.master')
@section('title', 'Brand beans | Set Package Amount')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Set Package Amount</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('reseller.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('resellerPackage.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="userId" value="{{ $userId }}">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row newDiv">
                                        <div class="col-md-6 ">
                                            <select name="packageId[]" id="package" class="form-control package">
                                                <option selected disabled>--select option--</option>
                                                @foreach ($package as $packageData)
                                                    <option value="{{ $packageData->id }}">{{ $packageData->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('packageId')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input name="amount[]" placeholder="Enter Amount" id="amount" class="form-control amount">
                                            @error('amount')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info sign-bttn">+</button>
                                    <button type="button" class="btn btn-danger remove">-</button>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>

                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script>
        var i = 0;
        $('.sign-bttn').click(function(e) {
            ++i;
            $('.newDiv').append(`<div class="col-md-12"><div class="row" id ="newDiv2"><div class="col-md-6 ">
              <br>
            <select name="packageId[]" id="package" class="form-control packageId">
                                                            <option selected disabled>--select option--</option>
                                                            @foreach ($package as $packageData)
                                                                <option value="{{ $packageData->id }}">{{ $packageData->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-6">
                                                        <input name="amount[]" id="amount" placeholder="Enter Amount" class="form-control amount">
                                                    </div></div></div>`);
        });
    </script>

    <script>
        $('.remove').click(function(e) {
            // if ($('.newDiv').find("div:last"))
            //     alert('here');

            $('.newDiv').find(".row:last").remove();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.package').change(function() {
                var selectedOptionName = $(this).find(':selected').text();
                console.log(selectedOptionName);
                if (selectedOptionName == "FREE") {
                    $('.amount').val(0);
                } else
                    $('.amount').val("");


            });
        });
    </script>
@endsection
