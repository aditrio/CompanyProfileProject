<?php

namespace App\Http\Controllers;

use App\Notif;
use App\News;
use App\ImageUser;
use App\User;
use App\Product;
use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class DashController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

    	$data = News::latest()->get();
    	$head = News::where('headline',1)->get();
    	$products = Product::latest()->get();

        $mostProd = Product::orderBy('like','desc')->get();
        $image = ImageUser::where('user_id', Auth::id())->first();
        $notif = Notif::latest()->first();

    	return view('Dashboard.Page.main',[

            'data' => $data, 
            'head' => $head, 
            'products' => $products, 
            'mostProd' => $mostProd,
            'imageUser' => $image,
            'notif' => $notif,


        ]);
    }

    public function admin() {

        $image = ImageUser::where('user_id', Auth::id())->first();
        $notif = Notif::latest()->first();
        $notifAll = Notif::latest()->get();
        $message = Message::latest()->get();


        return view('Dashboard.Page.admin',[

            'imageUser' => $image,
            'notif' => $notif,
            'notifAll' => $notifAll,
            'message' => $message


        ]);
    }

    public function updateUser($id, Request $req){



        $user = User::find($id)->first();

        $user->update([

            'name' => $req->name,

        ]);

        $imageUser = ImageUser::where('user_id',$id)->first();


        if(is_null($imageUser)){
            ImageUser::create([

                'user_id' => $id,
                'imagePath' => $this->uploadImage($req),

            ]);
        }else {

            if (is_file($req->image)) {
                $imageUser->update([

                    'imagePath' => $this->uploadImage($req),

                 ]);
            }
        }

        return redirect()->back()->with('success','berhasil diubah');

    }

    public function readAll(){

        DB::table('notifs')->where('has_read', '=', '0')->update(array('has_read' => '1'));


        return redirect()->back()->with('success','Done !!');

    }

    public function readAllMessage(){

        DB::table('messages')->where('status', '=', '0')->update(array('status' => '1'));


        return redirect()->back()->with('success','Done !!');

    }

    public static function uploadImage($req){

        $data = $req->file('image');

        $imageName = time().'.'.$data->getClientOriginalExtension();

        $data->move(public_path('images-user'), $imageName);
       
        return $imageName;
    }
}
