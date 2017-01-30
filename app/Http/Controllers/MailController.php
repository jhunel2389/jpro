<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App, Auth;
use App\Models\Info;

class MailController extends Controller
{
    public function index()
    {
    	$userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        return view('admin.mail.index')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                    ->with('mt','ml');
    }
}
