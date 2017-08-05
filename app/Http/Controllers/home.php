<?php

namespace App\Http\Controllers;
use Validator;
use Input;
use Hash;
use Auth;
use Session;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\users as CurrentTable;

class Home extends Controller{
      public function __construct()
    {
        $this->files = new \Illuminate\Filesystem\Filesystem;
    }

    public function main(){
 		return view('front.home');
    }

    public function dashboard(){
    			if (Auth::guest()){
                return Redirect::route('register');
                }
      
        $data['name'] = Auth::user()->username;
        $data['title'] = "Home";
    	return view('com.home',$data);
    }

    public function showLogin(){
    			if (Auth::check()){
                return Redirect::route('com');
                }
	    return view('com.login');
	}
    public function showRegister(){
                // if (Auth::check()){
                // return Redirect::route('com');
                // }
        return view('com.register');
    }
	public function doLogin(){
		      //   $user = array(
        //     'username' => Input::get('username'),
        //     'password' => Input::get('password')
        // );
        
        // if (Auth::attempt($user)) {
        return view('com.profile');
        // }
        
        // authentication failure! lets go back to the login page
        // return Redirect::route('login')
        //     ->with('flash_error', 'Your username/password combination was incorrect.')
        //     ->withInput();
	}
    public function Profile(){
        return view('com.profile');

    }
        public function doRegister(){
                $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        // if (Auth::attempt($user)) {
            // return Redirect::route('com');
        // }
        
        // authentication failure! lets go back to the login page
        return Redirect::route('login');
            // ->with('flash_error', 'Your username/password combination was incorrect.')
            // ->withInput();
    }

	public function logout(){
		if (Auth::guest()){
                return Redirect::route('login');
                }
                Auth::logout();
            return Redirect::route('login');

	}
    public function refresh(){
        foreach ($this->files->files(storage_path().'framework/views') as $file)
        {
            $this->files->delete($file);
        }
        return Redirect::route('dashboard');
    }
}
