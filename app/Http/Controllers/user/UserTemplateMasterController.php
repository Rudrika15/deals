<?php

namespace App\Http\Controllers\user;

use App\Models\UserTemplateMaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTemplateMasterController extends Controller
{
    public function index()
    {
        try {
            $userTemplateMaster = UserTemplateMaster::all();
            return view('user.UserTemplate.index', compact('userTemplateMaster'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('user.UserTemplate.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required',
        ]);
        try {
            $template = new UserTemplateMaster();
            $template->userId = Auth::user()->id;
            $image = $request->photo;
            $template->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('templateimages'), $template->photo);
            $template->save();
            return redirect()->back()->with('success', 'template created successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $template = UserTemplateMaster::find($id);
            return view('user.UserTemplate.edit', compact('template'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        try {
            return redirect()->back()->with('success', 'template Updated successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $userTemplateMaster = UserTemplateMaster::find($id);
            $userTemplateMaster->delete();
            return redirect()->back()->with('success', 'template deleted successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
