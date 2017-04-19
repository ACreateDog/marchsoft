<?php
/**
 * Created by PhpStorm.
 * User: xunmeng
 * Date: 17/4/13
 * Time: 下午5:47
 */
namespace app\admin\controller;
use think\controller;
use think\Db;
use app\admin\model\TypeModel;
use app\admin\model\ClassModel;
use app\admin\model\ClassTypeModel;
use app\admin\model\ImgModel;

class marchClass extends Controller {
    /**
     * 后台课程管理页面
     * @param
     * @return 模版输出
     * 读取所有以往课程
     */
    public function marchClass(){
        $class = new ClassModel;
        $list = $class->join('march_class_type','march_class.id = march_class_type.class_id')
            ->join('march_type','march_class_type.type_id = march_type.type_id')
            ->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
            ->where('march_class.status',1)
            ->field('march_class.id,march_class.lecturer,march_class.title,march_class.cover_img_id,march_class.video_link,march_class.page_views,march_class.description,march_class.created_at,march_class.updated_at,march_class.status,GROUP_CONCAT(march_type.type) as type,march_imgs.url')
            ->group('march_class.id')->order('march_class.id desc')->order('march_class.status desc')
            ->paginate(4);
        $this->assign('list',$list);
        return $this->fetch();
    }

    /**
     * 后台被删除课程页面
     * @param
     * @return 模版输出
     * 读取所有被删除课程
     */
    public function deletedClass(){
        $class = new ClassModel;
        $list = $class->join('march_class_type','march_class.id = march_class_type.class_id')
            ->join('march_type','march_class_type.type_id = march_type.type_id')
            ->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
            ->where('march_class.status',0)
            ->field('march_class.id,march_class.lecturer,march_class.title,march_class.cover_img_id,march_class.video_link,march_class.page_views,march_class.description,march_class.status,GROUP_CONCAT(march_type.type) as type,march_imgs.url')
            ->group('march_class.id')->order('march_class.id desc')->order('march_class.status desc')
            ->paginate(4);
        $this->assign('list',$list);
        return $this->fetch();
    }

    /**
     * 后台课程添加页面
     * @param
     * @return
     * 需要读取所有已有课程类型以供选择
     */
    public function addClass(){
        $allType = TypeModel::field('type_id,type')->select();
        $this->assign('allType',$allType);
        return $this->fetch();
    }

    public function classType(){
        $allType = TypeModel::field('march_type.type,march_class_type.class_id')->join('march_class_type','march_type.type_id=march_class_type.type_id','left')
            ->group('march_type.type')
            ->select();
        $this->assign('allType',$allType);
        return $this->fetch();
    }

    /**
     * 三月课堂上传方法
     *  @return $arr(添加成功与否的信息'code','msg','data');
     */
    public function upClass(){
        Db::transaction(function(){
            $baseImg = new ImgModel;
            $allType = TypeModel::field('type')->select();
            $title = input('title','');
            $lecturer = input('lecturer','');
            $link = input('link','');
            $desc = input('desc','');
            $type = input('type','');
            $file = request()->file('image');
            $newType = input('newType','');
            $newtypeArr = $this->splitNewType($newType);
            foreach ($newtypeArr as $new) {
                foreach ($allType as $all) {
                    if($new==$all['type']){
                        return redirect(url('admin/marchclass/addClass'));
                    }
                }
            }
            if($file){
                $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image');
                if($info){
                    $time = request()->time();
                    $img_id = $time.rand(100000,999999);
                    $baseImg->img_id = $img_id;
                    $baseImg->url = DS.'marchsoft' . DS. 'public' . DS . 'upload'. DS . 'image'. DS.$info->getSaveName();
                    $baseImg->created_at = $time;
                    $baseImg->save();
                    $classData = ['lecturer' => $lecturer, 'title' => $title, 'video_link' => $link,'cover_img_id'=>$img_id, 'description' => $desc, 'created_at' => $time, 'updated_at' => $time];
                    $classId = ClassModel::insertGetId($classData);
                    foreach ($this->splitedTypeIdArr($type) as $item) {
                        $class_type_data = ['class_id'=>$classId,'type_id'=>$item];
                        ClassTypeModel::insert($class_type_data);
                    }
                    if(count($newtypeArr)>0){
                        foreach ($newtypeArr as $item) {
                            $newTypeCreated = request()->time();
                            $newtypeId = $newTypeCreated.rand(100000,999999);
                            $typeData = ['type_id'=>$newtypeId,'type'=>$item,'created_at'=>$newTypeCreated];
                            TypeModel::insert($typeData);
                            $newClass_type_data = ['class_id'=>$classId,'type_id'=>$newtypeId];
                            ClassTypeModel::insert($newClass_type_data);
                        }
                    }
                }

            }else{
                $this->error('错误!未选择图片',url('admin/marchclass/addClass'));
            }
        });
        return redirect(url('admin/marchclass/marchClass'));
    }
    /**
     * 删除(恢复)课程的方法
     * @param $id 要删除(恢复)的课程ID
     *  @return $arr(删除成功与否的信息'code','msg','data');
     */
    public function deleteClass($id){
        $class = new ClassModel;
        $id = input('id','');
        $reuse = input('reuse','');
        if($reuse=='1'){
            $count = $class->where('id',$id)->setField('status',1);
        }else{
            $count = $class->where('id',$id)->setField('status',0);
        }
        if($count>0){
            $returnArr = [
                'code'=>1,
                'msg'=>'删除(恢复)成功',
                'data'=>''
        ];
        }else{
            $returnArr = [
                'code'=>0,
                'msg'=>'删除(恢复)失败',
                'data'=>''
            ];
        }
        return json_encode($returnArr);
    }

