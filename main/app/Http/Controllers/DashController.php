<?php

namespace App\Http\Controllers;


use App\News;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() {

    	$data = News::latest()->get();

    	return view('Dashboard.Page.main',['data' => $data]);
    }
}
