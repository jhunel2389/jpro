<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'prod_price';

    static public function updatePrice($id,$productId,$user)
    {
    	$price = self::find($id);
    	$price['prod_id'] = $productId;
    	$price['status'] = 1;
    	$price['user'] = $user;
    	$price->save();
    }
}
