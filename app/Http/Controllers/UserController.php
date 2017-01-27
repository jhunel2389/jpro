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
		return (!Auth::Check()) ? View('admin.user.login') : Redirect()->back();
	}

	public function getRegister()
	{
		return View('admin.user.register');
	}

	public function postRegister()
	{
		$rules = array( 
            'firstname'             => 'required',
            'lastname'              => 'required',  
            'username'              => 'required|unique:users',      
            'email'                 => 'required|email|unique:users', 
            'password'              => 'required',
            'password_confirmation' => 'required|same:password', 
            'terms'                 => 'required' 
        );
        $messages = array(
            'required'          => 'The :attribute is required.',
            'same'              => 'The :others must match.',
            'terms.required'    => 'Check the terms and agreement.'
        );
        $validator = Validator::make(Request::all(), $rules, $messages);
        if ($validator->fails()) {      
            $messages = $validator->messages();
        return Redirect::Route('getRegister')
            ->withErrors($validator)
            ->withInput(Request::except('password', 'password_confirm'));
        }
        else{
        	$username       = Request::get('username');
            $lastname       = Request::get('lastname');
            $firstname      = Request::get('firstname');
            $email          = Request::get('email');
            $password       = Request::get('password');
            $vCode          = str_random(120);

            $user = new User();
            $user['username']   = $username;
            $user['email']      = $email;
            $user['password']   = Hash::make($password);
            $user['isAdmin']   = 1;
            $user['Vcode']      = $vCode;
            if($user -> save())
            {
                $user_Info = new Info();
                $user_Info['user_id']  = $user['id'];
                $user_Info['first_name'] = $firstname;
                $user_Info['last_name'] = $lastname;
                $user_Info['email'] = $email;
                if($user_Info -> save())
                {
                    return Redirect::Route('getLogin')->with('success','Your account has been created successfully and is ready to use.');
                }   
            }
        }
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
					if(Auth::User()['isAdmin'])
					{
						//App::make("App\Http\Controllers\GlobalController")->auditTrail("user",Auth::User()['id'],"Login");
						Auth::logout();
						return  Response::json(array(
				                    'status'  => 'fail',
				                    'message'  => "You're not allowed here.",
			                    ));
					}
					return 1;
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

	public function getUAL()
	{
		$user = new User();
		$userInfo = App::make("App\Http\Controllers\GlobalController")->userInfoList(Auth::User()['id']);
        $fullname = Info::getFullname(Auth::User()['id']);
        $users = Info::whereIn('user_id',$user->adminUsers())->get();
		return view('admin.uam.index')
            ->with("userInfo",$userInfo)
                ->with("fullname",$fullname)
                	->with("users",$users)
	                    ->with('cc','ual')
	                    	->with('mt','uam');
	}
}