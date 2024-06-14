<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QrcodeController extends Controller
{
    public function index()
    {
        try {
            $qr = Qrcode::orderBy('id', 'DESC')->get();
            return \view('demo', \compact('qr'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'number' => 'required|numeric',
            'code' => 'required',
        ]);

        try {
            $id = Auth::user()->id;
            //dd($id);
            $cards = CardsModels::where('user_id', '=', $id)->get();
            // return $cards;
            $cardid = $cards[0]->id;

            $qr = new Qrcode();
            $qr->card_id = $cardid;
            $qr->type = $request->type;
            $qr->number = $request->number;
            $image = $request->code;
            $qr->code = time() . '.' . $request->code->extension();
            $request->code->move(public_path('QRcodes'), $qr->code);
            $qr->save();
            return \redirect()->back()->with('success', 'QR Code Added Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Qrcode $qrcode)
    {
        //
    }


    public function edit(Qrcode $qrcode)
    {
        //
    }

    public function update(Request $request, Qrcode $qrcode)
    {
        //
    }

    public function destroy($id)
    {
        try {
            $qr = Qrcode::find($id);
            $qr->delete();
            return \redirect()->back()->with('success', 'QR Code Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
