<?php
namespace app\admin\controller;
use think\Controller;

class Banner extends Controller
{

    public function index()
    {
    	return $this->fetch();  
    }
}