<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferController extends Controller
{
    //
    function index(Request $request)
    {
        try {
            $id = Auth::user()->id;

            $refer = User::find($id);
            $refer_code = $refer->myrefer;
            $user = User::where('refer', '=', $refer_code)->get();
            // return $user;


            $type = $request->type;
            if ($type == 'free') {
                $refer_code = $refer->myrefer;
                $user = User::where('refer', '=', $refer_code)
                    ->where('package', '=', 'FREE')
                    ->orderBy('id', 'DESC')
                    ->get();
                return view('user.refer.index', \compact('user'));
            } else if ($type == 'paid') {
                $user = User::where('refer', '=', $refer_code)
                    ->where('package', '!=', 'FREE')
                    ->orderBy('id', 'DESC')
                    ->get();
                return view('user.refer.index', \compact('user'));
            } else {
                $user = User::where('refer', '=', $refer_code)
                    ->orderBy('id', 'DESC')
                    ->get();
                return view('user.refer.index', \compact('user'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
