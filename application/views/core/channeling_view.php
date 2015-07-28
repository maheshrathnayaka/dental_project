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
                        <?php if (empty($channeling_data)) {
                            ?>
                            <div class="alert alert-block alert-info fade in text-center">
                                <button data-dismiss="alert" class="close" type="button">x</button>
                                <h4 class="alert-heading">Oops! Currently patient queue is empty</h4>
                            </div>
                            <?php
                        } else { ?>

                            <!--BEGIN METRO STATES-->
                            <div class="row-fluid">
                                <!--BEGIN METRO STATES-->
                                <div class="metro-nav metro-fix-view">
                                    <?php
                                    foreach ($channeling_data as $element) {
                                        ?>
                                        <div class="metro-nav-block nav-deep-red">
                                            <a href="<?php echo base_url(); ?>index.php/channeling/profile/<?php echo $element["patient_id"]; ?>"
                                               data-original-title="">
                                                <div class="text-center"><h2>
                                                        <b><?php echo $element["channel_number"]; ?></b></h2></div>
                                                <div class="status"><?php echo $element["patient_first_name"]; ?></div>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!--END METRO STATES-->
                            </div>
                            <?php
                        }
                        ?>
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
