<?php

namespace app\api\validate;

use Exception;

use think\Request;

use think\Validate;


class BaseValidate extends Validate {

   public function gocheck(){

        $req=Request::instance();

        $params=$req->param();
        
        $res=$this->check($params);

        if(!$res){  
            $error=$this->error;
            
            throw new Exception($error);

        }else{

            return true;

        }
        
    }
}