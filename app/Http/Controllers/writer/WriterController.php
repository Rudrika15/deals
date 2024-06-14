<?php

namespace App\Http\Controllers\writer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Writer;
use App\Models\Writerslogan;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    //

    public function index(Request $request)
    {
        try {
            $writers = Writerslogan::with('category')->where('userId', Auth::user()->id)->get();
            return view('writer.slug.index', compact('writers'));
        } catch (\Throwable $th) {
            throw $th;
            // return view('extra.servererror');
        }
    }
    public function create()
    {
        try {
            $categories = Category::all();
            return view('writer.slug.create', compact('categories'));
        } catch (\Throwable $th) {
            throw $th;
            // return view('extra.servererror');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

        try {
            $writer = new Writerslogan();
            $writer->title = $request->title;
            $writer->userId = Auth::user()->id;
            $writer->categoryId = $request->category;
            if (Auth::user()->hasRole(['Admin'])) {
                $writer->status = 'Approved';
            } else {
                $writer->status = 'Pending';
            }
            $writer->save();
            return redirect()->route('writer.slugs.index')->with('success', 'Slogan saved successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $writer = Writerslogan::find($id);
            $categories = Category::all();
            return view('writer.slug.edit', compact('writer', 'categories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);
        try {
            $id = $request->slugId;
            $writer = Writerslogan::find($id);
            $writer->title = $request->title;
            $writer->categoryId = $request->category;
            $writer->save();
            return redirect()->route('writer.slugs.index')->with('success', 'Slogan edited successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function delete($id)
    {
        try {
            $writer = Writerslogan::find($id);
            $writer->delete();
            return redirect()->back()->with('success', 'Slogan deleted successfully!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
