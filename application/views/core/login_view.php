<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Smart Dentassist - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/style-default.css" rel="stylesheet" id="style_color"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
<div class="lock-header">
    <!-- BEGIN LOGO -->
    <a class="center" id="logo" href="#">
        <img class="center" alt="logo" src="<?php echo base_url(); ?>assets/img/logo.png">
    </a>
    <!-- END LOGO -->
</div>
<form name="frmLogin" method="post" action="<?php echo base_url(); ?>index.php/login/verify_login">
    <div class="login-wrap">
        <?php echo validation_errors(); ?>
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>

        <div class="metro double-size green">
            <div class="input-append lock-input">
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="" placeholder="Username">
            </div>
        </div>
        <div class="metro double-size yellow">
            <div class="input-append lock-input">
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="" placeholder="Password">
            </div>
        </div>
        <div class="metro single-size terques login">
            <input type="submit" class="btn login-btn" value="Login">
        </div>
        <!--div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div-->
    </div>
</form>
</body>
<!-- END BODY -->
</html>