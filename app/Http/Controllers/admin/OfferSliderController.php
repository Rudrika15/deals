<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OfferSlider;
use Illuminate\Http\Request;

class OfferSliderController extends Controller
{
    public function index()
    {
        $offerslider = OfferSlider::all();
        return view('admin.offerslider.index', compact('offerslider'));
    }

    public function create()
    {
        return view('admin.offerslider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        $offerslider = new OfferSlider();
        $offerslider->image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('offerSlider'), $offerslider->image);
        $offerslider->save();
        return redirect()->route('offerSlider.index')->with('success', 'Offer Slider Added Successfully');
    }

    public function show(OfferSlider $offerSlider)
    {
        //
    }

    public function edit(OfferSlider $offerSlider)
    {
        //
    }

    public function update(Request $request, OfferSlider $offerSlider)
    {
        //
    }

    public function destroy($id)
    {
        $offerSlider = OfferSlider::find($id)
            ->delete();
        return redirect()->route('offerSlider.index')->with('success', 'Offer Slider Deleted Successfully');
    }
}
