<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// 定义URL
if (!defined('WEB_URL')) { 
$url = rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/'); 
define('WEB_URL', (('/' == $url || '\\' == $url) ? '' : $url)); 
}

// 定义应用目录
define('APP_PATH','./application/');

// 加载框架引导文件
require './thinkphp/start.php';
