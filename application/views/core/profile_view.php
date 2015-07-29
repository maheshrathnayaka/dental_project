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
                        <h4><i class="icon-sort-by-attributes-alt"></i> Patient Profile</h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>
                    </div>
                    <div class="widget-body">
                        <!--BEGIN METRO STATES-->
                        <div class="row-fluid">
                            <!-- BEGIN PROFILE PORTLET-->
                            <div class=" profile span12">
                                <div class="span12">
                                    <div class="profile-head" style="min-height: 50px;">
                                        <div class="span5">
                                            <h1>
                                                <b>
                                                    <?php echo $profile_data["patient_first_name"] . " " . $profile_data["patient_last_name"] . " [ " . $profile_data["patient_gender"] . " ]"; ?>
                                                </b>
                                            </h1>
                                        </div>

                                        <div class="span2">
                                            <h1>Queue : <b><?php echo $channel_data["channel_number"]; ?></b></h1>
                                        </div>

                                        <div class="span5 text-right">
                                            <?php
                                            if ($age_data["age"] == null) {
                                                ?>
                                                <h1> Age : [ Not provided ]</h1>
                                                <?php
                                            } else {
                                                ?>
                                                <h1> Age : <b><?php echo $age_data["age"]; ?></b> Years</h1>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12 bio">
                                            <hr>
                                            <h3 class="text-error bold">Visit for
                                                : <?php echo $channel_data["patient_main_reason"]; ?></h3>
                                            <hr>
                                            <h3 class="text-info bold">Dental Health History</h3>
                                            <?php
                                            if (empty($dental_health_history_data)) {
                                                ?>
                                                <div class="alert alert-block alert-info fade in">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Oops ! No dental health
                                                        history data found for this patient</h4>


                                                </div>
                                                <?php
                                            } else {
                                                foreach ($dental_health_history_data as $key => $value) {
                                                    if ($value == 1) {
                                                        ?>
                                                        <span class="label label-important"
                                                              style="margin-right: 2px; margin-top: 5px;"><?php echo $key; ?></span>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>

                                            <?php
                                            if (!empty($dental_health_history_habitual_data)) {
                                                ?>
                                                <h4 class="text-warning bold">Habitual :
                                                    <?php
                                                    foreach ($dental_health_history_habitual_data as $key => $value) {
                                                        if ($value == 1) {
                                                            ?>
                                                            <span class="label gray"
                                                                  style="margin-right: 2px; margin-top: 5px;"><?php echo $key; ?></span>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </h4>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if (!empty($dental_health_history_feel_twinges_data)) {
                                                ?>
                                                <h4 class="text-warning bold">Feel twinges of pain when teeth come in
                                                    contact with :
                                                    <?php
                                                    foreach ($dental_health_history_feel_twinges_data as $key => $value) {
                                                        if ($value == 1) {
                                                            ?>
                                                            <span class="label gray"
                                                                  style="margin-right: 2px; margin-top: 5px;"><?php echo $key; ?></span>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </h4>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($profile_data["patient_allergies"] != null || $profile_data["patient_allergies"] != '') {
                                                ?>
                                                <h4 class="text-warning bold">Allergies
                                                    : <?php echo $profile_data["patient_allergies"]; ?>
                                                </h4>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($dental_health_history_other_data["health_history_other"] != null || $dental_health_history_other_data["health_history_other"] != '') {
                                                ?>
                                                <h4 class="text-warning bold">Other
                                                    : <?php echo $dental_health_history_other_data["health_history_other"]; ?>
                                                </h4>
                                                <?php
                                            }
                                            ?>

                                            <div class="space5"></div>
                                            <div class="text-left">
                                                <form class="form-vertical" method="get" action="#">
                                                <a href="#modelEditDentalHealthHistory" id="btnEditDentalHealthHistory"
                                                   role="button" class="btn btn-primary" data-toggle="modal"
                                                   data-backdrop="static" data-keyboard="false"><i
                                                        class="icon-pencil icon-white"></i> Change
                                                </a>

                                                    <div id="modelEditDentalHealthHistory" class="modal hide fade" tabindex="-1"
                                                         role="dialog" aria-labelledby="modelEditDentalHealthHistory"
                                                         aria-hidden="true">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <h3 id="myModalLabel4">Edit Dental Health History</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">First Name
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_first_name"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Surname : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_last_name"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Occupation
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_occupation"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Email : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_email"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Postal No
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["postal_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 01
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line1"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 02
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line2"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">City : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["city"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Home : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["home_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Mobile : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["mobile_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Work : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["work_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Cancel
                                                            </button>
                                                            <button class="btn btn-info" data-dismiss="modal"
                                                                    aria-hidden="true">Edit
                                                            </button>
                                                            <button class="btn btn-success hidden" data-dismiss="modal">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <hr>
                                            <h3 class="text-info bold">Medical Health History</h3>

                                            <?php
                                            if (empty($medical_health_history_data)) {
                                                ?>
                                                <div class="alert alert-block alert-info fade in">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Oops ! No medical health
                                                        history data found for this patient</h4>
                                                </div>
                                                <?php
                                            } else {
                                                foreach ($medical_health_history_data as $key => $value) {
                                                    if ($value == 1) {
                                                        ?>
                                                        <span class="label label-important"
                                                              style="margin-right: 2px; margin-top: 5px;"><?php echo $key; ?>
                                                        </span>
                                                        <?php
                                                    }
                                                }
                                                if (!empty($medical_health_history_other_data)) {
                                                    ?>
                                                    <span class="label label-inverse"
                                                          style="margin-right: 2px; margin-top: 5px;">Other : <?php echo $medical_health_history_other_data['other']; ?>
                                                    </span>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="space5"></div>
                                            <div class="text-left">
                                                <form class="form-vertical" method="get" action="#">
                                                <a href="#modelEditMedicalHealthHistory"
                                                   id="btnEditMedicalHealthHistory" role="button"
                                                   class="btn btn-primary" data-toggle="modal" data-backdrop="static"
                                                   data-keyboard="false"><i
                                                        class="icon-pencil icon-white"></i> Change
                                                </a>

                                                    <div id="modelEditMedicalHealthHistory" class="modal hide fade" tabindex="-1"
                                                         role="dialog" aria-labelledby="modelEditMedicalHealthHistory"
                                                         aria-hidden="true">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <h3 id="myModalLabel4">Edit Medical Health History</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row-fluid">
                                                                <div class="span4">
                                                                    <div class="control-group">
                                                                        <div class="controls controls-row">
                                                                            <input type="checkbox" class="input-block-level"
                                                                                   name="" value="<?php echo $medical_health_history_data["Diabetes"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span4">
                                                                    <div class="control-group">
                                                                        <div class="controls controls-row">
                                                                            <input type="checkbox" class="input-block-level"
                                                                                   name="" value="<?php echo $medical_health_history_data["High cholesterol"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span4">
                                                                    <div class="control-group">
                                                                        <div class="controls controls-row">
                                                                            <input type="checkbox" class="input-block-level"
                                                                                   name="" value="<?php echo $medical_health_history_data["High blood pressure"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Occupation
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_occupation"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Email : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_email"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Postal No
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["postal_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 01
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line1"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 02
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line2"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">City : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["city"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Home : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["home_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Mobile : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["mobile_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Work : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["work_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Cancel
                                                            </button>
                                                            <button class="btn btn-info" data-dismiss="modal"
                                                                    aria-hidden="true">Edit
                                                            </button>
                                                            <button class="btn btn-success hidden" data-dismiss="modal">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <?php
                                            if ($profile_data['patient_gender'] == 'F') {
                                                ?>
                                                <hr>
                                                <h3 class="text-info bold">Women's Health</h3>
                                                <div class="span12">
                                                    <?php
                                                    if ($dental_health_history_womens_health_data['Are_you_pregnant'] == 1) {
                                                        ?>
                                                        <div class="span6">
                                                            <h4 class="text-warning bold">Pregnancy Details</h4>
                                                            <h4 class="bold">Number of weeks
                                                                : <?php echo $dental_health_history_womens_health_data["Number_of_weeks"]; ?>
                                                            </h4>
                                                            <h4 class="bold">Total number of pregnancies
                                                                : <?php echo $dental_health_history_womens_health_data["Total_number_of_pregnancies"]; ?>
                                                            </h4>
                                                            <h4 class="bold">Number of births
                                                                : <?php echo $dental_health_history_womens_health_data["Number_of_births"]; ?>
                                                            </h4>
                                                        </div>
                                                        <?php
                                                    }
                                                    if ($dental_health_history_womens_health_data['Nursing'] == 1) {
                                                        ?>
                                                        <div class="span6">
                                                            <h4 class="text-warning bold">Nursing Details</h4>
                                                            <h4 class="bold">Date of last menstrual period
                                                                : <?php echo $dental_health_history_womens_health_data["if_you_are_still_menstruating"]; ?>
                                                            </h4>
                                                            <h4 class="bold">Age at beginning of periods
                                                                : <?php echo $dental_health_history_womens_health_data["Age_at_beginning_of_periods"]; ?>
                                                            </h4>
                                                            <h4 class="bold">Age at end of periods
                                                                : <?php echo $dental_health_history_womens_health_data["Age_at_end_of_periods"]; ?>
                                                            </h4>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="space5"></div>
                                                <div class="text-left">
                                                    <form class="form-vertical" method="get" action="#">
                                                    <a href="#modelEditWomenHealthHistory"
                                                       id="btnEditWomenHealthHistory" role="button"
                                                       class="btn btn-primary" data-toggle="modal"
                                                       data-backdrop="static" data-keyboard="false"><i
                                                            class="icon-pencil icon-white"></i> Change
                                                    </a>

                                                        <div id="modelEditWomenHealthHistory" class="modal hide fade" tabindex="-1"
                                                             role="dialog" aria-labelledby="modelEditWomenHealthHistory"
                                                             aria-hidden="true">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">×
                                                                </button>
                                                                <h3 id="myModalLabel4">Edit Women's Health History</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">First Name
                                                                                : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $profile_data["patient_first_name"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Surname : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $profile_data["patient_last_name"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Occupation
                                                                                : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $profile_data["patient_occupation"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Email : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $profile_data["patient_email"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Postal No
                                                                                : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $address_data["postal_no"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Address Line 01
                                                                                : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $address_data["address_line1"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Address Line 02
                                                                                : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $address_data["address_line2"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">City : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $address_data["city"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Home : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $contact_data["home_no"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Mobile : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $contact_data["mobile_no"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label class="control-label">Work : </label>

                                                                            <div class="controls controls-row">
                                                                                <input type="text" class="input-block-level"
                                                                                       name="" value="<?php echo $contact_data["work_no"];?>"
                                                                                       disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn" data-dismiss="modal"
                                                                        aria-hidden="true"></i>Cancel
                                                                </button>
                                                                <button class="btn btn-info" data-dismiss="modal"
                                                                        aria-hidden="true">Edit
                                                                </button>
                                                                <button class="btn btn-success hidden" data-dismiss="modal">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <hr>
                                            <h3 class="text-info bold">Past Treatments</h3>
                                            <?php
                                            if (empty($dental_health_history_past_treatments_data)) {
                                                ?>
                                                <div class="alert alert-block alert-info fade in">
                                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                                    <h4 class="alert-heading text-center">Oops ! No past treatment data
                                                        found for this patient</h4>
                                                </div>
                                                <?php
                                            } else {
                                                foreach ($dental_health_history_past_treatments_data as $key => $value) {
                                                    if ($value == 1) {
                                                        ?>
                                                        <span class="label label-important"
                                                              style="margin-right: 2px; margin-top: 5px;"><?php echo $key; ?>
                                                        </span>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>

                                            <div class="space5"></div>
                                            <div class="text-left">
                                                <form class="form-vertical" method="get" action="#">
                                                <a href="#modelEditPastTreatment" id="btnEditPastTreatment"
                                                   role="button" class="btn btn-primary" data-toggle="modal"
                                                   data-backdrop="static" data-keyboard="false"><i
                                                        class="icon-pencil icon-white"></i> Change
                                                </a>

                                                <div id="modelEditPastTreatment" class="modal hide fade" tabindex="-1"
                                                     role="dialog" aria-labelledby="modelEditPastTreatment"
                                                     aria-hidden="true">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×
                                                        </button>
                                                        <h3 id="myModalLabel4">Edit Past Treatments</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">First Name
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $profile_data["patient_first_name"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Surname : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $profile_data["patient_last_name"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Occupation
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $profile_data["patient_occupation"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Email : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $profile_data["patient_email"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Postal No
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $address_data["postal_no"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Address Line 01
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $address_data["address_line1"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Address Line 02
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $address_data["address_line2"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">City : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $address_data["city"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Home : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $contact_data["home_no"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Mobile : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $contact_data["mobile_no"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Work : </label>

                                                                    <div class="controls controls-row">
                                                                        <input type="text" class="input-block-level"
                                                                               name="" value="<?php echo $contact_data["work_no"];?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal"
                                                                aria-hidden="true"></i>Cancel
                                                        </button>
                                                        <button class="btn btn-info" data-dismiss="modal"
                                                                aria-hidden="true">Edit
                                                        </button>
                                                        <button class="btn btn-success hidden" data-dismiss="modal">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <hr>
                                            <h3 class="text-info bold">Profile</h3>

                                            <div class="span12">
                                                <div class="span6">
                                                    <h4 class="bold">Name
                                                        : <?php echo $profile_data["patient_first_name"] . ' ' . $profile_data["patient_last_name"]; ?></h4>
                                                    <h4 class="bold">Birthday
                                                        : <?php echo $profile_data["patient_birthday"]; ?></h4>
                                                    <h4 class="bold">Address
                                                        : <?php echo $address_data["postal_no"] . ', ' . $address_data["address_line1"] . ', ' . $address_data["address_line2"] . ', ' . $address_data["city"]; ?></h4>
                                                    <h4 class="bold">Occupation
                                                        : <?php echo $profile_data["patient_occupation"]; ?></h4>
                                                </div>
                                                <div class="span6">
                                                    <h4 class="bold">Home No
                                                        : <?php echo $contact_data["home_no"]; ?></h4>
                                                    <h4 class="bold">Mobile No
                                                        : <?php echo $contact_data["mobile_no"]; ?></h4>
                                                    <h4 class="bold">Work No
                                                        : <?php echo $contact_data["work_no"]; ?></h4>
                                                </div>
                                            </div>
                                            <div class="space5"></div>
                                            <div class="text-left">
                                                <form class="form-vertical" method="get" action="#">
                                                    <a href="#modelEditProfile" id="btnEditProfile" role="button"
                                                       class="btn btn-primary" data-toggle="modal"
                                                       data-backdrop="static" data-keyboard="false"><i
                                                            class="icon-pencil icon-white"></i> Change
                                                    </a>

                                                    <div id="modelEditProfile" class="modal hide fade" tabindex="-1"
                                                         role="dialog" aria-labelledby="modelEditProfile"
                                                         aria-hidden="true">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <h3 id="myModalLabel4">Edit Patient Profile</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">First Name
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_first_name"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Surname : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_last_name"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Occupation
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_occupation"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Email : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $profile_data["patient_email"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Postal No
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["postal_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 01
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line1"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Address Line 02
                                                                            : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["address_line2"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">City : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $address_data["city"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Home : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["home_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Mobile : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["mobile_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label">Work : </label>

                                                                        <div class="controls controls-row">
                                                                            <input type="text" class="input-block-level"
                                                                                   name="" value="<?php echo $contact_data["work_no"];?>"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Cancel
                                                            </button>
                                                            <button class="btn btn-info" data-dismiss="modal"
                                                                    aria-hidden="true">Edit
                                                            </button>
                                                            <button class="btn btn-success hidden" data-dismiss="modal">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <hr>
                                            <div class="text-right">
                                                <button id="btnDiagnose" class="btn btn-success btn-large"><i
                                                        class="icon-file-text icon-white"></i> Diagnose
                                                </button>
                                            </div>
                                            <div class="space5"></div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE PORTLET-->
                        </div>
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
