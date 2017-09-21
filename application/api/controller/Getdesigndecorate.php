<?php
/**
 * Created by PhpStorm.
 * User: wqj
 * Date: 2017/9/25
 * Time: 16:40
 */
namespace app\api\controller;

use think\Controller;
use think\Db;

class Getdesigndecorate extends Controller

{
    public function getDesigndecorate()
    {
        $data = Db::name("interiordesign")->where('id', '<=', 3)->select();
        return json(array(
            'data' => $data,
            'status' => 1,
            'result' => '查询成功',
        ));
    }
}