<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/Library/WebServer/Documents/marchsoft/application/admin/view/test/mytest.html";i:1492604885;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="__JS__/vendor/jquery-2.2.4.min.js"></script>
    <script src="__JS__/vendor/bootstrap.min.js"></script>
</head>
<body>
    <div id="main">
        <div id="one">

        </div>
    </div>
</body>
<script type="text/javascript">
//$.ajax({
//    'type':'post',
//    'url':'/marchsoft/admin/banner/bannerInterface',
//    success:function (data) {
//        $mydata = JSON.parse(data);
//        $("#one").append("<p>"+$mydata.code+"~~~轮播图请求信息:"+$mydata.msg+"</p>");
//        for ($i=0;$i<$mydata.data.length;$i++){
//            $("#one").append("<p>图片链接:"+$mydata.data[$i]['img_link']+"~~~图片地址"+$mydata.data[$i]['url']+"</p>");
//        }
//    }
//});
//$.ajax({
//    'type':'post',
//    'url':'/marchsoft/admin/marchClass/marchClassInterface?isindex=0',
//    success:function (data) {
//        $mydata = JSON.parse(data);
//        for ($i=0;$i<$mydata.data.length;$i++){
//            $("#one").append("<p>"+$mydata.code+"</p>");
//            $("#one").append("封面图片:<img style='width: 50px' src='"+$mydata.data[$i]['url']+"'alt=''>");
//            $("#one").append("<p>授课人:"+$mydata.data[$i]['title']+"~~~课程名:"+$mydata.data[$i]['lecturer']+"</p>");
//            $("#one").append("<p>介绍:"+$mydata.data[$i]['description']+"</p>");
//            $("#one").append("<p>浏览量:"+$mydata.data[$i]['page_views']+"</p>");
//            $("#one").append("<p>视频链接:"+$mydata.data[$i]['video_link']+"</p>");
//        }
//    }
//});
//$.ajax({
//    'type':'post',
//    'url':'/marchsoft/admin/marchClass/marchTypeInterface',
//    success:function (data) {
//        $mydata = JSON.parse(data);
//        for ($i=0;$i<$mydata.data.length;$i++){
//            $("#one").append("<p>类别:"+$mydata.data[$i]['type']+"</p>");
//        }
//    }
//});
//$.ajax({
//    'type':'post',
//    'url':'/marchsoft/admin/marchClass/marchLecturerInterface',
//    success:function (data) {
//        $mydata = JSON.parse(data);
//        for ($i=0;$i<$mydata.data.length;$i++){
//            $("#one").append("<p>讲课人:"+$mydata.data[$i]['lecturer']+"</p>");
//        }
//    }
//});
$.ajax({
    'type':'post',
    'url':'/marchsoft/admin/marchClass/screenInterface',
    'data':{'year':'2017','month':'04'},
    success:function (data) {
        $mydata = JSON.parse(data);
        for ($i=0;$i<$mydata.data.length;$i++){
            $("#one").append("封面图片:<img style='width: 50px' src='"+$mydata.data[$i]['url']+"'alt=''>");
            $("#one").append("<p>授课人:"+$mydata.data[$i]['title']+"~~~课程名:"+$mydata.data[$i]['lecturer']+"</p>");
            $("#one").append("<p>介绍:"+$mydata.data[$i]['description']+"</p>");
            $("#one").append("<p>浏览量:"+$mydata.data[$i]['page_views']+"</p>");
            $("#one").append("<p>视频链接:"+$mydata.data[$i]['video_link']+"</p>");
        }
    }
});
</script>
</html>