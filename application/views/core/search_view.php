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
                        <form name="searchResults" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Search/Results">
                            <div class="control-group">
                                <div class="space20"></div>
                                <div class="space20"></div>
                                <label class="control-label">Enter Patient Name</label>
                                <div class="controls">
                                    <input type="text" name="txtSearch" id="txtSearch" class="input-xxlarge">
                                    <button type="submit" class="btn" name="submit">SEARCH</button>
                                </div>
                            </div>
                            <?php
                            if($patient == "added_to_queue"){
                                ?>
                                <div class="alert alert-block alert-success fade in" id="divSuccessArea">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <h4 class="alert-heading text-center">Success! Patient has been added to the Queue.</h4>
                                </div>
                                <?php
                            }
                            ?>
                        </form>
                        <div class="space20"></div>
                        <!--BEGIN PRODUCT SEARCH-->
                        <?php
                            if (isset($search_data) && !empty($search_data))
                            {
                        ?>
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th class="hidden-phone">Patient Name</th>
                                        <th class="hidden-phone">Gender</th>
                                        <th class="hidden-phone">Age</th>
                                        <th class="hidden-phone"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($search_data as $item){ ?>
                                        <tr class="odd gradeX">
                                            <td class="hidden-phone">
                                                <?php echo $item['patient_first_name'] . ' ' .  $item['patient_last_name']; ?>
                                            </td>
                                            <td class="hidden-phone"><?php echo $item['patient_gender'];?></td>
                                            <td class="center hidden-phone"><?php echo $item['patient_age'];?></td>
                                            <td class="center hidden-phone">
                                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $item['patient_id']; ?>">Add to Queue</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            <?php foreach ($search_data as $item){ ?>

                                <div class="modal fade" id="myModal<?php echo $item['patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <form role="form" name="frmAddQueue<?php echo $item['patient_id']; ?>" id="frmAddQueue<?php echo $item['patient_id']; ?>" method="post" action="<?php echo base_url(); ?>index.php/search/add_to_queue">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><strong>Add Patient to the Queue</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label">Patient : <?php echo $item['patient_first_name'] . ' ' .  $item['patient_last_name']; ?></label>
                                                    <br/>
                                                    <label class="control-label" for="txtReason"><b>Reason for Today's Visit</b></label>
                                                    <textarea class="form-control" rows="4" style="width: 90%;" required  id="txtReason" name="txtReason"></textarea>
                                                    <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $item['patient_id']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-success" value="Save changes">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        <?php
                            }else {
                        ?>
                                <div class="alert alert-block alert-info fade in text-center">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <h4 class="alert-heading">Oops! No Search Results Available....!</h4>
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