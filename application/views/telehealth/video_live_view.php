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
                            <a id='player_live_dentassistlive' href='#' style='display:block;background-color:#d9d9d9;width:640px;height:480px'>&nbsp;</a>
                            <script src='http://m2rhl7od.blue.onyxservers.com/onyxpanel/embed_code/live_js/dentassistlive/cfg.js'></script>
                        </div>

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