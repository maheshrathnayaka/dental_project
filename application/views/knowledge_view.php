<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>DentAssist - Knowledge Base</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style-default.css" rel="stylesheet" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/uniform/css/uniform.default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/chosen-bootstrap/chosen/chosen.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/jquery-tags-input/jquery.tagsinput.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/clockface/css/clockface.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/bootstrap-colorpicker/css/colorpicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/ assets/bootstrap-daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
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
                    <a class="brand" href="<?php echo base_url(); ?>index.php">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="DentAssist" />
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
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
                    <!--                    <div class="navbar-inverse">
                                            <form class="navbar-search visible-phone">
                                                <input type="text" class="search-query" placeholder="Search" />
                                            </form>
                                        </div>-->
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    <!-- BEGIN SIDEBAR MENU -->
                    <?php // require_once(APPPATH . 'views/common/navbar.php'); ?>
                    <ul class="sidebar-menu">
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/registration" class="">
                                <i class="icon-user"></i>
                                <span>Patient Registration</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/history" class="">
                                <i class="icon-book"></i>
                                <span>Dental History</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/knowledge" class="">
                                <i class="icon-link"></i>
                                <span>Knowledge Base</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/telehealth" class="">
                                <i class="icon-camera"></i>
                                <span>Tele-health</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/contact" class="">
                                <i class="icon-bullhorn "></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/about" class="">
                                <i class="icon-bookmark"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                    </ul>
                    <!--END SIDEBAR MENU--> 
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
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- BEGIN BLANK PAGE PORTLET-->
                            <div class="widget purple">
                                <div class="widget-title">
                                    <h4><i class="icon-edit"></i> Knowledge Base</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <form class="form-horizontal" action="#">
                                        <div id="pills" class="custom-wizard-pills">
                                            <ul>
                                                <li><a href="#pills-tab1" data-toggle="tab">Step 1</a></li>
                                                <li><a href="#pills-tab2" data-toggle="tab">Step 2</a></li>
                                                <li><a href="#pills-tab3" data-toggle="tab">Step 3</a></li>
                                                <li><a href="#pills-tab4" data-toggle="tab">Step 4</a></li>
                                            </ul>
                                            <div class="progress progress-success progress-striped active">
                                                <div class="bar"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="pills-tab1">
                                                    <h3>Fill up step 1</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Username</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6">
                                                            <span class="help-inline">Give your username</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Email</label>
                                                        <div class="controls">
                                                            <input type="password" class="span6">
                                                            <span class="help-inline">Give your Email</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pills-tab2">
                                                    <h3>Fill up step 2</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">First Name</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6" />
                                                            <span class="help-inline">Give your First Name</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Last Name</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6" />
                                                            <span class="help-inline">Give your Last Name</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Phone Number</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6" />
                                                            <span class="help-inline">Give your phone number</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pills-tab3">
                                                    <h3>Fill up step 3</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Text Input</label>
                                                        <div class="controls">
                                                            <input type="text" class="span6" />
                                                            <span class="help-inline"></span>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label">Checkbox and radio Options</label>
                                                        <div class="controls">
                                                            <label class="checkbox line">
                                                                <input type="checkbox" value="" /> Lorem ipsum dolor imti
                                                            </label>
                                                            <label class="radio line">
                                                                <input type="radio" value="" /> Duis autem vel eum iriure dolor in hendrerit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pills-tab4">
                                                    <h3>Final step</h3>
                                                    <div class="control-group">
                                                        <label class="control-label">Fullname:</label>
                                                        <div class="controls">
                                                            <span class="text">Jhon Doe </span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Email:</label>
                                                        <div class="controls">
                                                            <span class="text">dkmosa@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Phone:</label>
                                                        <div class="controls">
                                                            <span class="text">123456789</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label"></label>
                                                        <div class="controls">
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" /> I confirm my steps
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="pager wizard">
                                                    <li class="previous first"><a href="javascript:;">First</a></li>
                                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                                    <li class="next last"><a href="javascript:;">Last</a></li>
                                                    <li class="next"><a  href="javascript:;">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
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
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap/js/bootstrap-fileupload.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockui.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fancybox/source/jquery.fancybox.pack.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.js"></script>
        <![endif]-->

        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
        <!--script for this page-->
        <script src="<?php echo base_url(); ?>assets/js/form-component.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/form-wizard.js"></script>
        <!-- END JAVASCRIPTS -->
        <script language="javascript" type="text/javascript">
            $(function() {
                $.configureBoxes();
            });
        </script>
    </body>
    <!-- END BODY -->
</html>
