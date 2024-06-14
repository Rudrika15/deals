<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{
    public function index()
    {
        $authid = Auth::User()->id;

        $details = CardsModels::where('user_id', '=', $authid)->first();
        $id = $details->id;
        $inq = Inquiry::where('card_id', '=', $id)->get();
        return \view('user.feedback.inquiry', \compact('inq'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);
        try {
            $cardid = $request->cardId;
            $inq = new Inquiry();
            $inq->card_id = $cardid;
            $inq->name = $request->name;
            $inq->email = $request->email;
            $inq->phone = $request->phone;
            $inq->message = $request->message;
            $inq->save();
            return \redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
