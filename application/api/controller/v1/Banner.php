<?php

namespace  app\api\controller\v1;
use app\api\validate\IDMustBeInt;
use app\api\model\Banner as BannerModel;

use Exception;

class Banner
{
    public  function getBanner($id)
    {
        $basevalidate=new IDMustBeInt();
        $basevalidate->gocheck();
        $banner=BannerModel::getBannerByID($id);
        return $banner;
    }
}
