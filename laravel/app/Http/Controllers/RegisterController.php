<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * [详情]
     * @return [type] [description]
     */
 
    public function register()
    {	
    	$user_id = Input::get('user_id');
    	if ($user_id) {
    		
    	}else{

    	}
        return view('register');
    }
}