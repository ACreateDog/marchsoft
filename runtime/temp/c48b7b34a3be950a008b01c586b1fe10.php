<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/banner/change.html";i:1492675468;s:85:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/base/base.html";i:1492752496;}*/ ?>
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

    
    <link rel="stylesheet" href="__CSS__/banner/banner.css">

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
                                    <a id="show" href="<?php echo url('nav/show'); ?>">导航栏</a>
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
                                            <a id="level-addclass" href="<?php echo url('Marchclass/addclass'); ?>">新课程</a>
                                        </li>
                                        <li>
                                            <a id="level-marchclass" href="<?php echo url('Marchclass/marchclass'); ?>">课程表</a>
                                        </li>
                                        <li>
                                            <a id="level-deletedClass" href="<?php echo url('Marchclass/deletedClass'); ?>">旧课程篓</a>
                                        </li>
                                        <li>
                                            <a id="level-classType" href="<?php echo url('Marchclass/classType'); ?>">类型管理</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>项目管理</a>
                                    <ul>
                                        <li>
                                            <a id="level-index" href="<?php echo url('project/index'); ?>">添加项目</a>
                                        </li>
                                        <li>
                                            <a id="level-all" href="<?php echo url('project/all'); ?>">所有项目</a>
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
                
    <div class="block full">
        <div class="table-responsive">
            <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter dataTable no-footer">
                    <thead>
                    <tr role="row">
                        <th class="text-center" style="width: 49px;" tabindex="0">ID</th>
                        <th class="" tabindex="0" style="width: 147px;">图片</th>
                        <th class="" tabindex="0" style="width: 150px;">创建时间</th>
                        <th style="width: 80px;">Status</th>
                        <th class="text-center" style="width: 100px;"><i class="fa fa-flash"></i></th></tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?>
                        <tr role="row" class="odd">
                            <td class="text-center sorting_1"><?php echo $banner['id']; ?></td>
                            <td>
                                <div style="width: 150px;height: 80px;" class="gallery-image-container animation-fadeInQuick2" data-category="travel">
                                    <img src="<?php echo $banner['url']; ?>" alt="" style="width: 100%;height: 100%;">
                                    <a href="<?php echo $banner['url']; ?>" class="gallery-image-options" data-toggle="lightbox-image" title="">
                                        <i class="fa fa-search-plus fa-3x text-light"></i>
                                    </a>
                                </div>
                            </td>
                            <td><?php echo $banner['created_at']; ?></td>
                            <td>
                                <?php if($banner['status'] == 1): ?>
                                    <span class="label label-info">已启用</span>
                                    <?php else: ?><span class="label label-danger">已禁用</span>
                                <?php endif; if($banner['is_top'] == 1): ?>
                                    <span class="label label-success">已置顶</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($banner['status'] == 1): ?>
                                    <a data="<?php echo $banner['img_link']; ?>" data-id="<?php echo $banner['id']; ?>" data-imgid="<?php echo $banner['img_id']; ?>" data-toggle="modal" data-target="#mymodal-data" title="编辑图片和链接" class="btn btn-effect-ripple btn-xs btn-success edit-banner" style="overflow: hidden; position: relative;padding: 5px 10px;">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="/marchsoft/admin/banner/changeStatus?id=<?php echo $banner['id']; ?>&bannerStatus=1" type="button" class="btn btn-effect-ripple btn-danger btn-sm" style="overflow: hidden; position: relative;">
                                        <span class="btn-ripple animate" style="height: 71px; width: 71px; top: -10.5px; left: 9.5px;"></span>
                                        禁用
                                    </a>
                                    <?php if($banner['is_top'] != 1): ?>
                                        <a href="/marchsoft/admin/banner/setTop?id=<?php echo $banner['id']; ?>" class="btn btn-primary btn-sm set-top">置顶</a>
                                    <?php endif; else: ?><a href="/marchsoft/admin/banner/changeStatus?id=<?php echo $banner['id']; ?>&bannerStatus=0" class="btn btn-info btn-sm">启用</a>
                                <?php endif; ?>
                                <!--<a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;" data-original-title="Delete User"><i class="fa fa-times"></i></a>-->
                            </td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div><?php echo $list->render(); ?></div>
            </div>
        </div>
    </div>
    <!-- 模态弹出窗内容 -->
    <div class="modal fade" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">修改banner信息</h4>
                </div>
                <form action="/marchsoft/admin/banner/upload" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <div id="mymodel-form">
                            <input id="temp-input-bannerid" type="text" name="bannerId">
                            <input id="temp-input-imgid" type="text" name="imgId">
                            <span>修改链接:</span>
                            <input required id="img-link-input" name="imgLink" type="text">
                            <span>上传新图片:</span>
                            <input required type="file" id="example-file-multiple-input" style="cursor: pointer;" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

            </div>

        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>

    <script type="text/javascript">
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