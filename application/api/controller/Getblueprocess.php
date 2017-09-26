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

class Getblueprocess extends Controller

{
    public function getBlueProcess()
    {
        $data = Db::name("bluediamondprocess")->where('id', '<=', 4)->select();
        return json(array(
            'data' => $data,
            'status' => 1,
            'result' => '查询成功',
        ));
    }
}