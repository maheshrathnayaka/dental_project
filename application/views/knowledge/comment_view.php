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
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget purple">
                    <div class="widget-title">
                        <h4><i class="icon-link"></i> Add Comment </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <form class="form-vertical" id="formDesktopView" method="post"
                              action="<?php echo base_url(); ?>index.php/skip">
                            <div class="megaexamples">
                                <!--  FILTER STYLED  -->
                                <div class="metro-gallery">
                                    <!-- The GRID System -->
                                    <div class="metro-gal-container noborder norounded dark-bg-entries">
                                        <?php
                                        $imgdir = 'uploads/'.$_SESSION['user_id'].'/'; //Pick your folder
                                        $allowed_types = array('png', 'jpg', 'jpeg', 'bmp'); //Allowed types of files
                                        $dimg = opendir($imgdir);//Open directory
                                        while ($imgfile = readdir($dimg)) {
                                            if (in_array(strtolower(substr($imgfile, -3)), $allowed_types) OR
                                                in_array(strtolower(substr($imgfile, -4)), $allowed_types)
                                            ) /*If the file is an image add it to the array*/ {
                                                $a_img[] = $imgfile;
                                            }
                                        }
                                        $totimg = count($a_img);  //The total count of all the images
                                        //Echo out the images and their paths incased in an li.
                                        for ($x = 0; $x < $totimg; $x++) {
                                            ?>
<!--                                            <h1>--><?php //echo $cpath; ?><!--</h1>-->
<!--                                            <h1>--><?php //echo $sour; ?><!--</h1>-->
<!--                                            <h1>--><?php //echo $dest; ?><!--</h1>-->
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="row-fluid about-us">
                                                        <div class="span4">
                                                            <img src="<?php echo base_url() . $imgdir . $a_img[$x]; ?>" alt="">
                                                        </div>
                                                        <div class="span8">
                                                            <div class="info">
                                                                <div class="span10">
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="txtAreaComment">
                                                                            <b style="color: black">Comment</b>
                                                                        </label>
                                                                        <div class="controls controls-row">
                                                    <textarea class="input-block-level" style="resize: none;" id="txtAreaComment" name="txtAreaComment[]" placeholder="comment here..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space10"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions text-right">
                                <button id="btnDesktopImageSelectProceed" name="btnDesktopImageSelectProceed"
                                        type="submit" class="btn btn-large btn-success">
                                    <i class="icon-ok"></i> Next Step
                                </button>
                                <a href="<?php echo base_url(); ?>index.php/knowledge"
                                   class="btn btn-large btn-success"><i class=" icon-arrow-left"></i> Back</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
