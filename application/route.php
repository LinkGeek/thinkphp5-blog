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
    'home/:id' => ['index/user/home', ['id' => '\d+']],
    'thread/:id' => ['index/index/thread', ['id' => '\d+']],
    'view/:id' => ['index/index/view', ['id' => '\d+']],
    'edit/:id' => ['index/forum/edit', ['id' => '\d+']],
    'edits/:id' => ['index/comment/edit', ['id' => '\d+']],
	'choice' => ['index/index/choice',['ext'=>'html']],
	'forum' => ['index/index/forum',['ext'=>'html']],
	'search' => ['index/index/search',['ext'=>'html']],
	'add' => ['index/forum/add',['ext'=>'html']],
	'user/set' => ['index/user/set',['ext'=>'html']],
	'user/comment' => ['index/user/comment',['ext'=>'html']],
	'user/message' => ['index/user/message',['ext'=>'html']],
	'user/index' => ['index/user/index',['ext'=>'html']],
	'user/reg' => ['index/login/reg',['ext'=>'html']],
	'user/login' => ['index/login/index',['ext'=>'html']],
    'mobile/home/:id' => ['mobile/user/home', ['id' => '\d+']],
    'mobile/thread/:id' => ['mobile/index/thread', ['id' => '\d+']],
    'mobile/view/:id' => ['mobile/index/view', ['id' => '\d+']],
    'mobile/edit/:id' => ['mobile/forum/edit', ['id' => '\d+']],
    'mobile/edits/:id' => ['mobile/comment/edit', ['id' => '\d+']],
	'mobile/choice' => ['mobile/index/choice',['ext'=>'html']],
	'mobile/forum' => ['mobile/index/forum',['ext'=>'html']],
	'mobile/search' => ['mobile/index/search',['ext'=>'html']],
	'mobile/add' => ['mobile/forum/add',['ext'=>'html']],
	'mobile/user/set' => ['mobile/user/set',['ext'=>'html']],
	'mobile/user/comment' => ['mobile/user/comment',['ext'=>'html']],
	'mobile/user/message' => ['mobile/user/message',['ext'=>'html']],
	'mobile/user/index' => ['mobile/user/index',['ext'=>'html']],
	'mobile/user/reg' => ['mobile/login/reg',['ext'=>'html']],
	'mobile/user/login' => ['mobile/login/index',['ext'=>'html']],
];