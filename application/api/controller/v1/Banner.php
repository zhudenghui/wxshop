<?php

namespace  app\api\controller\v1;
use app\api\validate\IDMustBeInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerException;
use Exception;
use Think\Exception as ThinkException;
use think\Exception;

class Banner
{
    public  function getBanner($id)

    {
        $basevalidate=new IDMustBeInt();

        $basevalidate->gocheck();

        $banner=BannerModel::getBannerByID($id);

        if(!$banner){

            throw new BannerException();

        }
        try{
            1/0;
            
        }catch(Exception $ex){

            throw new Exception($ex);
            
        }
        
        return $banner;
    }

}
