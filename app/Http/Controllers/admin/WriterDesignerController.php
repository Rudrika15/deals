<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Design;
use App\Models\Media;
use App\Models\Writerslogan;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;

class WriterDesignerController extends Controller
{
    public function adminslogan(Request $request)
    {
        try {
            $category = Category::all();
            $type = $request->type;
            $catName = $request->category;
            $userName = $request->userName;
            if (isset($userName) && isset($catName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if ($type == 'Approved') {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Approved')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if ($type == 'Rejected') {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Rejected')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if (isset($userName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if (isset($catName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Pending')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            }

            return view('admin.slogandesigner.slogan', \compact('writer', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function changeSloganDate(Request $request)
    {
        $id = $request->sloganId;
        $date = $request->endDate;

        $writer = Writerslogan::find($id);
        $writer->endDate = $date;
        $writer->save();
        return redirect()->back()->with('success', 'End date update Successfully');
    }

    public function approve(Request $request)
    {
        try {
            $approve = $request->Approve;
            $reject = $request->Reject;
            if ($approve) {
                $id = $request->slugId;
                $slug = Writerslogan::find($id);
                $slug->status = "Approved";
                $slug->save();
                return \redirect('adminslogan/adminslogan')->with('success', 'Slogan Approve');
            } else {
                $id = $request->slugId;
                $slug = Writerslogan::find($id);
                $slug->status = "Rejected";
                $slug->save();
                return \redirect('adminslogan/adminslogan')->with('success', 'Slogan Reject');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function admindesign(Request $request)
    {
        try {
            $category = Category::all();
            $type = $request->type;
            $catName = $request->category;
            $userName = $request->userName;
            if (isset($userName) && isset($catName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if (isset($userName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if (isset($catName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')

                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            }

            if ($type == 'Approved') {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Approved')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if ($type == 'Rejected') {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Rejected')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Pending')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            }
            return view('admin.slogandesigner.design', \compact('design', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function designapprove($id)
    {
        try {
            // $data = Design::find($id);
            $data = Design::join('users', 'users.id', '=', 'designs.userId')
                ->join('admincategories', 'admincategories.id', '=', 'designs.category')
                ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                ->where('designs.id', '=', $id)
                ->first([
                    'designs.*',
                    'users.name as UserName',
                    'admincategories.name as CategoryName',
                    'writerslogans.title as Slogan',
                ]);
            return view('admin.slogandesigner.designapprove', compact('data'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function designapproveCode(Request $request)
    {
        try {
            $id = $request->designId;
            $design  = Design::find($id);
            $design->status = "Approved";
            $design->save();

            $media = new Media();
            $media->mediaType = $design->mediaType;
            $media->category = $design->category;

            $sourcesourcePath = public_path('designsourceimg/' . $design->sourcePath);
            $sourcedestinationPath = public_path('mediasourceimg/' . $design->sourcePath);

            $sourcePath = public_path('designpreviewpath/' . $design->previewPath);
            $destinationPath = public_path('mediapreviewimg/' . $design->previewPath);

            File::copy($sourcesourcePath, $sourcedestinationPath);
            File::copy($sourcePath, $destinationPath);

            $media->sourcePath =  $design->sourcePath;
            $media->previewPath = $design->previewPath;

            $media->isPremium = $design->isPremium;
            $media->title = $design->title;
            $media->sequence = $design->sequence;
            if ($request->type == "isFestival") {
                $this->validate($request, [
                    'startDate' => 'required',
                    'endDate' => 'required',
                ]);
                $media->startDate = $request->startDate;
                $media->endDate = $request->endDate;
            } elseif ($request->type == "today") {
                $this->validate($request, [
                    'startDate1' => 'required',
                    'endDate1' => 'required',
                ]);
                $media->startDate = $request->startDate1;
                $media->endDate = $request->endDate1;
            } else {
                $date = Carbon::now()->toDateString();
                $media->startDate = $date;
                $media->endDate = '2099-12-31';
            }
            $media->save();
            return redirect('admindesign/admindesign')->with('success', 'Design Approved Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function reject(Request $request)
    {
        try {
            $reject = $request->Reject;
            if ($reject) {
                $id = $request->designId;
                $slug = Design::find($id);
                $slug->status = "Rejected";
                $slug->save();
                return \redirect('admindesign/admindesign')->with('success', 'Slogan Reject');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
