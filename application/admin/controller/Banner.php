<?php
namespace app\admin\controller;
use app\admin\model\BannerModel;
class Banner extends Base
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
            ->paginate(4);
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

    /***************************接口********************************/
    /**
     * 轮播图接口
     * @param $id 要置顶的banner ID;$is_top 当前情况下已置顶的元素标记
     * @return
     */
    public function bannerInterface(){
        $banner = new BannerModel;
        $allBanner = $banner->join('march_imgs','march_imgs.img_id = march_banner.img_id')
            ->where('march_banner.status',1)
            ->field('march_banner.img_link,march_imgs.url')
            ->order('march_banner.is_top desc')
            ->select();
            var_dump($allBanner);
        if(count($allBanner)>0){
            $returnData = [
                'code'=>1,
                'msg'=>'请求成功',
                'data'=>$allBanner
            ];
        }else{
            $returnData = [
                'code'=>0,
                'msg'=>'暂无启用状态的轮播图',
                'data'=>[]
            ];
        }
        return json_encode($returnData);
    }

}