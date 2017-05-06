<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\PHP\www\marchsoft/application/home\view\project\project.html";i:1493426246;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>项目展示</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="__CSS__/news-project.css">
</head>
<body>
	<section id="projectSource">
		<nav id="project-menu">
			<ul id="project-menu-ul">
				<li id="news-date"><div id="select-date" name="select-date">时间</div></li>
				<li @click="">最新</li>
			</ul>
		</nav>		
		<div class="project-show">
			
		</div>
	</section>
	<script src="__JS__/datePicker.js"></script>
	<script>
	var date;
	var calendar = new datePicker();
		calendar.init({
			'trigger': '#select-date', /*按钮选择器，用于触发弹出插件*/
			'type': 'ym',/*模式：date日期；datetime日期时间；time时间；ym年月；*/
			'minDate':'2006-1-1',/*最小日期*/
			'maxDate':'2099-12-31',/*最大日期*/
			'onSubmit':function(){/*确认时触发事件*/
				var theSelectData=calendar.value;
				date = new Date(theSelectData).getTime()/1000;
				console.log(date);
				console.log(theSelectData);
			},
			'onClose':function(){/*取消时触发事件*/				
			}
		});
		function dateTime(){
			var datetime = new Date();
			console.log(date);
		}
	</script>
</body>
</html>