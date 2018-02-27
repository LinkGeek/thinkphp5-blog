<?php
namespace app\mobile\controller;

use think\Controller;
use think\Db;
use app\index\model\Forum as ForumModel;
class Forum extends Common
{
    public function add()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录');
        } else {
            $forum = new ForumModel();
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['open'] = config('web.WEB_OPE');
                $data['view'] = 1;
                $data['uid'] = session('userid');
                $data['description'] = mb_substr(strip_tags(htmlspecialchars_decode($data['content'])), 0, 100, 'utf-8');
                $member = Db::name('member');
                $member->where('userid', session('userid'))->setInc('point', config('point.ADD_POINT'));
                if ($forum->add($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $category = Db::name('category');
            $tptc = $category->select();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
            return view();
        }
    }
    public function edit()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录');
        } else {
            $id = input('id');
            $uid = session('userid');
            $forum = new ForumModel();
            $a = $forum->find($id);
            if (empty($id) || $a == null || $a['uid'] != $uid) {
                $this->error('亲！您迷路了');
            } else {
                if (request()->isPost()) {
					$data=[
    			    'title'=>input('title'),
                    'tid'=>input('tid'),
                    'keywords'=>input('keywords'),
					'content'=>input('content'),
                    ];
					$data['id'] = $id;
                    $data['description'] = mb_substr(strip_tags(htmlspecialchars_decode($data['content'])), 0, 100, 'utf-8');
                    if ($forum->edit($data)) {
                        return json(array('code' => 200, 'msg' => '修改成功'));
                    } else {
                        return json(array('code' => 0, 'msg' => '修改失败'));
                    }
                }
                $category = Db::name('category');
                $tptc = $forum->find($id);
                $tptcs = $category->select();
                $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
				$tags = config('web.WEB_TAG');
                $tagss = explode(',', $tags);
		        $this->assign('tagss', $tagss);
                return view();
            }
        }
    }
}