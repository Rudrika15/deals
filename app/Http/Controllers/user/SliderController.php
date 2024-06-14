<?php

namespace App\Http\Controllers\user;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    public function destroy($id)
    {
        try {
            $slider = Slider::find($id);
            $slider->delete();
            return \redirect()->back()->with('success', 'Slider Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
