@extends('extra.master')
@section('title', 'Brand beans | Coupon ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3> Coupon</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('coupon.create') }}" class="btn btn-primary btn-sm">Add Coupon</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Title</th>
                                    <th> Coupon Code</th>
                                    <th> Discount</th>
                                    <th> Valid Upto</th>
                                    <th> Coupon For</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->title }}</td>
                                        <td>{{ $coupon->couponCode }}</td>
                                        <td>{{ $coupon->discount }}</td>
                                        <td>{{ $coupon->validUpto }}</td>
                                        @if (isset($coupon->package))
                                            <td>{{ $coupon->package->title }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>
                                            <!-- <a class="btn btn-primary btn-sm" href="{{ route('coupon.edit', $coupon->id) }}">Edit</a> -->
                                            <a class="btn btn-danger btn-sm" href="{{ route('coupon.delete', $coupon->id) }}">Delete</a>
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
