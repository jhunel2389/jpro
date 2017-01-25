<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'prod_category';

    static public function getActiveCategory()
    {
    	return self::where("status","=",1)->get();
    }
}
