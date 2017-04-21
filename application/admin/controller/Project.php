<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\image;
use think\Request;

class Project extends Controller
{
	public function index(){
		return view('index');
	}
	public function all(){

		$list = Db::table('march_project')->order('status','desc')->where('status', '>', -1)->select();

		foreach ($list as $key => $value) {

			$cover_img = Db::table('march_imgs')->where('img_id',$list[$key]['cover_img_id'])->find();
			$list[$key]['cover_img_url'] = $cover_img['url'];

			$detail_img = Db::table('march_imgs')->where('img_id',$list[$key]['detail_img_id'])->find();
			$list[$key]['detail_img_url'] = $detail_img['url'];
			
		}

		$this->assign('list',$list);
		return $this->fetch();  
	}

	//文件上传
	public function upload(){
		$img = $arrayName = array(
			'cover_img_id' => '', 
			'detail_img_id' => '', 
			);
		$i = 0;
	    // 获取表单上传文件 	    
	    $files = request()->file('image');
	    //判断项目名称是否设置
	    if($_POST['title']=='')
	    	$this->error('名称不能为空');
	    //判断是否上传了两张图片
	    if(sizeof($files)!=2)
	    	$this->error('项目缩略图和详情图必须！');
	    foreach($files as $file){

	        // 移动到框架应用根目录/public/uploads/ 目录下
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'upload'. DS .'project');
	        if($info){
	        	$time = request()->time();
	        	$img_id = $time.rand(100000,999999); 

	        	$data = $arrayName = array(
	        		'img_id' => $img_id,
	        		'url' =>  '/marchsoft/public/upload/project/'.str_replace("\\","/",$info->getSaveName()),
	        		'created_at' => $time,
	        		);
	        	//把上传文件信息写入数据库
	        	Db::table('march_imgs')->insert($data);
	        	$img[$i++] = $img_id;

	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
	    $data = $arrayName = array(
	    	'title' => input('param.title'),
	    	'cover_img_id' => $img[0], 
	    	'detail_img_id' => $img[1], 
	    	'created_at' => request()->time(),
	    	'updated_at' => request()->time(),
	    	);
	    $inf = Db::table('march_project')->insert($data); 
	    if($inf)
	    	$this->success();
	    else
	    	$this->error('发生未知错误，请联系我!');
	}
	/**
	 * 修改项目图片标题
	 * @return [type] [description]
	 */
	public function change(){

		//判断项目名称是否设置
		if($_POST['title']=='')
			$this->error('名称不能为空');
		$id = $_POST['id'];
		$pro = Db::table('march_project')->where('id',$id)->find();
		//从数据库中读出原来的文件路劲，若上传就覆盖掉。
		$cover_img_id = $pro['cover_img_id'];
		$detail_img_id = $pro['detail_img_id'];


	    // 获取表单上传文件 	    
	    $cover_img = request()->file('cover_img');
	    $detail_img = request()->file('detail_img');

	    if($cover_img!=null){
	    	$info = $cover_img->move(ROOT_PATH . 'public' . DS . 'upload'. DS .'project');
	    	
	    	if($info){

	    		$time = request()->time();
	    		$cover_img_id = $time.rand(100000,999999); 


	    		$data = $arrayName = array(
	    			'img_id' => $cover_img_id,
	    			'url' =>  '/marchsoft/public/upload/project/'.str_replace("\\","/",$info->getSaveName()),
	    			'created_at' => $time,
	    			);
	    		//把上传文件信息写入数据库
	    		Db::table('march_imgs')->insert($data);
	    		$old_img_info = Db::table('march_imgs')->where('img_id',$pro['cover_img_id'])->find();
	    		if($old_img_info!=null)
	    			unlink(ROOT_PATH.'..\\'.$old_img_info['url']);
	    		Db::table('march_imgs')->where('img_id',$pro['cover_img_id'])->delete();
	    	}else{
	    	    // 上传失败获取错误信息
	    	    echo $file->getError();
	    	}		
	    }

	    if($detail_img!=null){
	    	$info = $detail_img->move(ROOT_PATH . 'public' . DS . 'upload'. DS .'project');
	    	
	    	if($info){
	    		$time2 = request()->time();
	    		$detail_img_id = $time2.rand(100000,999999); 

	    		$data = $arrayName = array(
	    			'img_id' => $detail_img_id,
	    			'url' =>  '/marchsoft/public/upload/project/'.str_replace("\\","/",$info->getSaveName()),
	    			'created_at' => $time2,
	    			);
	    		//把上传文件信息写入数据库
	    		Db::table('march_imgs')->insert($data);

	    		Db::table('march_imgs')->where('img_id',$pro['detail_img_id'])->delete();
	    	}else{
	    	    // 上传失败获取错误信息
	    	    echo $file->getError();
	    	}		
	    }

	    $data = $arrayName = array(
	    	'title' => input('param.title'),
	    	'cover_img_id' => $cover_img_id, 
	    	'detail_img_id' => $detail_img_id, 
	    	'updated_at' => request()->time(),
	    	'status' => input('param.example-inline-radios'),
	    	);

	    $inf = Db::table('march_project')
	    		->where('id', $id)
				->update($data);
	    if($inf)
	    	$this->success();
	    else
	    	$this->error('发生未知错误，请联系我!');
	}

	/**
	 * @param  [id] 要删除的项目id
	 * @return [type]
	 */
	public function del($id){
	    $data = $arrayName = array(
	    	'status' => -1,
	    	);

	    $inf = Db::table('march_project')
	    		->where('id', $id)
				->update($data);
	}

	// ----------------接口---------------

	public function showAll(){

		$list = Db::table('march_project')->order('created_at','desc')->where('status',1)->select();

		foreach ($list as $key => $value) {

			$cover_img = Db::table('march_imgs')->where('img_id',$list[$key]['cover_img_id'])->find();
			$list[$key]['cover_img_url'] = $cover_img['url'];

			$detail_img = Db::table('march_imgs')->where('img_id',$list[$key]['detail_img_id'])->find();
			$list[$key]['detail_img_url'] = $detail_img['url'];
			
		}
		if (input('param.type')=='true') {
			$this->success($list[0]);
		}else
			$this->success($list);
	}	
}


