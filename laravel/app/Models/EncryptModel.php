<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class privilegeModel extends Model
{
    /**
     * 查询友情链接
     */
    public function getlist()
    {
    	return 1;
        // return DB::table('tablename')->get();
    }
}