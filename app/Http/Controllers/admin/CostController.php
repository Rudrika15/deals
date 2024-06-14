<?php

namespace App\Http\Controllers\admin;

use App\Models\Cost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function index()
    {
        //
    }

    public function create($id)
    {
        $cost = Cost::where('userId', '=', $id)->first();
        return view('admin.cost.create', compact('cost'));
    }

    public function store(Request $request)
    {
        $userId = Cost::where('userId', '=', $request->userId)->first();
        if ($userId) {
            $cost = Cost::where('userId', '=', $request->userId)->first();
            $cost->amount = $request->amount;
            $cost->save();
        } else {
            $this->validate($request, [
                'amount' => 'required',
            ]);
            $cost = new Cost();
            $cost->userId = $request->userId;
            $cost->amount = $request->amount;
            $cost->save();
        }
        return redirect('writer/designer/report')->with('success', 'Amount updated successfully');
    }
}
