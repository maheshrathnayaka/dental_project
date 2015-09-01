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
            <!--            <div class="span12">-->
            <!-- BEGIN SAMPLE FORMPORTLET-->
            <div class="widget purple">
                <div class="widget-title">
                    <h4><i class="icon-link"></i> Treatments & Medications </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                </div>
                <div class="widget-body">
                    <form class="form-vertical" id="formTreatmentMedication" method="post"
                          action="<?php echo base_url(); ?>index.php/reg">
                        <div class="row-fluid">
                            <div class="control-group">
                                <?php
                                if ($images_status == "yes") {
                                    ?>
                                    <table class="table table-hover file-search">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Comment</th>
                                            <th>Added date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($images as $img_row) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="max-width: 100px; max-height: 100px;"
                                                         src="<?php echo $img_row['image_path']; ?>" alt="">
                                                    <?php echo $img_row['image_name']; ?>
                                                </td>
                                                <td><strong><?php echo $img_row['comment']; ?>  </strong></td>
                                                <?php
                                                $added_date = explode(' ', $img_row['date_added']);
                                                ?>
                                                <td><strong><?php echo $added_date[0]; ?>  </strong></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group">
                                <label for="dpTreatment" class="control-label"><b>Treatments </b></label>

                                <div class="controls">
                                    <select id="dpTreatment" name="dpTreatment" data-placeholder="treatments here..."
                                            class="chzn-select span12">
                                        <option value="no">-- Please Select --</option>
                                        <option value="urgent">Urgent Treatment </option>
                                        <option value="restorative">Restorative Care </option>
                                        <option value="preventive">Preventive Care </option>
                                        <option value="other">Other </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group">
                                <label for="dpMedication" class="control-label"><b>Medications </b></label>

                                <div class="controls">
                                    <select id="dpMedication" name="dpMedication" data-placeholder="medications here..."
                                            class="chzn-select span12" multiple="multiple">
                                        <?php
                                        foreach ($medications as $medication) {
                                            ?>
                                            <option
                                                value="<?php echo $medication['medication_id']; ?>"><?php echo $medication['medication_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group">
                                <label for="dpDisease" class="control-label"><b>Disease </b></label>

                                <div class="controls">
                                    <select id="dpDisease" name="dpDisease" data-placeholder="disease here..."
                                            class="chzn-select span12">
                                        <option value="no">-- Please Select --</option>
                                        <option value="caries">Caries </option>
                                        <option value="periodontal">Periodontal diseases</option>
                                        <option value="lesions">Lesions </option>
                                        <option value="malocclusion">Malocclusion </option>
                                        <option value="fluorosis">Fluorosis </option>
                                        <option value="sensitivity">Sensitivity </option>
                                        <option value="oropharyngeal">Oropharyngeal Cancer </option>
                                        <option value="missing">Missing Teeth </option>
                                        <option value="dry">Dry Mouth </option>
                                        <option value="extra">Extra Oral </option>
                                        <option value="other">Other </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group">
                                <label for="dpCategory" class="control-label"><b>Category </b></label>
                                <div class="controls">
                                    <select id="dpCategory" name="dpCategory" data-placeholder="category here..."
                                            class="chzn-select span12">
                                        <option value="no">-- Please Select --</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
