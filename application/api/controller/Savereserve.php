<?php
/**
 * Created by PhpStorm.
 * User: wqj
 * Date: 2017/9/19
 * Time: 14:50
 */
namespace app\api\controller;

use think\Controller;
use think\Db;

class Savereserve extends Controller
{
    public function saveReserve($ifcheck, $fast_name, $fast_area, $fast_colour, $fast_phone)
    {
        $result = Db::execute('insert into dede_diyform5(ifcheck,fast_name,fast_area,fast_colour,fast_phone)values (?,?,?,?,?)', [$ifcheck, $fast_name, $fast_area, $fast_colour, $fast_phone]);
        if ($result == 1) {
            return json(array(
                'status' => 1,
                'result' => '预约成功',
            ));
        } else {
            return json(array(
                'status' => 2,
                'result' => '预约失败',
            ));
        }
    }
}