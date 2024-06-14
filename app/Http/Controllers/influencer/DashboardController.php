<?php

namespace App\Http\Controllers\influencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('influencer.dashboard.index');
    }
}
