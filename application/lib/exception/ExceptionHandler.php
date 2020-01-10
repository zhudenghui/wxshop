<?php

namespace app\lib\exception;

use Exception;
use think\Request;
use think\exception\Handle;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorcode;

    public function render(Exception $ex)
    {
    
        if ($ex instanceof BaseException) {
            
            $this->code=$ex->code;
            $this->msg=$ex->msg;
            $this->errorcode=$ex->errorcode;

        } else {
            $switch=true;
            
            if($switch){

                parent::render($ex);

            }else{

                $this->code="500";
                $this->msg="服务器内部错误";
                $this->errorcode="20001";

            }
           
        }

        $request=Request::instance();

        $result=[
            'msg'=>$this->msg,
            'errorcoe'=>$this->errorcode,
            'req_url'=>$request->url()
        ];

        return json($result,$this->code);
    }
}
