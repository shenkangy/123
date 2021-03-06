<?php

namespace App\Http\Controllers;

use View;
use Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Input;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //首页
    public function index()
    {
        return view('index');
    }

    //添加
    public function add(){
        $data = Input::get();
        $res=DB::table('laravel')->insert($data);
        if($res){
            return redirect()->action('UserController@show');
        }
    }

    //列表展示
    public function show(){
//        $data = DB::table('user')->get();
//        //print_r($data);
//        return view('show', ['data' => $data]);
        //分页
        $data = DB::table('laravel')->paginate(2);
        return view('show', ['data' => $data]);
    }

    //删除
    public function del($id){
        //echo $id;
        $res = DB::table('laravel')->where('id', '=', $id)->delete();
        if($res){
            return redirect()->action('UserController@show');
        }
    }

    //删除页面
    public function up($id){
        $arr = DB::table('laravel')->where('id','=',$id)->first();
        //print_r($arr);die;
        return view('up', ['arr' => $arr]);
    }

    //修改
    public function update(){
        $data = Input::get();
        //print_r($data);die;
        $id = $data['id'];
        unset($data['id']);
        $res = DB::table('laravel')->where('id',$id)->update($data);
        if($res){
            return redirect()->action('UserController@show');
        }
    } 
}