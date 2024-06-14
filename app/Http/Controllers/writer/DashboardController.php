<?php

namespace App\Http\Controllers\writer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        return view('writer.dashboard.index');
    }
}
