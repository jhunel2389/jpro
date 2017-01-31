<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App, Auth, View, Redirect;
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

    public function getReadMailView($type,$id)
    {
        $userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        $mail = ContactUs::find($id);
        $mail['read'] = 1;
        $mail->save();
        if($type == "inbox"){
            $count = count(ContactUs::where('isTrash','=',0)->get());
        }
        else{
            $count = count(ContactUs::where('isTrash','=',1)->get());
        }
        
        return View::make('admin.mail.readMail')
                ->with("userInfo",$userInfo)
                    ->with("fullname",$fullname)
                         ->with('mt',"ml")
                            ->with('mm',$type)
                                ->with('mail',$mail)
                                    ->with('count',$count)
                                        ->with('unreadMailCount',$this->unreadMailCount())
                                            ->with('unreadTrashCount',$this->unreadTrashCount());
    }

    public function postMessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $company = $request->input('company');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $data = new ContactUs();
        $data['name']       = $name;
        $data['email']      = $email;
        $data['company']    = $company;
        $data['subject']    = $subject;
        $data['message']    = $message;
        if($data -> save())
        {
            return Redirect::Route('getContactUs')->with('success','Message sent.');
        }
        else{

        }
    }
}
