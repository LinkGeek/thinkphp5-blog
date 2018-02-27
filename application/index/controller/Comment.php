<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\Comment as CommentModel;
class Comment extends Common
{
    public function add()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录');
        } else {
            $comment = new CommentModel();
            $id = input('id');
            $uid = session('userid');
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['fid'] = $id;
                $data['uid'] = session('userid');
				$data['mid'] = input('mid');
				$member = Db::name('member');
				$member->where('userid', session('userid'))->setInc('point', config('point.EDIT_POINT'));
				$member->where('userid', input('mid'))->setInc('reply', 1);
				$forum = Db::name('forum');
				$forum->where('id', $id)->setInc('reply', 1);
                if ($comment->add($data)) {
                    return json(array('code' => 200, 'msg' => '回复成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '回复失败'));
                }
            }
        }
    }
	public function edit()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录');
        } else {
            $id = input('id');
            $uid = session('userid');
            $comment = new CommentModel();
            $a = $comment->find($id);
            if (empty($id) || $a == null || $a['uid'] != $uid) {
                $this->error('亲！您迷路了');
            } else {
                if (request()->isPost()) {
                    $data['id'] = $id;
					$data['content'] = input('content');
                    if ($comment->edit($data)) {
                        return json(array('code' => 200, 'msg' => '修改成功'));
                    } else {
                        return json(array('code' => 0, 'msg' => '修改失败'));
                    }
                }
                $tptc = $comment->alias('c')->join('forum f', 'f.id=c.fid')->field('c.*,f.title')->find($id);
		        $this->assign('tptc', $tptc);
                return view();
            }
        }
    }
    public function dels()
    {
        if (session('userid')!=1) {
            $this->error('亲！你迷路了');
        } else {
			$id = input('id');
			$fid = input('fid');
			$forum = Db::name('forum');
			$forum->where('id', $fid)->setDec('reply', 1);
			if (db('comment')->delete($id)) {
				return json(array('code' => 200, 'msg' => '删除成功'));
			} else {
				return json(array('code' => 0, 'msg' => '删除失败'));
			}
		}
    }
}