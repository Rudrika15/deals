<?php

namespace App\Http\Controllers\influencer;


use App\Models\InfluencerPackages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfluencerPackagesController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $packages = InfluencerPackages::orderBy('id', 'DESC')->where('userId', '=', $id)->get();
        return view('influencer.packages.index', \compact('packages'));
    }

    public function create()
    {
        return view('influencer.packages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $influencerPackage = new InfluencerPackages();
        $influencerPackage->userId = Auth::user()->id;
        $influencerPackage->title = $request->title;
        $influencerPackage->price = $request->price;
        $influencerPackage->description = $request->description;
        $influencerPackage->save();
        return \redirect()->back()->with('success', 'Package Added Successfully');
    }

    public function show(InfluencerPackages $influencerPackages)
    {
        //
    }

    public function edit($id)
    {
        $packages = InfluencerPackages::find($id);
        return view('influencer.packages.edit', \compact('packages'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        $id = $request->influencerPackageId;
        $influencerPackage = InfluencerPackages::find($id);
        $influencerPackage->title = $request->title;
        $influencerPackage->price = $request->price;
        $influencerPackage->description = $request->description;
        $influencerPackage->save();
        return \redirect()->back()->with('success', 'Package Update Successfully');
    }

    public function destroy($id)
    {
        $packages = InfluencerPackages::find($id)->delete();
        return \redirect()->back()->with('success', 'Package Deleted Successfully');
    }

    public function packageView()
    {
        $influencerPackages = InfluencerPackages::with('user')->get();
        return view('influencer.packages.packageView', \compact('influencerPackages'));
    }
}
