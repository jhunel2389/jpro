<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use Redirect , Auth, App;
use App\Models\User;
use App\Models\Info;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        return view('admin.product.index')->with("userInfo",$userInfo)->with("fullname",$fullname)->with('mt','db');
    }

    public function addProduct()
    {
        $product_name = Request::get('product_name');
        $product_category = Request::get('product_category');
        $product_description = Request::get('product_description');
        $add = new Product();
        $add['name'] = $product_name;
        $add['pro_cat_id'] = $product_category;
        $add['description'] = $product_description;
        if($add->save())
        {
            //$this->index();
            return Redirect::Route('getProduct')->with('success','Success');
        }
        else{
             //$this->index();
        }
    }
}
