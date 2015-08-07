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
                        <h4><i class="icon-edit"></i> Patient Regisration</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                    </span>
                    </div>
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        <form class="form-vertical" id="formRegistration" method="post" action="<?php echo base_url(); ?>index.php/reg">
                            <?php
                            if($patient == "registered"){
                                ?>
                                <div class="alert alert-block alert-success fade in" id="divSuccessArea">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <h4 class="alert-heading text-center">Success! Patient has been registered to the system</h4>
                                </div>
                                <?php
                            }
                            ?>
                        <div class="widget">
                            <div class="widget-body">
                                    <ul class="breadcrumb">
                                        <li style="font-size: 125%;">
                                            <b>General Details</b>
                                        </li>
                                    </ul>
                                <div class="alert alert-block alert-error fade in" id="divErrorArea" hidden>
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <h4 class="alert-heading text-center">Oops ! Please check following fields</h4>
                                    <ul id="ulErrorList">
                                    </ul>
                                </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtFirstName"><b>First
                                                        Name</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtFirstName" name="txtFirstName" type="text"
                                                           class="input-block-level"
                                                           placeholder="first name here..." tabindex="1" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtSurname"><b>Surname</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtSurname" name="txtSurname" type="text"
                                                           class="input-block-level"
                                                           placeholder="surname here..." name="" tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label"><b>Gender</b></label>

                                                <div class="controls controls-row">
                                                    <input type="radio" name="optionsRadios1" id="id_radio_male"
                                                           value="M" tabindex="3"/> <label class="radio"
                                                                                           for="id_radio_male">
                                                        Male</label>
                                                    <input type="radio" name="optionsRadios1" id="id_radio_female"
                                                           value="F" tabindex="4"/> <label class="radio"
                                                                                           for="id_radio_female">
                                                        Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4" id="sandbox-container">
                                            <div class="control-group">
                                                <label class="control-label" for="txtBirthday"><b>Birthday</b></label>
                                                <input id="txtBirthday" name="txtBirthday" type="date"
                                                       placeholder="birthday here..." size="16"
                                                       class="m-ctrl-medium span12" tabindex="5">
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label for="txtOccupation"
                                                       class="control-label"><b>Occupation</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtOccupation" name="txtOccupation" type="text"
                                                           class="input-block-level"
                                                           placeholder="occupation here..." tabindex="6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtPostal"><b>Postal No</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtPostal" type="text" class="input-block-level"
                                                           placeholder="postal number here..." name="txtPostal"
                                                           tabindex="7">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtAddress1"><b>Address 01</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtAddress1" type="text" class="input-block-level"
                                                           placeholder="address line 01 here..." name="txtAddress1"
                                                           tabindex="8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtAddress2"><b>Address 02</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtAddress2" type="text" class="input-block-level"
                                                           placeholder="address line 02 here..." name="txtAddress2"
                                                           tabindex="9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtCity"><b>City</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtCity" type="text" class="input-block-level"
                                                           placeholder="city here..." name="txtCity" tabindex="10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtMobileTel"><b>Mobile</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtMobileTel" type="tel" class="input-block-level"
                                                           placeholder="mobile number here..." name="txtMobileTel"
                                                           tabindex="11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtHomeTel"><b>Home</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtHomeTel" type="tel" class="input-block-level"
                                                           placeholder="home number here..." name="txtHomeTel"
                                                           tabindex="12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtWorkTel"><b>Work</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtWorkTel" type="tel" class="input-block-level"
                                                           placeholder="work number here..." name="txtWorkTel"
                                                           tabindex="13">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtEmail"><b>E-mail</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtEmail" type="email" class="input-block-level"
                                                           placeholder="email address here..." name="txtEmail"
                                                           tabindex="14">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtAreaReasonForVisit"><b>Main reason
                                                        for today’s
                                                        visit</b></label>

                                                <div class="controls controls-row">
                                                    <textarea class="input-block-level" style="resize: none;"
                                                              id="txtAreaReasonForVisit" name="txtAreaReasonForVisit"
                                                              placeholder="main reason here..."
                                                              tabindex="15"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="txtAreaKnownAllergies"><b>Known
                                                        Allergies</b></label>

                                                <div class="controls controls-row">
                                                    <textarea class="input-block-level" style="resize: none;"
                                                              id="txtAreaKnownAllergies" name="txtAreaKnownAllergies"
                                                              placeholder="known allergies here..."
                                                              tabindex="16"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="widget" id="widgetWomenHealth">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Women's Health</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkPregnant">
                                                <input type="checkbox" id="chkPregnant" name="chkPregnant"
                                                       value="Pregnant" tabindex="17"/>
                                                <b> Are you pregnant?</b>
                                            </label>
                                            <div class="control-group">
                                                <label class="control-label" for="txtNumberOfWeeks"><b> Number of weeks</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtNumberOfWeeks" name="txtNumberOfWeeks" type="number"
                                                           class="input-block-level"
                                                           placeholder="number of weeks here..." tabindex="18" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="txtNumberOfPregnancies"><b> Total number of pregnancies</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtNumberOfPregnancies" name="txtNumberOfPregnancies" type="number"
                                                           class="input-block-level"
                                                           placeholder="number of pregnancies here..." tabindex="19" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="txtNumberOfBirths"><b> Number of births</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtNumberOfBirths" name="txtNumberOfBirths" type="number"
                                                           class="input-block-level"
                                                           placeholder="number of births here..." tabindex="20" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label for="chkNursing">
                                                <input type="checkbox" id="chkNursing" name="chkNursing"
                                                       value="Nursing" tabindex="21"/>
                                                <b> Nursing?</b>
                                            </label>
                                            <div class="control-group">
                                                <label class="control-label" for="txtMenstruating"><b> Date of last menstrual period if you are still menstruating</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtMenstruating" name="txtMenstruating" type="date"
                                                           placeholder="date of last menstrual period here..." size="16"
                                                           class="m-ctrl-medium span12" tabindex="22" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="txtBeginningPeriods"><b> Age at beginning of periods (menstruation)</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtBeginningPeriods" name="txtBeginningPeriods" type="number"
                                                           class="input-block-level"
                                                           placeholder="beginning periods here..." tabindex="23" disabled>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="txtEndPeriods"><b> Age at end of periods (menopause)</b></label>

                                                <div class="controls controls-row">
                                                    <input id="txtEndPeriods" name="txtEndPeriods" type="number"
                                                           class="input-block-level"
                                                           placeholder="end periods here..." tabindex="24" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Medical Health History</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkDiabetes">
                                                <input type="checkbox" id="chkDiabetes" name="chkDiabetes"
                                                       value="Diabetes" tabindex="25"/>
                                                <b> Diabetes</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkShortness">
                                                <input type="checkbox" id="chkShortness" name="chkShortness"
                                                       value="Shortness" tabindex="26"/>
                                                <b> Shortness of breath</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkAngina">
                                                <input type="checkbox" id="chkAngina" name="chkAngina" value="Angina"
                                                       tabindex="27"/>
                                                <b> Heart disease/Murmur/Angina</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkDepression">
                                                <input type="checkbox" id="chkDepression" name="chkDepression"
                                                       value="Depression" tabindex="28"/>
                                                <b> Depression/Anxiety</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkHighCholesterol">
                                                <input type="checkbox" id="chkHighCholesterol" name="chkHighCholesterol"
                                                       value="HighCholesterol" tabindex="29"/>
                                                <b> High cholesterol</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkTonsillitis">
                                                <input type="checkbox" id="chkTonsillitis" name="chkTonsillitis"
                                                       value="Tonsillitis" tabindex="30"/>
                                                <b> Tonsillitis</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkKidney">
                                                <input type="checkbox" id="chkKidney" name="chkKidney" value="Kidney"
                                                       tabindex="31"/>
                                                <b> Kidney/Bladder problems</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkThyroid">
                                                <input type="checkbox" id="chkThyroid" name="chkThyroid"
                                                       value="Thyroid" tabindex="32"/>
                                                <b> Thyroid problems</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkHighBloodPressure">
                                                <input type="checkbox" id="chkHighBloodPressure"
                                                       name="chkHighBloodPressure" value="HighBloodPressure"
                                                       tabindex="33"/>
                                                <b> High blood pressure</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkAsthma">
                                                <input type="checkbox" id="chkAsthma" name="chkAsthma" value="Asthma"
                                                       tabindex="34"/>
                                                <b> Asthma</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkLung">
                                                <input type="checkbox" id="chkLung" name="chkLung" value="Lung"
                                                       tabindex="35"/>
                                                <b> Lung problems/cough</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkUlcers">
                                                <input type="checkbox" id="chkUlcers" name="chkUlcers" value="Ulcers"
                                                       tabindex="36"/>
                                                <b> Ulcers/colitis</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkLowBloodPressure">
                                                <input type="checkbox" id="chkLowBloodPressure"
                                                       name="chkLowBloodPressure" value="LowBloodPressure"
                                                       tabindex="37"/>
                                                <b> Low blood pressure</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkStroke">
                                                <input type="checkbox" id="chkStroke" name="chkStroke" value="Stroke"
                                                       tabindex="38"/>
                                                <b> Stroke</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkLiver">
                                                <input type="checkbox" id="chkLiver" name="chkLiver" value="Liver"
                                                       tabindex="39"/>
                                                <b> Liver problems/Hepatitis</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkGastric">
                                                <input type="checkbox" id="chkGastric" name="chkGastric"
                                                       value="Gastric" tabindex="40"/>
                                                <b> Gastric irritation</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkHeartburn">
                                                <input type="checkbox" id="chkHeartburn" name="chkHeartburn"
                                                       value="Heartburn" tabindex="41"/>
                                                <b> Heartburn(reflux)</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkSinusProblems">
                                                <input type="checkbox" id="chkSinusProblems" name="chkSinusProblems"
                                                       value="SinusProblems" tabindex="42"/>
                                                <b> Sinus problems</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkHeadaches">
                                                <input type="checkbox" id="chkHeadaches" name="chkHeadaches"
                                                       value="Headaches" tabindex="43"/>
                                                <b> Headaches/Migraines</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkEarProblems">
                                                <input type="checkbox" id="chkEarProblems" name="chkEarProblems"
                                                       value="EarProblems" tabindex="44"/>
                                                <b> Ear problems</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkAnemia">
                                                <input type="checkbox" id="chkAnemia" name="chkAnemia" value="Anemia"
                                                       tabindex="45"/>
                                                <b> Anemia/blood problems</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkArthritis">
                                                <input type="checkbox" id="chkArthritis" name="chkArthritis"
                                                       value="Arthritis" tabindex="46"/>
                                                <b> Arthritis</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkNeurological">
                                                <input type="checkbox" id="chkNeurological" name="chkNeurological"
                                                       value="Neurological" tabindex="47"/>
                                                <b> Neurological problems</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkSeasonalAllergies">
                                                <input type="checkbox" id="chkSeasonalAllergies"
                                                       name="chkSeasonalAllergies" value="SeasonalAllergies"
                                                       tabindex="48"/>
                                                <b> Seasonal allergies</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkSwollen">
                                                <input type="checkbox" id="chkSwollen" name="chkSwollen"
                                                       value="Swollen" tabindex="49"/>
                                                <b> Swollen ankles</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkCancer">
                                                <input type="checkbox" id="chkCancer" name="chkCancer" value="Cancer"
                                                       tabindex="50"/>
                                                <b> Cancer</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkEyeDisorder">
                                                <input type="checkbox" id="chkEyeDisorder" name="chkEyeDisorder"
                                                       value="EyeDisorder" tabindex="51"/>
                                                <b> Eye disorder/Glaucoma</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <div class="control-group">
                                                <label for="chkOther">
                                                    <input type="checkbox" id="chkOther" name="chkOther" value="Other"
                                                           tabindex="52"/>
                                                    <b> Other</b>
                                                </label>

                                                <div class="controls controls-row">
                                                    <textarea style="resize: none;" class="input-block-level"
                                                              id="txtAreaOther" name="txtAreaOther"
                                                              placeholder="other..." disabled tabindex="53"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Dental Health History</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkDifficultyChewingFood">
                                                <input type="checkbox" id="chkDifficultyChewingFood"
                                                       name="chkDifficultyChewingFood"
                                                       value="DifficultyChewingFood" tabindex="54"/>
                                                <b> Do you have difficulty in chewing your food?</b>
                                            </label>
                                        </div>
                                        <div class="span6">
                                            <label for="chkTeethSensitive">
                                                <input type="checkbox" id="chkTeethSensitive" name="chkTeethSensitive"
                                                       value="TeethSensitive" tabindex="55"/>
                                                <b> Are your teeth sensitive?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkChewOneSide">
                                                <input type="checkbox" id="chkChewOneSide" name="chkChewOneSide"
                                                       value="ChewOneSide" tabindex="56"/>
                                                <b> Do you chew on only one side of your mouth?</b>
                                            </label>
                                        </div>
                                        <div class="span6">
                                            <label for="chkHurtWhenBite">
                                                <input type="checkbox" id="chkHurtWhenBite" name="chkHurtWhenBite"
                                                       value="HurtWhenBite" tabindex="57"/>
                                                <b> Does it hurt when you chew or open wide to take a bite?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkAvoidBrishingPain">
                                                <input type="checkbox" id="chkAvoidBrishingPain"
                                                       name="chkAvoidBrishingPain"
                                                       value="AvoidBrishingPain" tabindex="58"/>
                                                <b> Do you avoid brushing any part of your mouth because of pain?</b>
                                            </label>
                                        </div>
                                        <div class="span6">
                                            <label for="chkSlowHealing">
                                                <input type="checkbox" id="chkSlowHealing" name="chkSlowHealing"
                                                       value="SlowHealing" tabindex="59"/>
                                                <b> Have you ever noticed slow-healing sores in or about your mouth?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkGumsBleed">
                                                <input type="checkbox" id="chkGumsBleed"
                                                       name="chkGumsBleed" value="GumsBleed" tabindex="60"/>
                                                <b> Do your gums bleed when you floss?</b>
                                            </label>
                                        </div>
                                        <div class="span6">
                                            <label for="chkHadTrauma">
                                                <input type="checkbox" id="chkHadTrauma" name="chkHadTrauma"
                                                       value="HadTrauma" tabindex="61"/>
                                                <b> Have you had a blow to the jaw (trauma)?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <label for="chkGumsSwollenTender">
                                                <input type="checkbox" id="chkGumsSwollenTender"
                                                       name="chkGumsSwollenTender" value="GumsSwollenTender"
                                                       tabindex="62"/>
                                                <b> Do your gums feel swollen or tender?</b>
                                            </label>
                                        </div>
                                        <div class="span6">
                                            <label for="chkPainInFCJJTT">
                                                <input type="checkbox" id="chkPainInFCJJTT"
                                                       name="chkPainInFCJJTT" value="PainInFCJJTT" tabindex="63"/>
                                                <b> Do you have pain in the face, cheeks, jaws, joints, throat, or
                                                    temples?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Are you a habitual</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkGumChewer">
                                                <input type="checkbox" id="chkGumChewer" name="chkGumChewer"
                                                       value="GumChewer" tabindex="64"/>
                                                <b> Gum chewer?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkBetelChewer">
                                                <input type="checkbox" id="chkBetelChewer" name="chkBetelChewer"
                                                       value="BetelChewer" tabindex="65"/>
                                                <b> Betel chewer?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkPipeSmoker">
                                                <input type="checkbox" id="chkPipeSmoker" name="chkPipeSmoker"
                                                       value="PipeSmoker" tabindex="66"/>
                                                <b> Pipe smoker?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkCigarette">
                                                <input type="checkbox" id="chkCigarette" name="chkCigarette"
                                                       value="Cigarette" tabindex="67"/>
                                                <b> Cigarette smoker?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Do you feel twinges of pain when your teeth come in contact with</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkHotFood">
                                                <input type="checkbox" id="chkHotFood" name="chkHotFood"
                                                       value="HotFood" tabindex="68"/>
                                                <b> Hot foods or liquids?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkColdFood">
                                                <input type="checkbox" id="chkColdFood" name="chkColdFood"
                                                       value="ColdFood" tabindex="69"/>
                                                <b> Cold foods or liquids?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkSours">
                                                <input type="checkbox" id="chkSours" name="chkSours"
                                                       value="Sours" tabindex="70"/>
                                                <b> Sours?</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkSweets">
                                                <input type="checkbox" id="chkSweets" name="chkSweets"
                                                       value="Sweets" tabindex="71"/>
                                                <b> Sweets?</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Other</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="control-group">
                                            <div class="controls controls-row">
                                                    <textarea class="input-block-level" style="resize: none;"
                                                              id="txtAreaOtherHealthHistoryInfo" name="txtAreaOtherHealthHistoryInfo"
                                                              placeholder="other dental health history related information here..."
                                                              tabindex="72"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-body">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <b>Past Treatments</b>
                                    </li>
                                </ul>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkRemoval">
                                                <input type="checkbox" id="chkRemoval" name="chkRemoval"
                                                       value="Removal" tabindex="73"/>
                                                <b> Removal</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkWoundTreatment">
                                                <input type="checkbox" id="chkWoundTreatment" name="chkWoundTreatment"
                                                       value="WoundTreatment" tabindex="74"/>
                                                <b> Wound Treatment</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkFilling">
                                                <input type="checkbox" id="chkFilling" name="chkFilling"
                                                       value="Filling" tabindex="75"/>
                                                <b> Filling</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkSealants">
                                                <input type="checkbox" id="chkSealants" name="chkSealants"
                                                       value="Sealants" tabindex="76"/>
                                                <b> Sealants</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkRetainers">
                                                <input type="checkbox" id="chkRetainers" name="chkRetainers"
                                                       value="Retainers" tabindex="77"/>
                                                <b> Retainers</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkBraces">
                                                <input type="checkbox" id="chkBraces" name="chkBraces"
                                                       value="Braces" tabindex="78"/>
                                                <b> Braces</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkCleaning">
                                                <input type="checkbox" id="chkCleaning" name="chkCleaning"
                                                       value="Cleaning" tabindex="79"/>
                                                <b> Cleaning</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkPolishing">
                                                <input type="checkbox" id="chkPolishing" name="chkPolishing"
                                                       value="Polishing" tabindex="80"/>
                                                <b> Polishing</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span3">
                                            <label for="chkBridges">
                                                <input type="checkbox" id="chkBridges" name="chkBridges"
                                                       value="Bridges" tabindex="81"/>
                                                <b> Bridges</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkDentures">
                                                <input type="checkbox" id="chkDentures" name="chkDentures"
                                                       value="Dentures" tabindex="82"/>
                                                <b> Dentures</b>
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <label for="chkImplants">
                                                <input type="checkbox" id="chkImplants" name="chkImplants"
                                                       value="Implants" tabindex="83"/>
                                                <b> Implants</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions text-right">
                            <button id="btnPatientReset" name="btnPatientReset" type="reset" class="btn btn-large btn-success" tabindex="84"><i
                                    class="icon-refresh"></i> Reset
                            </button>
                            <button id="btnPatientSave" name="btnPatientSave" type="submit" class="btn btn-large btn-success" tabindex="85"><i
                                    class="icon-ok"></i> Save
                            </button>
                            <a href="<?php echo base_url(); ?>" class="btn btn-large btn-success"><i class=" icon-remove"></i> Cancel</a>
<!--                            <button id="btnPatientCancel" name="btnPatientCancel" type="button" class="btn btn-large btn-success" tabindex="86"><i-->
<!--                                    class=" icon-remove"></i> Cancel-->
<!--                            </button>-->
                        </div>
                        </form>
                        <!-- END FORM-->
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
