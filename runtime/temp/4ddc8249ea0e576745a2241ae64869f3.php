<<<<<<< HEAD
<<<<<<< HEAD:runtime/temp/7ff932af3286e315d773a7165608aea6.php
<<<<<<< HEAD:runtime/temp/43e0e6e1e5d9fb9b7a670649dc918804.php
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/index/index.html";i:1491974932;s:85:"/Applications/XAMPP/xamppfiles/htdocs/marchsoft/application/admin/view/base/base.html";i:1491975056;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"/Library/WebServer/Documents/marchsoft/application/admin/view/marchclass/marchclass.html";i:1492525300;s:76:"/Library/WebServer/Documents/marchsoft/application/admin/view/base/base.html";i:1492584657;}*/ ?>
>>>>>>> d0ce737b50da32c611bb427c7cb530a1ebf608cb:runtime/temp/7ff932af3286e315d773a7165608aea6.php
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Library/WebServer/Documents/marchsoft/application/admin/view/marchclass/classtype.html";i:1492606101;s:76:"/Library/WebServer/Documents/marchsoft/application/admin/view/base/base.html";i:1492584657;}*/ ?>
>>>>>>> e8c34815b5851e374c6ace654f309059b4b55637:runtime/temp/4ddc8249ea0e576745a2241ae64869f3.php
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"/Library/WebServer/Documents/marchsoft/application/admin/view/marchclass/classtype.html";i:1492735818;s:76:"/Library/WebServer/Documents/marchsoft/application/admin/view/base/base.html";i:1492584657;}*/ ?>
>>>>>>> 04b34469ff32b2e9efbcf43f2ecc9b401390393c
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
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="__JS__/vendor/modernizr-3.3.1.min.js"></script>
    <script src="__JS__/vendor/jquery-2.2.4.min.js"></script>
    <script src="__JS__/vendor/bootstrap.min.js"></script>
    <script src="__JS__/pages/readyDashboard.js"></script>
    <script src="__JS__/plugins.js"></script>
    <script src="__JS__/app.js"></script>
    <script type="text/javascript" src="__JS__/banner/banner.js"></script>

    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="__UEDITOR__/lang/zh-cn/zh-cn.js"></script>

    
    <link rel="stylesheet" href="__CSS__/class/classType.css">
    <link rel="stylesheet" href="__CSS__/class/marchClass.css">

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
<<<<<<< HEAD:runtime/temp/43e0e6e1e5d9fb9b7a670649dc918804.php
                                    <a href="">banner</a>
=======
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>banner</a>
                                    <ul>
                                        <li>
                                            <a id="level-add" href="/marchsoft/admin/banner/add">添加</a>
                                        </li>
                                        <li>
                                            <a id="level-change" href="/marchsoft/admin/banner/change">管理</a>
                                        </li>
                                    </ul>
>>>>>>> d0ce737b50da32c611bb427c7cb530a1ebf608cb:runtime/temp/7ff932af3286e315d773a7165608aea6.php
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
<<<<<<< HEAD:runtime/temp/43e0e6e1e5d9fb9b7a670649dc918804.php
                                            <a href="">新课程</a>
                                        </li>
                                        <li>
                                            <a href="">以往课程</a>
=======
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
>>>>>>> d0ce737b50da32c611bb427c7cb530a1ebf608cb:runtime/temp/7ff932af3286e315d773a7165608aea6.php
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
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>新闻管理</a>
                                    <ul>
                                        <li>
                                            <a href="">添加新闻</a>
                                        </li>
                                        <li>
                                            <a href="">所有新闻</a>
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
                
<<<<<<< HEAD
<<<<<<< HEAD:runtime/temp/7ff932af3286e315d773a7165608aea6.php
<<<<<<< HEAD:runtime/temp/43e0e6e1e5d9fb9b7a670649dc918804.php
    <p style="color: black">index Controller UIs我的分支小测试</p>
    <div>
        <div id="editor" style="width:900px;height:500px;" ></div>
=======
    <div class="block full">
        <div class="table-responsive">
            <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                <div class="row">
                    <div class="col-sm-6 col-xs-5"></div>
                    <div class="col-sm-6 col-xs-7">
                        <div id="example-datatable_filter" class="dataTables_filter">
                            <label><div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-controls="example-datatable">
                                <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            </label>
                        </div>
                    </div>
                </div>
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter dataTable no-footer">
                    <thead>
                        <tr role="row">
                            <th class="text-center" style="width: 49px;" tabindex="0">ID</th>
                            <th tabindex="0" style="width: 100px;">课程题目</th>
                            <th tabindex="0" style="width: 60px;">封面</th>
                            <th tabindex="0" style="width: 147px;">授课人</th>
                            <th tabindex="0" style="width: 170px;">课程类型</th>
                            <th tabindex="0" style="width: 200px;">上传时间</th>
                            <th tabindex="0" style="width: 200px;">更新时间</th>
                            <th style="width: 70px;" tabindex="0">Status</th>
                            <th class="text-center sorting_disabled" style="width: 74px;" rowspan="1" colspan="1" aria-label=""><i class="fa fa-flash"></i></th></tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?>
                            <tr role="row" class="odd">
                                <td class="text-center sorting_1"><?php echo $class['id']; ?></td>
                                <td><?php echo $class['title']; ?></td>
                                <td>
                                    <div style="width: 150px;height: 80px;" class="gallery-image-container animation-fadeInQuick2" data-category="travel">
                                        <img src="<?php echo $class['url']; ?>" alt="" style="width: 100%;height: 100%;">
                                        <a href="<?php echo $class['url']; ?>" class="gallery-image-options" data-toggle="lightbox-image" title="">
                                            <i class="fa fa-search-plus fa-3x text-light"></i>
                                        </a>
                                    </div>
                                </td>
                                <td><strong><?php echo $class['lecturer']; ?></strong></td>
                                <td><?php echo $class['type']; ?></td>
                                <td><?php echo $class['created_at']; ?></td>
                                <td><?php echo $class['updated_at']; ?></td>
                                <td>
                                    <span class="label label-info">已启用</span>
                                </td>
                                <td class="text-center">
                                    <a href="/marchsoft/admin/marchClass/addclass?changeId=<?php echo $class['id']; ?>" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;" data-original-title="Edit Class"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" data="<?php echo $class['id']; ?>" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-danger delete-class" style="overflow: hidden; position: relative;" data-original-title="Delete Class"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div><?php echo $list->render(); ?></div>
            </div>
