<?php

namespace App\Http\Controllers\admin;

use App\Models\Media;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Mymedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:media-list|media-create|media-edit|media-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:media-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:media-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:media-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        try {
            $category = Category::all();
            $submit = $request->submit;
            $name = $request->category;
            $title = $request->title;


            if (isset($name) && isset($title)) {
                // return "hehre";

                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->where('admincategories.name', '=', $name)
                    ->where('media.title', 'like', '%' . $title . '%')
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            } else {
                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            }
            if (isset($name)) {
                // return "hehre";

                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->where('admincategories.name', '=', $name)
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            } else {
                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            }

            if (isset($title)) {
                // return "hehre";

                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->where('media.title', 'like', '%' . $title . '%')
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            } else {
                $media = Media::join('admincategories', 'admincategories.id', '=', 'media.category')
                    ->orderBy('id', 'DESC')
                    ->paginate(20, ['media.*', 'admincategories.name']);
            }


            return view("admin.media.index", compact('media', 'category'));
        } catch (\Throwable $th) {
            throw $th;
            // 

        }
    }

    public function selectCategory()
    {
        $category = Category::all();
        return view('admin.media.selectCategory', \compact('category'));
    }



    public function create(Request $request)
    {
        try {
            $id = $request->category;
            $categoryId = Category::find($id);
            $category = Category::select('id', 'name')->get();
            return view("admin.media.create", \compact('category', 'categoryId'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mediaType' => 'required',
            'category' => 'required',
            'sourcePath' => 'required',
            'title' => 'required',
            'previewPath' => 'required',
        ]);

        try {
            if ($request->mediaType == "Video")
                $this->validate($request, [
                    'sourcePath' => 'required|file|mimetypes:video/mp4',
                ]);

            $media = new Media();
            $media->mediaType = $request->mediaType;
            $media->category = $request->category;

            $media->startDate = $request->startDate;
            if ($request->endDate) {
                $media->endDate = $request->endDate;
            } else {
                $date1 = Carbon::now();
                $date2 = $date1->addDays(1)->toDateString();
                $media->endDate = $date2;
            }

            $image = $request->sourcePath;
            $media->sourcePath = time() . '.' . $request->sourcePath->extension();
            $request->sourcePath->move(public_path('mediasourceimg'), $media->sourcePath);

            $media->title = $request->title;
            $media->sequence = $request->sequence;

            $image = $request->previewPath;
            $media->previewPath = time() . '.' . $request->previewPath->extension();
            $request->previewPath->move(public_path('mediapreviewimg'), $media->previewPath);

            if ($request->isPremium) {
                $media->isPremium = "yes";
            } else {
                $media->isPremium = "no";
            }
            $media->save();
            return redirect()->back()->with('success', 'Media inserted successfully');
        } catch (\Throwable $th) {
            // throw $th;


        }
    }

    public function show(Media $media)
    {
    }

    public function edit($id)
    {
        try {
            $media = Media::find($id);
            $category = Category::all();
            return view('admin.media.edit', compact('media', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'mediaType' => 'required',
            'category' => 'required',
            'title' => 'required',

        ]);

        try {
            $id = $request->mediaid;
            $media = Media::find($id);
            $media->mediaType = $request->mediaType;
            $media->category = $request->category;
            if ($request->sourcePath) {
                $image = $request->sourcePath;
                $media->sourcePath = time() . '.' . $request->sourcePath->extension();
                $request->sourcePath->move(public_path('mediasourceimg'), $media->sourcePath);
            }
            $media->title = $request->title;
            $media->sequence = $request->sequence;
            $media->startDate = $request->startDate;
            if ($request->endDate) {
                $media->endDate = $request->endDate;
            } else {
                $date1 = Carbon::now();
                $date2 = $date1->addDays(1)->toDateString();
                $media->endDate = $date2;
            }
            if ($request->previewPath) {
                $image = $request->previewPath;
                $media->previewPath = time() . '.' . $request->previewPath->extension();
                $request->previewPath->move(public_path('mediapreviewimg'), $media->previewPath);
            }

            if ($request->isPremium) {
                $media->isPremium = "yes";
            } else {
                $media->isPremium = "no";
            }
            $media->save();
            return redirect('adminMedia/index');
        } catch (\Throwable $th) {
            // throw $th;


        }
    }

    public function destroy($id)
    {
        try {
            $media = Media::find($id);
            $media->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function downloads(Request $request)
    {

        try {
            $category = Category::all();
            $startDateOld = $request->startDate;
            $startDate = Carbon::parse($startDateOld)->format('Y/m/d');
            $endDateOld = $request->endDate;
            $endDate = Carbon::parse($endDateOld)->format('Y/m/d');
            $dateOld = Carbon::now()->toDateString();
            $date = Carbon::parse($dateOld)->format('Y/m/d');
            $categoryName = $request->category;
            $name = $request->name;
            // return $startDateOld;
            // return [$startDate, $endDate];
            if (isset($startDateOld) && isset($endDateOld)) {
                // return $date;
                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    // ->where('mymedia.date', $startDate)
                    ->orderBy('id', 'desc')
                    ->whereBetween('mymedia.date', [$startDate, $endDate])
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            } else if (isset($startDateOld)) {

                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    ->where('mymedia.date', $startDate)
                    ->orderBy('id', 'desc')
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            } else if (isset($name) && isset($categoryName)) {
                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    ->where('users.name', 'like', '%' . $name . '%')
                    ->where('admincategories.name', 'like', '%' . $categoryName . '%')
                    ->orderBy('id', 'desc')
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            } else if (isset($name)) {
                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    ->where('users.name', 'like', '%' . $name . '%')
                    ->orderBy('id', 'desc')
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            } else if (isset($categoryName)) {
                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    ->where('admincategories.name', 'like', '%' . $categoryName . '%')
                    ->orderBy('id', 'desc')
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            } else {
                $mymedia = Mymedia::join('admincategories', 'admincategories.id', '=', 'mymedia.categoryId')
                    ->join('users', 'users.id', '=', 'mymedia.userId')
                    ->orderBy('id', 'desc')
                    ->get(['mymedia.*', 'admincategories.name as categoryname', 'users.name as username', 'users.package']);
            }



            return view('admin.media.downloads', \compact('mymedia', 'category'));
        } catch (\Throwable $th) {
            throw $th;
            // 

        }
    }
}
