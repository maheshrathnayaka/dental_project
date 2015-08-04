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
                        <!-- END BLANK PAGE PORTLET-->
                <input type="button" onclick="ajaxcall();" value="ajaxcall">
                <div id="resultdiv"></div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- END PAGE -->
        <script type="text/javascript">

            function ajaxcall(){
                alert('sasa');
                $.ajax({
                    type:'POST',
                    url:'http://localhost/dental_project/index.php/Test/ajaxresponse',
                    data:{},
                    success:function(data){
                        $('#resultdiv').html(data);
                    }
                });
            }

        </script>
    </div>
    <!-- END CONTAINER -->
