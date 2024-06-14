<?php

namespace App\Http\Controllers\reseller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('reseller.dashboard.index');
    }
}
