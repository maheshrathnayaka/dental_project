<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>DentAssist</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/css/style-default.css" rel="stylesheet" id="style_color" />
        <link href="<?php echo base_url(); ?>/assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/uniform/css/uniform.default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/chosen-bootstrap/chosen/chosen.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/jquery-tags-input/jquery.tagsinput.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/clockface/css/clockface.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/assets/bootstrap-colorpicker/css/colorpicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/ assets/bootstrap-daterangepicker/daterangepicker.css" />
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
                        <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="DentAssist" />
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
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="sidebar-menu">
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/registration" class="">
                                <i class="icon-pencil"></i>
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
                            <a href="<?php echo base_url(); ?>index.php/knowladge" class="">
                                <i class="icon-link"></i>
                                <span>Knowladge Base</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>index.php/telehealth" class="">
                                <i class="icon-camera"></i>
                                <span>Telehealth</span>
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
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row-fluid">
                        <div class="metro-nav metro-fix-view">
                    <div class="metro-nav-block nav-block-green long">
                        <a href="#" class="text-center" data-original-title="">
                            <span class="value">
                                <i class="icon-user"></i>
                                329
                            </span>
                            <div class="status">New User</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-orange">
                        <a href="#" data-original-title="">
                            <i class="icon-envelope"></i>
                            <div class="info">321</div>
                            <div class="status">Mail</div>
                        </a>
                    </div>

                   <div class="metro-nav-block nav-light-yellow">
                       <a href="#" data-original-title="">
                           <i class="icon-comments-alt"></i>
                           <div class="info">49</div>
                           <div class="status">Comments</div>
                       </a>
                   </div>
                    <div class="metro-nav-block nav-block-blue double">
                        <a href="#" data-original-title="">
                            <i class="icon-tasks"></i>
                            <div class="info">$37624</div>
                            <div class="status">Stock</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-yellow">
                        <a href="#" data-original-title="">
                            <i class="icon-tags"></i>
                            <div class="info">+970</div>
                            <div class="status">Sales</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-grey">
                        <a href="#" class="text-center" data-original-title="">
                            <i class="icon-phone"></i>
                            <div class="status">Phone</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-red double">
                        <a href="#" data-original-title="">
                            <i class="icon-bar-chart"></i>
                            <div class="info">+288</div>
                            <div class="status">Update</div>
                        </a>
                    </div>

                    <div class="metro-nav-block nav-olive">
                        <a href="#" data-original-title="" class="text-center">
                            <i class="icon-star-empty"></i>
                            <div class="status">Rattings</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-purple double">
                        <a href="#" data-original-title="">
                            <i class="icon-eye-open"></i>
                            <div class="info">+8914</div>
                            <div class="status">Unique Visitor</div>
                        </a>
                    </div>

                    <div class="metro-nav-block nav-deep-red">
                        <a href="#" data-original-title="">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">New Order</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-deep-gray">
                        <a href="#" data-original-title="">
                            <i class="icon-remove-sign"></i>
                            <div class="info">34 </div>
                            <div class="status">Cancelled</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-purple">
                        <a href="#" data-original-title="" class="text-center">
                            <i class="icon-cogs"></i>
                            <div class="status">Settings</div>
                        </a>
                    </div>

                    <div class="metro-nav-block nav-light-brown">
                        <a href="#" data-original-title="">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">New Order</div>
                        </a>
                    </div>

                    <div class="metro-nav-block nav-deep-terques double">
                        <a href="#" data-original-title="">
                            <i class="icon-external-link"></i>
                            <div class="info">$53412</div>
                            <div class="status">Total Profit</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-blue ">
                        <a href="#" class="text-center" data-original-title="">
                            <i class="icon-dashboard"></i>
                            <div class="status">Dashboard</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-deep-thistle">
                        <a href="#" class="text-center" data-original-title="">
                            <i class="icon-signout"></i>
                            <div class="status">Sign Out</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-green">
                        <a href="#" class="text-center" data-original-title="">
                            <i class=" icon-puzzle-piece"></i>
                            <div class="status">Warning</div>
                        </a>
                    </div>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap/js/bootstrap-fileupload.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jquery.blockui.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
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
            $(function() {
                $.configureBoxes();
            });
        </script>
    </body>
    <!-- END BODY -->
</html>
