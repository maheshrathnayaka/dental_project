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
                        <div class="megaexamples">
                            <!--  FILTER STYLED  -->
                            <span class="label label-important bold"> NOTE : THIS CANNOT BE UNDO! </span>
                                         <span class="bold">
                                             <h4>
                                                 <b>
                                                     Please select images that are wish to save on patient's profile
                                                 </b>
                                             </h4>
                                         </span>
                            <div class="clear"></div>
                            <div class="metro-gallery">
                                <!-- The GRID System -->
                                <div class="metro-gal-container noborder norounded dark-bg-entries">

                                    <!-- A GALLERY ENTRY -->
<!--                                    <div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" data-width="780" data-height="585" data-lowsize="">-->
<!--                                        <div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">-->
<!--                                        </div>-->
<!--                                        <div class="pull-right">-->
<!--                                            <input id="testInput" type="checkbox" style="width:50px; height:50px;">-->
<!--                                        </div>-->
<!--                                        <!-- The Link Buttons -->
<!--                                        <div class="mega-coverbuttons">-->
<!--                                            <a class="fancybox" rel="group" href="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" title="--><?php //echo base_url(); ?><!--tempImg/vre.bmp"><div class="mega-view mega-red"></div></a>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <!-- A GALLERY ENTRY -->
<!--                                    <div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" data-width="780" data-height="585" data-lowsize="">-->
<!--                                        <div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">-->
<!--                                        </div>-->
<!--                                        <div class="pull-right">-->
<!--                                            <input id="testInput" type="checkbox" style="width:50px; height:50px;">-->
<!--                                        </div>-->
<!--                                        <!-- The Link Buttons -->
<!--                                        <div class="mega-coverbuttons">-->
<!--                                            <a class="fancybox" rel="group" href="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" title="--><?php //echo base_url(); ?><!--tempImg/vre.bmp"><div class="mega-view mega-red"></div></a>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <!-- A GALLERY ENTRY -->
<!--                                    <div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" data-width="780" data-height="585" data-lowsize="">-->
<!--                                        <div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">-->
<!--                                        </div>-->
<!--                                        <div class="pull-right">-->
<!--                                            <input id="testInput" type="checkbox" style="width:50px; height:50px;">-->
<!--                                        </div>-->
<!--                                        <!-- The Link Buttons -->
<!--                                        <div class="mega-coverbuttons">-->
<!--                                            <a class="fancybox" rel="group" href="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" title="--><?php //echo base_url(); ?><!--tempImg/vre.bmp"><div class="mega-view mega-red"></div></a>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <!-- A GALLERY ENTRY -->
<!--                                    <div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" data-width="780" data-height="585" data-lowsize="">-->
<!--                                        <div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">-->
<!--                                        </div>-->
<!--                                        <div class="pull-right">-->
<!--                                            <input id="testInput" type="checkbox" style="width:50px; height:50px;">-->
<!--                                        </div>-->
<!--                                        <!-- The Link Buttons -->
<!--                                        <div class="mega-coverbuttons">-->
<!--                                            <a class="fancybox" rel="group" href="--><?php //echo base_url(); ?><!--tempImg/vre.bmp" title="--><?php //echo base_url(); ?><!--tempImg/vre.bmp"><div class="mega-view mega-red"></div></a>-->
<!--                                        </div>-->
<!--                                    </div>-->



                                    <?php
                                    $imgdir = 'tempImg/'; //Pick your folder
                                    $allowed_types = array('png', 'jpg', 'jpeg', 'bmp'); //Allowed types of files
                                    $dimg = opendir($imgdir);//Open directory
                                    while($imgfile = readdir($dimg)) {
                                        if( in_array(strtolower(substr($imgfile,-3)),$allowed_types) OR
                                            in_array(strtolower(substr($imgfile,-4)),$allowed_types) )
                                            /*If the file is an image add it to the array*/
                                        {$a_img[] = $imgfile;}
                                    }
                                    echo "<ul>";
                                    $totimg = count($a_img);  //The total count of all the images
                                    //Echo out the images and their paths incased in an li.
                                    for($x=0; $x < $totimg; $x++){
                                        echo '<li><img src="'. base_url().$imgdir . $a_img[$x].'" /></li>';
                                        echo base_url().$imgdir . $a_img[$x];
                                    }
                                    echo "<li><img src='http://localhost/dental_project/tempImg/vre.bmp' /></li>";
                                    echo "</ul>";
                                    ?>



































                                </div>
                            </div>
                        </div>
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
