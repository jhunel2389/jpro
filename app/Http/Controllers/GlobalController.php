<?php 
namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPrice;
use App\Models\ProductImage;
use Auth;
use DB;
use Input;
use Response;
use Request;

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
				"prod_image" => "productImage/".$productImage['img_file'],
				"prod_thumb_img" => $productThumbimg, 
			);
		}
		else
		{
			return null;
		}
	}

	public function productByCategory($cid)
	{
		$getProducts = Product::where('pro_cat_id',"=",$cid)->where('status',"=",1)->get();//pluck('id')->toArray();
		$response = array();

		foreach ($getProducts as $getProduct) {
				$productPrice = ProductPrice::where('prod_id','=',$getProduct['id'])->where('status','=',1)->first();
				$response[] = array(
	                "prod_name" => $getProduct["name"],
	                "prod_image" => "2-tm_home_default.jpg",
	                "prod_description" => $getProduct["description"],
	                "prod_price_new" => "$".number_format((empty($productPrice) ? "0" : $productPrice['price']), 2, '.', ''),
	                "prod_price_old" => "$".number_format((empty($productPrice) ? "0" : "0"), 2, '.', ''),
	                "prod_price_reduction" => "0%",
	            );
			}
		return $response;
	}
}