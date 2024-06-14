<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $user = User::count();

        $influencer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Influencer');
            }
        )->count();
        $brand = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Brand');
            }
        )->count();
        $reseller = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Reseller');
            }
        )->count();
        $writer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Writer');
            }
        )->count();
        $designer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Designer');
            }
        )->count();
        return view('admin.dashboard.index', compact('user', 'designer', 'writer', 'reseller', 'brand', 'influencer'));
    }
}
