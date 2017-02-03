<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'prod_price';

    static public function updatePrice($id,$productId)
    {
        $updateActive = ProductPrice::where('prod_id','=',$productId)
                                    ->where('status','=',1)
                                    ->update(['status' => 0]);
        $activePrice = self::find($id);
        $activePrice['status'] = 1;
        $activePrice->save();
    }
}
