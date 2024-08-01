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
            $users = User::where('refer', '=', $refer_code)->get();
            // return $user;


            $type = $request->type;
            if ($type == 'free') {
                $refer_code = $refer->myrefer;
                $users = User::where('refer', '=', $refer_code)
                    ->where('package', '=', 'FREE')
                    ->orderBy('id', 'DESC')
                    ->paginate(10);
                return view('user.refer.index', \compact('users'));
            } else if ($type == 'paid') {
                $users = User::where('refer', '=', $refer_code)
                    ->where('package', '!=', 'FREE')
                    ->orderBy('id', 'DESC')
                    ->paginate(10);
                return view('user.refer.index', \compact('users'));
            } else {
                $users = User::where('refer', '=', $refer_code)
                    ->orderBy('id', 'DESC')
                    ->paginate(10);
                return view('user.refer.index', \compact('users'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
