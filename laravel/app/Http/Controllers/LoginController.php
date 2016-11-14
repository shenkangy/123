<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use View;
use Input;
use Illuminate\Support\Facades\Input;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * [详情]
     * @return [type] [description]
     */
 
     public function login(Request $request)
    {
    	$name = $request->input('user_name');
    	die;
    	if ($data) {
    		$username = $data['user_name'];
    		$password = $data['password'];
    		$user =  $users = DB::select("select * from users where user_name = '$username'");
    		// var_dump($user);die;
    		if ($user) {
    			foreach ($users as $user) {
				    $user_id = $user->user_id;
				    $db_pwd =  $user->password;
				}

	    		if ($password == $db_pwd) {
	    			session(['user_id' => $user_id]);
	    			return view("index");
	    		}else{
	    			echo "密码不正确";
	    		}
    		}else{
    			echo "账号不存在";
    		}
    		
    	}else{
        	return view('login');	
    	}
    }
}