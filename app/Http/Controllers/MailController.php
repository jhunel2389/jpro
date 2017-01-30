<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App, Auth;
use App\Models\Info;
use App\Models\ContactUs;

class MailController extends Controller
{
    public function index()
    {
    	$mails = ContactUs::where('isTrash','=',0)->paginate(10);
    	$userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        return view('admin.mail.index')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                    ->with('mt','ml')
                    	->with('mm','inbox')
							->with('mails',$mails)
								->with('unreadMailCount',$this->unreadMailCount())
									->with('unreadTrashCount',$this->unreadTrashCount());
    }

    public function unreadMailCount()
	{
		return  count(ContactUs::where('read','=',0)->get());
	}
	public function unreadTrashCount()
	{
		return  count(ContactUs::where('read','=',0)->where('isTrash','=',1)->get());
	}
}
