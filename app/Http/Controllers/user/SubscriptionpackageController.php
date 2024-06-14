<?php

namespace App\Http\Controllers\Admin\user;

use App\Models\Subscriptionpackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscriptiondetail;

class SubscriptionpackageController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:subscriptionpackage-list|subscriptionpackage-create|subscriptionpackage-edit|subscriptionpackage-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:subscriptionpackage-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:subscriptionpackage-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:subscriptionpackage-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        try {
            $subpack = Subscriptionpackage::orderBy('id', 'DESC')->get();
            return view("adminSubPack.index", compact('subpack'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view("adminSubPack.create");
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subscriptionType' => 'required',
            'priceType' => 'required',
            'price' => 'required_if:priceType,=,Paid|numeric',
            'discount' => 'required_if:priceType,=,Paid|numeric',
            'details' => 'required',
        ]);

        try {
            if ($request->priceType == "Paid") {
                $this->validate($request, [
                    'price' => 'required',
                    'discount' => 'required',
                ]);
            }
            $subpack = new Subscriptionpackage();
            $subpack->title = $request->title;
            $subpack->subscriptionType = $request->subscriptionType;
            $subpack->priceType = $request->priceType;
            if ($request->priceType == "Paid") {
                $subpack->price = $request->price;
                $subpack->discount = $request->discount;
            }
            $subpack->details = $request->details;

            $subpack->save();
            return redirect('adminsubscriptionpackage/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Subscriptionpackage $subpack)
    {
    }

    public function edit($id)
    {
        //
        try {
            $subpack = Subscriptionpackage::find($id);
            return view('adminSubPack.edit', compact('subpack'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subscriptionType' => 'required',
            'priceType' => 'required',
            'details' => 'required',
        ]);

        try {
            if ($request->priceType == "Paid") {
                $this->validate($request, [
                    'price' => 'required',
                    'discount' => 'required',
                ]);
            }
            $id = $request->subpackid;
            $subpack = Subscriptionpackage::find($id);
            $subpack->title = $request->title;
            $subpack->subscriptionType = $request->subscriptionType;
            $subpack->priceType = $request->priceType;
            if ($request->priceType == "Paid") {
                $subpack->price = $request->price;
                $subpack->discount = $request->discount;
            }
            $subpack->details = $request->details;
            $subpack->save();
            return redirect('adminsubscriptionpackage/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $subpack = Subscriptionpackage::find($id);
            $subpack->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function packagedetail($id)
    {
        try {
            $subpack = Subscriptionpackage::find($id);
            $details = Subscriptiondetail::where('packageId', '=', $id)->get();
            return view('adminSubPack.subscriptiondetails', \compact('subpack', 'details'));
        } catch (\Throwable $th) {
            // throw $th;

        }
    }

    public function packagedetailstore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try {
            $id = $request->packageId;
            $subddetail = new Subscriptiondetail();
            $subddetail->packageId = $id;
            $subddetail->title = $request->title;
            $subddetail->save();
            return redirect()->back()->with('success', 'Title Added Successfully');
        } catch (\Throwable $th) {
            throw $th;
            //
        }
    }

    public function detaildelete($id)
    {
        try {
            $subpackdet = Subscriptiondetail::find($id);
            $subpackdet->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
