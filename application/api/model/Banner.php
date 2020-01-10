<?php

namespace app\api\model;

use think\Db;
use think\Model;

//根据id号来获取banner的信息

class Banner extends Model{
    public static function getBannerByID($id)
    {
     
       $result=db::query('select * from banner_item where id=?',[$id]);
       return json($result);
    }
}