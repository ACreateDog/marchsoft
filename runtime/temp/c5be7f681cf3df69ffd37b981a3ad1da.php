<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/home/view/index/index.html";i:1491901429;s:84:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/home/view/base/base.html";i:1491901714;}*/ ?>
<!DOCTYPE html>
<head>
    <title></title>
    <script src="__VUE__"></script>
</head>
<body>

    <div id="app">
        <div v-html="message"></div>
    </div>

    <script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                message: '<h1>菜鸟教程</h1>'
            }
        })
    </script>




</body>
</html>
