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
                        <h4><i class="icon-edit"></i> Simulation View</h4>
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
                                            <b>Class II Division 1 Simulation</b>
                                        </li>
                                    </ul>
                                    <div class="row-fluid" style="height: 400px;">
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="space10" style="margin-left: 100px;">
                                                    <canvas id="class2d1" width="600" height="400" style="border:1px solid #000000;">
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="span8">

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
                                            <b>Class II Division 2 Simulation</b>
                                        </li>
                                    </ul>
                                    <div class="row-fluid" style="height: 400px;">
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="space10" style="margin-left: 100px;">
                                                    <canvas id="class2d2" width="600" height="400" style="border:1px solid #000000;">
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="span8">
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
                                            <b>Class III Simulation</b>
                                        </li>
                                    </ul>
                                    <div class="row-fluid" style="height: 400px;">
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="space10" style="margin-left: 100px;">
                                                    <canvas id="class3d1" width="600" height="400" style="border:1px solid #000000;">
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="span8">
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

                var canvas = document.getElementById("class2d1");
                var context = canvas.getContext("2d");
                context.clearRect(0, 0, 600, 500);

                var canvas = document.getElementById("class2d2");
                var context = canvas.getContext("2d");
                context.clearRect(0, 0, 600, 500);

                var canvas = document.getElementById("class3d1");
                var context = canvas.getContext("2d");
                context.clearRect(0, 0, 600, 500);

                var value = model;

                function loadImages(sources, callback) {
                    var images = {};
                    var loadedImages = 0;
                    var numImages = 0;
                    // get num of sources
                    for (var src in sources) {
                        numImages++;
                    }
                    for (var src in sources) {
                        images[src] = new Image();
                        images[src].onload = function () {
                            if (++loadedImages >= numImages) {
                                callback(images);
                            }
                        };
                        images[src].src = sources[src];
                    }
                }

                if(value == 1){
                    var canvas = document.getElementById("class2d1");
                    var context = canvas.getContext("2d");


                        var sources = {
                            CBmiled1:'../assets/simulation/cbmiled/CBmiled1.JPG',
                            CBmiled2:'../assets/simulation/cbmiled/CBmiled2.JPG',
                            CBmiled3:'../assets/simulation/cbmiled/CBmiled3.JPG'
                        };
                        loadImages(sources, function (images) {

                            var delay = 1000; //1 seconds

                            context.font = "50px Arial";
                            context.fillStyle = "red";

                            setTimeout(function () {
                                context.fillText("First adjustment",10,50);
                                setTimeout(function () {
                                    context.drawImage(images.CBmiled1, 0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.clearRect(0, 0, 600, 500);
                                        setTimeout(function () {
                                            context.fillText("Second adjustment",10,50);
                                            setTimeout(function () {
                                                context.drawImage(images.CBmiled2, 0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.clearRect(0, 0, 600, 500);
                                                    setTimeout(function () {
                                                        context.fillText("Third adjustment",10,50);
                                                        setTimeout(function () {
                                                            context.drawImage(images.CBmiled3, 0, 0, 600, 500);
                                                        }, delay);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, 0);
                        });
                }
                if(value == 2){

                    var canvas = document.getElementById("class2d1");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/cbmoderate/CBmoderate1.JPG',
                        CBmoderate2:'../assets/simulation/cbmoderate/cbm2.JPG',
                        CBmoderate3:'../assets/simulation/cbmoderate/cbm2.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 3){

                    var canvas = document.getElementById("class2d1");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/cbsevere/1.JPG',
                        CBmoderate2:'../assets/simulation/cbsevere/2.JPG',
                        CBmoderate3:'../assets/simulation/cbsevere/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 4){
                    var canvas = document.getElementById("class2d2");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/ccmiled/1.JPG',
                        CBmoderate2:'../assets/simulation/ccmiled/2.JPG',
                        CBmoderate3:'../assets/simulation/ccmiled/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 5){
                    var canvas = document.getElementById("class2d2");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/ccmiled/1.JPG',
                        CBmoderate2:'../assets/simulation/ccmiled/2.JPG',
                        CBmoderate3:'../assets/simulation/ccmiled/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 6){
                    var canvas = document.getElementById("class2d2");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/ccsevere/1.JPG',
                        CBmoderate2:'../assets/simulation/ccsevere/2.JPG',
                        CBmoderate3:'../assets/simulation/ccsevere/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 7){
                    var canvas = document.getElementById("class3d1");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/cdmiled/1.JPG',
                        CBmoderate2:'../assets/simulation/cdmiled/2.JPG',
                        CBmoderate3:'../assets/simulation/cdmiled/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 8){
                    var canvas = document.getElementById("class3d1");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/cdmoderate/1.JPG',
                        CBmoderate2:'../assets/simulation/cdmoderate/2.JPG',
                        CBmoderate3:'../assets/simulation/cdmoderate/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, delay);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }
                if(value == 9){
                    var canvas = document.getElementById("class3d1");
                    var context = canvas.getContext("2d");


                    var sources = {
                        CBmoderate1:'../assets/simulation/cdsevere/1.JPG',
                        CBmoderate2:'../assets/simulation/cdsevere/2.JPG',
                        CBmoderate3:'../assets/simulation/cdsevere/3.JPG'
                    };
                    loadImages(sources, function (images) {

                        var delay = 1000; //1 seconds

                        context.font = "50px Arial";
                        context.fillStyle = "red";

                        setTimeout(function () {
                            context.fillText("First adjustment",10,50);
                            setTimeout(function () {
                                context.drawImage(images.CBmoderate1, 0, 0, 600, 500);
                                setTimeout(function () {
                                    context.clearRect(0, 0, 600, 500);
                                    setTimeout(function () {
                                        context.fillText("Second adjustment",10,50);
                                        setTimeout(function () {
                                            context.drawImage(images.CBmoderate2, 0, 0, 600, 500);
                                            setTimeout(function () {
                                                context.clearRect(0, 0, 600, 500);
                                                setTimeout(function () {
                                                    context.fillText("Third adjustment",10,50);
                                                    setTimeout(function () {
                                                        context.drawImage(images.CBmoderate3, 0, 0, 600, 500);
                                                    }, delay);
                                                }, delay);
                                            }, 0);
                                        }, delay);
                                    }, delay);
                                }, delay);
                            }, delay);
                        }, 0);
                    });
                }

            }

        </script>
    </div>
    <!-- END CONTAINER -->

