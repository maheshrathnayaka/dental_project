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
                                        <option value="urgent">Urgent Treatment</option>
                                        <option value="restorative">Restorative Care</option>
                                        <option value="preventive">Preventive Care</option>
                                        <option value="other">Other</option>
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
                                        <option value="caries">Caries</option>
                                        <option value="initial">Initial</option>
                                        <option value="dentine">Dentine</option>
                                        <option value="pulp">Pulp exposed</option>
                                        <option value="periodontal">Periodontal diseases</option>
                                        <option value="gingivitis">Gingivitis</option>
                                        <option value="periodontitis">Periodontitis</option>
                                        <option value="lesions">Lesions</option>
                                        <option value="premalignant">Premalignant</option>
                                        <option value="cancerous">Cancerous</option>
                                        <option value="nonCancerous">Non Cancerous</option>
                                        <option value="malocclusion">Malocclusion</option>
                                        <option value="cls2d1">Class 2 Division 1</option>
                                        <option value="cls2d1">Class 2 Division 2</option>
                                        <option value="cls2d1">Class 3</option>
                                        <option value="fluorosis">Fluorosis</option>
                                        <option value="sensitivity">Sensitivity</option>
                                        <option value="toothDecay">Tooth decay</option>
                                        <option value="fractured">Fractured teeth</option>
                                        <option value="wornFilling">Worn fillings</option>
                                        <option value="gumDisease">Gum disease</option>
                                        <option value="wornTooth">Worn tooth enamel</option>
                                        <option value="exposedTooth">Exposed tooth root</option>
                                        <option value="oropharyngeal">Oropharyngeal Cancer</option>
                                        <option value="sores">Sores that bleed easily or do not heal</option>
                                        <option value="thick">Thick or hard spot or lump</option>
                                        <option value="roughened">Roughened or crusted area</option>
                                        <option value="numbness">Numbness, pain or tenderness</option>
                                        <option value="change">Change in the way your teeth fit together when you bite
                                            down
                                        </option>
                                        <option value="missing">Missing Teeth</option>
                                        <option value="dry">Dry Mouth</option>
                                        <option value="extra">Extra Oral</option>
                                        <option value="facial">Facial issues</option>
                                        <option value="swellings">Swellings</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="row-fluid">-->
                        <!--                            <div class="control-group">-->
                        <!--                                <label for="dpCategory" class="control-label"><b>Category </b></label>-->
                        <!--                                <div class="controls">-->
                        <!--                                    <select id="dpCategory" name="dpCategory" data-placeholder="category here..."-->
                        <!--                                            class="chzn-select span12">-->
                        <!--                                        <option value="no">-- Please Select --</option>-->
                        <!--                                    </select>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="form-actions text-right">
                            <button id="btnPatientSave" name="btnPatientSave" type="submit" class="btn btn-large btn-success" tabindex="85"><i
                                    class="icon-ok"></i> Print Receipt
                            </button>
                            <a href="<?php echo base_url(); ?>" class="btn btn-large btn-success"><i class=" icon-remove"></i> Channelling Queue</a>
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
