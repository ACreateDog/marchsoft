<?php
/**
 * Created by PhpStorm.
 * User: xunmeng
 * Date: 17/4/19
 * Time: 下午3:32
 */
namespace app\admin\controller;
use think\Controller;
class Test extends Controller
{
    public function mytest(){
        return $this->fetch();
    }
}