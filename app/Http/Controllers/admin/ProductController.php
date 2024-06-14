<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $product = Product::orderBy('id', 'DESC')->get();
            return view('admin.product.index', \compact('product'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('admin.product.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'points' => 'required',
            'photo' => 'required',
        ]);

        try {
            $product = new Product();
            $product->name = $request->name;
            $product->points = $request->points;
            $image = $request->photo;
            $product->photo = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('product'), $product->photo);

            $product->save();
            return redirect()->back()->with('success', 'Product Add Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        try {
            $product = Product::find($id);
            return view('admin.product.edit', \compact('product'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {

        try {
            $id = $request->productId;
            $product = Product::find($id);
            $product->name = $request->name;
            $product->points = $request->points;

            $image = $request->photo;
            $product->photo = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('product'), $product->photo);

            $product->save();
            return redirect('product/index')->with('success', 'Product Update Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destory($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
