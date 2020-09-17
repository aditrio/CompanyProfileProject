<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() {

    	return view('Dashboard.Page.main');
    }
}
