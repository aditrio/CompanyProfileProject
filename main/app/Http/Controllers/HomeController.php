<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\News;
use App\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Pages.home');
    }

    public function tentang()
    {
        return view('Pages.tentang');
    }

    public function berita()
    {
        $news = News::latest()->get();

        return view('Pages.berita',['news' => $news]);
    }
}
