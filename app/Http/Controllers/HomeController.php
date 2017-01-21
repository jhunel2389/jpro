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
        $userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        return (Auth::Check()) ? View('admin.home.index')->with("userInfo",$userInfo)->with("fullname",$fullname)->with('mt','db') : Redirect::route('getLogin');
    }

    public function cusIndex()
    {
        $newProducts = App::make("App\Http\Controllers\ProductController")->newProduct();
        return View("customer.home.index")->with('newProducts',$newProducts);
    }
}
