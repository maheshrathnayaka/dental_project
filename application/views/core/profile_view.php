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
                                <!--                                <div class="span2">-->
                                <!--                                    -->
                                <!--                                </div>-->
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
                                            <!--<ul class="social-link-pf">
                                                <li><a href="#">
                                                        <i class="icon-facebook"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="icon-twitter"></i>
                                                    </a></li>
                                                <li><a href="#">
                                                        <i class="icon-linkedin"></i>
                                                    </a></li>
                                            </ul>-->
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
                                                <!--                                            <a href="edit_profile.html" class="btn btn-edit btn-large pull-right mtop20"> Edit Profile </a>-->
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12 bio">
                                            <h3 class="text-error bold">Visit for
                                                : <?php echo $channel_data["patient_main_reason"]; ?></h3>

                                            <h3 class="text-info bold">Dental Health History</h3>
                                            <ul class="social-link-pf">
                                                <?php
                                                foreach ($dental_health_history_data as $key => $value) {
                                                    if ($value == 1) {
                                                        ?>
                                                        <!--                                                        <span class="label label-important">--><?php //echo $key; ?><!--</span>-->
                                                        <li><?php echo $key; ?></li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                            <!--<span class="label label-important">Important</span>
                                            <span class="label label-important">Important</span>
                                            <span class="label label-important">Important</span>-->

                                            <h3 class="text-info bold">Medical Health History</h3>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Donec ut volutpat metus. Aliquam tortor lorem, fringilla
                                                tempor dignissim at, pretium et arcu. Sed ut perspiciatis unde omnis
                                                iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                                rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                            <div class="space15"></div>
                                            <h2>Bio Graph</h2>

                                            <p><label>First Name </label>: Jonathan</p>

                                            <p><label>Last Name </label>: Smith</p>

                                            <p><label>Country </label>: Australia</p>

                                            <p><label>Bithday </label>: 13 July 1983</p>

                                            <p><label>Occupation </label>: Designer</p>

                                            <p><label>Email </label>: <a href="#">smith@vectorlab.net</a></p>

                                            <p><label>Phone </label>: (12) 03 4567890</p>

                                            <p><label>Website Url </label>: <a href="#">http://www.demowebsite.com</a>
                                            </p>

                                            <div class="space15"></div>
                                            <hr>
                                            <div class="space15"></div>

                                            <h2>Project Progress</h2>
                                            <ul class="unstyled">
                                                <li>
                                                    Envato Website <strong class="label"> 48%</strong>

                                                    <div class="space10"></div>
                                                    <div class="progress">
                                                        <div class="bar" style="width: 48%;"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    Themeforest CMS Dashboard <strong class="label label-success">
                                                        85%</strong>

                                                    <div class="space10"></div>
                                                    <div class="progress progress-success">
                                                        <div class="bar" style="width: 85%;"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    VectorLab Portfolio <strong class="label label-important">
                                                        65%</strong>

                                                    <div class="space10"></div>
                                                    <div class="progress progress-danger">
                                                        <div class="bar" style="width: 65%;"></div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="text-center">
                                                <button class="btn btn-primary ">All Projects</button>
                                            </div>
                                            <div class="space20"></div>

                                        </div>
                                        <!--<div class="span4">
                                            <div class="profile-side-box red">
                                                <h1>Recommended By</h1>
                                                <div class="desk">
                                                    <div class="row-fluid">
                                                        <div class="span4">
                                                            <div class="text-center">
                                                                <a href="#"><img src="img/avatar1.jpg" alt=""></a>
                                                                <p><a href="#">Fill Martin</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="span4">
                                                            <div class="text-center">
                                                                <a href="#"><img src="img/avatar2.jpg" alt=""></a>
                                                                <p><a href="#">Scatel Filip</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="span4">
                                                            <div class="text-center">
                                                                <a href="#"><img src="img/avatar3.jpg" alt=""></a>
                                                                <p><a href="#">Paul Robin</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-side-box green">
                                                <h1>Experience</h1>
                                                <div class="desk">
                                                    <div class="row-fluid experience">
                                                        <h4>Envato</h4>
                                                        <p>Duration: 4 years as Senior Designer from June 2033 to June 2007</p>
                                                        <a href="#">www.abccompany.com</a>
                                                    </div>
                                                    <div class="space10"></div>
                                                    <div class="row-fluid experience">
                                                        <h4>Themeforest</h4>
                                                        <p>Duration: 4 years as Senior Designer from June 2033 to June 2007</p>
                                                        <a href="#">www.abccompany.com</a>
                                                    </div>
                                                    <div class="space10"></div>
                                                    <div class="row-fluid experience">
                                                        <h4>Vector Lab</h4>
                                                        <p>Duration: 4 years as Senior Designer from June 2033 to June 2007</p>
                                                        <a href="#">www.abccompany.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE PORTLET-->
                        </div>
                        <!--                        <div class="clearfix"></div>-->
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
