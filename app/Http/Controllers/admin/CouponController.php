<?php

namespace App\Http\Controllers\admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use App\Models\Subscriptionpackage;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        try {
            $coupons = Coupon::with('package')->orderBy('id', 'DESC')->get();
            return view('admin.coupon.index', \compact('coupons'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $package = Subscriptionpackage::where('title', '!=', 'FREE')->get();
            return view('admin.coupon.create', \compact('package'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'couponCode' => 'required',
            'discount' => 'required',
            'validUpto' => 'required',
            'couponFor' => 'required',
        ]);

        try {
            $coupon = new Coupon();
            $coupon->title = $request->title;
            $coupon->couponCode = $request->couponCode;
            $coupon->discount = $request->discount;
            $coupon->validUpto = $request->validUpto;
            $coupon->couponFor = $request->couponFor;
            $coupon->save();

            return redirect('coupon/index')->with('success', 'Coupon Added Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function delete($id)
    {
        try {
            $coupon = Coupon::find($id)->delete();
            return redirect('coupon/index')->with('success', 'Coupon Delete Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
