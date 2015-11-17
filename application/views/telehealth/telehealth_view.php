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
                        <?php
                        if($this->session->flashdata('message') == "success"){
                            ?>
                            <div class="alert alert-block alert-success fade in" id="divSuccessArea">
                                <button data-dismiss="alert" class="close" type="button">x</button>
                                <h4 class="alert-heading text-center">Success! Request has been sent to the consultant.</h4>
                            </div>
                            <?php
                        }else if($this->session->flashdata('message') == "removed"){
                            ?>
                            <div class="alert alert-block alert-success fade in" id="divSuccessArea">
                                <button data-dismiss="alert" class="close" type="button">x</button>
                                <h4 class="alert-heading text-center">Successfully removed from the list.</h4>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Pending Requests for Consultation</b>
                                    </li>
                                </ul>
                                <?php if (empty($pending_list)) {
                                    ?>
                                    <div class="alert alert-block alert-info fade in text-center">
                                        <button data-dismiss="alert" class="close" type="button">x</button>
                                        <h4 class="alert-heading">Oops! Currently There are no pending requests.</h4>
                                    </div>
                                    <?php
                                } else { ?>

                                    <!--BEGIN METRO STATES-->
                                    <div class="row-fluid">
                                        <!--BEGIN METRO STATES-->
                                        <div class="metro-nav metro-fix-view">
                                            <h3>Click on a request to view video online.</h3>
                                            <?php
                                            foreach ($pending_list as $element) {
                                                ?>
                                                <div class="metro-nav-block nav-block-red double">
                                                    <a href="<?php echo base_url(); ?>index.php/telehealth/video_live/<?php echo $element["doc_id"]; ?>"
                                                       data-original-title="">
                                                        <div class="text-center">
                                                            <h3>
                                                                <b><?php echo $element["doc_name"]; ?></b>
                                                            </h3>
                                                        </div>
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
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Online Doctors</b>
                                    </li>
                                </ul>
                                <?php if (empty($online_list)) {
                                    ?>
                                    <div class="alert alert-block alert-info fade in text-center">
                                        <button data-dismiss="alert" class="close" type="button">x</button>
                                        <h4 class="alert-heading">Oops! Currently There are no Online Doctors Available</h4>
                                    </div>
                                    <?php
                                } else { ?>

                                    <!--BEGIN METRO STATES-->
                                    <div class="row-fluid">
                                        <!--BEGIN METRO STATES-->
                                        <div class="metro-nav metro-fix-view">
                                            <h3>Click on a doctor to send a consultation request.</h3>
                                            <?php
                                            foreach ($online_list as $element) {
                                                ?>
                                                <div class="metro-nav-block nav-light-blue double">
                                                    <a href="<?php echo base_url(); ?>index.php/telehealth/request_online/<?php echo $element["doc_id"]; ?>"
                                                       data-original-title="">
                                                        <div class="text-center">
                                                            <h3>
                                                                <b><?php echo $element["doc_name"]; ?></b>
                                                            </h3>
                                                        </div>
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
                            </div>
                        </div>
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
