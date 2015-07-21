<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>DentAssist - Tele-health</title>
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
                        <div class="span12">
                            <!-- BEGIN BLANK PAGE PORTLET-->
                            <div class="widget yellow">
                                <div class="widget-title">
                                    <h4><i class="icon-edit"></i> Tele-health</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <div class="widget">
                                        <div class="widget-body">
                                            <!-- BEGIN FORM-->
                                            <form class="form-vertical" method="get" action="#">
                                                <ul class="breadcrumb">
                                                    <li style="font-size: 125%;">
                                                        <b>General Details</b>
                                                    </li>
                                                </ul>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label"><b>First Name</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="first name here..."  name="" tabindex="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Postal No</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="postal number here..."  name="" tabindex="6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Mobile</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="mobile number here..."  name="" tabindex="10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Surname</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="surname here..."  name="" tabindex="2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Address 01</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="address line 01 here..."  name=""  tabindex="7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Home</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="home number here..."  name="" tabindex="11">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Gender</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="radio" name="optionsRadios1" id="id_radio_male" value="M"  tabindex="3"/> <label class="radio" for="id_radio_male"> Male</label>
                                                                <input type="radio" name="optionsRadios1" id="id_radio_female" value="F"  tabindex="4"/> <label class="radio" for="id_radio_female"> Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Address 02</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="address line 02 here..."  name="" tabindex="8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Work</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="work number here..."  name="" tabindex="12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>Occupation</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="occupation here..."  name=""  tabindex="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>City</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="city here..."  name="" tabindex="9">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="control-group">
                                                            <label class="control-label" ><b>E-mail</b></label>
                                                            <div class="controls controls-row">
                                                                <input type="text" class="input-block-level" placeholder="email address here..."  name="" tabindex="13">
                                                            </div>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="control-group">
                                                            <label class="control-label"><b>Main reason for today’s visit</b></label>
                                                            <div class="controls controls-row">
                                                                <textarea class="input-block-level" style="resize: none;" id="ccomment" name="comment" placeholder="main reason here..."  tabindex="14"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6">
                                                        <div class="control-group">
                                                            <label class="control-label"><b>Known Allergies</b></label>
                                                            <div class="controls controls-row">
                                                                <textarea class="input-block-level" style="resize: none;" id="ccomment" name="comment" placeholder="known allergies here..."  tabindex="15"></textarea>
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
                                                    <!--<i class="icon-search"></i>--> 
                                                    <b>Medical Health History</b>
                                                </li>                                
                                            </ul>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkDiabetes">
                                                            <input type="checkbox" id="chkDiabetes" name="chkDiabetes" value="Diabetes"/>
                                                            <b> Diabetes</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkShortness">
                                                            <input type="checkbox" id="chkShortness" name="chkShortness" value="Shortness"/>
                                                            <b> Shortness of breath</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkAngina">
                                                            <input type="checkbox" id="chkAngina" name="chkAngina" value="Angina"/>
                                                            <b> Heart disease/Murmur/Angina</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkDepression">
                                                            <input type="checkbox" id="chkDepression" name="chkDepression" value="Depression"/>
                                                            <b> Depression/Anxiety</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkHighCholesterol">
                                                            <input type="checkbox" id="chkHighCholesterol" name="chkHighCholesterol" value="HighCholesterol"/>
                                                            <b> High cholesterol</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkTonsillitis">
                                                            <input type="checkbox" id="chkTonsillitis" name="chkTonsillitis" value="Tonsillitis"/>
                                                            <b> Tonsillitis</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkKidney">
                                                            <input type="checkbox" id="chkKidney" name="chkKidney" value="Kidney"/>
                                                            <b> Kidney/Bladder problems</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkThyroid">
                                                            <input type="checkbox" id="chkThyroid" name="chkThyroid" value="Thyroid"/>
                                                            <b> Thyroid problems</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkHighBloodPressure">
                                                            <input type="checkbox" id="chkHighBloodPressure" name="chkHighBloodPressure" value="HighBloodPressure"/>
                                                            <b> High blood pressure</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkAsthma">
                                                            <input type="checkbox" id="chkAsthma" name="chkAsthma" value="Asthma"/>
                                                            <b> Asthma</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkLung">
                                                            <input type="checkbox" id="chkLung" name="chkLung" value="Lung"/>
                                                            <b> Lung problems/cough</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkUlcers">
                                                            <input type="checkbox" id="chkUlcers" name="chkUlcers" value="Ulcers"/>
                                                            <b> Ulcers/colitis</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkLowBloodPressure">
                                                            <input type="checkbox" id="chkLowBloodPressure" name="chkLowBloodPressure" value="LowBloodPressure"/>
                                                            <b> Low blood pressure</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkStroke">
                                                            <input type="checkbox" id="chkStroke" name="chkStroke" value="Stroke"/>
                                                            <b> Stroke</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkLiver">
                                                            <input type="checkbox" id="chkLiver" name="chkLiver" value="Liver"/>
                                                            <b> Liver problems/Hepatitis</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkGastric">
                                                            <input type="checkbox" id="chkGastric" name="chkGastric" value="Gastric"/>
                                                            <b> Gastric irritation</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkHeartburn">
                                                            <input type="checkbox" id="chkHeartburn" name="chkHeartburn" value="Heartburn"/>
                                                            <b> Heartburn(reflux)</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkSinusProblems">
                                                            <input type="checkbox" id="chkSinusProblems" name="chkSinusProblems" value="SinusProblems"/>
                                                            <b> Sinus problems</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkHeadaches">
                                                            <input type="checkbox" id="chkHeadaches" name="chkHeadaches" value="Headaches"/>
                                                            <b> Headaches/Migraines</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkEarProblems">
                                                            <input type="checkbox" id="chkEarProblems" name="chkEarProblems" value="EarProblems"/>
                                                            <b> Ear problems</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkAnemia">
                                                            <input type="checkbox" id="chkAnemia" name="chkAnemia" value="Anemia"/>
                                                            <b> Anemia/blood problems</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkArthritis">
                                                            <input type="checkbox" id="chkArthritis" name="chkArthritis" value="Arthritis"/>
                                                            <b> Arthritis</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkNeurological">
                                                            <input type="checkbox" id="chkNeurological" name="chkNeurological" value="Neurological"/>
                                                            <b> Neurological problems</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkSeasonalAllergies">
                                                            <input type="checkbox" id="chkSeasonalAllergies" name="chkSeasonalAllergies" value="SeasonalAllergies"/>
                                                            <b> Seasonal allergies</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="span3">
                                                        <label for="chkSwollen">
                                                            <input type="checkbox" id="chkSwollen" name="chkSwollen" value="Swollen"/>
                                                            <b> Swollen ankles</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkCancer">
                                                            <input type="checkbox" id="chkCancer" name="chkCancer" value="Cancer"/>
                                                            <b> Cancer</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <label for="chkEyeDisorder">
                                                            <input type="checkbox" id="chkEyeDisorder" name="chkEyeDisorder" value="EyeDisorder"/>
                                                            <b> Eye disorder/Glaucoma</b>
                                                        </label>
                                                    </div>
                                                    <div class="span3">
                                                        <div class="control-group">
                                                            <label for="chkOther">
                                                                <input type="checkbox" id="chkOther" name="chkOther" value="Other"/>
                                                                <b> Other</b>
                                                            </label>
                                                            <!--<label class="control-label"><b>Other</b></label>-->
                                                            <div class="controls controls-row">
                                                                <textarea style="resize: none;" class="input-block-level" id="txtAreaOther" name="txtAreaOther" placeholder="other..." disabled tabindex="44"></textarea>
                                                                <!--<input type="text" class="input-block-level" placeholder="first name here..."  name="" tabindex="1">-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <!-- END BLANK PAGE PORTLET-->
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn btn-success"><i class=" icon-remove"></i> Cancel</button>
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
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->

        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
        <!--script for this page-->
        <script src="<?php echo base_url(); ?>assets/js/form-component.js"></script>
        <!-- END JAVASCRIPTS -->
        <script language="javascript" type="text/javascript">
            $(function() {
                $.configureBoxes();
            });
        </script>
    </body>
    <!-- END BODY -->
</html>
