<?php

namespace App\Http\Controllers;

use App\News;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        is_null($request['headline']) ? $headline = 0 : $headline = $request['headline'];


        News::create([



            "title" => $request->title,
            "user_id" => Auth::id(),
            "tags" => $request->tags,
            "content" => $request->content,
            "imagePath" => $this->uploadImage($request),
            "slug" => str_slug($request->title),
            "view" => 0,
            "headline" => $headline,

        ]);

        

        return redirect()->back()->with('success', 'Berhasil ditambah !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = News::find($id);
        $view = $data['view'];
        is_null($data['headline']) ? $headline = 0 : $headline = $request['headline'];
        is_null($request['image']) ? $image = $data : $image = $request;

       
        $data->update([

            "title" => $request->title,
            "user_id" => Auth::id(),
            "tags" => $request->tags,
            "content" => $request->content,
            "imagePath" => $this->uploadImage($image),
            "slug" => str_slug($request->title),
            "view" => $view,
            "headline" => $headline,

        ]);

        $data->save();

        return redirect()->back()->with('success', "Berhasil diubah");
    }

    public function headline($id, Request $request)
    {
        $data = News::find($id);
        
        is_null($data['headline']) ? $headline = 0 : $headline = $request['headline'];
        
        $data->update([


            "headline" => $headline,

        ]);

        $data->save();

        return redirect()->back()->with('success', "Berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function delete($id){

        $data = News::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'Berhasil dihapus !!');

    }

    public static function uploadImage($req){

        $data = $req->file('image');

        $imageName = time().'.'.$data->getClientOriginalExtension();

        $data->move(public_path('images-all'), $imageName);
       
        return $imageName;
    }

    public function getById($id){

        $data =  DB::table('news')->where('id', $id)->first();

        Return response()->json($data);
    }

    public function addView($id){

        $data = News::find($id);

        $view = (int)$data['view'] + 1;
        $data->update([

            "view" => (string)$view,

        ]);

        return response()->json($data);

    }

}





