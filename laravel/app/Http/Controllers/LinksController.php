<?php

namespace App\Http\Controllers; //注意命名空间

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Models\Encrypt;

class LinksController extends Controller{
	function index(){
	    $model=new Encrypt; //实例化model
	    $data = $model -> getlist(); //调用model层中方法
	    var_dump($data);
	}
}
