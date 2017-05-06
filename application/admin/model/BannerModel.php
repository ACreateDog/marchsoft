<?php
namespace app\admin\model;

use think\Model;

class BannerModel extends Model
{
	protected $table = 'march_banner';
    protected function getCreatedAtAttr($value,$data){
        return date('Y-m-d',$data['created_at']);
    }
}