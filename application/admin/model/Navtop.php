<?php
namespace app\admin\model;

use think\Model;
class Navtop extends Model
{
    function add($data)
    {
        $result = $this->isUpdate(false)->allowField(true)->save($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function edit($data)
    {
        $result = $this->isUpdate(true)->allowField(true)->save($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function catetree()
    {
        $tptc = $this->order('sort ASC')->select();
        return $this->sort($tptc);
    }
    public function sort($data, $tid = 0, $level = 0)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            if ($v['tid'] == $tid) {
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data, $v['id'], $level + 1);
            }
        }
        return $arr;
    }
    public function getchilrenid($navid)
    {
        $navs = $this->select();
        return $this->_getchilrenid($navs, $navid);
    }
    public function _getchilrenid($navs, $navid)
    {
        static $arr = array();
        foreach ($navs as $k => $v) {
            if ($v['tid'] == $navid) {
                $arr[] = $v['id'];
                $this->_getchilrenid($navs, $v['id']);
            }
        }
        return $arr;
    }
}