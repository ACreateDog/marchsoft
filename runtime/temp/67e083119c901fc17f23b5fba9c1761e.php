<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"D:\PHP\www\marchsoft/application/home\view\index\index.html";i:1493513672;s:57:"D:\PHP\www\marchsoft/application/home\view\base\base.html";i:1493368690;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>首页</title>
    <link rel="stylesheet" href="__CSS__/index.css">
    <link rel="stylesheet" href="__CSS__/example.css">
    <link rel="stylesheet" href="__CSS__/font-awesome.min.css">
    <!-- css -->
    
</head>
  
<body>
    <div class="container">
        <div id="slides">
            <div v-for="image in images"><a href=""><img v-bind:src="image.url"></a></div>
        </div>
    </div>

    <!-- 主体内容 -->
    
		<!-- 导航栏 -->
	<nav class="nav-slide" id="nav-slide">
		<div class="nav-slide-c">
			<ul class="nav-lc">
				<li v-for="nav in navs">
					<a href="">
						<img class="images" style="border-radius: 50%;"v-bind:src="nav.icon" alt=""><span v-text="nav.navName"></span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<section id="newsSource">
		<div>
			<p>新闻悦读</p>
			<div class="dataDiv" v-for = "item in items">
				<div class="dataDiv-img">
					<img v-bind:src="item.img" alt="">
				</div>
                <div class="dataDiv-content">
                    <h3 v-text="item.title"></h3>
                    <p class="news-info"><div class="abstract"><span v-text="item.abstract"></span></div><span class="late">最新</span></p>
                </div>
            </div>
            <center><a id="more" href="../news/news">查看更多&gt;&gt;</a></center>
		</div>
	</section>

	<!-- 精雕细课 -->
	<section id="classSource">
		<div>
			<p>精雕细课</p>
			<div class="classImg" v-for = "">
				<div class="classData-img">
					<img v-bind:src="" src="__IMG__/slide-1.jpg" alt="">
				</div>
				<a href="">查看详情&gt;&gt;</a>
            </div>
		</div>
	</section>

	<!-- 项目展示 -->
	<section id="objectSource">
		<div>
			<p>项目展示</p>
			<div class="classImg" v-for = "">
				<div class="classData-img">
					<img v-bind:src="" src="__IMG__/slide-1.jpg" alt="">
				</div>
				<a href="">查看详情&gt;&gt;</a>
            </div>
		</div>
	</section>	


    <script src="__VUE__"></script>
    <script src="__JS__/jquery-1.9.1.js"></script>
    <script src="__JS__/jquery.min.js"></script>
    <script src="__JS__/jquery.touchSwipe.min.js"></script>
    <script src="__JS__/jquery.slides.min.js"></script>
    <script>
    $(function() {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });
    </script>
    <script type="text/javascript">
        var vm = new Vue({
            el: "#slides",
            data: {
                images:"" 
            },
            methods: {
                getBanner: function() {
                    $.ajax({
                        type: "get",
                        url: "{:url('admin/banner/bannerInterface')}",
                        async: true,
                        success: function(data) {
                            vm.images = data.images;
                                                        
                        },
                    });
                }
            }
        })
    </script>
    <script>
    var imgData={
        url: "{:url('admin/banner/bannerInterface')}",
    }
    var vm=new Vue({
        el: '#slides',
        data: {
            images: []
        },
        ready: function(){
            this.$http.get(imgData.url).then(function(response){
                this.images=response.data;
                console.log(images);
            })
        }
    })
    </script>
    <!-- js -->
    
	<script>
    var news = new Vue({
        el: '#newsSource',
        data: {
            items: [
                {title: '不一样的五龙山一日游', img: '__IMG__/slide-1.jpg',abstract: '2017-04-15qweqweqweqwe', amount: 82},
                {title: '不一样的五龙山一日游', img: '__IMG__/slide-2.jpg',
                    abstract: '2017-04-15qweqweqwewe', amount: 82},
                {title: '不一样的五龙山一日游', img: '__IMG__/slide-3.jpg',
                    abstract: '2017-04-15qweqweqweqweqwe', amount: 82}               
            ],
        }
    })
   	
    var news = new Vue({
        el:'.nav-lc',
        data: {
            navs: [
                {navName:'新闻动态',icon:'__IMG__/icon.jpg'},
                {navName:'三月课堂',icon:'__IMG__/icon.jpg'},
                {navName:'项目展示',icon:'__IMG__/icon.jpg'}
            ]
        }
    })
    </script>

</body>
</html>
