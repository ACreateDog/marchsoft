<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/news/add.html";i:1492675468;s:85:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/base/base.html";i:1492675468;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>三月软件官方网站</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="__IMG__/favicon.png">
    <link rel="apple-touch-icon" href="__IMG__/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="__IMG__/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="__IMG__/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="__IMG__/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="__IMG__/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="__IMG__/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="__IMG__/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="__IMG__/icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="__CSS__/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="__CSS__/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="__CSS__/main.css">

    <!-- Include a specific file here from __CSS__/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="__CSS__/themes.css">
    <link rel="stylesheet" href="__ADMIN_CSS__">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="__JS__/vendor/modernizr-3.3.1.min.js"></script>
    <script src="__JS__/vendor/jquery-2.2.4.min.js"></script>
    <script src="__JS__/vendor/bootstrap.min.js"></script>
    <script src="__JS__/pages/readyDashboard.js"></script>
    <script src="__JS__/plugins.js"></script>
    <script src="__JS__/app.js"></script>

    <script src="__LAYER__/layer.js"></script>

    <!--<script src="__JS__/jquery.form.js"></script>-->

    <script type="text/javascript" src="__JS__/banner/banner.js"></script>


    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="__ADMIN_JS__"></script>

    

    <style type="text/css">

        .all{
            border-top: none;
            border-left: none ;
            border-right: none;
            border-bottom:1px solid #5ccdde;
            height: 45px;
            font-size: 15px;
            padding-left: 10px;
            border-radius: 3px;
            text-align: center;
            z-index: 10;
        }
        .title{

            width: 400px;
        }
        .author{
            margin-left: 250px;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 150px;
        }
        .submit-btn{
            margin-left: 851px;
            margin-top: 20px;
            background-color: #5ccdde;
            border: none;
            margin-bottom: 34px;
            width: 80px;
            height: 34px;
            border-radius: 3px;
            color: white;
            outline: none;
        }

        #file{
            margin: 0px;
            z-index:100;

            font-size:60px;opacity:0;
            filter:alpha(opacity=10);

            width: 100px;
            height: 100px;
        }
        .uploda_img{
            position: absolute;
            display: inline-block;
            height: 100px;
            width: 100px;
            background-color: #ffffff;
            border:1px #5ccdde solid;
            margin-left: -240px;
            margin-top: 0px;
            border-radius: 3px;
            background-size: auto 100px;
            background-repeat: no-repeat;

        }
        .uploda_img span{
            position: absolute;
            display: inline-block;
            font-size: 15px;
            text-align: center;
            width: 100px;
            margin-left: -51px;
            margin-top: 36px;
            color: gray;
        }
    </style>

</head>
<body>
<!-- Page Wrapper -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
    Available classes:

    'page-loading'      enables page preloader
-->
<div id="page-wrapper" class="page-loading">
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in __JS__/app.js) - pageLoading() -->
    <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
    <div class="preloader">
        <div class="inner">
            <!-- Animation spinner for all modern browsers -->
            <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

            <!-- Text for IE9 -->
            <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
        </div>
    </div>
    <!-- END Preloader -->

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available #page-container classes:

        'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

        'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
        'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

        'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

        'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
        'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

        'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

        'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
    -->
    
    <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
        <!-- Alternative Sidebar -->
        <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
            <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
            <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll-alt">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Profile -->
                    <div class="sidebar-section">
                        <h2 class="text-light">Profile</h2>
                        <form action="index.html" method="post" class="form-control-borderless" onsubmit="return false;">
                            <div class="form-group">
                                <label for="side-profile-name">Name</label>
                                <input type="text" id="side-profile-name" name="side-profile-name" class="form-control" value="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-email">Email</label>
                                <input type="email" id="side-profile-email" name="side-profile-email" class="form-control" value="john.doe@example.com">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-password">New Password</label>
                                <input type="password" id="side-profile-password" name="side-profile-password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-password-confirm">Confirm New Password</label>
                                <input type="password" id="side-profile-password-confirm" name="side-profile-password-confirm" class="form-control">
                            </div>
                            <div class="form-group remove-margin">
                                <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- END Profile -->

                    <!-- Settings -->
                    <div class="sidebar-section">
                        <h2 class="text-light">Settings</h2>
                        <form action="index.html" method="post" class="form-horizontal form-control-borderless" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Notifications</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Public Profile</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Enable API</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox"><span></span></label>
                                </div>
                            </div>
                            <div class="form-group remove-margin">
                                <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- END Settings -->
                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Alternative Sidebar -->

        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Sidebar Brand -->
            <div id="sidebar-brand" class="themed-background">
                <a href="index.html" class="sidebar-title">
                    <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">三月后台管理</span>
                </a>
            </div>
            <!-- END Sidebar Brand -->

            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <a href="index.html" class="active"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">功能菜单</span></a>
                        </li>
                        <li class="sidebar-separator">
                            <i class="fa fa-ellipsis-h"></i>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">前台功能</span></a>
                            <ul>
                                <li>
                                    <a href="">导航栏</a>
                                </li>
                                <li>

                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>banner</a>
                                    <ul>
                                        <li>
                                            <a id="level-add" href="/marchsoft/admin/banner/add">添加</a>
                                        </li>
                                        <li>
                                            <a id="level-change" href="/marchsoft/admin/banner/change">管理</a>
                                        </li>
                                    </ul>
                                </li>
