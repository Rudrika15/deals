<?php

namespace App\Http\Controllers\brand;

use App\Models\BrandPackage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandPackageController extends Controller
{
    public function index()
    {
        $brandPackage = BrandPackage::all();
        return view('admin.brandPackage.index', \compact('brandPackage'));
    }

    public function create()
    {
        return view('admin.brandPackage.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'points' => 'required|numeric',
        ]);

        $package = new BrandPackage();
        $package->title = $request->title;
        $package->price = $request->price;
        $package->points = $request->points;
        $package->save();
        return redirect('admin/brand/package/index')->with('success', 'Package added successfully');
    }

    public function show(BrandPackage $brandPackage)
    {
        //
    }

    public function edit($id)
    {
        $brandPackage = BrandPackage::find($id);
        return view('admin.brandPackage.edit', compact('brandPackage'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'points' => 'required|numeric',
        ]);

        $id = $request->brandPackageId;
        $package = BrandPackage::find($id);
        $package->title = $request->title;
        $package->price = $request->price;
        $package->points = $request->points;
        $package->save();
        return redirect('admin/brand/package/index')->with('success', 'Package updated successfully');
    }

    public function destroy($id)
    {
        $brandPackage = BrandPackage::find($id);
        $brandPackage->delete();
        return redirect('admin/brand/package/index')->with('success', 'Package deleted successfully');
    }
}
