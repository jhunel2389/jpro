<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOnCart extends Model
{
    protected $table = 'prod_on_cart';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
