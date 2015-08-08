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
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-edit"></i> Patient Search </h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                    </span>
                    </div>
                    <div class="widget-body">
                        <div class="widget">
                            <div class="widget-body">

                                    <form class="form-horizontal search-result" method="post" action="<?php echo base_url(); ?>index.php/Search/Results">
                                        <div class="control-group">
                                            <label class="control-label">Enter Patient Name </label>
                                            <div class="controls">
                                                <input type="text" name="txtSearch" id="txtSearch" class="input-xxlarge" >

                                            </div>
                                            <button type="submit" class="btn" name="submit">SEARCH</button>
                                        </div>
                                    </form>
                                    <div class="space20"></div>
                                    <!--BEGIN PRODUCT SEARCH-->
                                    <?php
                                        if (isset($search_data))
                                        {
                                    ?>
                                            <table class="table table-striped table-bordered" id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th class="hidden-phone">Patient Name</th>
                                                    <th class="hidden-phone">Gender</th>
                                                    <th class="hidden-phone">Age</th>
                                                    <th class="hidden-phone">Last Visited</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                            <?php foreach ($search_data as $item){ ?>
                                                <tr class="odd gradeX">
                                                    <td class="hidden-phone"><a href="#"><?php echo $item['patient_first_name'];?> <?php echo $item['patient_last_name']; ?></a></td>
                                                    <td class="hidden-phone"><?php echo $item['patient_gender'];?></td>
                                                    <td class="center hidden-phone"><?php echo $item['patient_age'];?></td>
                                                    <td class="center hidden-phone"><?php echo $item['patient_first_name'];?></td>
                                                </tr>
                                            <?php } ?>
                                                </tbody>
                                            </table>
                                    <?php
                                        }else {
                                    ?>
                                            <div class="alert alert-block alert-info fade in text-center">
                                                <button data-dismiss="alert" class="close" type="button">x</button>
                                                <h4 class="alert-heading">Oops! Currently patient queue is empty</h4>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                    <!--END PRODUCT SEARCH-->
                                    <div class="space20"></div>

                                    <div class="pagination pagination-centered">
                                        <ul>
                                            <li><a href="#">Prev</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                            </div>
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