=======
    <div id="type-content">
        <form class="form-horizontal form-bordered" onsubmit="return check()">
            <div class="form-group">
                <label class="col-md-4 control-label">添加一个新类型:</label>
                <div class="col-md-8">
                    <input type="text" id="add-type" required class="form-control" placeholder="输入一个新的课程类型">
                </div>
            </div>
            <div class="form-group form-actions" style="background: #ebeef2;">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" id="submitnew-type" class="btn btn-effect-ripple btn-primary">Submit</button>
                    <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                </div>
            </div>
        </form>
        <div id="all-types-label">
            <label class="col-md-3 control-label block-label">已有类型:</label>
            <?php if(is_array($allType) || $allType instanceof \think\Collection || $allType instanceof \think\Paginator): $i = 0; $__LIST__ = $allType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;if($type['class_id'] == ''): ?>
                    <span data="<?php echo $type['id']; ?>" class="btn-effect-ripple btn-warning btn-sm unuse-type">
                        <?php echo $type['type']; ?>
                    </span>
                    <strong data="<?php echo $type['id']; ?>" class="delete-type">×</strong>
                    <?php else: ?>
                    <span data="<?php echo $type['id']; ?>" class="btn-effect-ripple btn-success btn-sm use-type"><?php echo $type['type']; ?></span>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
>>>>>>> 04b34469ff32b2e9efbcf43f2ecc9b401390393c
        </div>
    </div>
    <div id="cover-box"></div>
    <div id="tip-box" class="col-sm-6 col-lg-3">
        <!-- Info Alert -->
        <div class="alert alert-info">
            <span class="cance-btn">×</span>
<<<<<<< HEAD
            <h4><strong>提示</strong></h4>
            <p>将删除课程<span id="class-title-tip"></span>,被删除的课程可<a href="/marchsoft/admin/marchClass/deletedClass">前往旧课程篓</a>查看,是否要删除?</p>
=======
            <h4><strong>编辑类型</strong></h4>
            <input id="change-type-input" type="text" class="form-control" placeholder="输入一个新的课程类型">
            <p id="warning-tip"></p>
>>>>>>> 04b34469ff32b2e9efbcf43f2ecc9b401390393c
            <div>
                <a href="javascript:void(0)" id="cance-btn" class="btn btn-primary btn-sm">取消</a>
                <a href="javascript:void(0)" id="sure-btn" class="btn btn-primary btn-sm">确定</a>
            </div>

        </div>
        <!-- END Info Alert -->
<<<<<<< HEAD
>>>>>>> d0ce737b50da32c611bb427c7cb530a1ebf608cb:runtime/temp/7ff932af3286e315d773a7165608aea6.php
    </div>
=======
    <?php if(is_array($allType) || $allType instanceof \think\Collection || $allType instanceof \think\Paginator): $i = 0; $__LIST__ = $allType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;if($type['class_id'] == ''): ?>
            <span class="label label-warning"><?php echo $type['type']; ?>(未使用)</span>
            <?php else: ?><span class="label label-success"><?php echo $type['type']; ?></span>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
>>>>>>> e8c34815b5851e374c6ace654f309059b4b55637:runtime/temp/4ddc8249ea0e576745a2241ae64869f3.php
=======
    </div>
    <div id="warning-box" class="col-sm-6 col-lg-3">
        <!-- Info Alert -->
        <div class="alert alert-info">
            <span class="cance-btn">×</span>
            <h4><strong>删除类型</strong></h4>
            <h4>是否确定删除<span id="delete-type-name"></span>类型标签?</h4>
            <div>
                <a href="javascript:void(0)" id="cance-delete-btn" class="btn btn-primary btn-sm">取消</a>
                <a href="javascript:void(0)" id="sure-delete-btn" class="btn btn-primary btn-sm">确定</a>
            </div>

        </div>
        <!-- END Info Alert -->
    </div>

>>>>>>> 04b34469ff32b2e9efbcf43f2ecc9b401390393c

            </div>

        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>

    <script type="text/javascript" src="__JS__/class/classType.js"></script>

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