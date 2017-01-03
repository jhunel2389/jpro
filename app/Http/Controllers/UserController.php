<?php 
namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\PasswordRecovery;
use Validator;
use Response;
use Auth;
use Redirect;
use View;
use DateTime;
use Request;
use Hash;
use URL;
use Mail;
use App;
class UserController extends Controller {

	public function getLogin()
	{
		return View('admin.user.login');
	}
	
	public function postLogin()
	{
		$validator = Validator::make(Request::all(), array(
			'txtUsername' => 'required',
			'txtPassword' => 'required'
		));
		if ($validator -> fails())
		{
			return  Response::json(array(
	                    'status'  => 'fail',
	                    'message'  => 'Fill out all fields.',
	                ));
		}
		else
		{
			$source = Request::get('source');
			$remember = (Request::has('remember')) ? true : false;
			
			$field = filter_var(Request::get('txtUsername'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
			$auth = Auth::attempt(array(
				$field => Request::get('txtUsername'),
				'password' => Request::get('txtPassword'),
			), $remember);

			if($auth)
			{
				if($source == "client")
				{
					return 1;
				}
				else
				{
					$adminLvl = ['1','2','3'];
					if(in_array(Auth::User()['isAdmin'],$adminLvl))
					{
						//App::make("App\Http\Controllers\GlobalController")->auditTrail("user",Auth::User()['id'],"Login");
						return 1;
					}
					else
					{
						Auth::logout();
					}
				}
				
			}
			return  Response::json(array(
                    'status'  => 'fail',
                    'message'  => 'You input invalid credentials. Please Try again.',
                ));
		}
	}

	public function getLogout()
	{
		//App::make("App\Http\Controllers\GlobalController")->auditTrail("user",Auth::User()['id'],"Logout");
		Auth::logout();
		return Redirect::route('cusIndex');
	}
}