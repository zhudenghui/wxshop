<?php

namespace app\api\model;

use Exception;

class Banner{
    public static function getBannerByID($id)
    {
        try{
            1/0;
        }
        catch(Exception $ex){
                throw $ex;
        }
        return 'this is banner info';
    }
}