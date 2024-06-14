<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cardportfoilo;
use App\Models\CardsModels;
use App\Models\InfluencerPortfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PortfolioController extends Controller
{
    public function index()
    {
        try {
            $auth = Auth::user()->id;
            // $portfolio = InfluencerPortfolio::orderBy('id', 'DESC')->where('userId', $auth)->get();
            $user = User::find($auth);
            $card = CardsModels::where('user_id', $user->id)->first();
            $portfolio = Cardportfoilo::orderBy('id', 'DESC')->where('card_id', $card->id)->get();
            return view('influencer.portfolio.index', compact('portfolio'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create()
    {
        try {
            return view('influencer.portfolio.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'required',
            'type' => 'required',
            'details' => 'required',
        ]);

        try {
            $userId = Auth::user()->id;
            $portfolio = new InfluencerPortfolio();
            $portfolio->title = $request->title;
            $portfolio->userId = $userId;
            $portfolio->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('portfolioPhoto'), $portfolio->photo);
            $portfolio->type = $request->type;
            $portfolio->details = $request->details;
            $portfolio->save();

            return redirect('influencer/portfolio')->with('success', 'Added Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            // $portfolio = InfluencerPortfolio::find($id)->delete();
            $portfolio = Cardportfoilo::find($id)->delete();
            return redirect('influencer/portfolio')->with('success', 'Deleted Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function storeimage(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'image1' => 'required_if:type,==,Photo',
            'video' => 'required_if:type,==,Video',
        ]);

        try {
            $id = Auth::user()->id;
            //dd($id);
            $cards = CardsModels::where('user_id', '=', $id)->get();
            // return $cards;
            $card_id = $cards[0]->id;
            $count = Cardportfoilo::where('card_id', '=', $card_id)->count();
            // dd($count);
            if ($count < 21) {
                $image = new Cardportfoilo();
                $image->card_id = $card_id;
                $image->type = $request->type;
                //  return $image;
                $type = $request->type;
                if ($type === "Photo") {
                    if ($request->image1) {
                        $image->image = time() . '.' . $request->image1->extension();
                        $request->image1->move(public_path('cardimage'),  $image->image);
                    }
                } else {

                    $oldurl = "https://youtu.be/";
                    $newurl = "https://youtube.com/embed/";
                    $input = $request->video;

                    $data = str_replace($oldurl, $newurl, $input);
                    // return $data;
                    $image->image = $data;
                }
                $image->save();
                return \redirect()->back()->with('success', 'Image Uploaded Successfully');
            } else {
                return \redirect()->back()->with('success', "You can't add More Than 5 imahe");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
