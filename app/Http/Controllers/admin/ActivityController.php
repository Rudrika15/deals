<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activity.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.activity.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try {
            $activity = new Activity();
            $activity->title = $request->title;
            $activity->save();
            return \redirect()->back()->with('success', 'Activity created successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return \view('servererror');
        }
    }
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('admin.activity.edit', \compact('activity'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try {
            $id = $request->activityId;
            $activity = Activity::find($id);
            $activity->title = $request->title;
            $activity->save();
            return \redirect()->back()->with('success', 'Activity updated successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return \view('servererror');
        }
    }
    public function delete($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return \redirect()->back()->with('success', 'Activity deleted successfully.');
    }
}
