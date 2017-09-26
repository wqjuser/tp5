<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'useDB' => 'index/index/useDb',
    'addBook' => 'index/index/addBook',
    'chaXun' => 'index/index/chaXun',
    'post' => 'index/index/post',
    'login' => 'api/login/login',
    'getBanner' => 'api/Banner/getBanner',
    'getDesigndecorate' => 'api/Getdesigndecorate/getDesigndecorate',
    'getBlueProcess' => 'api/Getblueprocess/getBlueProcess',
    'getInfoCenter' => 'api/Getinfocenter/getInfoCenter',
    'getAd' => 'api/getAd/getAd',
    'saveReserve' => 'api/Savereserve/saveReserve',
];
