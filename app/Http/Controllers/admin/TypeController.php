<?php

namespace App\Http\Controllers\admin;

use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        try {
            $type = Type::orderBy('id', 'DESC')->get();
            return view('admin.type.index', compact('type'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('admin.type.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try {
            $type = new Type();
            $type->title = $request->title;
            $type->save();

            return redirect('type/index')->with('success', 'Type Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $type = Type::find($id);
            return view('admin.type.edit', \compact('type'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try {
            $id = $request->typeId;
            $type =  Type::find($id);
            $type->title = $request->title;
            $type->save();

            return redirect('type/index')->with('success', 'Type Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $type = Type::find($id)->delete();

            return redirect()->back()->with('success', 'Delete Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