    /**
     * 查询课程详情的方法
     * @param $id 当前课程ID
     *  @return $arr(请求成功与否的信息'code','msg','data');
     */
    public function classDetail($id){
        $id = input('id','');
        $class = new ClassModel;
        $class_data = $class->where('march_class.id',$id)->join('march_class_type','march_class.id = march_class_type.class_id')
            ->join('march_type','march_class_type.type_id = march_type.type_id')
            ->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
            ->field('march_class.lecturer,march_class.title,march_class.video_link,march_class.description,march_class.status,GROUP_CONCAT(march_type.type) as type,march_imgs.url')
            ->select();
        return json_encode([
            'code'=>0,
            'msg'=>'请求成功',
            'data'=>$class_data
        ]);
    }

    /**
     * 修改课程详情的方法
     * @param $changeId 当前修改的课程ID
     *  @return
     */
    public function changeClass($changeId){
        $baseClass = new ClassModel;
        $baseClassType = new ClassTypeModel;
        $baseType = new TypeModel;
        $changeId = input('changeId','');
        $title = input('title','');
        $lecturer = input('lecturer','');
        $type = input('type','');
        $newType = input('newType','');
        $video_link = input('link','');
        $description = input('desc','');
        $img_url = input('imgUrl','');
        $thisImg = explode('/',$img_url);
        $img_name = explode('.',$thisImg[count($thisImg)-1]);
        $file = request()->file('image');
        $time = request()->time();
        $allData = [
            'title'=>$title,
            'lecturer'=>$lecturer,
            'video_link'=>$video_link,
            'description'=>$description,
            'updated_at'=>$time
        ];
        if($file){
            unlink(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image'.DS.$thisImg[count($thisImg)-2].DS.$img_name[0].'.'.$img_name[1]);
            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upload'. DS . 'image',$thisImg[count($thisImg)-2].DS.$img_name[0]);
        }
        $changeClassCount = $baseClass->where('id',$changeId)->update($allData);
        if($changeClassCount==1){
            $deletedCount = $baseClassType->where('class_id',$changeId)->delete();
            if($deletedCount>0){
                foreach ($this->splitedTypeIdArr($type) as $item) {
                    $class_type_data = ['class_id'=>$changeId,'type_id'=>$item];
                    $baseClassType->insert($class_type_data);
                }
                if(count($this->splitNewType($newType))>0){
                    foreach ($this->splitNewType($newType) as $item) {
                        $newtypeId = $time.rand(100000,999999);
                        $typeData = ['type_id'=>$newtypeId,'type'=>$item,'created_at'=>$time];
                        $baseType->insert($typeData);
                        $newClass_type_data = ['class_id'=>$changeId,'type_id'=>$newtypeId];
                        $baseClassType->insert($newClass_type_data);
                    }
                }
                return redirect(url('admin/marchclass/marchClass'));
            }
        }
    }

    /**
     * 获取所有已有类型ID的方法
     * @param $typeArr 已有类型的数组
     *  @return $typeIdArr 获取到的已有类型的ID的数组
     */
    private function splitedTypeIdArr($typeArr){
        $splitedTypeArr = $this->splitNewType($typeArr);
        $typeIdArr = array();
        $typeIdArr_index = 0;
        foreach ($splitedTypeArr as $row){
            $result = TypeModel::where('type',$row)->field('type_id')->find();
            $typeIdArr[$typeIdArr_index] =$result['type_id'];
            $typeIdArr_index++;
        }
        return $typeIdArr;
    }

    /**
     * 分割类型数据的方法
     * @param $newType 要分割的数据(JSON String类型)
     *  @return $splitedTypeArr 分割后的数组
     */
    private function splitNewType($newType){
        $tempTypes = explode('"',$newType);
        $splitedTypeArr = array();
        $types_index = 0;
        $typeArr_index = 0;
        foreach ($tempTypes as $row){
            if($types_index%2!=0){
                $splitedTypeArr[$typeArr_index] = $row;
                $typeArr_index++;
            }
            $types_index++;
        }
        return $splitedTypeArr;
    }

    /***************************接口********************************/
    /**
     * 三月课堂接口
     * @param $isindex 是否为显示前$num条(0为显示全部,1为显示前$num条)
     *  @return
     */
    public function marchClassInterface($isindex){
        $baseClass = new ClassModel;
        $isindex = input('isindex','');
        $num = input('num','');
        $time = request()->time();
        $thisYear =  date('Y-m-d H:i:s',$time);
        $temp = explode('-',$thisYear);
        $upLimit = strtotime($temp[0].'-01-01');
        $lowLimit = strtotime(($temp[0]+1).'-01-01');
        if($isindex=='0'){
            $allClass = $baseClass->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                ->where('march_class.created_at','between',[$upLimit,$lowLimit])
                ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                ->order('march_class.page_views desc')
                ->select();

        }else if($isindex=='1'){
            $allClass = $baseClass->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                ->order('march_class.created_at desc')->limit($num)
                ->select();
        }
        if(count($allClass)>0){
            $returnData = [
                'code'=>1,
                'msg'=>'请求成功',
                'data'=>$allClass
            ];
        }else{
            $returnData = [
                'code'=>0,
                'msg'=>'暂无启用状态的课程',
                'data'=>[]
            ];
        }
        return json_encode($returnData);
    }

    /**
     * 三月课堂筛选接口
     * @param $isindex 是否为显示前$num条(0为显示全部,1为显示前$num条)
     *  @return
     */
    public function screenInterface(){
        $baseClass = new ClassModel;
        $screenYear = input('year','');
        $screenMonth = input('month','');
        $screenType = input('type','');
        $screenLecturer = input('lecturer','');
        if($screenYear==''){
            $returnData = [
                'code'=>0,
                'msg'=>'请选择一个年份',
                'data'=>[]
            ];
            return json_encode($returnData);
        }else{
            if($screenMonth==''){
                $upLimit = strtotime($screenYear.'-01-01');
                $lowLimit = strtotime((intval($screenYear)+1).'-01-01');
            }else{
                $upLimit = strtotime($screenYear.'-'.$screenMonth.'-01');
                $lowLimit = strtotime($screenYear.'-'.intval($screenMonth+1).'-01');
            }
            if($screenType==''&&$screenLecturer==''){
                $list = $baseClass->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                    ->where('march_class.created_at','between',[$upLimit,$lowLimit])
                    ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                    ->order('march_class.id desc')->order('march_class.status desc')
                    ->select();
            }else{
                if($screenType!=''&&$screenLecturer==''){
                    $list = $baseClass->join('march_class_type','march_class.id = march_class_type.class_id')
                        ->join('march_type','march_class_type.type_id = march_type.type_id')
                        ->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                        ->where('march_class.created_at','between',[$upLimit,$lowLimit])->where('march_type.type',$screenType)
                        ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                        ->order('march_class.id desc')->order('march_class.status desc')
                        ->select();
                }else if($screenType==''&&$screenLecturer!=''){
                    $list = $baseClass->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                        ->where('march_class.created_at','between',[$upLimit,$lowLimit])->where("march_class.lecturer",$screenLecturer)
                        ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                        ->order('march_class.id desc')->order('march_class.status desc')
                        ->select();
                }
                else if($screenType!=''&&$screenLecturer!=''){
                    $list = $baseClass->join('march_class_type','march_class.id = march_class_type.class_id')
                        ->join('march_type','march_class_type.type_id = march_type.type_id')
                        ->join('march_imgs','march_class.cover_img_id = march_imgs.img_id')
                        ->where('march_class.created_at','between',[$upLimit,$lowLimit])->where("march_class.lecturer",'like',$screenLecturer)->where('march_type.type','like',$screenType)
                        ->field('march_class.title,march_class.lecturer,march_class.video_link,march_class.description,march_class.page_views,march_class.description,march_imgs.url')
                        ->order('march_class.id desc')->order('march_class.status desc')
                        ->select();
                }
            }
            $returnData = [
                'code'=>1,
                'msg'=>'请选择一个年份',
                'data'=>$list
            ];
            return json_encode($returnData);
        }
    }

    /**
     * 三月课堂类别接口
     * @param
     *  @return
     */
    public function marchTypeInterface(){
        $type = new TypeModel;
        $allType = $type->field('type')->select();
        if(count($allType)>0){
            $returnData = [
                'code'=>1,
                'msg'=>'请求成功',
                'data'=>$allType
            ];
        }else{
            $returnData = [
                'code'=>0,
                'msg'=>'暂无启用状态的课程',
                'data'=>[]
            ];
        }
        return json_encode($returnData);
    }

    /**
     * 三月课堂讲课人接口
     * @param
     *  @return
     */
    public function marchLecturerInterface(){
        $class = new ClassModel;
        $allLecturer = $class->field('lecturer')->group('lecturer')->select();
        if(count($allLecturer)>0){
            $returnData = [
                'code'=>1,
                'msg'=>'请求成功',
                'data'=>$allLecturer
            ];
        }else{
            $returnData = [
                'code'=>0,
                'msg'=>'暂无启用状态的课程',
                'data'=>[]
            ];
        }
        return json_encode($returnData);
    }
}