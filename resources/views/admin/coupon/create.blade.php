@extends('extra.master')
@section('title', 'Brand beans | Create Coupon ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Coupon</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('coupon.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('coupon.store') }}" method="post" style="margin-top:15px;">
                            @csrf

                            <div class="mb-3">
                                <label for="loginName" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="couponCode" class="form-label">Coupon Code</label>
                                <input type="text" name="couponCode" id="couponCode" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Discount</label>
                                <input type="number" name="discount" class="form-control" id="discount">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Valid Upto</label>
                                <input type="date" name="validUpto" class="form-control" id="validUpto">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Coupon For </label>
                                <select name="couponFor" id="couponFor" class="form-control">
                                    <option disabled selected>--select package--</option>
                                    @foreach ($package as $package)
                                        <option value="{{ $package->id }}">{{ $package->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
