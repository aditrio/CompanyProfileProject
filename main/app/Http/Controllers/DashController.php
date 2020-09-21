<?php

namespace App\Http\Controllers;


use App\News;
use App\Product;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index() {

    	$data = News::latest()->get();
    	$head = News::where('headline',1)->get();

    	$products = Product::latest()->get();

    	return view('Dashboard.Page.main',['data' => $data, 'head' => $head, 'products' => $products]);
    }
}
