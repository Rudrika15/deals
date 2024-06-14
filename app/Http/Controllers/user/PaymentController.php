<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function update(Request $request)
    {

        $this->validate($request, [
            'accountHolderName' => 'regex:/^[a-zA-Z\s]+$/',
            'accountNumber' => 'regex:/^\d{12}$/',
            'ifscCode' => 'regex:/^[A-Za-z]{4}[a-zA-Z0-9]{7}$/'
        ]);
        try {
            $id = Auth::user()->id;
            //dd($id);
            $cards = CardsModels::where('user_id', '=', $id)->get();
            // return $cards;
            $cardid = $cards[0]->id;
            $payment1 = Payment::where('card_id', '=', $cardid)->first();
            $id = $payment1->id;

            $payment = Payment::find($id);

            $payment->bankName = $request->bankName;
            $payment->accountHolderName = $request->accountHolderName;
            $payment->accountNumber = $request->accountNumber;
            $payment->accountType = $request->accountType;
            $payment->ifscCode = $request->ifscCode;
            $payment->upidetail = $request->upidetail;
            $payment->save();
            return \redirect()->back()->with('success', 'Payment Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
