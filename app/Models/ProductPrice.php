<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'prod_price';

    static public function updatePrice($id,$productId,$user)
    {
        $updateActive = ProductPrice::where('prod_id','=',$productId)
                                    ->where('status','=',1)
                                    ->update(['status' => 0]);
        $price = self::find($id);
    	$price['prod_id'] = $productId;
    	$price['status'] = 1;
    	$price['user'] = $user;
    	if($price->save())
        {
        	$update = ProductPrice::where('prod_id','=',0)
        							->where('user','=',$user)
            							->update(array(
            								'prod_id' => $productId
            								));
        }
    }
}
