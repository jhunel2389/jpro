<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Info extends Model
{
	protected $table = 'user_info';

	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    static public function getFullname($id)
    {
    	$fullname = self::where("user_id","=",$id)->first();
        $fullname = $fullname['first_name']." ".$fullname['last_name'];
    	return $fullname;
    }
}