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
                        <h4><i class="icon-link"></i> Select Images using Desktop Application </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <form class="form-vertical" id="formDesktopView" method="post" action="<?php echo base_url(); ?>index.php/cmnt">
                        <div class="megaexamples">
                                    <?php
                                    function is_dir_empty($dir) {
                                        foreach (new DirectoryIterator($dir) as $fileInfo) {
                                            if($fileInfo->isDot()) continue;
                                            return false;
                                        }
                                        return true;
                                    }
                                    if (!is_dir_empty(FCPATH.'tempImg/')) {
                                        $imgdir = 'tempImg/'; //Pick your folder
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
                                        ?>
                                        <!--  FILTER STYLED  -->
                                        <span class="label label-important bold"> NOTE : THIS CANNOT BE UNDONE! </span>
                                        <span class="bold">
                                             <h4>
                                                 <b>
                                                     Please select images that you wish to save on patient's profile
                                                 </b>
                                             </h4>
                                         </span>
                            <div class="clear"></div>
                            <div class="metro-gallery">
                                <!-- The GRID System -->
                                <div class="metro-gal-container noborder norounded dark-bg-entries">
                                        <?php
                                        for ($x = 0; $x < $totimg; $x++) {
                                            ?>
                                            <div class="mega-entry cat-two cat-all" id="mega-entry-1"
                                                 data-src="<?php echo base_url() . $imgdir . $a_img[$x]; ?>"
                                                 data-width="780" data-height="585" data-lowsize="">
                                                <div
                                                    class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">
                                                </div>
                                                <div class="pull-right">
                                                    <input id="chkDesktopImages" name="chkDesktopImages[]"
                                                           value="<?php echo base_url() . $imgdir . $a_img[$x]; ?>"
                                                           type="checkbox" style="width:50px; height:50px;">
                                                </div>
                                                <!-- The Link Buttons -->
                                                <div class="mega-coverbuttons">
                                                    <a class="fancybox" rel="group"
                                                       href="<?php echo base_url() . $imgdir . $a_img[$x]; ?>"
                                                       title="<?php echo $a_img[$x]; ?>">
                                                        <div class="mega-view mega-red"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                </div>
                            </div>
                                    <?php
                                    }else{
                                        ?>
                                        <div class="alert alert-block alert-info fade in">
                                            <button data-dismiss="alert" class="close" type="button">x</button>
                                            <h4 class="alert-heading"> Oops! </h4>
                                            <h4 class="alert-heading"> Image directory is empty. Please get images using intra-oral camera and try again</h4>
                                        </div>
                                    <?php
                                    }
                                    ?>

                            <div class="form-actions text-right">
                                <button id="btnDesktopImageSelectProceed" name="btnDesktopImageSelectProceed" type="submit" class="btn btn-large btn-success">
                                    <i class="icon-ok"></i> Proceed
                                </button>
                                <a href="<?php echo base_url(); ?>index.php/knowledge" class="btn btn-large btn-success"><i class=" icon-arrow-left"></i> Back</a>
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
