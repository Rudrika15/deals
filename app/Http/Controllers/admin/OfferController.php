<?php

namespace App\Http\Controllers\admin;

use App\Models\Offer;
use App\Http\Controllers\Controller;
use App\Models\Offerdetail;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function index()
    {
        try {
            $offer = Offer::orderBy('id', 'DESC')->get();
            return view('admin.offer.index', \compact('offer'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function create()
    {
        try {
            return view('admin.offer.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'poster' => 'required',
            'fontSize' => 'required',
            'fontFamily' => 'required',
            'fontColor' => 'required',
            'noOfProduct' => 'required',
            'posterHeight' => 'required',
            'posterWidth' => 'required',
            'titlePositionTop' => 'required',
            'titlePositionLeft' => 'required',
        ]);

        try {
            $offer = new Offer();
            if ($request->is_festival) {
                $offer->is_festival = 'yes';
            }
            $offer->title = $request->title;
            $image = $request->poster;
            $offer->poster = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('poster'), $offer->poster);

            $offer->fontSize = $request->fontSize;
            $offer->fontFamily = $request->fontFamily;
            $offer->fontColor = $request->fontColor;
            $offer->noOfProduct = $request->noOfProduct;
            $offer->posterHeight = $request->posterHeight;
            $offer->posterWidth = $request->posterWidth;
            $offer->titlePositionTop = $request->titlePositionTop;
            $offer->titlePositionLeft = $request->titlePositionLeft;
            $offer->save();

            return redirect('offer/index')->with('success', 'Offer Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        try {
            $offer = Offer::find($id);
            return view('admin.offer.edit', \compact('offer'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'fontSize' => 'required',
            'fontFamily' => 'required',
            'fontColor' => 'required',
            'noOfProduct' => 'required',
            'posterHeight' => 'required',
            'posterWidth' => 'required',
            'titlePositionTop' => 'required',
            'titlePositionLeft' => 'required',
        ]);

        try {
            $id = $request->offerId;
            $offer =  Offer::find($id);
            if ($request->is_festival) {
                $offer->is_festival = 'yes';
            }
            $offer->title = $request->title;
            if ($request->poster) {
                $image = $request->poster;
                $offer->poster = time() . '.' . $request->poster->extension();
                $request->poster->move(public_path('poster'), $offer->poster);
            }

            $offer->fontSize = $request->fontSize;
            $offer->fontFamily = $request->fontFamily;
            $offer->fontColor = $request->fontColor;
            $offer->noOfProduct = $request->noOfProduct;
            $offer->posterHeight = $request->posterHeight;
            $offer->posterWidth = $request->posterWidth;
            $offer->titlePositionTop = $request->titlePositionTop;
            $offer->titlePositionLeft = $request->titlePositionLeft;
            $offer->save();

            return redirect('offer/index')->with('success', 'Offer Update Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $offer = Offer::find($id);
            $offer->delete();
            $offerdetail = Offerdetail::where('offerId', '=', $id)->delete();
            return redirect()->back()->with('success', 'Offer deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function offerdetail($id)
    {
        try {
            $offerData = Offerdetail::where('offerId', '=', $id)->get();
            $offerId  = $id;
            return view('admin.offer.offerdetails', \compact('offerId', 'offerData'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function offerdetailstore(Request $request)
    {
        $this->validate($request, [
            'positionLeft' => 'required',
            'positionBottom' => 'required',
            'imageHeight' => 'required',
            'imageWidth' => 'required',
        ]);

        try {
            $offer = new Offerdetail();
            $offer->offerId = $request->offerId;
            $offer->positionLeft = $request->positionLeft;
            $offer->positionBottom = $request->positionBottom;
            $offer->imageHeight = $request->imageHeight;
            $offer->imageWidth = $request->imageWidth;
            $offer->save();

            return redirect()->back()->with('success', 'Offer detail Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function offerdetailedit($id)
    {
        try {
            $offerdetails = Offerdetail::find($id);
            return view('admin.offer.offerdetailedit', \compact('offerdetails'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function offerdetailupdate(Request $request)
    {
        try {
            $id = $request->offerdetailId;
            $offer = Offerdetail::find($id);
            $offer->positionLeft = $request->positionLeft;
            $offer->positionBottom = $request->positionBottom;
            $offer->imageHeight = $request->imageHeight;
            $offer->imageWidth = $request->imageWidth;
            $offer->save();

            return redirect()->back()->with('success', 'Offer detail Update Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function offerdetaildelete($id)
    {
        try {
            $offerdetail = Offerdetail::find($id)->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
