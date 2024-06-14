<?php

namespace App\Http\Controllers\designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('designer.dashboard.index');
    }
}
