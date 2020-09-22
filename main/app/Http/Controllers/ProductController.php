<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
    public function store(Request $request, $cat)
    {

        is_null($request['like']) ? $like = 0 : $like = $request['like'];

        Product::create([

            "name" => $request->name,
            "desc" => $request->desc,
            "category" => $cat,
            "imagePath" => $this->uploadImage($request),
            "like" => $like,

        ]);

        return redirect()->back()->with('success', 'Berhsail ditambah !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $data = Product::find($id);        

        is_null($request->image) ? $image = $data["imagePath"] : $image = $this->uploadImage($request);
        $data->update([

            "name" => $request->name,
            "desc" => $request->desc,
            "imagePath" => $image

        ]);

        return redirect()->back()->with('success', 'Berhsail diubah !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'Berhsail dihapus !!');
    }

    public static function uploadImage($req){

        $data = $req->file('image');

        $imageName = time().'.'.$data->getClientOriginalExtension();

        $data->move(public_path('images-all'), $imageName);
       
        return $imageName;
    }

    public function getByCat($cat){

        $data = DB::table('products')->where('category',$cat)->get();
        
        return response()->json($data);
    }
}
