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
        $products = App::make("App\Http\Controllers\ProductController")->newProduct();
        return view('customer.category.index')->with('products',$products)
                                                    ->with('categories',$categories)
                                                        ->with('cat_name',$name);
    }

    public function getByProduct($name)
    {
        $categories =  App::make("App\Http\Controllers\GlobalController")->activeCategories();
        $products = App::make("App\Http\Controllers\ProductController")->newProduct();
        return view('customer.product.index')->with('products',$products)
                                                    ->with('categories',$categories)
                                                        ->with('cat_name',$name);
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
                    $path1 = public_path('productImage/' . $iname);
                    $path2 = public_path('productThumbnail/' . $tn_name);
                    $newResizing = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],270);
                    $move = Image::make($image->getRealPath())->resize($newResizing['width'],$newResizing['height'])->save($path1);
                    $newResizingTN = App::make('App\Http\Controllers\GlobalController')->imageResized($data[0],$data[1],98);
                    $move_tn = Image::make($image->getRealPath())->resize($newResizingTN['width'],$newResizingTN['height'])->save($path2);
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

    public function newProduct()
    {
        $response = array(
            array(
                "prod_name" => "Crochet necklace - The boa friend",
                "prod_image" => "2-tm_home_default.jpg",
                "prod_description" => "Donec quis egestas neque. Integer mattis velit nisi, quis adipiscing augue.",
                "prod_price_new" => "$122.51",
                "prod_price_old" => "$128.96",
                "prod_price_reduction" => "-5%",
            ),
            array(
                "prod_name" => "Red Dichroic Bead Embroidered Earrings",
                "prod_image" => "10-tm_home_default.jpg",
                "prod_description" => "Proin venenatis quam non nunc placerat, ac posuere erat suscipit.",
                "prod_price_new" => "$628.96",
                "prod_price_old" => "",
                "prod_price_reduction" => "",
            ),
            array(
                "prod_name" => "Harry potter mini painting pendant necklace",
                "prod_image" => "19-tm_home_default.jpg",
                "prod_description" => "Mi sit amet porta, neque velit volutpat sapien, eleifend rhoncus arcu elit et.",
                "prod_price_new" => "$394.64",
                "prod_price_old" => "$428.96",
                "prod_price_reduction" => "-8%",
            ),
            array(
                "prod_name" => "Beaded book lover Bracelet",
                "prod_image" => "28-tm_home_default.jpg",
                "prod_description" => "Nunc luctus dictum tortor, ac euismod dolor vulputate at.",
                "prod_price_new" => "$122.51",
                "prod_price_old" => "",
                "prod_price_reduction" => "",
            ),
            array(
                "prod_name" => "Pumpkin Earrings - Halloween Orange Czech",
                "prod_image" => "37-tm_home_default.jpg",
                "prod_description" => "Donec quis egestas neque. Integer mattis velit nisi, quis adipiscing augue.",
                "prod_price_new" => "$428.96",
                "prod_price_old" => "",
                "prod_price_reduction" => "",
            ),
            array(
                "prod_name" => "Kitsch Necklace Neon Laser Cut Choice of 3",
                "prod_image" => "46-tm_home_default.jpg",
                "prod_description" => "Proin venenatis quam non nunc, ac posuere erat suscipit. Suspendisse potenti.",
                "prod_price_new" => "$428.96",
                "prod_price_old" => "",
                "prod_price_reduction" => "",
            ),
            array(
                "prod_name" => "Little Girls Bracelet Pink and Blue",
                "prod_image" => "55-tm_home_default.jpg",
                "prod_description" => "Mi sit amet porta, neque velit volutpat sapien, eleifend rhoncus arcu elit et.",
                "prod_price_new" => "$632.15",
                "prod_price_old" => "",
                "prod_price_reduction" => "",
            ),
            array(
                "prod_name" => "Red Jasper and Swarovski Crystal Necklace",
                "prod_image" => "64-tm_home_default.jpg",
                "prod_description" => "Nunc luctus dictum tortor, acvulputate at. Donec eros in pharetra rutrum.",
                "prod_price_new" => "$563.42",
                "prod_price_old" => "$640.25",
                "prod_price_reduction" => "-12%",
            )
        );

        return $response;
    }

    public function deleteImage(Request $request)
    {
        $filename = $request->input('filename');
        $img = ProductImage::where('thumbnail_img','=',$filename)->first();
        File::delete(env("FILE_PATH_INTERVENTION").'productImage/'.$img['img_file']);
        File::delete(env("FILE_PATH_INTERVENTION").'productThumbnail/'.$img['thumbnail_img']);
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
}
