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
use App\Models\ProductOnCart;

class ProductController extends Controller
{

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
        $category = ProductCategory::getActiveCategory();
        return view('admin.product.index')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                    ->with('mt','pt')
                        ->with('allProducts',$allProducts)
                            ->with('category',$category);
    }

    public function category()
    {
        $userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        $category = ProductCategory::all();
        return view('admin.product.category')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                    ->with('mt','fm')
                        ->with('cc','pc')
                            ->with('category',$category);
    }

    public function getProductByCategory($name)
    {
        $categories =  App::make("App\Http\Controllers\GlobalController")->activeCategories();
        $prodCat = ProductCategory::where('slug','=',$name)->first();
        $products = App::make("App\Http\Controllers\GlobalController")->productByCategory($prodCat['id']);
        return view('customer.category.index')->with('products',$products)
                                                    ->with('categories',$categories)
                                                        ->with('cat_name',$name)
                                                            ->with('dis_name',$prodCat['name'])
                                                                ->with('dis_desc',$prodCat['description'])
                                                                    ->with('br_name',$prodCat['name']);
    }

    public function getByProduct($name)
    {
        $categories =  App::make("App\Http\Controllers\GlobalController")->activeCategories();
        $productInfo = Product::where("name","=",$name)->where('status','=',1)->first();
        $products = App::make("App\Http\Controllers\GlobalController")->productInfo($productInfo['id']);

        return view('customer.product.index')->with('products',$products)
                                                    ->with('categories',$categories)
                                                        ->with('cat_name',$name)
                                                            ->with('br_name',$name);
    }

    public function addProduct(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_category = $request->input('product_category');
        $product_description = $request->input('product_description');
        $product_price = $request->input('product_price');
        $images = $request->file('product_image');
        $product_id = $request->input('product_id');
        $status = $request->input('status');
        if(empty($product_id)){
            $add = new Product();
            $session_message = "Product created.";
        }
        else{
            $add = Product::find($product_id);
            $session_message = "Product updated.";
            $updatePrice = ProductPrice::updatePrice($product_price,$product_id);
        }
        $add['name'] = $product_name;
        $add['pro_cat_id'] = $product_category;
        $add['description'] = $product_description;
        $add['status'] = $status;
        if($add->save())
        {
            if (!empty(array_filter($images)))
            {
                foreach($images as $image)
                {
                    $date = new DateTime();
                    $tn_name = date_format($date, 'U').str_random(10).'.'.$image->getClientOriginalExtension();
                    $iname = date_format($date, 'U').str_random(10).'.'.$image->getClientOriginalExtension();
                    $md_name = date_format($date, 'U').str_random(10).'.'.$image->getClientOriginalExtension();
                    $data = getimagesize($image->getRealPath());
                    $path1 = public_path('productImage/' . $iname);
                    $path2 = public_path('productThumbnail/' . $tn_name);
                    $path3 = public_path('productImageMid/' . $md_name);
                    $newResizing = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],458);
                    $move = Image::make($image->getRealPath())->resize($newResizing['width'],$newResizing['height'])->save($path1);
                    $newResizingTN = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],80);
                    $move_tn = Image::make($image->getRealPath())->resize($newResizingTN['width'],$newResizingTN['height'])->save($path2);
                    $newResizingMd = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],125);
                    $move_md = Image::make($image->getRealPath())->resize($newResizingMd['width'],$newResizingMd['height'])->save($path3);
                    if($move && $move_tn){
                        $addProductImage = new ProductImage();
                        $addProductImage['prod_id'] = $add['id'];
                        $addProductImage['img_file'] = $iname;
                        $addProductImage['thumbnail_img'] = $tn_name;
                        $addProductImage['mid_img'] = $md_name;
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
        $images = ProductImage::where('prod_id','=',$id)->get(array('thumbnail_img','id','primary_featured'));
        return Response::json(array(
            "name"          => $product['name'],
            "description"   => $product['description'],
            "price"         => $price,
            "current_price" => !empty($current_price) ? $current_price['id'] : "",
            "product_image"        => !empty($images) ? $images : "",
            "status"        => $product['status'],
        ));
    }

    public function updateFeatured(Request $request)
    {
        $id = $request->input('image_id');
        $product = $request->input('product_id');
        $value = $request->input('value');
        $affectedRows = ProductImage::where('prod_id', '=', $product)
                                ->where('primary_featured', '=', 1)
                                    ->update(array('primary_featured' => 0));
        $update = ProductImage::find($id);
        $update['primary_featured'] = $value;
        if($update->save())
        {
            return Response::json(array(
                "status" => "success",
                "message" => "Update success.",
            )); 
        }
        return Response::json(array(
                "status" => "fail",
                "message" => "Update fail.",
            ));  
    }

    public function newProduct()
    {   
        $allProducts = Product::where('status','=',1)->get();
        $response = array();
       
            //print_r($allProducts);die();
            if(!empty($allProducts)){
                foreach ($allProducts as $key => $value) {
                    $prodInfo = App::make("App\Http\Controllers\GlobalController")->productInfo($value["id"]);
                    $response[] = array(
                        "prod_name" => $prodInfo["prod_name"],
                        "prod_image" => $prodInfo["prod_image"],
                        "prod_description" => $prodInfo["prod_description"],
                        "prod_price_new" => $prodInfo["prod_price_new"],
                        "prod_price_old" => $prodInfo["prod_price_old"],
                        "prod_price_reduction" => $prodInfo["prod_price_reduction"],
                    );
                }
               
            }

        return $response;
    }

    public function deleteImage(Request $request)
    {
        $filename = $request->input('filename');
        $img = ProductImage::where('thumbnail_img','=',$filename)->first();
        File::delete(env("FILE_PATH_INTERVENTION").'productImage/'.$img['img_file']);
        File::delete(env("FILE_PATH_INTERVENTION").'productThumbnail/'.$img['thumbnail_img']);
        File::delete(env("FILE_PATH_INTERVENTION").'productImageMid/'.$img['mid_img']);
        if($img->delete()){
                
            return Response::json(array(
                    "status" => "success",
                    "message" => "Delete success.",
                    "alert"   => "alert-success"
                ));
        }else{
            return Response::json(array(
                    "status" => "fail",
                    "message" => "Delete fail.",
                    "alert"   => "alert-danger",
                ));
        }
    }

    public function addCategory(Request $request)
    {
        $category_id = $request->input('category_id');
        $name = $request->input('category_name');
        $description = $request->input('category_description');
        $slug = $request->input('category_slug');
        $status = $request->input('category_status');
        if(empty($category_id)){
            $add = new ProductCategory();
            $session_message = "Category created.";
        }
        else{
            $add = ProductCategory::find($category_id);
            $session_message = "Category updated.";
        }
        $add['name'] = $name;
        $add['description'] = $description;
        $add['status'] = empty($status) ? 0 : $status;
        $add['slug'] = $slug;
        if($add->save())
        {
            return Redirect::Route('getCategory')->with('success',$session_message);
        }
    }

    public function getCategoryInfo(Request $request)
    {
        $id = $request->input('category');
        return ProductCategory::find($id);
    }

    public function addToCart(Request $request)
    {
        $pid = $request->input('pid');
        if(Auth::Check())
        {
            $addTocart = new ProductOnCart();
            $addTocart['prod_id'] = $pid;
            $addTocart['cus_id'] = Auth::User()['id'];
            $addTocart['qty'] = 1;
            $addTocart['ip_address'] = $_SERVER['REMOTE_ADDR'];
            if($addTocart->save())
            {
                return Response::json(array(
                    "status" => "success",
                    "message" => "Successfully added to your cart.",
                ));
            }
        }
        return Response::json(array(
                    "status" => "fail",
                    "message" => "Ops!!! Something wrong adding your item to your cart. Please try again.",
                ));
    }

    public function removeToCart(Request $request)
    {
        $pid = $request->input('pid');
        $removeToCart = ProductOnCart::find($pid);
        
        if($removeToCart->delete())
        {
            return Response::json(array(
                    "status" => "success",
                    "message" => "Successfully remove to your cart.",
                ));
        }
        else
        {
            return Response::json(array(
                    "status" => "fail",
                    "message" => "Ops!!! Something wrong removing your item to your cart. Please try again.",
                ));
        }
    }
}
