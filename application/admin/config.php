<?php
//配置文件
return [
    'view_replace_str'  =>  [
        '__PUBLIC__'=>'/public/',
        '__ROOT__' => '/marchsoft',
        '__JS__' =>'/marchsoft/public/static/admin/AppUI/js',
        '__CSS__' =>'/marchsoft/public/static/admin/AppUI/css',
        '__IMG__'=>'/marchsoft/public/static/admin/AppUI/img',
        '__UEDITOR__'=>'/marchsoft/public/static/admin/UEditor',
    ],


    'template'   => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '<',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '>',
        // 标签库标签开始标记
        'taglib_begin' => '<',
        // 标签库标签结束标记
        'taglib_end'   => '>',
    ],

    //发送者邮件
    'from_email'=>'2494662681@qq.com',
    //发送验证密码
    'email_password'=>'rexgqxewpytteaea',
    //SMTP主机
    'email_host'=>'smtp.qq.com',
    //发送者姓名
    'from_name' => '三月软件'
];