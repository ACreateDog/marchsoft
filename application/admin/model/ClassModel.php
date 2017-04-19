<?php
/**
 * Created by PhpStorm.
 * User: xunmeng
 * Date: 17/4/13
 * Time: 下午5:46
 */
namespace app\admin\model;
use think\Model;

class ClassModel extends Model{
    protected $table = 'march_class';
    protected function getCreatedAtAttr($value,$data){
        return date('Y-m-d',$data['created_at']);
    }
    protected function getUpdatedAtAttr($value,$data){
        return date('Y-m-d',$data['created_at']);
    }
}