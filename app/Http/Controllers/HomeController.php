<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Redirect , Auth, App;
use App\Models\User;
use App\Models\Info;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::Check())
        {
            $userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
            $fullname = Info::getFullname(Auth::User()['id']);
            return View('admin.home.index')->with("userInfo",$userInfo)->with("fullname",$fullname)->with('mt','db');
        }
        else
        {
            return Redirect::route('getLogin');
        }
    }

    public function cusIndex()
    {
        $categories =  App::make("App\Http\Controllers\GlobalController")->activeCategories();
        $newProducts = App::make("App\Http\Controllers\ProductController")->newProduct();
        return View("customer.home.index")->with('newProducts',$newProducts)
                                                ->with('categories',$categories);
    }
}
