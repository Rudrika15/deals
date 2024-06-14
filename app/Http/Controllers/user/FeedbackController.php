<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        try {
            $authid = Auth::User()->id;

            $details = CardsModels::where('user_id', '=', $authid)->first();
            $id = $details->id;
            $feed = Feedback::where('card_id', '=', $id)->get();
            return View('user.feedback.feedback', \compact('feed'));
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
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        try {
            $cardid = $request->cardId;
            $qr = new Feedback();
            $qr->card_id = $cardid;
            $qr->name = $request->name;
            $qr->email = $request->email;
            $qr->message = $request->message;
            $qr->star = "5";
            $qr->save();
            return \redirect()->back()->with('success', 'Feedback Added Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Feedback $feedback)
    {
        //
    }

    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Feedback $feedback)
    {
        //
    }
}
