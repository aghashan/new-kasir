<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('/admin/layout/welcome');
    }
    public function dash(){
        return view('/admin/content/dashboard/index');
    }
}
