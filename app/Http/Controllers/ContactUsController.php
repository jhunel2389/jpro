<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect , Auth, App , DateTime, File, Image, Response;
use App\Models\User;
use App\Models\Info;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use App\Models\ProductPrice;

class ContactUsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  App::make("App\Http\Controllers\GlobalController")->activeCategories();
        $products = App::make("App\Http\Controllers\ProductController")->newProduct();
        return view('customer.contact_us.index')->with('products',$products)
                                                    ->with('categories',$categories)
                                                        ->with('cat_name','')
                                                            ->with('br_name','Contact Us');
    }
}
