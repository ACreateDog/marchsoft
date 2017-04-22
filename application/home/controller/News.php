<?php
namespace app\home\controller;

class News{

	public function news(){
        return view('news');
    }

    public function detail(){
    	return view('detail');
    }

}