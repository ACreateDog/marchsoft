<?php

/**
 * Created by PhpStorm.
 * User: feifei
 * Date: 2017/4/12
 * Time: 下午2:34
 */

namespace app\admin\controller;

use app\admin\model\ImgsModel;
use app\admin\model\NewsModel;
use think\Db;
use think\Exception;
use think\Request;

class News{

    use ImgUrl;
    /**
     *  请求方法：get
     *  请求参数：id  int  必须
     *
     *
     * @return string
     */
    public function getNewsDetailById()
    {


        $id = \request()->get('id');
        if (is_numeric($id) || empty($id) || intval($id) < 0){
            return json_encode([
                'code'=>0,
                'msg'=>'参数有误',
                'data'=>[]
            ]);
        }
        $returnData = [];

        Db::startTrans();

        $news =  NewsModel::get(intval($id));
        //阅读量 加1
        $news->page_views = (intval($news->page_views) + 1);
        $sv =  $news->save();
        if ($sv === false){
            //更新失败
            Db::rollback();

            return json_encode([
                'code'=>0,
                'msg'=>'加载详情有误',
                'data'=>[]
            ]);
        }else{
            //操作成功
            Db::commit();
        }

        $returnData['title']      = $news->title;
        $returnData['content']    = $news->content;
        $returnData['created_at'] = $news->created_at;
        $returnData['author']     = $news->writer;
        $returnData['page_views'] = intval($news->page_views);


        return json_encode([
            'code'=>1,
            'msg'=>'success',
            'data'=>$returnData
        ]);
    }
    /**
     * 获取新闻列表 get 请求
     *
     * 参数： int  page 必须的
     *
     * @return string
     */
    public function getNewsList()
    {

        $page = \request()->get('page');
        if (is_numeric($page) || empty($page) || intval($page) < 0){
            return json_encode([
                'code'=>0,
                'msg'=>'参数有误',
                'data'=>[]
            ]);
        }
        $returnData = [];
        $news = new  NewsModel();
        $list= $news->where('status',1)
            ->field('march_news.id,title,march_news.created_at,page_views,content,url')
            ->join('march_imgs','cover_img_id = march_imgs.img_id')
            ->order('march_news.created_at asc')
            ->paginate(10)->toArray();

        $dataList = $list['data'];
        foreach ($dataList as $key => $value){

            $returnData[] = [
                'id'=>$value['id'],
                'title'=>$value['title'],
                'created_at'=>$value['created_at'],
                'content'=>$value['content'],
                'url'=>$value['url'],
                'short'=>mb_substr(strip_tags($value['content']) ,0,150,"utf-8"),
                'page_views'=>$value['page_views']
            ];
        }
        return json_encode([
            'code'=>1,
            'msg'=>'success',
            'data'=>$returnData
        ]);
    }
    /**
     *获取最近的新闻，新闻条数自定义
     *请求方式为 get
     * @param $newsNum 新闻的条数
     * @return string
     */
    public function getRecentNews()
    {

        $newsNum = \request()->get('num');



        if (is_numeric($newsNum) || empty($newsNum) || intval($newsNum) < 0){

            return json_encode($returnData = [
                'code'=>0,
                'msg'=>'参数有误',
                'data'=>[]
            ]);
        }

        $news = new  NewsModel();
        $list= $news->where('status',1)
            ->field('march_news.id,title,march_news.created_at,content,url')
            ->join('march_imgs','cover_img_id = march_imgs.img_id')
            ->order('march_news.created_at asc')
            ->select();


        $deleteNums = count($list)-intval($newsNum);
        if (intval($deleteNums) < 0){
            $deleteNums  = 0;
        }

        array_splice($list,0,$deleteNums);

        $dataArr = [];

        foreach ($list as $key =>$value) {
            $dataArr[] = [
                'news_id'=>$value->id,
                'img_url' => $value->url,
                'title' => $value->title,
                'content' => strip_tags($value->content),
            ];
        }

        $returnData = [
            'code'=>1,
            'msg'=>'success',
            'data'=>$dataArr
        ];

        return json_encode($returnData);
    }

    /**
     * 添加新闻
     * @return $this
     */
    public function addnews(Request $request)
    {

        $newsId = $request->get('id');

        if (empty($newsId)){
            $newsId = -1;
        }
//        echo $newsId;
        return view('add')->assign('id',$newsId);
    }

    /**
     *
     * 通过id获取到
     * @return string
     */
    public function getNewsById(){
        $newsId = \request()->get('newsId');

        if (intval($newsId) == -1 || empty($newsId)){
            return json_encode(array(
                'code' => 0,
                'msg' =>'it is Nothing!',
                'data'=>[]
            ));
        }

        $news = new  NewsModel();
        $data =  $news->get(intval($newsId))->toArray();

        $content = $data['content'];
        $title   = $data['title'];
        $writer = $data['writer'];
        $cover_img_id = $data['cover_img_id'];


        $img = new  ImgsModel();
        $imgData = $img->field('url')->where('img_id',$cover_img_id)->paginate(1)->toArray();
        $url = '';
        if (count($imgData['data'])){
            $url = $imgData['data'][0]['url'];
        }

        if ($data){
            return json_encode(array(
                'code' => 1,
                'msg' =>'success',
                'data'=>[
                    'writer' => $writer,
                    'title' =>$title,
                    'content' =>$content,
                    'url' =>$this->getImageUrl($url)
                    ]
            ));
        }
    }

