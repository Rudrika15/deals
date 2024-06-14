<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('permission:city-list|city-create|city-edit|city-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:city-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        try {
            $city = City::join('states', 'states.id', '=', 'cities.statid')
                ->where('cities.is_delete', '=', 'Active')
                ->orderBy('id', 'DESC')
                ->get(['cities.*', 'states.sname']);
            return view('admin.city.index', compact('city'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create()
    {
        try {
            $state = State::all();
            return view('admin.city.create', compact('state'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(REQUEST $request)
    {
        try {
            $city = new City();
            $city->city = $request->cityname;
            $city->statid = $request->statename;
            $city->is_delete = 'Active';
            $city->save();
            return redirect('city/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit($id)
    {
        try {
            $city = City::find($id);
            $state = State::all();
            return view('admin.city.edit', compact('city', 'state'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        try {
            $id = $request->cityid;
            // return $id;
            $city = City::find($id);
            // return $city;
            $city->city = $request->cityname;
            $city->statid = $request->statename;
            $city->save();
            return redirect('city/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            $city = City::find($id);
            $city->is_delete = "Deactive";
            $city->save();
            // return $city;
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
