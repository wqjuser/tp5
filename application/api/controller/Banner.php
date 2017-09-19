<?php
namespace app\api\controller;

use think\Controller;
use think\Db;

/**
 * Created by PhpStorm.
 * User: wqj
 * Date: 2017/9/19
 * Time: 14:48
 */
class Banner extends Controller

{
    public function getBanner()
    {
        $data = Db::name("banner_urls")->where('id', '>=', 0)->select();
        return json(array(
            'data' => $data,
            'status' => 1,
            'result' => '查询成功',
        ));
    }
}