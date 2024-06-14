<?php

namespace App\Http\Controllers\brand;

use App\Models\BrandPackageDetail;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\BrandPackage;
use Illuminate\Http\Request;

class BrandPackageDetailController extends Controller
{
    public function index($id)
    {
        $activity = Activity::all();
        $packageDetail = BrandPackageDetail::where('brandPackageId', $id)->with('activity')->get();
        return view('admin.brandPackage.brandPackageDetail.index', \compact('packageDetail', 'activity'));
    }

    public function pricingView()
    {
        $pricing = BrandPackage::with('brandPackageDetails')->get();
        $pricingData = BrandPackage::get();
        return view('brand.pricing', \compact('pricing', 'pricingData'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'activityId' => 'required',
            'points' => 'required|numeric',
            'details' => 'required',
        ]);

        $package = new BrandPackageDetail();
        $package->activityId = $request->activityId;
        $package->brandPackageId = $request->brandPackageId;
        $package->points = $request->points;
        $package->details = $request->details;
        $package->save();
        return redirect()->back()->with('success', 'Package added successfully');
    }

    public function show(BrandPackageDetail $brandPackageDetail)
    {
        //
    }

    public function edit(BrandPackageDetail $brandPackageDetail)
    {
        //
    }

    public function update(Request $request, BrandPackageDetail $brandPackageDetail)
    {
        //
    }

    public function delete($id)
    {
        BrandPackageDetail::find($id)->delete();
        return redirect()->back()->with('success', 'Package Deleted Successfully');
    }
}
