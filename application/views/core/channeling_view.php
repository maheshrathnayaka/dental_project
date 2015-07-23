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
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-sort-by-attributes-alt"></i> Channeling Queue</h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                    </div>
                    <div class="widget-body">
                        <!--BEGIN METRO STATES-->
                        <div class="row-fluid">
                            <!--BEGIN METRO STATES-->
                            <div class="metro-nav metro-fix-view">
                                <?php
                                foreach($channeling_data as $element){?>
                                    <div class="metro-nav-block nav-deep-red">
                                    <a href="#" data-original-title="">
                                        <div class="text-center"><h2><b><?php echo $element["channel_number"]; ?></b></h2></div>
                                        <div class="status"><?php echo $element["patient_first_name"]; ?></div>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!--END METRO STATES-->
                        </div>
                        <div class="clearfix"></div>
                        <!--END METRO STATES-->
                    </div>
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
