<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\News;
use App\Product;
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
        $firstNews = News::latest()->first();

        return view('Pages.berita',[
            'news' => $news,
            'first' => $firstNews
        ]);
    }

    public function gallery()
    {
        $prod = Product::latest()->get();

        return view('Pages.gallery',['prod' => $prod]);
    }

    public function getBy($by) 
    {
        $data = null;

        if($by == 'popular'){

            $data = Product::orderBy('like','desc')->get();            

        }else {
            $data = Product::latest()->get();
        }

        return view('Pages.gallery',['prod' => $data]);
    }
}
