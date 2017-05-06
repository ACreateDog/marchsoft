<?php

namespace app\admin\validate;

use think\Validate;

class Nav extends Validate
{
    protected $rule = [


        
        'title' => 'require|length:4',
        'nav_link' => 'require',
        //'icon_id' => 'require',

    ];

    protected $message = [
        'title.require'  =>  '导航名称不能为空！',
        'title.length'  =>  '导航名称长度应为4！',
        'nav_link.require'  =>  '导航链接不能为空！',
        'icon_id.require'  =>  '导航图标必须！',

    ];

}