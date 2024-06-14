<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brochure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrochureController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'brochure' => 'required|max:10000',
        ]);
        try {
            $cardid = $request->cardid;
            $count = Brochure::where('card_id', '=', $cardid)->count();
            // dd($count);
            if ($count < 3) {
                $bro = new Brochure();
                $bro->card_id = $cardid;
                $file = $request->brochure;
                $bro->file = time() . '.' . $request->brochure->extension();
                $request->brochure->move(public_path('brofile'), $bro->file);
                $bro->save();
                return redirect()->back()->with('success', 'Brochure Added Successfully');
            } else {
                return redirect()->back()->with('warning', "You Can't Add More Than two Brochure");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Brochure $brochure)
    {
        //
    }

    public function edit(Brochure $brochure)
    {
        //
    }
    public function update(Request $request, Brochure $brochure)
    {
        //
    }
    public function destroy($id)
    {
        try {
            $bro = Brochure::find($id);
            $bro->delete();
            return \redirect()->back()->with('success', 'Brochure Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
