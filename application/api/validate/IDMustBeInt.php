<?php

namespace app\api\validate;

class IDMustBeInt extends BaseValidate{
    protected $rule=[
        'id'=>'require|ismustint'
    ];
    protected function ismustint($value,$rule="",$data="",$field=""){
            if (is_numeric($value)&&is_int($value+0)&&($value+0)>0) {
                
                return true;
            } else {
                return $field.'必须是正整数';
            }
            
    }
}