    /**
     *  保存信息
     * @return \Exception|string
     */
    public function save(Request $request)
    {
        $msgArr = [];
        $author = null;
        $title = $request->post('title');
        $author = $request->post('author');
        $content = $request->post('content');
        $cover = $request->post('cover');
        $file = request()->file('photo');

        $id = $request->post('id');

        if (intval($id) !== -1){

            return $this->updataNewsOprateTable(\request());
        }

        if (empty($title)){
            $msgArr['code'] = 2;
            $msgArr['msg'] = '标题不能为空哦'.$cover;
            $msgArr['data'] = [];

            return json_encode($msgArr);
        }

        if (empty($author)){
            $msgArr['code'] = 2;
            $msgArr['msg'] = "作者不能为空哦";
            $msgArr['data'] = [];

            return json_encode($msgArr);
        }
        if (empty($content)){
            $msgArr['code'] = 2;
            $msgArr['msg'] = "内容不能为空哦";
            $msgArr['data'] = [];

            return json_encode($msgArr);
        }

        $uploadInfo = null;
        $root = $_SERVER['DOCUMENT_ROOT'];
        $filePath = config('upload_path');
        $fileAbs = $root.$filePath;
        if (!is_dir($fileAbs)){
            mkdir($fileAbs,0777,true);
        }
        $saveID = (time() . rand(100000,999999)).($file->getExtension());
        $uploadInfo = $file->validate(['size'=>556780,'ext'=>'jpg,png,gif'])->move($fileAbs);

        $arr = explode($root,$uploadInfo->getPathname());
        $dbURL = $arr[1];
        if ($uploadInfo){

            Db::startTrans();
            try{
                $requestTime = $_SERVER['REQUEST_TIME'];
                $news = model('NewsModel');

                $news->writer = $author;
                $news->title = $title;
                $news->content = $content;
                $news->cover_img_id = $saveID;
                $news->created_at = $requestTime;
                $news->updated_at  = $requestTime;

                $img = model('ImgsModel');
                $img->img_id = $saveID;
                $img->url = $dbURL;
                $img->created_at = $requestTime;

                $news->save();
                $img->save();
                Db::commit();
            }catch (\Exception $exception){

                Db::rollback();
                return $exception;
            }

            return json_encode(array(
                'code'=>1,
                'msg'=>'success',
                'data'=>['filePaht'=>$filePath,'path'=>$arr[count($arr)-1]]
            ));
        }else{
            echo $file->getError();
        }
    }

    /**
     * 所有新闻
     * @return $this
     */
    public function allnews()
    {

        $news = new NewsModel();
        $list = $news->field('march_news.id,title,writer,march_news.created_at,page_views,status')
                    ->where('status',1)
//                     ->join('march_imgs','cover_img_id = march_imgs.img_id')
                     ->paginate(10);

        $page = $list->render();

        return view('all')->assign('content',$list)
                          ->assign('page',$page);
    }

    /**
     * 下架操作
     * @return string
     */
    public function putdown()
    {
        $id = \request()->get('id');

        if (empty($id)){
            return json_encode(array(
                'code'=>0,
                'msg'=>'id是空',
                'data'=>[]
            ));
        }


        $news = new NewsModel();
        $rlt = $news->where('id',$id)
             ->update(['status'=>0]);

        if ($rlt){
            return json_encode(array(
                'code'=>1,
                'msg'=>'下架成功！',
                'data'=>[]
            ));
        }

        return json_encode(array(
            'code'=>0,
            'msg'=>'下架失败，请重试！',
            'data'=>[]
        ));
    }


    /**
     * 异步获取图片
     * @return string
     */

    public function getImage(){
        $news = new NewsModel();
        $status =  intval(\request()->get('status'));

        $list = $news->field('march_news.id,status,url')
            ->where('status',$status)
            ->join('march_imgs','cover_img_id = march_imgs.img_id')
            ->paginate(10)->toArray();

        foreach ($list['data'] as $key => $value){
            $list['data'][$key]['url'] = $this->getImageUrl($list['data'][$key]['url']);
        }

        return json_encode(array(
            'code'=>1,
            'msg'=>'success',
            'data'=>$list
        ));
    }

    /**
     *新闻上架
     * @return string
     */
    public function setUp()
    {
        $id = \request()->get('id');

        if (empty($id)){
            return json_encode(array(
                'code'=>0,
                'msg'=>'页面不合法',
                'data'=>[]
            ));
        }


        $news = new NewsModel();
        $rlt = $news->where('id',$id)
            ->update(['status'=>1]);

        if ($rlt){
            return json_encode(array(
                'code'=>1,
                'msg'=>'上架成功！',
                'data'=>[]
            ));
        }

        return json_encode(array(
            'code'=>0,
            'msg'=>'上架失败，请重试！',
            'data'=>[]
        ));
    }


