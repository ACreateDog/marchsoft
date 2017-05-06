<?php
/* *
 * Created by PhpStorm.
 * User: xunmeng
 * Date: 17/4/14
 * Time: 上午9:05
 */

namespace app\admin\controller;
use think\Controller;
use app\admin\model\BannerModel;
use app\admin\model\ImgModel;
class Base extends Controller{
    /**
     * 后台上传添加(或修改)方法(上传图片,图片入库)
     * @param
     * @return 试图
     */
    public function upload(){
        $baseBanner = new BannerModel;
        $baseImg = new ImgModel;
        $id = input('bannerId','');
        $img_link = $_POST['imgLink'];
        $file = request()->file('image');
        if($id!=''){
            $banner = BannerModel::get($id);
            $img_id = input('imgId','');
            $img = $baseImg->where('img_id','=',$img_id)->find();
            $url = explode('/',$img->url);
            $img_name = explode('.',$url[count($url)-1]);
            $banner->img_link = $img_link;
//            unlink(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image'.DS.$url[count($url)-2].DS.$img_name[0].'.'.$img_name[1]);
            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image',$url[count($url)-2].DS.$img_name[0]);
            if($info){
                return redirect(url('admin/banner/change'));

            }else{
                $this->error('格式错误!',url('admin/banner/change'));
            }
        }else{
            $img_id = request()->time().rand(100000,999999);
            $baseBanner->img_id = $img_id;
            $baseImg->img_id = $img_id;
            $baseBanner->img_link = $img_link;
            $baseImg->created_at = request()->time();
            // 获取表单上传文件 例如上传了001.jpg   $info->getSaveName()
            if($file){
                $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image');
                if($info){
                    $baseImg->url = DS.'marchsoft' . DS. 'public' . DS . 'upload'. DS . 'image'. DS.$info->getSaveName();
                    if($baseBanner->save()&&$baseImg->save()){
                        $this->success('添加成功!',url('admin/banner/change'));
                    }
                }else{
                    $this->error('格式错误!',url('admin/banner/add'));
                }
            }else{
                $this->error('错误!未选择图片',url('admin/banner/add'));
            }
        }
    }

}