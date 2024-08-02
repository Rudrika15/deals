<?php

namespace App\Http\Controllers\brand;

use App\Http\Controllers\Controller;
use App\Models\BrandOffer;
use App\Models\MyOfferQrCodes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandOfferController extends Controller
{

    public function index()
    {
        $offers = BrandOffer::where('userId', Auth::user()->id)->get();
        return view('brand.offers.index', compact('offers'));
    }

    public function create()
    {
        return view('brand.offers.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'offerPhoto' => 'required',
            'offerPrice' => 'required|numeric',
            'location' => 'required',
            'validity' => 'required',
            'termsAndConditions' => 'required',
        ]);
        $userId = Auth::user()->id;
        $offer = new BrandOffer();
        $offer->userId = $userId;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->offerPhoto = time() . '.' . $request->offerPhoto->extension();
        $request->offerPhoto->move(public_path('offerPhoto'), $offer->offerPhoto);
        $offer->offerPrice = $request->offerPrice;
        $offer->location = $request->location;
        $offer->validity = $request->validity;
        $offer->termsAndConditions = $request->termsAndConditions;
        $offer->save();
        return redirect()->route('brand.offers')->with('success', 'Offer Added Successfully');
    }

    public function edit($id)
    {
        $offer = BrandOffer::find($id);
        return view('brand.offers.edit', compact('offer'));
    }

    public function update(Request $request, BrandOffer $brandOffer)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'offerPrice' => 'required|numeric',
            'location' => 'required',
            'validity' => 'required',
            'termsAndConditions' => 'required',
        ]);

        $id = $request->offerId;
        $offer = BrandOffer::find($id);
        $offer->title = $request->title;
        $offer->description = $request->description;
        if ($request->offerPhoto) {
            $offer->offerPhoto = time() . '.' . $request->offerPhoto->extension();
            $request->offerPhoto->move(public_path('offerPhoto'), $offer->offerPhoto);
        }
        $offer->offerPrice = $request->offerPrice;
        $offer->location = $request->location;
        $offer->validity = $request->validity;
        $offer->termsAndConditions = $request->termsAndConditions;
        $offer->save();
        return redirect()->route('brand.offers')->with('success', 'Offer Updated Successfully');
    }

    public function destroy($id)
    {
        BrandOffer::find($id)->delete();
        return redirect()->route('brand.offers')->with('success', 'Offer Deleted Successfully');

    }

    public function myPurchaseOffer()
    {
        $offers = MyOfferQrCodes::where('buyerId', Auth::user()->id)->with('offer')->paginate(10);
        return view('user.offer.offerList', compact('offers'));
    }
}
