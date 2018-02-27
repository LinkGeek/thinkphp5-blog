<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Navtop as NavtopModel;
class Navtop extends Common
{
    protected $beforeActionList = ['delsoncate' => ['only' => 'dels']];
    public function index()
    {
        $navtop = new NavtopModel();
        $tptc = $navtop->catetree();
        $this->assign('tptc', $tptc);
        return view();
    }
    public function add()
    {
        $navtop = new NavtopModel();
        if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            if ($navtop->add($data)) {
                return json(array('code' => 200, 'msg' => '添加成功'));
            } else {
                return json(array('code' => 0, 'msg' => '添加失败'));
            }
        }
        $tptc = $navtop->catetree();
        $this->assign('tptc', $tptc);
        return view();
    }
    public function edit()
    {
        $navtop = new NavtopModel();
        if (request()->isPost()) {
            $data = input('post.');
            $data['blank'] = input('blank');
            if ($navtop->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $tptc = $navtop->find(input('id'));
        $tptcs = $navtop->catetree();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
        return view();
    }
    public function dels()
    {
        $dels = db('navtop')->delete(input('id'));
        if ($dels) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
    }
    public function delsoncate()
    {
        $navid = input('id');
        $navtop = new NavtopModel();
        $sonids = $navtop->getchilrenid($navid);
        if ($sonids) {
            db('navtop')->delete($sonids);
        }
    }
    public function changeshow()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $show = db('navtop')->field('show')->where('id', $change)->find();
            $show = $show['show'];
            if ($show == 1) {
                db('navtop')->where('id', $change)->update(['show' => 0]);
                echo 1;
            } else {
                db('navtop')->where('id', $change)->update(['show' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changeblank()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $blank = db('navtop')->field('blank')->where('id', $change)->find();
            $blank = $blank['blank'];
            if ($blank == 1) {
                db('navtop')->where('id', $change)->update(['blank' => 0]);
                echo 1;
            } else {
                db('navtop')->where('id', $change)->update(['blank' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
}