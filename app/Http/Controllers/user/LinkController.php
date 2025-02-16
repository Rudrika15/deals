<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Link;
use App\Models\User;
use App\Models\CardsModels;

use Auth;

class LinkController extends Controller
{
    function delete($id)
    {
        try {
            $detail = Link::find($id);
            $detail->delete();
            return redirect()->back()->with('success', "deleted successfully");
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function update(Request $request)
    {

        $this->validate($request, [
            'phone1' => 'numeric|digits:10',
            'whatsappnumber' => 'numeric|digits:10',
            'email' => 'email',
            'website' => 'required|url',
            'instagram' => ['required', 'regex:/^https:\/\/instagram\.com\/[a-zA-Z0-9._]+$/'],
            'youtube' => ['required', 'regex:/^https:\/\/youtube\.com\/@[-a-zA-Z0-9_]+$/'],
            'facebook' => ['required', 'regex:/^https:\/\/facebook\.com\/[a-zA-Z0-9._]+$/'],
            'skype' => ['required', 'regex:/^https:\/\/join\.skype\.com\/[a-zA-Z0-9._]+$/'],
            'twitter' => ['required', 'regex:/^https:\/\/twitter\.com\/[a-zA-Z0-9_]+$/'],
            'linkedin' => ['required', 'regex:/^https:\/\/(www\.|)linkedin\.com\/in\/[a-zA-Z0-9._-]+$/'],
        ]);
        try {
            $id = Auth::user()->id;
            $cards = CardsModels::where('user_id', '=', $id)->get();
            $cardid = $cards[0]->id;

            $links = Link::where('card_id', '=', $cardid)->first();
            $id = $links->id;

            $link = Link::find($id);
            $link->phone1 = $request->phone1;
            $link->phone2 = $request->whatsappnumber;
            $link->email = $request->email;
            $link->skype = $request->skype;
            $link->facebook = $request->facebook;
            $link->instagram = $request->instagram;
            $link->twitter = $request->twitter;
            $link->youtube = $request->youtube;
            $link->linkedin = $request->linkedin;
            $link->website = $request->website;
            $link->paypal = $request->paypal;
            $link->save();


            return \redirect()->back()->with('success', 'Link Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
