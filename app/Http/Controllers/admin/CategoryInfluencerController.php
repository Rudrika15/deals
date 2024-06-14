<?php

namespace App\Http\Controllers\admin;

use App\Models\CategoryInfluencer;
use App\Http\Controllers\Controller;
use App\Models\InfluencerProfile;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryInfluencerController extends Controller
{
    public function index()
    {
        try {
            $influencerCategory = CategoryInfluencer::orderBy('id', 'DESC')->get();

            return view('admin.influencerCategory.index', \compact('influencerCategory'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('admin.influencerCategory.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'categoryIcon' => 'required',
        ]);

        try {
            $category = new CategoryInfluencer();
            $category->name = $request->name;
            $category->categoryIcon = time() . '.' . $request->categoryIcon->extension();
            $request->categoryIcon->move(public_path('influencerCategory'), $category->categoryIcon);
            $category->save();

            return redirect('influencer/category/index')->with('success', 'Category Added Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function list()
    {
        $influencer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Influencer');
            }
        )->whereHas('influencer')->get();
        return view('influencer.influencer.list', \compact('influencer'));
    }
    public function singleView($id)
    {
        $profile = InfluencerProfile::with('profile')
            ->with('incategory')
            ->where('userId', '=', $id)
            ->orderBy('id', 'DESC')
            ->first();
        return view('influencer.influencer.listView', \compact('profile'));
    }

    public function statusEdit($id)
    {
        $profile = InfluencerProfile::with('profile')
            ->where('userId', '=', $id)
            ->first();
        return view('influencer.influencer.statusUpdate', \compact('profile'));
    }
    public function statusEditCode(Request $request)
    {
        $id = $request->influencerId;
        $influencerStatus = InfluencerProfile::where('userId', '=', $id)->first();
        $influencerStatus->is_featured = $request->is_featured;
        $influencerStatus->is_trending = $request->is_trending;
        $influencerStatus->is_brandBeansVerified = $request->is_brandBeansVerified;
        $influencerStatus->save();

        return \redirect()->back()->with('success', 'Status Updated Successfully');
    }

    public function edit($id)
    {
        try {
            $category = CategoryInfluencer::find($id);
            return view('admin.influencerCategory.edit', \compact('category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        try {
            $id = $request->influencerCategoryId;
            $category = CategoryInfluencer::find($id);
            $category->name = $request->name;
            if ($request->categoryIcon) {
                $category->categoryIcon = time() . '.' . $request->categoryIcon->extension();
                $request->categoryIcon->move(public_path('influencerCategory'), $category->categoryIcon);
            }
            $category->save();

            return redirect('influencer/category/index')->with('success', 'Category Updated Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            CategoryInfluencer::find($id)->delete();
            return redirect('influencer/category/index')->with('success', 'Category deleted Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
