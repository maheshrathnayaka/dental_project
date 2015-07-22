<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>DentAssist - Patient Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/css/style-default.css" rel="stylesheet" id="style_color"/>
    <link href="<?php echo base_url(); ?>/assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/uniform/css/uniform.default.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/chosen-bootstrap/chosen/chosen.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/jquery-tags-input/jquery.tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/clockface/css/clockface.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/bootstrap-timepicker/compiled/timepicker.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/assets/bootstrap-colorpicker/css/colorpicker.css"/>
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>/assets/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/ assets/bootstrap-daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php echo base_url(); ?>
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!--BEGIN SIDEBAR TOGGLE-->
            <div class="sidebar-toggle-box hidden-phone">
                <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Menu"></div>
            </div>
            <!--END SIDEBAR TOGGLE-->
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo base_url(); ?>/index.html">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="DentAssist"/>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse"
               data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <div id="top_menu" class="nav notify-row">
                <!-- BEGIN NOTIFICATION -->
                <ul class="nav top-menu">
                    <!-- BEGIN SETTINGS -->
                    <!-- <li class="dropdown"> -->
                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-important">6</span>
                    </a> -->
                    <!-- <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p>You have 6 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">44%</div>
                                </div>
                                <div class="progress progress-striped active no-margin-bot">
                                    <div class="bar" style="width: 44%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">65%</div>
                                </div>
                                <div class="progress progress-striped progress-success active no-margin-bot">
                                    <div class="bar" style="width: 65%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped progress-info active no-margin-bot">
                                    <div class="bar" style="width: 87%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped progress-warning active no-margin-bot">
                                    <div class="bar" style="width: 33%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">90%</div>
                                </div>
                                <div class="progress progress-striped progress-danger active no-margin-bot">
                                    <div class="bar" style="width: 90%;"></div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul> -->
                    <!-- </li> -->
                    <!-- END SETTINGS -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="<?php // echo base_url();     ?>/assets/img/avatar-mini.png" alt="avatar" /></span>
                   <span class="subject">
                   <span class="from">Jonathan Smith</span>
                   <span class="time">Just now</span>
                   </span>
                   <span class="message">
                       Hello, this is an example msg.
                   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="<?php // echo base_url();     ?>/assets/img/avatar-mini.png" alt="avatar" /></span>
                   <span class="subject">
                   <span class="from">Jhon Doe</span>
                   <span class="time">10 mins</span>
                   </span>
                   <span class="message">
                    Hi, Jhon Doe Bhai how are you ?
                   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="<?php // echo base_url();     ?>/assets/img/avatar-mini.png" alt="avatar" /></span>
                   <span class="subject">
                   <span class="from">Jason Stathum</span>
                   <span class="time">3 hrs</span>
                   </span>
                   <span class="message">
                       This is awesome dashboard.
                   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img src="<?php // echo base_url();     ?>/assets/img/avatar-mini.png" alt="avatar" /></span>
                   <span class="subject">
                   <span class="from">Jondi Rose</span>
                   <span class="time">Just now</span>
                   </span>
                   <span class="message">
                       Hello, this is metrolab
                   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li> -->
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- <li class="dropdown" id="header_notification_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="icon-bell-alt"></i>
                            <span class="badge badge-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- END NOTIFICATION DROPDOWN -->

                </ul>
            </div>
            <!-- END  NOTIFICATION -->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu">
                    <!-- BEGIN SUPPORT -->
                    <!-- <li class="dropdown mtop5">
                        <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                            <i class="icon-comments-alt"></i>
                        </a>
                    </li> -->
                    <!-- <li class="dropdown mtop5">
                        <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                            <i class="icon-headphones"></i>
                        </a>
                    </li> -->
                    <!-- END SUPPORT -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php // echo base_url();     ?>/assets/img/avatar1_small.jpg" alt="">
                                <span class="username">Jhon Doe</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                                <li><a href="<?php // echo base_url();     ?>/login.html"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li> -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <div class="navbar-inverse">
                <form class="navbar-search visible-phone">
                    <input type="text" class="search-query" placeholder="Search"/>
                </form>
            </div>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <!-- <li class="sub-menu">
                        <a class="" href="<?php // echo base_url();     ?>/index.html">
                            <i class="icon-dashboard"></i>
                            <span>Doctor</span>
                        </a>
                    </li> -->
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>Patient Registration</span>
                        <!-- <span class="arrow"></span> -->
                    </a>
                    <!-- <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/general.html">Dental History</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/button.html">Buttons</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/slider.html">Sliders</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/metro_view.html">Metro View</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/tabs_accordion.html">Tabs & Accordions</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/typography.html">Typography</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/tree_view.html">Tree View</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/nestable.html">Nestable List</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-cogs"></i>
                        <span>Dental History</span>
                        <!-- <span class="arrow"></span> -->
                    </a>
                    <!-- <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/calendar.html">Patient Registration</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/grids.html">Grids</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/chartjs.html">Chart Js</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/flot_chart.html">Flot Charts</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/gallery.html"> Gallery</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-tasks"></i>
                        <span>Knowladge Base</span>
                        <!-- <span class="arrow"></span> -->
                    </a>
                    <!-- <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/form_layout.html">Form Layouts</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/form_component.html">Form Components</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/form_wizard.html">Form Wizard</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/form_validation.html">Form Validation</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/dropzone.html">Dropzone File Upload </a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-th"></i>
                        <span>Telehealth</span>
                        <!-- <span class="arrow"></span> -->
                    </a>
                    <!-- <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/basic_table.html">Basic Table</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/dynamic_table.html">Dynamic Table</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/editable_table.html">Editable Table</a></li>
                        </ul> -->
                </li>
                <!-- <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-fire"></i>
                            <span>Icons</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/font_awesome.html">Font Awesome</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/glyphicons.html">Glyphicons</a></li>
                        </ul>
                    </li> -->
                <!-- <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="icon-trophy"></i>
                            <span>Portlets</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php // echo base_url();     ?>/general_portlet.html" class=""> General Portlet</a></li>
                            <li><a href="<?php // echo base_url();     ?>/draggable_portlet.html" class="">Draggable Portlet</a></li>
                        </ul>
                    </li> -->
                <!-- <li class="sub-menu">
                        <a class="" href="javascript:;">
                            <i class="icon-map-marker"></i>
                            <span>Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php // echo base_url();     ?>/vector_map.html" class="">Vector Maps</a></li>
                            <li><a href="<?php // echo base_url();     ?>/google_map.html" class="">Google Map</a></li>
                        </ul>
                    </li> -->
                <!-- <li class="sub-menu active">
                        <a href="javascript:;" class="">
                            <i class="icon-file-alt"></i>
                            <span>Sample Pages</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a class="" href="<?php // echo base_url();     ?>/blank.html">Blank Page</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/blog.html">Blog</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/timeline.html">Timeline</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/profile.html">Profile</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/about_us.html">About Us</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/contact_us.html">Contact Us</a></li>
                        </ul>
                    </li> -->
                <!-- <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon-glass"></i>
                            <span>Extra</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="<?php // echo base_url();     ?>/lock.html">Lock Screen</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/invoice.html">Invoice</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/pricing_tables.html">Pricing Tables</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/search_result.html">Search Result</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/faq.html">FAQ</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/404.html">404 Error</a></li>
                            <li><a class="" href="<?php // echo base_url();     ?>/500.html">500 Error</a></li>
                        </ul>
                    </li> -->

                <!-- <li>
                        <a class="" href="<?php // echo base_url();     ?>/login.html">
                            <i class="icon-user"></i>
                            <span>Login Page</span>
                        </a>
                    </li> -->
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN THEME CUSTOMIZER-->
                    <!-- <div id="theme-change" class="hidden-phone">
                        <i class="icon-cogs"></i>
                         <span class="settings">
                             <span class="text">Theme Color:</span>
                             <span class="colors">
                                 <span class="color-default" data-style="default"></span>
                                 <span class="color-green" data-style="green"></span>
                                 <span class="color-gray" data-style="gray"></span>
                                 <span class="color-purple" data-style="purple"></span>
                                 <span class="color-red" data-style="red"></span>
                             </span>
                         </span>
                    </div> -->
                    <!-- END THEME CUSTOMIZER-->
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <!-- <h3 class="page-title">
                      Blank
                    </h3> -->
                    <!-- <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                            <span class="divider">/</span>
                        </li>
                        <li>
                            <a href="#">Sample Pages</a>
                            <span class="divider">/</span>
                        </li>
                        <li class="active">
                            Blank
                        </li>
                        <li class="pull-right search-wrap">
                            <form action="search_result.html" class="hidden-phone">
                                <div class="input-append search-input-area">
                                    <input class="" id="appendedInputButton" type="text">
                                    <button class="btn" type="button"><i class="icon-search"></i> </button>
                                </div>
                            </form>
                        </li>
                    </ul> -->
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN BLANK PAGE PORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-edit"></i> Patient Regisration</h4>
                                <span class="tools">
                                    <a href="javascript:;" class="icon-chevron-down"></a>
                                    <!-- <a href="javascript:;" class="icon-remove"></a> -->
                                </span>
                        </div>
                        <div class="widget-body">
                            <div class="widget">
                                <div class="widget-body">
                                    <!-- BEGIN FORM-->
                                    <form class="form-vertical" method="get" action="#">
                                        <ul class="breadcrumb">
                                            <li style="font-size: 125%;">
                                                <!-- <i class="icon-search"></i> -->
                                                <b>General Details</b>
                                            </li>
                                        </ul>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>First Name</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="first name here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Postal No</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="postal number here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Mobile</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="mobile number here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Surname</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="surname here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Address 01</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="address line 01 here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Home</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="home number here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Gender</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="radio" name="optionsRadios1" id="id_radio_male"
                                                               value="M"/> <label class="radio" for="id_radio_male">
                                                            Male</label>
                                                        <input type="radio" name="optionsRadios1" id="id_radio_female"
                                                               value="F"/> <label class="radio" for="id_radio_female">
                                                            Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Address 02</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="address line 02 here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Work</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="work number here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Occupation</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="occupation here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>City</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="city here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="control-group">
                                                    <label class="control-label"><b>E-mail</b></label>

                                                    <div class="controls controls-row">
                                                        <input type="text" class="input-block-level"
                                                               placeholder="email address here..." name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Main reason for today’s
                                                            visit</b></label>

                                                    <div class="controls controls-row">
                                                        <textarea class="input-block-level" id="ccomment" name="comment"
                                                                  placeholder="main reason here..."></textarea>
                                                        <!-- <input type="text" class="input-block-level" placeholder="Text input"  name=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label"><b>Known Allergies</b></label>

                                                    <div class="controls controls-row">
                                                        <textarea class="input-block-level" id="ccomment" name="comment"
                                                                  placeholder="known allergies here..."></textarea>
                                                        <!-- <input type="text" class="input-block-level" placeholder="Text input"  name=""> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            <!-- BEGIN BLANK PAGE PORTLET-->
                            <div class="widget">
                                <div class="widget-body">
                                    <ul class="breadcrumb">
                                        <li style="font-size: 125%;">
                                            <i class="icon-search"></i>
                                            <b>Medical Health History</b>
                                        </li>
                                    </ul>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <!--                                                    <div class="controls">
                                                                                                        <label class="checkbox">
                                                                                                            <input type="checkbox" value="" /> Checkbox 1
                                                                                                        </label>
                                                                                                        <label class="checkbox">
                                                                                                            <input type="checkbox" value="" /> Checkbox 2
                                                                                                        </label>
                                                                                                    </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END BLANK PAGE PORTLET-->


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Save</button>
                                <button type="button" class="btn btn-success"><i class=" icon-remove"></i> Cancel
                                </button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END BLANK PAGE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
    2015 &copy; Smart DentAssist - Final Year Project - SLIIT
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="<?php echo base_url(); ?>/assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/assets/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap/js/bootstrap-fileupload.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.blockui.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jQuery.dualListBox-1.3.js" language="javascript"
        type="text/javascript"></script>


<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/clockface/js/clockface.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>/assets/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/assets/fancybox/source/jquery.fancybox.pack.js"></script>

<script src="<?php echo base_url(); ?>/assets/js/jquery.scrollTo.min.js"></script>

<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="js/excanvas.js"></script>
<script src="js/respond.js"></script>
<![endif]-->

<!--common script for all pages-->
<script src="<?php echo base_url(); ?>/assets/js/common-scripts.js"></script>
<!--script for this page-->
<script src="<?php echo base_url(); ?>/assets/js/form-component.js"></script>
<!-- END JAVASCRIPTS -->
<script language="javascript" type="text/javascript">
    $(function () {
        $.configureBoxes();
    });
</script>
</body>
<!-- END BODY -->
</html>
