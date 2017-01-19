<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect , Auth, App , DateTime, Image, Response;
use App\Models\User;
use App\Models\Info;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use App\Models\ProductPrice;

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
        $allProducts = Product::all();
        $category = ProductCategory::all();
        return view('admin.product.index')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                    ->with('mt','pt')
                        ->with('allProducts',$allProducts)
                            ->with('category',$category);
    }

    public function addProduct(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_category = $request->input('product_category');
        $product_description = $request->input('product_description');
        $product_price = $request->input('product_price');
        $images = $request->file('product_image');
        $product_id = $request->input('product_id');
        if(empty($product_id)){
            $add = new Product();
            $session_message = "Product created.";
        }
        else{
            $add = Product::find($product_id);
            $session_message = "Product updated.";
        }
        $add['name'] = $product_name;
        $add['pro_cat_id'] = $product_category;
        $add['description'] = $product_description;
        if($add->save())
        {
            $updatePrice = ProductPrice::updatePrice($product_price,$add['id'],Auth::User()['id']);
            if (!empty(array_filter($images)))
            {
                foreach($images as $image)
                {
                    $date = new DateTime();
                    $tn_name = date_format($date, 'U').str_random(110).'.'.$image->getClientOriginalExtension();
                    $iname = date_format($date, 'U').str_random(110).'.'.$image->getClientOriginalExtension();
                    $data = getimagesize($image->getRealPath());
                    $newResizing = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],750);
                    $move = Image::make($image->getRealPath())->resize($newResizing['width'],$newResizing['height'])->save(env("FILE_PATH_INTERVENTION").'productImage/'.$iname);
                    $newResizingTN = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],260);
                    $move_tn = Image::make($image->getRealPath())->resize($newResizingTN['width'],$newResizingTN['height'])->save(env("FILE_PATH_INTERVENTION").'productThumbnail/'.$tn_name);
                    if($move && $move_tn){
                        $addProductImage = new ProductImage();
                        $addProductImage['prod_id'] = $add['id'];
                        $addProductImage['img_file'] = $iname;
                        $addProductImage['thumbnail_img'] = $tn_name;
                        $addProductImage['uploader_id'] = Auth::User()['id'];
                        if(!$addProductImage->save()){
                            
                        }
                    }
                }
                return Redirect::Route('getProduct')->with('success',$session_message);
            }
            return Redirect::Route('getProduct')->with('success',$session_message);

        }
        else{
             //$this->index();
        }
    }

    public function addPrice(Request $request)
    {
        $id = $request->input('id');
        $price = $request->input('amount');
        $add = new ProductPrice();
        $add['prod_id'] = $id;
        $add['price'] = $price;
        $add['status'] = 0;
        $add['user'] = Auth::User()['id'];
        if($add->save())
        {
            //$newlyPrice = ProductPrice::where('prod_id','=',$id)->where('user','=',Auth::User()['id'])->get();
            return Response::json(array(
                "status" => "success",
                "message" => "Success to add price.",
                "newAddPrice" => $add['price'],
                "newAddId" => $add['id'],
            )); 
        }

        return Response::json(array(
                "status" => "fail",
                "message" => "Fail to add price.",
            ));
    }

    public function getProductInfo(Request $request)
    {
        $id = $request->input('product');
        $product = Product::find($id);
        $price = ProductPrice::where('prod_id','=',$id)->get();
        $current_price = ProductPrice::where('prod_id','=',$id)->where('status','=',1)->first();
        $images = ProductImage::where('prod_id','=',$id)->get(array('thumbnail_img','id'));
        return Response::json(array(
            "name"          => $product['name'],
            "description"   => $product['description'],
            "price"         => $price,
            "current_price" => !empty($current_price) ? $current_price['id'] : "",
            "product_image"        => !empty($images) ? $images : "",
        ));
    }

    public function updateProduct(Request $request)
    {
        return 1;
    }
}
