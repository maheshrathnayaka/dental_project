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
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Search/Results">
                                <div class="control-group">
                                        <label class="control-label">Enter Patient Name</label>
                                    <div class="controls">
                                        <input type="text" name="txtSearch" id="txtSearch" class="input-xxlarge" />
                                        <button type="submit" class="btn" name="submit">SEARCH</button>
                                    </div>

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
                                            <th class="hidden-phone">Last Visited Date/Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($search_data as $item){ ?>
                                        <tr class="odd gradeX">
                                            <td class="hidden-phone">
                                                <a href="#modelEnterQueue" data-toggle="modal" data-backdrop="static" data-keyboard="false" onclick="ButtonSettings();">
                                                    <?php echo $item['patient_first_name'];?> <?php echo $item['patient_last_name']; ?>
                                                </a>
                                            </td>
                                            <td class="hidden-phone"><?php echo $item['patient_gender'];?></td>
                                            <td class="center hidden-phone"><?php echo $item['patient_age'];?></td>
                                            <td class="center hidden-phone"><?php echo $item['date_time'];?></td>
                                        </tr>
                                    <?php } ?>
                                        </tbody>
                                    </table>

                                    <!---BEGIN MODAL--->
                                    <div id="modelEnterQueue" class="modal hide fade" tabindex="-1"
                                         role="dialog" aria-labelledby="modelEnterQueue"
                                         aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">x
                                            </button>
                                            <h3 id="myModalLabel4">Add Patient to Queue</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row-fluid">
                                                <div class="alert alert-block alert-success fade in" id="successAddQueue">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Success! Profile has been updated</h4>
                                                </div>
                                                <div class="alert alert-block alert-error fade in" id="errorAddQueue">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Error! Something went wrong</h4>
                                                </div>
                                                <div class="alert alert-block alert-error fade in" id="errorAddQueueFields">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Error! Following fields cannot be empty</h4>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="control-group">
                                                        <label class="control-label">First Name : </label>
                                                        <div class="controls controls-row">
                                                            <input id="txtFirstName" type="text" class="input-block-level" name="txtFirstName"
                                                                   value="<?php echo $item['patient_first_name'];?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true" id="btnAddQueueClose"></i>Close</button>
                                            <button class="btn btn-success" data-dismiss="" name="btnProfileSave" id="btnQueueSave" onclick="ProfileSaveButtonAction();">Save</button>
                                        </div>
                                    </div>
                                    <!---END MODAL--->
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