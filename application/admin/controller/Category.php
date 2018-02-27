<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Category as CategoryModel;
class Category extends Common
{
    protected $beforeActionList = ['delsoncate' => ['only' => 'dels']];
    public function index()
    {
        $category = new CategoryModel();
        $tptc = $category->catetree();
        $this->assign('tptc', $tptc);
        return view();
    }
    public function add()
    {
        $category = new CategoryModel();
        if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            if ($category->add($data)) {
                return json(array('code' => 200, 'msg' => '添加成功'));
            } else {
                return json(array('code' => 0, 'msg' => '添加失败'));
            }
        }
        $tptc = $category->catetree();
        $this->assign('tptc', $tptc);
        return view();
    }
    public function edit()
    {
        $category = new CategoryModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($category->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $tptc = $category->find(input('id'));
        $tptcs = $category->catetree();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
        return view();
    }
    public function dels()
    {
        $dels = db('category')->delete(input('id'));
        if ($dels) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
    }
    public function delsoncate()
    {
        $cateid = input('id');
        $category = new CategoryModel();
        $sonids = $category->getchilrenid($cateid);
        if ($sonids) {
            db('category')->delete($sonids);
        }
    }
    public function changeshow()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $show = db('category')->field('show')->where('id', $change)->find();
            $show = $show['show'];
            if ($show == 1) {
                db('category')->where('id', $change)->update(['show' => 0]);
                echo 1;
            } else {
                db('category')->where('id', $change)->update(['show' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changesidebar()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $sidebar = db('category')->field('sidebar')->where('id', $change)->find();
            $sidebar = $sidebar['sidebar'];
            if ($sidebar == 1) {
                db('category')->where('id', $change)->update(['sidebar' => 0]);
                echo 1;
            } else {
                db('category')->where('id', $change)->update(['sidebar' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
}