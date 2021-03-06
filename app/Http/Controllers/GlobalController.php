<?php 
namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPrice;
use App\Models\ProductImage;
use App\Models\ProductOnCart;
use Auth;
use DB;
use Input;
use Response;
use Request, URL;

class GlobalController extends Controller {

	public function userInfo($id)
	{
		return Info::where('user_id','=',$id)->first();
	}

	public function userInfoList($uid)
	{
		$id = (!empty($uid)) ? $uid : Request::get("uid");
		$userInfo = $this->userInfo($id);
		$username = User::find($id);
		if(!empty($userInfo))
		{
			return array(
						"user_id" 		=> $userInfo['user_id'],
						"un"			=> $username['username'],
						"userDp"		=> null,//$this->userDpv2($userInfo['user_id']),
						"fname"			=> $userInfo['first_name'],
						"lname"			=> $userInfo['last_name'],
						"dm"			=> $userInfo['created_at'],
						"lvl"			=> $username['isAdmin'],
					);
		}
	}

	//resize image to default max width or high
	public function imageResized($width,$height,$size)
	{
		if($width <= $size && $height <= $size)
		{
			return array(
					"width"	=> $width,
					"height" => $height,
				);
		}
		else
		{
			$percentagetoLess = ($width > $height) ? ((($width - $size)/$width)*100) : ((($height - $size)/$height)*100);
			return array(
					"width"	=> intval($width * ((100-$percentagetoLess) / 100)),
					"height" => intval($height * ((100-$percentagetoLess) / 100)),
				);
		}
	}

	//get all active categories
	public function activeCategories()
	{
		return ProductCategory::whereStatus(1)->get();
	}

	public function productInfo($pid)
	{
		$productInfo = Product::find($pid);
		$productPrice = ProductPrice::where('prod_id','=',$pid)->where('status','=',1)->first();
		$productImage = ProductImage::where('prod_id','=',$pid)->where('status','=',0)->where('primary_featured','=',1)->first();
		$productThumbimg = ProductImage::where('prod_id','=',$pid)->select(array('thumbnail_img'))->get();
		if (!empty($productInfo) && !empty($productPrice) && !empty($productPrice))
		{
			return array(
				"prod_name" => $productInfo['name'],
				"prod_description" => $productInfo['description'],
				"prod_price" => "$".number_format($productPrice['price'], 2, '.', ''),
				"prod_image" => env('FILE_PATH_CUSTOM')."productImage/".$productImage['img_file'],
				"prod_image_tn" => env('FILE_PATH_CUSTOM')."productThumbnail/".$productImage['thumbnail_img'],
				"prod_thumb_img" => $productThumbimg,
				"prod_price_new" => "$".number_format((empty($productPrice) ? "0" : $productPrice['price']), 2, '.', ''),
                "prod_price_old" => "$".number_format((empty($productPrice) ? "0" : "0"), 2, '.', ''),
                "prod_price_reduction" => "0%",
                "prod_url"	=> URL::Route('getByProduct', $productInfo["name"]),
			);
		}
		else
		{
			return null;
		}
	}

	public function productByCategory($cid)
	{
		$getProducts = Product::where('pro_cat_id',"=",$cid)->where('status',"=",1)->select(array('id'))->get();//pluck('id')->toArray();
		return $this->generateBatchProdData($getProducts);
	}

	public function topNewProduct($take)
	{
		$topNewProduct = Product::take($take)->where('status',"=",1)->orderBy('created_at','desc')->select(array('id'))->get();
		return $this->generateBatchProdData($topNewProduct);
	}

	public function generateBatchProdData($pids)
	{
		$response = array();
		foreach ($pids as $pid) {
				$productPrice = ProductPrice::where('prod_id','=',$pid['id'])->where('status','=',1)->first();
				$productImage = ProductImage::where('prod_id','=',$pid['id'])->where('status','=',0)->where('primary_featured','=',1)->first();
				$productInfo = Product::find($pid['id']);
				$response[] = array(
					"prod_id"	=> $productInfo["id"],
	                "prod_name" => $productInfo["name"],
	                "prod_image" => env('FILE_PATH_CUSTOM')."productImage/".$productImage['img_file'],//"2-tm_home_default.jpg",
	                "prod_image_tn" => env('FILE_PATH_CUSTOM')."productThumbnail/".$productImage['thumbnail_img'],
	                "prod_image_mid" => env('FILE_PATH_CUSTOM')."productImageMid/".$productImage['mid_img'],
	                "prod_description" => $productInfo["description"],
	                "prod_price_new" => "$".number_format((empty($productPrice) ? "0" : $productPrice['price']), 2, '.', ''),
	                "prod_price_old" => "$".number_format((empty($productPrice) ? "0" : "0"), 2, '.', ''),
	                "prod_price_reduction" => "0%",
	                "prod_url"	=> URL::Route('getByProduct', $productInfo["name"]),
	            );
			}

		return $response;
	}

	public function onCartList()
	{
		$onCartLists = ProductOnCart::where('cus_id','=',Auth::User()['id'])->get();
		
		$response = array();
		foreach ($onCartLists as $onCartList) {
				$productPrice = ProductPrice::where('prod_id','=',$onCartList['prod_id'])->where('status','=',1)->first();
				$productImage = ProductImage::where('prod_id','=',$onCartList['prod_id'])->where('status','=',0)->where('primary_featured','=',1)->first();
				$productInfo = Product::find($onCartList['prod_id']);
				$response[] = array(
					"onCart_id" => $onCartList['id'],
					"prod_id"	=> $productInfo["id"],
	                "prod_name" => $productInfo["name"],
	                "prod_image" => env('FILE_PATH_CUSTOM')."productImage/".$productImage['img_file'],//"2-tm_home_default.jpg",
	                "prod_image_tn" => env('FILE_PATH_CUSTOM')."productThumbnail/".$productImage['thumbnail_img'],
	                "prod_image_mid" => env('FILE_PATH_CUSTOM')."productImageMid/".$productImage['mid_img'],
	                "prod_description" => $productInfo["description"],
	                "prod_price_new" => "$".number_format((empty($productPrice) ? "0" : $productPrice['price']), 2, '.', ''),
	                "prod_price_old" => "$".number_format((empty($productPrice) ? "0" : "0"), 2, '.', ''),
	                "prod_price_reduction" => "0%",
	                "prod_qty" => $onCartList['qty'],
	                "prod_total_price" => "$".number_format((empty($productPrice) ? "0" : $productPrice['price']) * $onCartList['qty'], 2, '.', ''),
	                "prod_url"	=> URL::Route('getByProduct', $productInfo["name"]),
	            );
			}

		return $response;
	}

	public function onCartInformation()
	{
		$onCartLists = ProductOnCart::where('cus_id','=',Auth::User()['id'])->get();

	}

	public function checkoutInfo()
	{
		$onCartLists = ProductOnCart::where('cus_id','=',Auth::User()['id'])->get();
		$shippingFee = 0;
		$total = 0;
		foreach ($onCartLists as $onCartList) {
			$productPrice = ProductPrice::where('prod_id','=',$onCartList['prod_id'])->where('status','=',1)->first();
			$total += $productPrice['price'] * $onCartList['qty'];
		}

		return array(
                    "total" => "$".number_format($total, 2, '.', ''),
                    "shippingFee" => "$".number_format($shippingFee, 2, '.', ''),
                );
	}

	public function cartQty(){
		//$response = Auth::User()->cart()->sum('qty');
		//$cart = Auth::User()->cart();

		if(empty($cart)){
			$response = 0;
		} else {
			$response = 3;
		}

		return $response;

	}
}