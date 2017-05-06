<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"D:\PHP\www\marchsoft/application/home\view\news\news.html";i:1493513798;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻动态</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="__CSS__/news-project.css">
</head>
<body>
	<section id="classSource">
		<nav id="class-menu">
			<ul id="class-menu-ul">
				<li id="news-date"><div id="select-date" name="select-date">时间</div></li>
				<li @click="showInfo(2)">最新</li>
			</ul>
		</nav>		

		<div id="news-list">
			<div class="dataDiv" v-for="item in data">			
				<div class="dataDiv-img">
					<img v-binf:src="" id="{{item.id}}" alt="{{item.title}}">
				</div>
	            <div class="dataDiv-content">
	                <h3 v-text="item.title"></h3>              
					<p class="news-info"><span v-text="">发布时间:{{item.created_at}}</span><span>阅读量:{{item.page_views}}</span></p>
				</div>            	
            </div>
		</div>
	</section>

	<script src="__VUE__"></script>
	<script src="__JS__/vue-resource.js"></script>
	<script src="__JS__/datePicker.js"></script>
	<script src="__JS__/jquery-1.9.1.js"></script>


	<script>
	var vm = new Vue({
        el:'#news-list',
        data:{
        	data:""
        },
        created:function(){
            var url="{:url('admin/news/getNewsList')}";
         //    var _self = this;
         //    $.get(url,function(data){
         //  		_self.data=eval("(" + data +")");
        	// })
            this.$http.get(url).then(function(data){
            	var json = data.body;
            this.data=eval("(" + json +")");
            },function(response){
            	console.info(response);
        	})
        }
    });
	</script>

	<script>
	var calendar = new datePicker();
		calendar.init({
			'trigger': '#select-date', /*按钮选择器，用于触发弹出插件*/
			'type': 'ym',/*模式：date日期；datetime日期时间；time时间；ym年月；*/
			'minDate':'2006-1-1',/*最小日期*/
			'maxDate':'2099-12-31',/*最大日期*/
			'onSubmit':function(){/*确认时触发事件*/
				var theSelectData=calendar.value;
				var date = new Date(theSelectData).getTime()/1000;
				console.log(date);
				console.log(theSelectData);
			},
			'onClose':function(){/*取消时触发事件*/				
			}
		});
		function dateTime(){
			var datetime = new Date();

		}
	</script>
</body>
</html>