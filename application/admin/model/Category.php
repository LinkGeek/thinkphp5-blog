<?php
namespace app\admin\model;

use think\Model;
class Category extends Model
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
        $tptc = $this->order('id ASC')->select();
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
    public function getchilrenid($cateid)
    {
        $cates = $this->select();
        return $this->_getchilrenid($cates, $cateid);
    }
    public function _getchilrenid($cates, $cateid)
    {
        static $arr = array();
        foreach ($cates as $k => $v) {
            if ($v['tid'] == $cateid) {
                $arr[] = $v['id'];
                $this->_getchilrenid($cates, $v['id']);
            }
        }
        return $arr;
    }
}