<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use Illuminate\Http\Request;

class BrandCategoryController extends Controller
{
    public function index()
    {
        $brandCategory = BrandCategory::all();
        return view('admin.brandCategory.index', compact('brandCategory'));
    }
    public function create()
    {
        return view('admin.brandCategory.create');
    }
    public function store(Request $request)
    {
        $this->validate(request(), [
            'categoryName' => 'required',
            'icon' => 'required',
        ]);
        $brandCategory = new BrandCategory();
        $brandCategory->categoryName = $request->categoryName;
        $brandCategory->icon = time() . '.' . $request->icon->extension();
        $request->icon->move(public_path('brandCategoryIcon'), $brandCategory->icon);
        $brandCategory->poster = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('brandCategoryPoster'), $brandCategory->poster);
        $brandCategory->save();
        return redirect('brand/category/index')->with('success', 'Brand Category Created Successfully');
    }
    public function edit($id)
    {
        $brandCategory = BrandCategory::find($id);
        return view('admin.brandCategory.edit', compact('brandCategory'));
    }
    public function update(Request $request)
    {
        $this->validate(request(), [
            'categoryName' => 'required',
        ]);
        $brandCategory = BrandCategory::find($request->brandCategoryId);
        $brandCategory->categoryName = $request->categoryName;
        if ($request->icon) {
            $brandCategory->icon = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('brandCategoryIcon'), $brandCategory->icon);
        }
        if ($request->poster) {
            $brandCategory->poster = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('brandCategoryPoster'), $brandCategory->poster);
        }
        $brandCategory->save();
        return redirect('brand/category/index')->with('success', 'Brand Category Updated Successfully');
    }
    public function delete($id)
    {
        $brandCategory = BrandCategory::find($id);
        $brandCategory->delete();
        return redirect('brand/category/index')->with('success', 'Brand Category Deleted Successfully');
    }
}
