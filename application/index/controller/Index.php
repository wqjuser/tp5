<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
        return '欢迎你，温清洁';
    }

    public function useDb()
    {
        $data = Db::name("diyform5")->find();
        return json($data);
    }

    public function addBook()
    {
        $result = Db::execute('insert into dede_diyform5(id,ifcheck,fast_name,fast_area,fast_colour,fast_phone)values ("2","0","试一试","上海","新房","12345678901")');
        if ($result == 1) {
            return json('新建成功');
        } else {
            return json('新建失败');
        }
    }

    public function chaXun()
    {
        return json('wqj');
    }

    public function post($ifcheck, $fast_name, $fast_area, $fast_colour, $fast_phone)
    {
        $result = Db::execute('insert into dede_diyform5(ifcheck,fast_name,fast_area,fast_colour,fast_phone)values (?,?,?,?,?)', [$ifcheck, $fast_name, $fast_area, $fast_colour, $fast_phone]);
        if ($result == 1) {
            print_r('data{');
            return json(array(

                'status' => 1,
                'result' => '预约成功',
            ));
            print_r('}');
//            return json('预约成功');
        } else {
            return json('预约失败');
        }
    }

}
