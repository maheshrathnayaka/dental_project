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
                                                    <a href="#modelEditDentalHealthHistory"
                                                       id="btnEditDentalHealthHistory"
                                                       role="button" class="btn btn-primary" data-toggle="modal"
                                                       data-backdrop="static" data-keyboard="false"><i
                                                            class="icon-pencil icon-white"
                                                            onclick="ButtonSettings();"></i> Change
                                                    </a>

                                                    <div id="modelEditDentalHealthHistory" class="modal hide fade"
                                                         tabindex="-1"
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
                                                                <div class="span12">
                                                                    <label for="chkDifficultyChewingFood">
                                                                        <input type="checkbox" id="chkDifficultyChewingFood"
                                                                               name="chkDifficultyChewingFood"
                                                                               value="DifficultyChewingFood" tabindex="54" disabled/>
                                                                        <b> Do you have difficulty in chewing your food?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkTeethSensitive">
                                                                        <input type="checkbox" id="chkTeethSensitive" name="chkTeethSensitive"
                                                                               value="TeethSensitive" tabindex="55" disabled/>
                                                                        <b> Are your teeth sensitive?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkChewOneSide">
                                                                        <input type="checkbox" id="chkChewOneSide" name="chkChewOneSide"
                                                                               value="ChewOneSide" tabindex="56" disabled/>
                                                                        <b> Do you chew on only one side of your mouth?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkHurtWhenBite">
                                                                        <input type="checkbox" id="chkHurtWhenBite" name="chkHurtWhenBite"
                                                                               value="HurtWhenBite" tabindex="57" disabled/>
                                                                        <b> Does it hurt when you chew or open wide to take a bite?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkAvoidBrishingPain">
                                                                        <input type="checkbox" id="chkAvoidBrishingPain"
                                                                               name="chkAvoidBrishingPain"
                                                                               value="AvoidBrishingPain" tabindex="58" disabled/>
                                                                        <b> Do you avoid brushing any part of your mouth because of pain?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkSlowHealing">
                                                                        <input type="checkbox" id="chkSlowHealing" name="chkSlowHealing"
                                                                               value="SlowHealing" tabindex="59" disabled/>
                                                                        <b> Have you ever noticed slow-healing sores in or about your mouth?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkGumsBleed">
                                                                        <input type="checkbox" id="chkGumsBleed"
                                                                               name="chkGumsBleed" value="GumsBleed" tabindex="60" disabled/>
                                                                        <b> Do your gums bleed when you floss?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkHadTrauma">
                                                                        <input type="checkbox" id="chkHadTrauma" name="chkHadTrauma"
                                                                               value="HadTrauma" tabindex="61" disabled/>
                                                                        <b> Have you had a blow to the jaw (trauma)?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkGumsSwollenTender">
                                                                        <input type="checkbox" id="chkGumsSwollenTender"
                                                                               name="chkGumsSwollenTender" value="GumsSwollenTender"
                                                                               tabindex="62" disabled/>
                                                                        <b> Do your gums feel swollen or tender?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <label for="chkPainInFCJJTT">
                                                                        <input type="checkbox" id="chkPainInFCJJTT"
                                                                               name="chkPainInFCJJTT" value="PainInFCJJTT" tabindex="63" disabled/>
                                                                        <b> Do you have pain in the face, cheeks, jaws, joints, throat, or
                                                                            temples?</b>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row-fluid">
                                                                <h4><b>Are you a habitual</b></h4>
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkGumChewer">
                                                                            <input type="checkbox" id="chkGumChewer" name="chkGumChewer"
                                                                                   value="GumChewer" tabindex="64" disabled/>
                                                                            <b> Gum chewer?</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkBetelChewer">
                                                                            <input type="checkbox" id="chkBetelChewer" name="chkBetelChewer"
                                                                                   value="BetelChewer" tabindex="65" disabled/>
                                                                            <b> Betel chewer?</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkPipeSmoker">
                                                                            <input type="checkbox" id="chkPipeSmoker" name="chkPipeSmoker"
                                                                                   value="PipeSmoker" tabindex="66" disabled/>
                                                                            <b> Pipe smoker?</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkCigarette">
                                                                            <input type="checkbox" id="chkCigarette" name="chkCigarette"
                                                                                   value="Cigarette" tabindex="67" disabled/>
                                                                            <b> Cigarette smoker?</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row-fluid">
                                                                <h4><b>Do you feel twinges of pain when your teeth come in contact with</b></h4>
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkHotFood">
                                                                            <input type="checkbox" id="chkHotFood" name="chkHotFood"
                                                                                   value="HotFood" tabindex="68" disabled/>
                                                                            <b> Hot foods or liquids?</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkColdFood">
                                                                            <input type="checkbox" id="chkColdFood" name="chkColdFood"
                                                                                   value="ColdFood" tabindex="69" disabled/>
                                                                            <b> Cold foods or liquids?</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkSours">
                                                                            <input type="checkbox" id="chkSours" name="chkSours"
                                                                                   value="Sours" tabindex="70" disabled/>
                                                                            <b> Sours?</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkSweets">
                                                                            <input type="checkbox" id="chkSweets" name="chkSweets"
                                                                                   value="Sweets" tabindex="71" disabled/>
                                                                            <b> Sweets?</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="txtAreaReasonForVisit"><b>Known Allergies</b></label>

                                                                        <div class="controls controls-row">
                                                                            <textarea class="input-block-level" style="resize: none;" id="txtAreaReasonForVisit" name="txtAreaReasonForVisit" placeholder="known allergies here..." tabindex="15" disabled></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="span6">
                                                                    <div class="control-group">
                                                                        <label class="control-label" for="txtAreaReasonForVisit"><b>Other</b></label>

                                                                        <div class="controls controls-row">
                                                                            <textarea class="input-block-level" style="resize: none;" id="txtAreaReasonForVisit" name="txtAreaReasonForVisit" placeholder="other information here..." tabindex="15"  disabled></textarea>
                                                                            <input id="txtIdentityDentalHealth" name="txtIdentity"
                                                                                   value="DentalHealthData" hidden>
                                                                            <input id="txtPID" name="txtPID"
                                                                                   value="<?php echo $profile_data["patient_id"]; ?>"
                                                                                   hidden>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Close
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
                                                <form class="form-vertical" method="post"
                                                      action="<?php echo base_url(); ?>index.php/channeling/profile_save">
                                                    <a href="#modelEditMedicalHealthHistory"
                                                       id="btnEditMedicalHealthHistory" role="button"
                                                       class="btn btn-primary" data-toggle="modal"
                                                       data-backdrop="static"
                                                       data-keyboard="false" onclick="ButtonSettings();"><i
                                                            class="icon-pencil icon-white"></i> Change
                                                    </a>

                                                    <div id="modelEditMedicalHealthHistory" class="modal hide fade"
                                                         tabindex="-1"
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
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkDiabetes">
                                                                            <input type="checkbox" id="chkDiabetes"
                                                                                   name="chkDiabetes"
                                                                                   value="Diabetes" tabindex="25" disabled/>
                                                                            <b> Diabetes</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkShortness">
                                                                            <input type="checkbox" id="chkShortness"
                                                                                   name="chkShortness"
                                                                                   value="Shortness" tabindex="26" disabled/>
                                                                            <b> Shortness of breath</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkAngina">
                                                                            <input type="checkbox" id="chkAngina"
                                                                                   name="chkAngina" value="Angina"
                                                                                   tabindex="27" disabled/>
                                                                            <b> Heart disease/Murmur/Angina</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkDepression">
                                                                            <input type="checkbox" id="chkDepression"
                                                                                   name="chkDepression"
                                                                                   value="Depression" tabindex="28" disabled/>
                                                                            <b> Depression/Anxiety</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkHighCholesterol">
                                                                            <input type="checkbox"
                                                                                   id="chkHighCholesterol"
                                                                                   name="chkHighCholesterol"
                                                                                   value="HighCholesterol"
                                                                                   tabindex="29" disabled/>
                                                                            <b> High cholesterol</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkTonsillitis">
                                                                            <input type="checkbox" id="chkTonsillitis"
                                                                                   name="chkTonsillitis"
                                                                                   value="Tonsillitis" tabindex="30" disabled/>
                                                                            <b> Tonsillitis</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkKidney">
                                                                            <input type="checkbox" id="chkKidney"
                                                                                   name="chkKidney" value="Kidney"
                                                                                   tabindex="31" disabled/>
                                                                            <b> Kidney/Bladder problems</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkThyroid">
                                                                            <input type="checkbox" id="chkThyroid"
                                                                                   name="chkThyroid"
                                                                                   value="Thyroid" tabindex="32" disabled/>
                                                                            <b> Thyroid problems</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkHighBloodPressure">
                                                                            <input type="checkbox"
                                                                                   id="chkHighBloodPressure"
                                                                                   name="chkHighBloodPressure"
                                                                                   value="HighBloodPressure"
                                                                                   tabindex="33" disabled/>
                                                                            <b> High blood pressure</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkAsthma">
                                                                            <input type="checkbox" id="chkAsthma"
                                                                                   name="chkAsthma" value="Asthma"
                                                                                   tabindex="34" disabled/>
                                                                            <b> Asthma</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkLung">
                                                                            <input type="checkbox" id="chkLung"
                                                                                   name="chkLung" value="Lung"
                                                                                   tabindex="35" disabled/>
                                                                            <b> Lung problems/cough</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkUlcers">
                                                                            <input type="checkbox" id="chkUlcers"
                                                                                   name="chkUlcers" value="Ulcers"
                                                                                   tabindex="36" disabled/>
                                                                            <b> Ulcers/colitis</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkLowBloodPressure">
                                                                            <input type="checkbox"
                                                                                   id="chkLowBloodPressure"
                                                                                   name="chkLowBloodPressure"
                                                                                   value="LowBloodPressure"
                                                                                   tabindex="37" disabled/>
                                                                            <b> Low blood pressure</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkStroke">
                                                                            <input type="checkbox" id="chkStroke"
                                                                                   name="chkStroke" value="Stroke"
                                                                                   tabindex="38" disabled/>
                                                                            <b> Stroke</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkLiver">
                                                                            <input type="checkbox" id="chkLiver"
                                                                                   name="chkLiver" value="Liver"
                                                                                   tabindex="39" disabled/>
                                                                            <b> Liver problems/Hepatitis</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkGastric">
                                                                            <input type="checkbox" id="chkGastric"
                                                                                   name="chkGastric"
                                                                                   value="Gastric" tabindex="40" disabled/>
                                                                            <b> Gastric irritation</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkHeartburn">
                                                                            <input type="checkbox" id="chkHeartburn"
                                                                                   name="chkHeartburn"
                                                                                   value="Heartburn" tabindex="41" disabled/>
                                                                            <b> Heartburn(reflux)</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkSinusProblems">
                                                                            <input type="checkbox" id="chkSinusProblems"
                                                                                   name="chkSinusProblems"
                                                                                   value="SinusProblems" tabindex="42" disabled/>
                                                                            <b> Sinus problems</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkHeadaches">
                                                                            <input type="checkbox" id="chkHeadaches"
                                                                                   name="chkHeadaches"
                                                                                   value="Headaches" tabindex="43" disabled/>
                                                                            <b> Headaches/Migraines</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkEarProblems">
                                                                            <input type="checkbox" id="chkEarProblems"
                                                                                   name="chkEarProblems"
                                                                                   value="EarProblems" tabindex="44" disabled/>
                                                                            <b> Ear problems</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkAnemia">
                                                                            <input type="checkbox" id="chkAnemia"
                                                                                   name="chkAnemia" value="Anemia"
                                                                                   tabindex="45" disabled/>
                                                                            <b> Anemia/blood problems</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkArthritis">
                                                                            <input type="checkbox" id="chkArthritis"
                                                                                   name="chkArthritis"
                                                                                   value="Arthritis" tabindex="46" disabled/>
                                                                            <b> Arthritis</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkNeurological">
                                                                            <input type="checkbox" id="chkNeurological"
                                                                                   name="chkNeurological"
                                                                                   value="Neurological" tabindex="47" disabled/>
                                                                            <b> Neurological problems</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkSeasonalAllergies">
                                                                            <input type="checkbox"
                                                                                   id="chkSeasonalAllergies"
                                                                                   name="chkSeasonalAllergies"
                                                                                   value="SeasonalAllergies"
                                                                                   tabindex="48" disabled/>
                                                                            <b> Seasonal allergies</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkSwollen">
                                                                            <input type="checkbox" id="chkSwollen"
                                                                                   name="chkSwollen"
                                                                                   value="Swollen" tabindex="49" disabled/>
                                                                            <b> Swollen ankles</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <label for="chkCancer">
                                                                            <input type="checkbox" id="chkCancer"
                                                                                   name="chkCancer" value="Cancer"
                                                                                   tabindex="50" disabled/>
                                                                            <b> Cancer</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span6">
                                                                        <label for="chkEyeDisorder">
                                                                            <input type="checkbox" id="chkEyeDisorder"
                                                                                   name="chkEyeDisorder"
                                                                                   value="EyeDisorder" tabindex="51" disabled/>
                                                                            <b> Eye disorder/Glaucoma</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span6">
                                                                        <div class="control-group">
                                                                            <label for="chkOther">
                                                                                <input type="checkbox" id="chkOther"
                                                                                       name="chkOther" value="Other"
                                                                                       tabindex="52" disabled/>
                                                                                <b> Other</b>
                                                                            </label>

                                                                            <div class="controls controls-row">
                                                                                <textarea style="resize: none;" class="input-block-level" id="txtAreaOther" name="txtAreaOther" placeholder="other..." tabindex="53" disabled></textarea>
                                                                                <input id="txtIdentityMedicalHealth" name="txtIdentity"
                                                                                       value="MedicalHealthData" hidden>
                                                                                <input id="txtPID" name="txtPID"
                                                                                       value="<?php echo $profile_data["patient_id"]; ?>"
                                                                                       hidden>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Close
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
                                                           data-backdrop="static" data-keyboard="false"
                                                           onclick="ButtonSettings();"><i
                                                                class="icon-pencil icon-white"></i> Change
                                                        </a>

                                                        <div id="modelEditWomenHealthHistory" class="modal hide fade"
                                                             tabindex="-1"
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
                                                                    <div class="span12">
                                                                        <label for="chkPregnant">
                                                                            <input type="checkbox" id="chkPregnant" name="chkPregnant"
                                                                                   value="Pregnant" tabindex="17" disabled/>
                                                                            <b> Are you pregnant?</b>
                                                                        </label>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtNumberOfWeeks"><b> Number of weeks</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="txtNumberOfWeeks" name="txtNumberOfWeeks" type="text"
                                                                                       class="input-block-level"
                                                                                       placeholder="number of weeks here..." tabindex="18" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtNumberOfPregnancies"><b> Total number of pregnancies</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="txtNumberOfPregnancies" name="txtNumberOfPregnancies" type="text"
                                                                                       class="input-block-level"
                                                                                       placeholder="number of pregnancies here..." tabindex="19" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtNumberOfBirths"><b> Number of births</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="txtNumberOfBirths" name="txtNumberOfBirths" type="text"
                                                                                       class="input-block-level"
                                                                                       placeholder="number of births here..." tabindex="20" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row-fluid">
                                                                    <div class="span12">
                                                                        <label for="chkNursing">
                                                                            <input type="checkbox" id="chkNursing" name="chkNursing"
                                                                                   value="Nursing" tabindex="21" disabled/>
                                                                            <b> Nursing?</b>
                                                                        </label>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtMenstruating"><b> Date of last menstrual period if you are still menstruating</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="dp2" name="txtMenstruating" type="text"
                                                                                       placeholder="date of last menstrual period here..." size="16"
                                                                                       class="m-ctrl-medium span12" tabindex="22" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtBeginningPeriods"><b> Age at beginning of periods (menstruation)</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="txtBeginningPeriods" name="txtBeginningPeriods" type="text"
                                                                                       class="input-block-level"
                                                                                       placeholder="beginning periods here..." tabindex="23" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                            <label class="control-label" for="txtEndPeriods"><b> Age at end of periods (menopause)</b></label>

                                                                            <div class="controls controls-row">
                                                                                <input id="txtEndPeriods" name="txtEndPeriods" type="text"
                                                                                       class="input-block-level"
                                                                                       placeholder="end periods here..." tabindex="24" disabled>
                                                                                <input id="txtIdentityWomenHealth" name="txtIdentity"
                                                                                       value="WomenHealthData" hidden>
                                                                                <input id="txtPID" name="txtPID"
                                                                                       value="<?php echo $profile_data["patient_id"]; ?>"
                                                                                       hidden>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn" data-dismiss="modal"
                                                                        aria-hidden="true"></i>Close
                                                                </button>
                                                                <button class="btn btn-info" data-dismiss="modal"
                                                                        aria-hidden="true">Edit
                                                                </button>
                                                                <button class="btn btn-success hidden"
                                                                        data-dismiss="modal">
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
                                                       data-backdrop="static" data-keyboard="false"
                                                       onclick="ButtonSettings();"><i
                                                            class="icon-pencil icon-white"></i> Change
                                                    </a>

                                                    <div id="modelEditPastTreatment" class="modal hide fade"
                                                         tabindex="-1"
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
                                                                <div class="span12">
                                                                    <div class="span4">
                                                                        <label for="chkRemoval">
                                                                            <input type="checkbox" id="chkRemoval"
                                                                                   name="chkRemoval"
                                                                                   value="Removal" tabindex="73" disabled/>
                                                                            <b> Removal</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkWoundTreatment">
                                                                            <input type="checkbox"
                                                                                   id="chkWoundTreatment"
                                                                                   name="chkWoundTreatment"
                                                                                   value="WoundTreatment"
                                                                                   tabindex="74" disabled/>
                                                                            <b> Wound Treatment</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkFilling">
                                                                            <input type="checkbox" id="chkFilling"
                                                                                   name="chkFilling"
                                                                                   value="Filling" tabindex="75" disabled/>
                                                                            <b> Filling</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span4">
                                                                        <label for="chkSealants">
                                                                            <input type="checkbox" id="chkSealants"
                                                                                   name="chkSealants"
                                                                                   value="Sealants" tabindex="76" disabled/>
                                                                            <b> Sealants</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkRetainers">
                                                                            <input type="checkbox" id="chkRetainers"
                                                                                   name="chkRetainers"
                                                                                   value="Retainers" tabindex="77" disabled/>
                                                                            <b> Retainers</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkBraces">
                                                                            <input type="checkbox" id="chkBraces"
                                                                                   name="chkBraces"
                                                                                   value="Braces" tabindex="78" disabled/>
                                                                            <b> Braces</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span4">
                                                                        <label for="chkCleaning">
                                                                            <input type="checkbox" id="chkCleaning"
                                                                                   name="chkCleaning"
                                                                                   value="Cleaning" tabindex="79" disabled/>
                                                                            <b> Cleaning</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkPolishing">
                                                                            <input type="checkbox" id="chkPolishing"
                                                                                   name="chkPolishing"
                                                                                   value="Polishing" tabindex="80" disabled/>
                                                                            <b> Polishing</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkBridges">
                                                                            <input type="checkbox" id="chkBridges"
                                                                                   name="chkBridges"
                                                                                   value="Bridges" tabindex="81" disabled/>
                                                                            <b> Bridges</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="span4">
                                                                        <label for="chkDentures">
                                                                            <input type="checkbox" id="chkDentures"
                                                                                   name="chkDentures"
                                                                                   value="Dentures" tabindex="82" disabled/>
                                                                            <b> Dentures</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="span4">
                                                                        <label for="chkImplants">
                                                                            <input type="checkbox" id="chkImplants"
                                                                                   name="chkImplants"
                                                                                   value="Implants" tabindex="83" disabled/>
                                                                            <b> Implants</b>
                                                                        </label>
                                                                        <input id="txtIdentityTreatment" name="txtIdentity"
                                                                               value="TreatmentData" hidden>
                                                                        <input id="txtPID" name="txtPID"
                                                                               value="<?php echo $profile_data["patient_id"]; ?>"
                                                                               hidden>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"
                                                                    aria-hidden="true"></i>Close
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

                                            <div id="divProfileData-wrapper">
                                                <div class="span12" id="divProfileData">
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
                                                        <h4 class="bold">Email
                                                            : <?php echo $profile_data["patient_email"]; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space5"></div>
                                            <div class="text-left">
                                                <!--                                                <form class="form-vertical" method="post" action="-->
                                                <?php //echo base_url(); ?><!--index.php/channeling/profile_save">-->
                                                <a href="#modelEditProfile" id="btnEditProfile" role="button"
                                                   class="btn btn-primary" data-toggle="modal"
                                                   data-backdrop="static" data-keyboard="false"
                                                   onclick="ButtonSettings();"><i
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
                                                            <div class="alert alert-block alert-success fade in"
                                                                 id="successProfileEdit">
                                                                <button data-dismiss="alert" class="close"
                                                                        type="button">×
                                                                </button>
                                                                <h4 class="alert-heading text-center">Success! Profile
                                                                    has been updated</h4>
                                                            </div>
                                                            <div class="alert alert-block alert-error fade in"
                                                                 id="errorProfileEdit">
                                                                <button data-dismiss="alert" class="close"
                                                                        type="button">×
                                                                </button>
                                                                <h4 class="alert-heading text-center">Error! Something
                                                                    went wrong</h4>
                                                            </div>
                                                            <div class="alert alert-block alert-error fade in"
                                                                 id="errorProfileEditFields">
                                                                <button data-dismiss="alert" class="close"
                                                                        type="button">×
                                                                </button>
                                                                <h4 class="alert-heading text-center">Error! Following
                                                                    fields cannot be empty</h4>

                                                                <p>
                                                                    <!--                                                                <ul>-->
                                                                    <!--                                                                    <li>first name</li>-->
                                                                    <!--                                                                    <li>last name</li>-->
                                                                    <!--                                                                </ul>-->
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="row-fluid">
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">First Name
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtFirstName" type="text"
                                                                               class="input-block-level"
                                                                               name="txtFirstName"
                                                                               value="<?php echo $profile_data["patient_first_name"]; ?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Surname : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtLastName" type="text"
                                                                               class="input-block-level"
                                                                               name="txtLastName"
                                                                               value="<?php echo $profile_data["patient_last_name"]; ?>"
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
                                                                        <input id="txtOccupation" type="text"
                                                                               class="input-block-level"
                                                                               name="txtOccupation"
                                                                               value="<?php echo $profile_data["patient_occupation"]; ?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Email : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtEmail" type="email"
                                                                               class="input-block-level"
                                                                               name="txtEmail"
                                                                               value="<?php echo $profile_data["patient_email"]; ?>"
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
                                                                        <input id="txtPostalNo" type="text"
                                                                               class="input-block-level"
                                                                               name="txtPostalNo"
                                                                               value="<?php echo $address_data["postal_no"]; ?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Address Line 01
                                                                        : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtAddress01" type="text"
                                                                               class="input-block-level"
                                                                               name="txtAddress01"
                                                                               value="<?php echo $address_data["address_line1"]; ?>"
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
                                                                        <input id="txtAddress02" type="text"
                                                                               class="input-block-level"
                                                                               name="txtAddress02"
                                                                               value="<?php echo $address_data["address_line2"]; ?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">City : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtCity" type="text"
                                                                               class="input-block-level"
                                                                               name="txtCity"
                                                                               value="<?php echo $address_data["city"]; ?>"
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
                                                                        <input id="txtHomeNo" type="tel"
                                                                               class="input-block-level"
                                                                               name="txtHomeNo"
                                                                               value="<?php echo $contact_data["home_no"]; ?>"
                                                                               disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span6">
                                                                <div class="control-group">
                                                                    <label class="control-label">Mobile : </label>

                                                                    <div class="controls controls-row">
                                                                        <input id="txtMobileNo" type="tel"
                                                                               class="input-block-level"
                                                                               name="txtMobileNo"
                                                                               value="<?php echo $contact_data["mobile_no"]; ?>"
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
                                                                        <input id="txtWorkNo" type="tel"
                                                                               class="input-block-level"
                                                                               name="txtWorkNo"
                                                                               value="<?php echo $contact_data["work_no"]; ?>"
                                                                               disabled>
                                                                        <input id="txtIdentityProfile" name="txtIdentity"
                                                                               value="ProfileData" hidden>
                                                                        <input id="txtPID" name="txtPID"
                                                                               value="<?php echo $profile_data["patient_id"]; ?>"
                                                                               hidden>
                                                                    </div>
                                                                    <div id="tst"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal"
                                                                aria-hidden="true" id="btnProfileClose"></i>Close
                                                        </button>
                                                        <button class="btn btn-info" data-dismiss=""
                                                                aria-hidden="true" id="btnProfileEdit"
                                                                onclick="ProfileEditButtonAction();">Edit
                                                        </button>
                                                        <button class="btn btn-success" data-dismiss=""
                                                                name="btnProfileSave" id="btnProfileSave"
                                                                onclick="ProfileSaveButtonAction();">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--                                                </form>-->
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