<!--                                 <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Elements</a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_blocks_grid.html">Blocks &amp; Grid</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_tables.html">Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Forms</a>
                                    <ul>
                                        <li>
                                            <a href="page_forms_components.html">Components</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="page_forms_validation.html">Validation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Icon Packs</a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_icons_fontawesome.html">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="page_ui_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">小组事务</span></a>
                            <ul>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>三月课堂</a>
                                    <ul>
                                        <li>
                                            <a id="level-addclass" href="/marchsoft/admin/marchClass/addclass">新课程</a>
                                        </li>
                                        <li>
                                            <a id="level-marchclass" href="/marchsoft/admin/marchClass/marchclass">课程表</a>
                                        </li>
                                        <li>
                                            <a id="level-deletedClass" href="/marchsoft/admin/marchClass/deletedClass">旧课程篓</a>
                                        </li>
                                        <li>
                                            <a id="level-classType" href="/marchsoft/admin/marchClass/classType">类型管理</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>项目管理</a>
                                    <ul>
                                        <li>
                                            <a href="">添加项目</a>
                                        </li>
                                        <li>
                                            <a href="">所有项目</a>
                                        </li>
                                    </ul>
                                </li>                                
                                <li>
                                    <a id="news" href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>新闻管理</a>
                                    <ul>
                                        <li>
                                            <a id="level-addnews" href="__ROOT__/admin/news/addnews">添加新闻</a>
                                        </li>
                                        <li>
                                            <a id="level-allnews" href="__ROOT__/admin/news/allnews">所有新闻</a>
                                        </li>
                                        <li>
                                            <a id="level-alreadydown" href="__ROOT__/admin/news/alreadydown">已下架</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" id="manager" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>管理员</a>
                                    <ul>
                                        <li>
                                            <a id="level-addmanager" href="__ROOT__/admin/manager/addmanager">添加管理员</a>
                                        </li>
                                        <li>
                                            <a id="level-allmanager" href="__ROOT__/admin/manager/allmanager">所有管理员</a>
                                        </li>
                                    </ul>
                                </li>
                               <!--  <li>
                                    <a href="page_comp_gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="page_comp_maps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="page_comp_calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="page_comp_charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="page_comp_animations.html">CSS3 Animations</a>
                                </li>
                                <li>
                                    <a href="page_comp_tree.html">Tree View Lists</a>
                                </li>
                                <li>
                                    <a href="page_comp_nestable.html">Nestable &amp; Sortable Lists</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">小组wiki</span></a>
                            <ul>
                                <li>
                                    <a href="page_layout_static.html">Static</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_fixed_width.html">Static Fixed Width</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_top.html">Top Header (Fixed)</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_bottom.html">Bottom Header (Fixed)</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_sidebar_mini.html">Sidebar Mini (Static)</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_sidebar_mini.html">Sidebar Mini (Fixed)</a>
                                </li>
                                <li>
                                    <a href="page_layout_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-gift sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">现有项目进度</span></a>
                            <ul>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Base</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_blank.html">Blank</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_error.html">Error</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_search_results.html">Search Results (5)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_invoice.html">Invoice</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Web Application</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_profile.html">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_forum.html">Forum (3)</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_article.html">Article</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_tickets.html">Tickets</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_login2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_reminder.html">Password Reminder</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_lock_screen.html">Lock Screen</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-separator">
                            <i class="fa fa-ellipsis-h"></i>
                        </li>
                        <li>
                            <a href="page_app_email.html"><i class="gi gi-inbox sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Email Center</span></a>
                        </li>
                        <li>
                            <a href="page_app_social.html"><i class="fa fa-share-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social Net</span></a>
                        </li>
                        <li>
                            <a href="page_app_media.html"><i class="gi gi-picture sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media Box</span></a>
                        </li>
                        <li>
                            <a href="page_app_estore.html"><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">eStore</span></a>
                        </li>
                    </ul>
                    <!-- END Sidebar Navigation -->

                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->

        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in __JS__/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in __JS__/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
            -->
            <header class="navbar navbar-inverse navbar-fixed-top">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                            <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                            <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                        </a>
                    </li>
                    <!-- END Main Sidebar Toggle Button -->

                    <!-- Header Link -->
                    <li class="hidden-xs animation-fadeInQuick">
                        <a href=""><strong>WELCOME</strong></a>
                    </li>
                    <!-- END Header Link -->
                </ul>
                <!-- END Left Header Navigation -->

                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">
                    <!-- Search Form -->
                    <li>
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                        </form>
                    </li>
                    <!-- END Search Form -->

                    <!-- Alternative Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
                            <i class="gi gi-settings"></i>
                        </a>
                    </li>
                    <!-- END Alternative Sidebar Toggle Button -->

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="__IMG__/placeholders/avatars/avatar9.jpg" alt="avatar">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">
                                <strong>ADMINISTRATOR</strong>
                            </li>
                            <li>
                                <a href="page_app_email.html">
                                    <i class="fa fa-inbox fa-fw pull-right"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="page_app_social.html">
                                    <i class="fa fa-pencil-square fa-fw pull-right"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="page_app_media.html">
                                    <i class="fa fa-picture-o fa-fw pull-right"></i>
                                    Media Manager
                                </a>
                            </li>
                            <li class="divider"><li>
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                    <i class="gi gi-settings fa-fw pull-right"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="page_ready_lock_screen.html">
                                    <i class="gi gi-lock fa-fw pull-right"></i>
                                    Lock Account
                                </a>
                            </li>
                            <li>
                                <a href="page_ready_login.html">
                                    <i class="fa fa-power-off fa-fw pull-right"></i>
                                    Log out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
            </header>
            <!-- END Header -->
            <div id="page-content" style="min-height: 150px;">
                
    
    <div id="info_alert" class="all-alert" style="background-color: #5cafde">
        <h4><strong>提示</strong></h4>
        <p></p>
    </div>
    <div id="success_alert" class="all-alert">
        <h4><strong>成功！</strong></h4>
        <p></p>
    </div>
    <div id="error_alert" class="all-alert" style="background-color: #de815c">
        <h4><strong>出错了！</strong></h4>
        <p></p>
    </div>

    <div>
        <form id="f" action="__ROOT__/admin/news/save" method="post" enctype="multipart/form-data">

            <div style="width: 880px;margin-left:50px;text-align: center" >
                    <div id="file_div" class="uploda_img">
                        <span>上传封面</span>
                        <input id="file" type="file" name="photo">
                    </div>

                <input id="title" class="all title" placeholder="标题" type="text" name="title"><br/>
                <input id="author" class="all author" placeholder="作者" type="text" name="author">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <input id="path" type="hidden" name="path" value="">
                <input id="content" type="hidden" name="content">
            </div>

            <div id="editor" name="content" style="margin-left: 50px;width:880px;height:500px;z-index: 10" ></div>
        </form>
        <button class="submit-btn" id="sbm" >发布</button>
    </div>

            </div>

        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>

    <script type="text/javascript">

        var ue = UE.getEditor('editor');
        var infoData =  {
            "code":2,
            "msg":"success",
            "data":{

            }
        };

        /**
         * 调用获取要编辑的新闻，
         **/
        getEditorNews() ;

        /**
         * 异步获取新闻
         **/
        function getEditorNews() {
            sendGetAjax('__ROOT__/admin/news/getnewsbyid?newsId=<?php echo $id; ?>',function (response) {
                var jsObj = JSON.parse(response);

                if (jsObj.code == 1){

                    document.getElementById('file_div').style.backgroundImage="url("+jsObj.data.url +")";
                    document.getElementById('file_div').children[0].innerHTML = "";
                    $("#title").val(jsObj.data.title);
                    $("#author").val(jsObj.data.writer);
                    $("#path").val(jsObj.data.url);

                    ue.setContent(jsObj.data.content);
                }
            })
        }
        
        $(function(){
            $("#file").change(function(e){
                var div = document.getElementById('file_div');
                if ($("#file").val()){
                    div.children[0].innerHTML="";
                    div.style.backgroundImage = "url(__APP_IMG__/right.png)";
                }else {
                    div.style.backgroundImage = "";
                }
            });
        });


        $("#sbm").click(function () {
            $("#content").val(ue.getContent());
            if (check()){
                $("#f").submit();
            }
        });


        /**
         * 检查输入是否为空
         * @returns {boolean}
         */
        function check() {
            var file = $("#file").val();
            var author = $("#author").val();
            var title = $("#title").val();
            var content = $("#content").val();
            console.log(file);
            var div = document.getElementById('file_div');

            if (!file && div.style.backgroundImage == ""){
                infoData.msg = "请封面上传哦";
                showInfo(infoData);
                return false;
            }
            if (author == undefined || author == ""){

                infoData.msg = "要记得填写作者哦";
                showInfo(infoData);
                return false;
            }
            if (title == undefined || title == ""){
                infoData.msg = "为啥不写标题";
                showInfo(infoData);
                return false;
            }
            if (content == "" || content == undefined){
                infoData.msg = "特么文章没有文字";
                showInfo(infoData);
                return false;
            }
            return true;
        }
    </script>

<script type="text/javascript">
    $url = window.location.href;
    $names = $url.split('/');
    $name = $names[$names.length - 1].split('.');
    $urlName = $name[0].split('?');
    $("#level-"+$urlName[0]).addClass('active');
    $("#"+$urlName[0]).addClass('active');
    $("#"+$urlName[0]).parent().parent().prev().addClass('open');
    $("#level-"+$urlName[0]).parent().parent().prev().addClass('open');
    $("#level-"+$urlName[0]).parent().parent().parent().parent().prev().addClass('open');
</script>

<!-- END Page Wrapper -->

<!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->


<!-- Load and execute javascript code used only in this page -->

<!--<script>$(function(){ ReadyDashboard.init(); });</script>-->
</body>
</html>