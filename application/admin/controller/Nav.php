<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\image;
use think\Request;


class Nav extends Controller
{

/*	----------------- 后台管理 -----------------*/

	public function show()
	{
		$list = $this->navTable();
		$this->assign('list',$list);
		return $this->fetch();  
	}
	public function navTable()
	{
		
		return Db::table('march_nav')->join('march_imgs','march_imgs.img_id = march_nav.icon_id','left')->select();
		
	}
/*	自动验证 和 删除自动验证不通过但是可能已经上传的图片*/
	private function autoVal_DeleteImg(){
		$data = $arrayName = array(
				'title' => input('param.title'),
				'nav_link' => input('param.nav_link'),
			);
		$result = $this->validate($data,'Nav');

		if(true !== $result){
			// 需要刪除上传的图片
			if(input('param.icon_url')!='')
				unlink(ROOT_PATH .input('param.icon_url'));
			// 验证失败 输出错误信息
			$this->error($result);

		}
	}
	public function change(){
		$id = input('param.id');

		//修改导航
		if($id!=0){
			//自动验证方法
			$this->autoVal_DeleteImg();
			//判断图标图片更新
			$result=Db::table('march_nav')
							->join('march_imgs','march_imgs.img_id = march_nav.icon_id','left')
							->where('nav_id', $id)
							->find();
			//dump($result);			
			//如果更换了图片				
			if(input('param.icon_id')!=''){
				$icon_id = input('param.icon_id');
				//删除老图片
				if($result['url']!=''){
					unlink(ROOT_PATH.'..\\'.$result['url']);
					Db::table('march_imgs')->where('img_id',input('param.icon_id'))->delete();
				}

			}else
				$icon_id = $result['icon_id'];
			//录入表单数据
			Db::table('march_nav')
				->where('nav_id', $id)
				->update([
					'title' => input('param.title'),
					'nav_link' => input('param.nav_link'),
					'icon_id' => $icon_id,
					'status' => input('param.status'),
				]);
				
		   $this->success();    
		}else{ // id != 0  添加导航

			//自动验证方法
			$this->autoVal_DeleteImg();
			//判断图标图片是否
			if(input('param.icon_id')=='')
				$this->error('导航图标必须！');  

			$data = $arrayName = array(
				'title' => input('param.title'),
				'nav_link' => input('param.nav_link'),
				'icon_id' => input('param.icon_id'),
				'status' => input('param.status'),
				);
			Db::table('march_nav')->insert($data);
			$this->success();   
		}
	}
	//文件上传
	public function myUpload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('image');
		if($file==null)
			$this->error();
		// 移动到框架应用根目录/public/upload/ 目录下
		$info = $file->move(ROOT_PATH . 'public' . DS . 'upload'.DS.'nav');
		if($info){

			//图片保存名称
			$time = request()->time();
			$img_id = $time.rand(100000,999999); 

			$data = $arrayName = array(
				'img_id' => $img_id,
				'url' =>  '/marchsoft/public/upload/nav/'.str_replace("\\","/",$info->getSaveName()),
				'created_at' => $time,
				);
			//把上传文件信息写入数据库
			Db::table('march_imgs')->insert($data);
			$data=$arrayName = array(
				'id' => $img_id, 
				'url' =>'public\\upload\\nav\\'.$info->getSaveName(),
				);

			//返回文件上传的信息
			$this->success($data);

		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}

/*	----------------- 接口 -----------------*/
	Public function navInterface(){
		$data=Db::table('march_nav')
		->join('march_imgs','march_imgs.img_id = march_nav.icon_id','left')
		->where('status=1')
		->select();

		//返回文件上传的信息
		$this->success($data);
	}
}