    /**
     *
     * 以修改数据库为代价，来增删图片 ，性能不是最优但是最有效
     * @param Request $request
     * @return \think\response\Redirect
     */

    public function updataNewsOprateTable(Request $request)
    {
        $id = $request->post('id');
        $title = $request->post('title');
        $author = $request->post('author');
        $content = $request->post('content');
        $file = $request->file('photo');
        $news = new NewsModel();
        $requestTime = $_SERVER['REQUEST_TIME'];
        Db::startTrans();
        try{
            $saveID = null;
            if($file){
                //如果上传了图片，就产生一个随机ID
                $saveID = (time() . rand(100000,999999)).($file->getExtension());
                //更新数据库，更新图片ID
                $updateR = $news ->save([
                    'title'=>$title,
                    'writer'=>$author,
                    'content'=>$content,
                    'cover_img_id'=>$saveID,
                    'updated_at'=>$requestTime,
                    'status' =>1
                ],[
                    'id'=>$id
                ]);
            }else{
                //没有更新图片
                $updateR = $news ->save([
                    'title'=>$title,
                    'writer'=>$author,
                    'content'=>$content,
                    'updated_at'=>$requestTime,
                    'status' =>1
                ],[
                    'id'=>$id
                ]);
            }

            //文章更新成功，开始操作图片
            if ($updateR !== false &&  $file) {

                $root = $_SERVER['DOCUMENT_ROOT'];
                $path = $request->post('path');

                //删除原来的图片信息

                $opCount = ImgsModel::destroy(['url'=>$path]);
                $filePath = config('upload_path');
                //拼接上传路径
                $imgPath = $root.$filePath;

                if ($opCount && (($uploadInfo = $file->move($imgPath)) !== false)) {
                    //得到入库图片路径
                    $arr = explode($root,$uploadInfo->getPathname());
                    $dbURL = $arr[1];

                    //图片入库，ID为前面生成的ID
                    $img = model('ImgsModel');
                    $img->img_id = $saveID;
                    $img->url = $dbURL;
                    $img->created_at = $requestTime;
                    $rlt = $img->save();


                    if ($rlt !== false && unlink($root.$path) === true){
                        // 只有数据库信息更新完毕、图片完成上传、本地图片删除成功以后才会提交事务
                        Db::commit();
                    }else{
                        Db::rollback();
                    }

                } else {
                    Db::rollback();
                }
            }else{
                Db::commit();

            }
        }catch (Exception $exception){
            Db::rollback();
        }

        url();
        return redirect('/marchsoft/admin/news/allnews');
    }

    /**
     * 不操作数据库的方式来更新图片，仅仅是替换了图片
     * 性能体验在低并发的情况下最优 <废弃>
     *
     * @param Request $request
     * @return \think\response\Redirect
     */

    public function updataNews(Request $request){

        $id = $request->post('id');
        $title = $request->post('title');
        $author = $request->post('author');
        $content = $request->post('content');
        $file = $request->file('photo');
        $root = $_SERVER['DOCUMENT_ROOT'];
        $news = new NewsModel();
        Db::startTrans();
        try{
            $updateR = $news ->save([
                'title'=>$title,
                'writer'=>$author,
                'content'=>$content,
                'status' =>1
            ],[
                'id'=>$id
            ]);

            if ($updateR !== false &&  !empty($file)) {

                $path = $request->post('path');

                $imgPath = $root . $path;
                $imgName = basename($imgPath);
                $imgArr = explode($imgName, $imgPath);

                if (is_file($imgPath) && file_exists($imgPath) && unlink($imgPath) && (($file->move($imgArr[0], $imgName)) !== false)) {
                    Db::commit();

                } else {
                    Db::rollback();
                }
            }else{
                Db::commit();

            }
        }catch (Exception $exception){

            Db::rollback();
        }

        return redirect('/marchsoft/admin/news/allnews');
//        return $this->allnews();

    }
    /**
     * 编辑新闻
     * @return string|\think\response\View
     */
    public function editor()
    {
        $newsId = \request()->get('id');
//        echo $newsId;
        if (!empty($newsId)){
            return $this->addnews(\request());
        }else{
            return json_encode(array(
                'code'=>0,
                'msg'=>'编辑出错，请重试！',
                'data'=>[]
            ));
        }
    }

    /**
     * 已经下架的新闻
     * @return $this
     */
    public function alreadyDown()
    {
        $news = new NewsModel();
        $list = $news->field('march_news.id,title,writer,march_news.created_at,page_views,status')
            ->where('status',0)
            ->paginate(10);

        $page = $list->render();

        return view('down')->assign('content',$list)
            ->assign('page',$page);
    }
}