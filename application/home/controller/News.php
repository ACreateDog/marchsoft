<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;

class News{

	public function news(){
        $list = Db::table('march_news')->field('march_news.id,title,writer,march_news.created_at,page_views,status')
                    ->where('status',1)
                    ->paginate(10);
        $page = $list->render();
        // var_dump($list);
        // exit();
        return view('news')->assign('content',$list)
                          ->assign('page',$page);
    }
    
    public function detail(){
    	return view('detail');
    }
    
}