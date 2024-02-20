<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.admin_dashboard');
    }

    public function AdminLoS(){

        return view('admin.list_of_service');
    }
}
