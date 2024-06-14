<?php

namespace App\Http\Controllers\admin;

use App\Models\Typedetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypedetailRequest;
use App\Http\Requests\UpdateTypedetailRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypedetailController extends Controller
{

    public function index()
    {
        try {
            $typedetail = Typedetail::join('types', 'types.id', '=', 'typedetails.typeId')
                ->orderBy('id', 'DESC')
                ->get(['typedetails.*', 'types.title']);
            return view('admin.typedetail.index', compact('typedetail'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $type  = Type::all();
            return view('admin.typedetail.create', compact('type'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'typeId' => 'required',
            'photo' => 'required',
            'photoHeight' => 'required',
            'photoWidth' => 'required',
            'message' => 'required',
            'messageTop' => 'required',
            'messageBottom' => 'required',
            'messageColor' => 'required',
            'messageFontFamily' => 'required',
            'messageFontSize' => 'required',
            'poster' => 'required',
            'posterHeight' => 'required',
            'posterWidth' => 'required',
        ]);

        try {
            $type = new Typedetail();
            $type->typeId = $request->typeId;
            $image = $request->photo;
            $type->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('typedetailphoto'), $type->photo);
            $type->photoHeight = $request->photoHeight;
            $type->photoWidth = $request->photoWidth;
            $type->message = $request->message;
            $type->messageTop = $request->messageTop;
            $type->messageBottom = $request->messageBottom;
            $type->messageColor = $request->messageColor;
            $type->messageFontFamily = $request->messageFontFamily;
            $type->messageFontSize = $request->messageFontSize;
            $image = $request->poster;
            $type->poster = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('typedetailposter'), $type->poster);
            $type->posterHeight = $request->posterHeight;
            $type->posterWidth = $request->posterWidth;
            $type->save();

            return redirect('typedetail/index')->with('success', 'Detail Added Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $type = Type::all();
            $typedetail = Typedetail::find($id);
            return view('admin.typedetail.edit', compact('type', 'typedetail'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'photoHeight' => 'required',
            'photoWidth' => 'required',
            'message' => 'required',
            'messageTop' => 'required',
            'messageBottom' => 'required',
            'messageColor' => 'required',
            'messageFontFamily' => 'required',
            'messageFontSize' => 'required',
            'posterHeight' => 'required',
            'posterWidth' => 'required',
        ]);

        try {
            $id = $request->typedetailId;
            $type =  Typedetail::find($id);
            if ($request->photo) {
                $image = $request->photo;
                $type->photo = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('typedetailphoto'), $type->photo);
            }
            $type->photoHeight = $request->photoHeight;
            $type->photoWidth = $request->photoWidth;
            $type->message = $request->message;
            $type->messageTop = $request->messageTop;
            $type->messageBottom = $request->messageBottom;
            $type->messageColor = $request->messageColor;
            $type->messageFontFamily = $request->messageFontFamily;
            $type->messageFontSize = $request->messageFontSize;
            if ($request->poster) {
                $image = $request->poster;
                $type->poster = time() . '.' . $request->poster->extension();
                $request->poster->move(public_path('typedetailposter'), $type->poster);
            }
            $type->posterHeight = $request->posterHeight;
            $type->posterWidth = $request->posterWidth;
            $type->save();

            return redirect('typedetail/index')->with('success', 'Detail Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }



    public function destroy($id)
    {
        try {
            $data = Typedetail::find($id)->delete();
            return redirect()->back()->with('success', 'Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
