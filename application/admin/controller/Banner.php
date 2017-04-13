<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\BannerModel;
use app\admin\model\ImgModel;
class Banner extends Controller
{
    /**
     * 后台banner管理页面
     * @param
     * @return 模版输出
     */
    public function change(){
        $list = BannerModel::join('march_imgs','march_imgs.img_id = march_banner.img_id')
            ->field('march_banner.id,march_banner.img_link,march_banner.img_id,march_banner.is_top,march_banner.status,march_imgs.url,march_imgs.created_at')
            ->order('march_banner.status desc')
            ->order('march_banner.is_top desc')
            ->paginate(5);
        $this->assign('list',$list);
		return $this->fetch();
	}
    /**
     * 后台banner添加页面
     * @param
     * @return 试图
     */
	public function add(){
		return view('add');
	}

    /**
     * 后台banner添加(或修改)方法(上传图片,图片入库)
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
            unlink(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image'.DS.$url[count($url)-2].DS.$img_name[0].'.'.$img_name[1]);
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
            $baseImg->created_at = time();
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
    /**
     * 后台banner禁(启)用方法(上传图片,图片入库)
     * @param $id 禁(启)用的banner  ID;  $status 当前banner的状态
     * @return
     */
	public function changeStatus($id,$bannerStatus){
        $banner = BannerModel::get($id);
        if($bannerStatus==1){
            $banner->status = 0;
        }else{
            $banner->status = 1;
        }
        if($banner->save()){
            return redirect(url('admin/banner/change'));
        }else{
            return $banner->getError();
        }
    }
    /**
     * 后台banner置顶方法
     * @param $id 要置顶的banner ID;$is_top 当前情况下已置顶的元素标记
     * @return
     */
    public function setTop($id){
        $banner = BannerModel::get($id);
        $top = new BannerModel;
        $top->where('is_top',1)->update(['is_top'=>0]);
        $banner->is_top = 1;
        if($banner->save()){
            return redirect(url('admin/banner/change'));
        }else{
            return $banner->getError();
        }
    }
}