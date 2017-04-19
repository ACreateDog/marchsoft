<?php
/**
 * Created by PhpStorm.
 * User: feifei
 * Date: 2017/4/13
 * Time: 下午12:35
 */

namespace app\admin\controller;

use think\View;

class ErrorPage
{
    static public $errorData = [];
    static public $view      = null;
    static public function addMsg($key,$value){
        if (empty(self::$view))
            self::$view = new  View('error');
        if (!empty($key)){
            self::$errorData[$key] = $value;
        }

    }
    static public function showError(){

        return self::$view;
    }
}