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
                        <ul class="breadcrumb">
                            <li style="font-size: 125%;">
                                <b>Doctor Name : <?php echo $requestor; ?></b>
                            </li>
                        </ul>
                        <p>
                            <a href="<?php echo base_url(); ?>index.php/telehealth/remove/<?php echo $_SESSION['userid']; ?>"><span class="btn btn-large btn-inverse" type="button">Remove from requests</span></a>
                        </p>

                        <div style="width:640;display:inline-block;">
                            <a id="player_live_dentAssistLive" href="#" style="display:block;background-color:#d9d9d9;width:640px;height:480px">&nbsp;</a>
                            <p style="text-align:right;margin:0px;padding:0px">
                                <a href="javascript:window.open('http%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttp%3A%2F%2Fue4f26zm.blue.onyxservers.com%2Fonyxpanel%2Fbroadcasts%2FdentAssistLive%2F', '_blank', 'width=760,height=300');void(0);">
                                    <img src="http://ue4f26zm.blue.onyxservers.com/onyxpanel/logos/../images/fb_share.png" style="margin-top:10px;width:212px;height:27px">
                                </a>
                            </p>
                        </div>
                        <script src="http://ue4f26zm.blue.onyxservers.com/onyxpanel/embed_code/live_js/dentAssistLive/cfg.js"></script>

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