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
<div class="widget orange">
<div class="widget-title">
    <h4><i class="icon-edit"></i> 3D-models</h4>
                                    <span class="tools">
                                        <a href="javascript:;" class="icon-chevron-down"></a>
                                    </span>
</div>
<div class="widget-body">
<div class="widget">
    <div class="widget-body">
        <!-- BEGIN FORM-->
        <form>
            <ul class="breadcrumb">
                <li style="font-size: 125%;">
                    <b>Class II Division 1</b>
                </li>
            </ul>
           <div class="row-fluid">
               <div class="span12">
                   <div class="span6">

                   </div>
                   <div class="span6">
                       <div class="span8">
                           <ul class="breadcrumb">
                               <li style="font-size: 125%;">
                                   <p>Occurs when the permanent
                                       first molars and the permanent maxillary
                                       central incisors are either normal or slightly
                                       protruded out toward the lips.
                                   </p>
                               </li>
                           </ul>
                       </div>
                       <div class="span4">
                           <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('1');"><i class=" icon-eye-open"></i> Mild </button>
                           <br/>
                           <br/>
                           <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('2');"><i class=" icon-eye-open"></i> Moderate</button>
                           <br/>
                           <br/>
                           <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('3');"><i class=" icon-eye-open"></i> Severe</button>
                       </div>
                   </div>
               </div>
           </div>
        </form>
<!-- END FORM-->
    </div>
</div>
<div class="widget">
     <div class="widget-body">
            <!-- BEGIN FORM-->
            <form>
                <ul class="breadcrumb">
                    <li style="font-size: 125%;">
                        <b>Class II Division 2</b>
                    </li>
                </ul>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span6">

                        </div>
                        <div class="span6">
                        <div class="span8">
                            <ul class="breadcrumb">
                                <li style="font-size: 125%;">
                                    <p>Occurs when the permanent first
                                        molars and the permanent maxillary
                                        central incisors are retruded
                                        (pulled backward toward the oral cavity)
                                        and tilting inwards towards the tongue.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('4');"><i class=" icon-eye-open"></i> Mild </button>
                                <br/>
                                <br/>
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('5');"><i class=" icon-eye-open"></i> Moderate</button>
                                <br/>
                                <br/>
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('6');"><i class=" icon-eye-open"></i> Severe</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
     </div>
</div>
<div class="widget">
        <div class="widget-body">
            <!-- BEGIN FORM-->
            <form>
                <ul class="breadcrumb">
                    <li style="font-size: 125%;">
                        <b>Class III</b>
                    </li>
                </ul>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span6">

                        </div>
                        <div class="span6">
                            <div class="span8">
                                <ul class="breadcrumb">
                                    <li style="font-size: 125%;">
                                        <p>In this classification,
                                           the maxillary first molar
                                           is more to the back of the
                                           mandibular first molar than
                                           normal;
                                           the buccal groove of the mandibular
                                           first molar is mesial to the mesiobuccal
                                           cusp of the maxillary first molar. The facial
                                           profile is termed prognathic.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="span4">
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('7');"><i class=" icon-eye-open"></i> Mild </button>
                                <br/>
                                <br/>
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('8');"><i class=" icon-eye-open"></i> Moderate</button>
                                <br/>
                                <br/>
                                <button type="button" class="btn btn-large btn-success btn-block" onclick="loadModel('9');"><i class=" icon-eye-open"></i> Severe</button>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript">
        function loadModel(model){
            var value = model;
            if(value == 1){
                window.location.href ='malocclusion/classBmiled';
            }
            if(value == 2){
                window.location.href = 'malocclusion/classBmoderate';
            }
            if(value == 3){
                window.location.href = 'malocclusion/classBsevere';
            }
            if(value == 4){
                window.location.href = 'malocclusion/classCmiled';
            }
            if(value == 5){
                window.location.href = 'malocclusion/classCmoderate';
            }
            if(value == 6){
                window.location.href = 'malocclusion/classCsevere';
            }
            if(value == 7){
                window.location.href = 'malocclusion/classDmiled';
            }
            if(value == 8){
                window.location.href = 'malocclusion/classDmoderate';
            }
            if(value == 9){
                window.location.href = 'malocclusion/classDsevere';
            }
        }

    </script>
</div>
<!-- END CONTAINER -->
