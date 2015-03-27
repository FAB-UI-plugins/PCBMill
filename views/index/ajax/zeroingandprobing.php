<div id="row_1" class="row interstitial">

    <div class="col-sm-12">
    
        <div class="well text-center">
        
            <h1>Zeroing and probing</h1>
            <h3>The printer is going to prepare to Zero and Probe. It is important that you do NOT move the head by hand during this process.</h3>

            <h2>Press the button to continue</h2>
        
        </div>
    
    </div>

</div>


<div id="row_2" class="row interstitial" style="display: none;">

    <div class="col-sm-12">
    
        <div class="well text-center">
        
            <h1>Checking printer</h1>
            <h2 id="res-icon" class="fa fa-spinner"></h2>
                
            <p class="check_result"></p>
        
        </div>
    
    </div>

</div>

<div id="row_3" class="row interstitial" style="display: none;">
	<div class="col-sm-12">
		<div class="well">
			<div class="row">
				<div class="col-sm-6">
					<div class="text-center">
						<div class="row">
							<div class="col-sm-7">
								<img style=" display: inline;" class="img-responsive" src="/fabui/application/plugins/pcbmill/assets/img/subtractive/1.png" />
							</div>
							<div class="col-sm-5">
								
								<h1></h1>
								<h3 class="text-center">Make sure that the tool (e.g.endmill) is mounted in the head. Jog the tool to the desired origin point (X=0, Y=0) and press the concentric circles button to set the zero.</h3>
								<h3 class="text-center">Note that Z=0 will be calculated via electric conductivity between the tool and the workpiece (e.g. copper clad).</h3>
								<h3 class="text-center">Please connect the external endstop to the copper clad (PCB).</h3>
								<h3 class="text-center">Then press "Start"</h3>
								<h3 class="text-center">x_max, y_max: <p id="xysizes"></p> </h3>
								
							</div>
						</div>
					</div>
				</div>
			    <div class="col-sm-6">
			        <div class="text-center">
			            <div class="row">
							<div class="col-sm-12">
								<div class="smart-form" style="background: none; margin-top: -30px">
									<fieldset style="background: none;">
										<div class="row">
											<section class="col col-4">
												<label class="label text-center">Step (mm)</label>
												<label class="input-sx">
													<input class="text-center" type="text" id="step" value="10">
												</label>
											</section>
											<section class="col col-4">
												<label class="label text-center">Feedrate</label>
												<label class="input-sx">
													<input class="text-center" type="text" id="feedrate" value="1000">
												</label>
											</section>
											<section class="col col-4">
												<label class="label text-center">Z Step (mm)</label>
												<label class="input-sx"> 
													<input class="text-center" type="text" id="z-step" value="5">
												</label>
											</section>
											
										</div>
			
									</fieldset>
								</div>
							</div>
						</div>
			            
			            <div class="row">
							<div class="col-sm-12">
						
								<div class="btn-group-vertical">
									<a href="javascript:void(0)" data-attribue-direction="up-left" data-attribute-keyboard="103" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="fa fa-arrow-left fa-1x fa-rotate-45">
										</i>
									</a>
									<a href="javascript:void(0)" data-attribue-direction="left" data-attribute-keyboard="100" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<span class="glyphicon glyphicon-arrow-left ">
										</span>
									</a>
									<a href="javascript:void(0)" data-attribue-direction="down-left" data-attribute-keyboard="97" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="fa fa-arrow-down fa-rotate-45 ">
										</i>
									</a>
								</div>
								<div class="btn-group-vertical">
									<a href="javascript:void(0)" data-attribue-direction="up" data-attribute-keyboard="104" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="fa fa-arrow-up fa-1x">
										</i>
									</a>
									<a href="javascript:void(0)" id="zero-all"  class="btn btn-default btn-lg btn-circle btn-xl rotondo">
										<i class="fa fa-bullseye">
										</i>
									</a>
									<a href="javascript:void(0)" data-attribue-direction="down" data-attribute-keyboard="98" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="glyphicon glyphicon-arrow-down ">
										</i>
									</a>
								</div>
								<div class="btn-group-vertical">
									<a href="javascript:void(0)" data-attribue-direction="up-right" data-attribute-keyboard="105" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="fa fa-arrow-up fa-1x fa-rotate-45">
										</i>
									</a>
									<a href="javascript:void(0)" data-attribue-direction="right" data-attribute-keyboard="102" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<span class="glyphicon glyphicon-arrow-right">
										</span>
									</a>
									<a href="javascript:void(0)" data-attribue-direction="down-right" data-attribute-keyboard="99" class="btn btn-default btn-lg directions btn-circle btn-xl rotondo">
										<i class="fa fa-arrow-right fa-rotate-45">
										</i>
									</a>
								</div>
			                    
			                    
			                    <div class="btn-group-vertical" style="margin-left: 10px;">
									<a href="javascript:void(0)" class="btn btn-default axisz" data-attribute-step="1" data-attribute-function="zdown">
										<i class="fa fa-angle-double-up">
										</i>&nbsp;Z
									</a>
			                        <hr />
									<a href="javascript:void(0)" class="btn btn-default axisz" data-attribute-step="1" data-attribute-function="zup">
										<i class="fa fa-angle-double-down">
										</i>&nbsp; Z
									</a>
									
								</div>
							</div>
						</div>
			        </div>
        		</div>
    		</div>
		</div>
    </div>

</div>

<div id="row_4" class="row interstitial" style="display: none;">

    <div class="col-sm-12">
    
        <div class="well text-center">
        
            <h1>Configuring Zero</h1>
            <h2 id="res-icon" class="fa fa-spinner"></h2>
                
            <p class="check_result"></p>
        
        </div>
    
    </div>

</div>


<div id="row_5" class="row interstitial" style="display: none;">
	<div class="col-sm-12">
		<div class="well">
			<div class="row">
				<div class="col-sm-6">
					<div class="text-center">
						<div class="row">
							<div class="col-sm-7">
								<div class="row" id="drawingArea">
								</div>
							</div>
							<div class="col-sm-5">
								<h1></h1>
								<h3 class="text-center">The bed is going to be probed.</h3>
								<h3 class="text-center">Make sure the information is correct, select the granularity, and then press "Start Measurement".</h3>
							</div>
						</div>
					</div>
				</div>
			    	<div class="col-sm-6">
			            <p id="SliderBedScanGranularityText" class="text-center">Granularity of Bed Scan</p>
			            <div id="SliderBedScanGranularity" style="left:50%; margin-left: -150px; width: 300px;"></div>
			            <p id="AccuracyOfScan" class="text-center" val="0">Accuracy of measurements (low, but quick)</p>
			            <div id="slider" style="left:50%; margin-left: -150px; width: 300px;"></div>
			            <p class="text-center" style="margin-top: 10px;">
			                <a id="ButtonStartStop" href="javascript:void(0);" class="btn btn-primary btn-default do-calibration" name="ButtonStartStop">Start new measurement</a>
			            </p>
			            <p class="text-center" style="margin-top: 10px;">
			                <a id="ButtonLoadLastMeasurement" href="javascript:void(0);" class="btn btn-primary btn-default load-last-measurement" name="ButtonLoadLastMeasurement">Load last measurement</a>
			            </p>
			            <div id="progressbar">
			                <div id="progressLabel" class="progress-label">Loading...</div>
			            </div>

			        </div>
        		</div>
    		</div>
    	</div>

</div>



<div class="row button-print-container margin-bottom-10">
        <div class="col-sm-12 text-center ">
            <a id="exec_button" href="javascript:void(0);" class="btn btn-primary btn-lg">Click here if you are ready</a>
        </div>
</div>


<script type="text/javascript">

	$("#velocity-slider-container").removeClass('col-md-4 col-lg-4').addClass('col-md-6 col-lg-6');
	$("#ext-slider-container").hide();
	$("#bed-slider-container").hide();
	$("#rpm-slider-container").show();

    $("#zero-all").on("click", zero_all);
    
    $( ".axisz" ).on( "click", axisz );
    
	$(".directions").on("click", directions);
	
	
	$("#z-step").spinner({
				step : 0.01,
				numberFormat : "n",
				min: 0
		});
		
		
		$("#step").spinner({
				step :0.5,
				numberFormat : "n",
				min: 0
		});
		
		$("#feedrate").spinner({
				step :50,
				numberFormat : "n",
				min: 0
		});	

    $('#exec_button').on('click', function(){
        
        
        var actual_row;
        var next_row;
        var action = $(this).attr('data-action');

//	var files_max_x = $_POST['_files_max_x'];
	//files_max_y= $_GET["_files_max_y"]; 

	$('#xysizes').html("("+files_max_x+","+files_max_y+")");

//	document.getElementById("xysizes").innerHTML = "("+files_max_x+","+files_max_y+")"; 
        
        $( ".interstitial" ).each(function( index ) {
                
            if($(this).is(":visible") ){
                actual_row = parseInt($(this).attr('id').replace('row_', ''));
            } 
        });
        
        if(actual_row == 6){
            
            print_object();
            return false;
            
        }
        
        if(action == "check"){
                pre_print();
                return false; 
        }

        if(action == "configzero"){
                configure_zero();
                return false; 
        }


        next_row = actual_row + 1;
        
        if ($("#row_" + next_row).length > 0){
            
            $('#exec_button').addClass('disabled');
            
            $("#row_" + actual_row).slideUp('slow', function(){
                
            });
            
            $("#row_" + next_row).slideDown('slow', function(){

            	if(actual_row == 5){
            		initialize_probing();
            		return false;
            	}
                switch(next_row){
                    
                    case 2:
                        pre_print();
                        break;

		    case 4:
			//probing();
			break;
                    
                    case 6:
                        $("#exec_button").html('Print');
                        $('#exec_button').removeClass('disabled');
			$('#xysizes').html('33');

                        break;
                    
                }
            });
        }
        
    });
    
    
    function pre_print(){
       
       	openWait('Checking printer');
       	 
        $('#exec_button').addClass('disabled');
        $("#res-icon").removeClass('fa-warning fa-check txt-color-green txt-color-red fa-spinner fa-spin');
        $("#res-icon").addClass('fa-spinner fa-spin');
        $('#modal_link').addClass('disabled');
        
        
        var timestamp = new Date().getTime();
            
        ticker_url = '/temp/check_' + timestamp + '.trace';
        
        
        $.ajax({
//        		  url: ajax_endpoint + 'ajax/pre_print.php',
        		  url: '/fabui/application/plugins/pcbmill/ajax/pre_print.php',
        		  dataType : 'json',
                  type: "POST", 
        		  async: true,
                  data : { file : file_selected.full_path, time:timestamp},
        		  beforeSend: function( xhr ) {
        		  }
        	}).done(function(response) {

                var status = response.status;

                if(status == 200){
//                	$("#row_2").slideUp('slow', function(){
//                    	$("#row_3").slideDown('slow');
//                    });

//                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-check').addClass('txt-color-green');
//                    $("#exec_button").html('Start');
//                    $('.check_result').html('');
//                    $("#exec_button").attr('data-action', 'configzero');
                }else{
                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-warning').addClass('txt-color-red');
                    $('.check_result').html(response.trace);
                    $("#exec_button").html('Oops.. try again');
                    $("#exec_button").attr('data-action', 'check');
                }

//                ticker_url = '';
//                closeWait();
//                $('#exec_button').removeClass('disabled');
       	})//; // this is just pre-print
	.then(function(response) {

        $.ajax({
//        		  url: ajax_endpoint + 'ajax/pre_print.php',
        		  url: '/fabui/application/plugins/pcbmill/ajax/prepare_to_zero.php',
        		  dataType : 'json',
                  type: "POST", 
        		  async: true,
                  data : { file : file_selected.full_path, time:timestamp},
        		  beforeSend: function( xhr ) {
        		  }
        	}).done(function(response) {

                var status = response.status;

                if(status == 200){
                	$("#row_2").slideUp('slow', function(){
                    	$("#row_3").slideDown('slow');
                    });

                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-check').addClass('txt-color-green');
                    $("#exec_button").html('Next');
                    $('.check_result').html('');
                    $("#exec_button").attr('data-action', 'configzero');
                }else{
                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-warning').addClass('txt-color-red');
                    $('.check_result').html(response.trace);
                    $("#exec_button").html('Oops.. try again');
                    $("#exec_button").attr('data-action', 'check');
                }

                ticker_url = '';
                closeWait();
                $('#exec_button').removeClass('disabled');
       		});
	});

    }

    function configure_zero(){
       
       	openWait('Configuring zero');
       	 
        $('#exec_button').addClass('disabled');
        $("#res-icon").removeClass('fa-warning fa-check txt-color-green txt-color-red fa-spinner fa-spin');
        $("#res-icon").addClass('fa-spinner fa-spin');
        $('#modal_link').addClass('disabled');
        
        
        var timestamp = new Date().getTime();
            
        ticker_url = '/temp/check_' + timestamp + '.trace';
        
        
        $.ajax({
//        		  url: ajax_endpoint + 'ajax/pre_print.php',
        		  url: '/fabui/application/plugins/pcbmill/ajax/configure_zero.php',
        		  dataType : 'json',
                  type: "POST",
        		  async: true,
                  data : { file : file_selected.full_path, time:timestamp},
        		  beforeSend: function( xhr ) {
        		  }
        	}).done(function(response) {

                var status = response.status;

                if(status == 200){

  		    var zerocoords = JSON.parse(response.zerocoords);

		    x_zero = zerocoords.x;
		    y_zero = zerocoords.y;
		    z_zero = zerocoords.z;
		    zt_zero = zerocoords.zt;

                	$("#row_3").slideUp('slow', function(){});
                	$("#row_4").slideUp('slow', function(){
                    	$("#row_5").slideDown('slow');
                    });

                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-check').addClass('txt-color-green');
                    $("#exec_button").html('Start');
                    $('.check_result').html('');
                    $("#exec_button").attr('data-action', '');
                }else{
                    $("#res-icon").removeClass('fa-spin').removeClass('fa-spinner').addClass('fa-warning').addClass('txt-color-red');
                    $('.check_result').html(response.trace);
                    $("#exec_button").html('Oops.. try again');
                    $("#exec_button").attr('data-action', 'configzero');
                }

                ticker_url = '';
                closeWait();
                $('#exec_button').removeClass('disabled');
       	});//; // this is just pre-print

    }
    
    function axisz(){
    
        var func = $(this).attr("data-attribute-function");
        var step = $(this).attr("data-attribute-step");
        make_call(func, step);
    
    }
    
    
    function directions(){
    	var value = $(this).attr("data-attribue-direction");
    	make_call("directions", value);	
    }
    
    function zero_all(){
    	make_call("zero_all_pre_mill", true);
    }
    
    
    function make_call(func, value){
    	
    	$(".btn").addClass('disabled');

    	$.ajax({
    		type: "POST",
    		url :ajax_jog_endpoint + 'ajax/exec.php',
    		data : {function: func, value: value, step:$("#step").val(), z_step:$("#z-step").val(), feedrate: $("#feedrate").val()},
    		dataType: "json"
    	}).done(function( data ) {
            $(".btn").removeClass('disabled');
            
    	});
	
    }

/*************************************************************************************************************************************/
// Procrash's stuff here

    var ticker_url = '';
    var interval_ticker;
    /* Event handlers */ 
    $(function() {

        $(".do-calibration").on('click', do_calibration);
        $("#ButtonLoadLastMeasurement").on('click', load_last_measurement);
        /*interval_ticker = setInterval(ticker, 500);*/


    });



    function ticker() {

        if (ticker_url != '') {

            $.get(ticker_url, function(data) {

                if (data != '') {

                    waitContent(data);

                }
            }).fail(function() {

            });
        }
    }

$.fn.textWidth = function(text, font) {
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
    return $.fn.textWidth.fakeEl.width();
};

    var lastTriggeredTimestamp = jQuery.now();

    function do_calibration() {
        var buttonStartStop = $("#ButtonStartStop");
        if (buttonStartStop.text().trim() == "Start") {

            additionalProgressLabelText = "";
            buttonStartStop.text("Stop");
            var progressbar = $("#progressbar"),
                progressLabel = $(".progress-label");
            progressbar.progressbar("value", 0);
            progressbar.progressbar("option", "value", false);

            progressbar.show();
            progressLabel.show();

            var now = jQuery.now();
            /* now = 1417816594544;     */
            lastTriggeredTimestamp = now;
            setTimeout(updateCalibProgress, 2000);


            /* openWait('Calibration in process'); */

            ticker_url = '/temp/probing_' + now + '.trace';

            /* console.log(upperLeftSelected+" "+upperRightSelected+" "+lowerLeftSelected+" "+lowerRightSelected+" "+currentAccuracy+" "+calibrationMethod+" "+bedScanGranularityNr); */
            $.ajax({
                type: "POST",
                url: "/fabui/application/plugins/pcbmill/views/index/ajax/probing.php",
                data: {
                    time: now,
                    accuracy: currentAccuracy,
                    calibration_method: calibrationMethodStr,
                    bedScanGranularity: bedScanGranularityNr,
                    pointsToMeasure: JSON.stringify(points)
                },
                dataType: "html"
            }).done(function(data) {
                updateMeasurementProgress(data);
            });


        } else {
            openWait('Stopping process'); 
            $.ajax({
                type: "POST",
                url: "/fabui/application/plugins/pcbmill/views/index/ajax/probingStop.php",
                data: {
                    time: now
                },
                dataType: "html"
            }).done(function(data) {
                console.log(data);
                var buttonStartStop = $("#ButtonStartStop");
                buttonStartStop.text("Start");
                closeWait();

            });

        }
    }


    var paper;
    var width = 331;
    var height = 331;

    var posX = 0;
    var posY = 0;

    var imageWidth = 331;
    var imageHeight = 331;

    var upperLeftScrew;
    var lowerLeftScrew;

    var upperRightScrew;
    var lowerRightScrew;

    var upperLeftSelected = false;
    var upperRightSelected = false;

    var lowerLeftSelected = false;
    var lowerRightSelected = false;

    var selectedColor = "#fff";
    var selectedFill = "#f00";

    var unselectedColor = "#fff";
    var unselectedFill = "#f00";

    var mouseOverColor = "#000000";

    var mouseOverFill = "#f00";
    var spacing = 50;

    var onClick = function(event) {
        var x = event.offsetX;
        var y = event.offsetY;

        /* Upper left */
        if (x < width / 2 - spacing + posX && y < width / 2 - spacing + posY) {
            upperLeftSelected = !upperLeftSelected;
        }

        /* Upper Right */
        if (x > width / 2 + spacing + posX && y < width / 2 - spacing + posY) {
            upperRightSelected = !upperRightSelected;
        }

        /* Lower left */
        if (x < width / 2 - spacing + posX && y > width / 2 + spacing + posY) {
            lowerLeftSelected = !lowerLeftSelected;
        }


        /* Lower Right */
        if (x > width / 2 + spacing + posX && y > width / 2 + spacing + posY) {
            lowerRightSelected = !lowerRightSelected;
        }

        updateVisibility();
        calculatePointsForMeasurement(bedScanGranularityNr, calibrationMethodStr);
        onMouseMove(event);


    };

    function updateVisibility() {
        /* Hide all elements which are currently not selected */
        if (!upperLeftSelected) {
            upperLeftScrew.hide().attr("stroke", unselectedColor);
        } else {
            upperLeftScrew.attr("stroke", selectedColor);
        }

        if (!upperRightSelected) {
            upperRightScrew.hide().attr("stroke", unselectedColor);
        } else {
            upperRightScrew.attr("stroke", selectedColor);
        }

        if (!lowerLeftSelected) {
            lowerLeftScrew.hide().attr("stroke", unselectedColor);
        } else {
            lowerLeftScrew.attr("stroke", selectedColor);
        }

        if (!lowerRightSelected) {
            lowerRightScrew.hide().attr("stroke", unselectedColor);
        } else {
            lowerRightScrew.attr("stroke", selectedColor);

        }
    }

    function hideScrews() {
        upperLeftScrew.hide();
        upperRightScrew.hide();
        lowerLeftScrew.hide();
        lowerRightScrew.hide();
    }


   var onMouseMove = function(event) {
        if (!disableScrewSelection) {
            var x = event.offsetX;
            var y = event.offsetY;

            updateVisibility();

            /* Upper left */
            if (x < width / 2 - spacing + posX && y < width / 2 - spacing + posY) {
                upperLeftScrew.show();
                upperLeftScrew.attr({
                    "stroke": mouseOverColor,
                    "fill": mouseOverFill
                });
            }

            /* Upper Right */
            if (x > width / 2 + spacing + posX && y < width / 2 - spacing + posY) {
                upperRightScrew.show();
                upperRightScrew.attr({
                    "stroke": mouseOverColor,
                    "fill": mouseOverFill
                });
            }

            /* Lower left */
            if (x < width / 2 - spacing + posX && y > width / 2 + spacing + posY) {
                lowerLeftScrew.show();
                lowerLeftScrew.attr({
                    "stroke": mouseOverColor,
                    "fill": mouseOverFill
                });
            }

            /* Lower Right */
            if (x > width / 2 + spacing + posX && y > width / 2 + spacing + posY) {
                lowerRightScrew.show();
                lowerRightScrew.attr({
                    "stroke": mouseOverColor,
                    "fill": mouseOverFill
                });
            }
        }


    };


    function updateCalibProgress() {
        $.ajax({
            type: "POST",
            url: "/fabui/application/plugins/pcbmill/views/index/ajax/probingProgressUpdater.php",
            data: {
                time: lastTriggeredTimestamp,
            },
            dataType: "html"
        }).done(function(data) {
            updateMeasurementProgress(data);
        });
    }

    function updateMeasurementProgress(measurementVals) {
        var currentProgress = 0;
        var repeat = true;

        if (measurementVals != null && measurementVals.trim().length > 0) {
            try {
                var measurementValues = JSON.parse(measurementVals)['bed_calibration']['point_measurements'];
                var measurementProgress = JSON.parse(measurementVals)['progress'];
                var measurementInformation = JSON.parse(measurementVals)['measurementInformation'];

                /* console.log(measurementProgress); */
                var currentPointsMeasured = measurementProgress['pointsMeasured'];
                var currentPointsToMeasure = measurementProgress['pointsToMeasure'];
                currentProgress = currentPointsMeasured * 100.0 / currentPointsToMeasure;
                currentProgress = parseFloat(currentProgress.toFixed(2));

                var currentBedScanGranularity = measurementInformation['bedscanGranularity'];
                var currentFeedrate = measurementInformation['feedrate'];
                var currentProbesPerPoint = measurementInformation['probesPerPoint'];
                var currentETA = measurementInformation['time_left'];

                var currentPoint = 0;
                var currentProbe = 0;

                if (currentProbesPerPoint > 0) {
                    currentPoint = parseFloat((currentPointsMeasured / currentProbesPerPoint).toFixed(0));
                    currentProbe = (currentPointsMeasured % currentProbesPerPoint) + 1;
                }
                /* Update ProgressBar */
                var progressbar = $("#progressbar");

                additionalProgressLabelText = "Measuring Point: " + currentPoint + " of " + (currentPointsToMeasure / currentProbesPerPoint) + " Probe: " + currentProbe + " / " + currentProbesPerPoint + " Time left: " + currentETA + " ";
                progressbar.progressbar("value", currentProgress);


                /* Update GUI */

                var precision = 10;
                var coordinates = [
                    [posX + 40, posY - 40 + height, "start"],
                    [posX + width - 50, posY - 40 + height, "end"],
                    [posX + 40, posY + 30, "start"],
                    [posX + width - 50, posY + 30, "end"]
                ];


                var singleValsCoords = [
                    [posX, posY + height - 30, "end"],
                    [posX + width, posY + height - 30, "start"],
                    [posX, posY + 10, "end"],
                    [posX + width, posY + 10, "start"]
                ];

                for (var i = 0; i < measurementValues.length; i++) {
                    if (measurementValues[i][3] == "True") {
                        var valid = 0;
                        var meanText = "";
                        var measuredValsText = "";
                        var mean = 0;
                        var additionalTextLines = 0;
                        var zValues = measurementValues[i][2];
                        var textHeight = 10;
                        var maxValsPerLine = 7;
                        for (var measurementIdx = 0; measurementIdx < zValues.length; measurementIdx++) {
                            var val = zValues[measurementIdx];
                            if (val != null && val != "" && val != "N/A") {
                                measuredValsText += val;
                                var fVal = parseFloat(val);

                                mean += fVal;
                                valid++;
                                if (measurementIdx < zValues.length - 1) {
                                    if (valid > 1 && valid % maxValsPerLine == 0) {
                                        measuredValsText += "\r\n";
                                        additionalTextLines++;
                                    } else {
                                        measuredValsText += ", ";
                                    }
                                }
                            }
                        }
                        if (valid > 0) {
                            mean /= valid;
                            mean = parseFloat(mean.toFixed(precision));
                            meanText = mean + "";


                            /* Search ifx idx is on a corner point */
                            var idxCoords = coordinates.length;
                            if (i == 0) idxCoords = 0;
                            if (i == currentBedScanGranularity + 1) idxCoords = 1;
                            if (i == (currentBedScanGranularity + 2) * (currentBedScanGranularity + 1)) idxCoords = 2;
                            if (i == (currentBedScanGranularity + 2) * (currentBedScanGranularity + 2) - 1) idxCoords = 3;

                            if (idxCoords < coordinates.length) {
                                meanXPos = coordinates[idxCoords][0];
                                meanYPos = coordinates[idxCoords][1];
                                textAnchorMean = coordinates[idxCoords][2];

                                measuredValsXPos = singleValsCoords[idxCoords][0];
                                measuredValsYPos = singleValsCoords[idxCoords][1];
                                textAnchorSingleVals = singleValsCoords[idxCoords][2];

                                displayVals = true;
                            } else {
                                /*
                                        meanXPos = 0;
                                        meanYPos = 0;
                                        textAnchorMean = "start";

                                        measuredValsXPos = singleValsCoords[i][0];
                                            measuredValsYPos = singleValsCoords[i][1];
                                            textAnchorSingleVals = singleValsCoords[i][2];
                                        */

                                displayVals = false;

                            }

                            if (meanTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]] != null) meanTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]].remove();

                            if (singleValsTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]] != null) singleValsTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]].remove();


                            if (displayVals) {
                                /* Mean Values */
                                /* *********** */
                                meanTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]] = paper.text(meanXPos,
                                    meanYPos,
                                    meanText).attr({
                                    "font-family": "Arial",
                                    "font-size": "15px",
                                    "font-weight": "normal",
                                    fill: "#000000",
                                    stroke: "black",
                                    "stroke-width": "0px",
                                    "text-anchor": textAnchorMean,
                                    "font-style": "normal"
                                });


                                /* Single Values */
                                /* ************* */
                                if (measuredValsYPos + additionalTextLines * textHeight > posY + height - 30) {
                                    measuredValsYPos -= additionalTextLines * textHeight;
                                }

                                singleValsTextHashMap[measurementValues[i][0] + " " + measurementValues[i][1]] = paper.text(measuredValsXPos,
                                    measuredValsYPos,
                                    measuredValsText).attr({
                                    "font-family": "Arial",

                                    "font-size": "10px",

                                    "font-weight": "normal",

                                    fill: "#000000",

                                    stroke: "black",
                                    "stroke-width": "0px",

                                    "text-anchor": textAnchorSingleVals,
                                    "font-style": "normal"
                                });
                            }
                        }

                    }
                    /* Update Visualisation */

                    setupVisualisation(currentBedScanGranularity, measurementValues, currentPoint, currentProbe, currentProbesPerPoint);

                }
            } catch (e) {
                console.log(e);
                /* repeat = false; */
            }

        }



        if (repeat && currentProgress < 99.99) {
            setTimeout(updateCalibProgress, 1000);
        } else {
            var buttonStartStop = $("#ButtonStartStop");
            buttonStartStop.text("Start");
        }


    }

    function searchMinVal(measurementValues, measuredUpToPoint, measuredUpToProbeNr, nrOfProbesPerPoint) {
        var minSeen = 0;
        if (measurementValues != null) {
            var minSet = false;
            var idx = 0;

            for (var i = 0; i < measurementValues.length; i++) {
                if (measurementValues[i][3] == "True") {
                    var zValues = measurementValues[i][2];
                    for (var measurementIdx = 0; measurementIdx < zValues.length; measurementIdx++) {
                        var val = zValues[measurementIdx];
                        if (idx < measuredUpToPoint * nrOfProbesPerPoint - (nrOfProbesPerPoint - measuredUpToProbeNr))
                            if (val != null && val != "" && val != "N/A") {
                                /* Search for minVal we need this later for a proper Visualisation */
                                var fVal = parseFloat(val);
                                if (!minSet) {
                                    minSet = true;
                                    minSeen = fVal;
                                } else if (minSeen > fVal) {
                                    minSeen = fVal;
                                }
                            }
                        idx++;
                    }
                }

            }
        }

        return minSeen;
    }

    var meanTextHashMap = [];
    var singleValsTextHashMap = [];


    var imagePositionX = 0;
    var image = null;
    var screwInfoText = null;
    var bedScanInfoText = null;

    function isRunning(timestamp) {
        if (timestamp.trim().length > 0) {
            lastTriggeredTimestamp = parseFloat(timestamp);
            setTimeout(updateCalibProgress, 2000);

            additionalProgressLabelText = "";
            var buttonStartStop = $("#ButtonStartStop");
            buttonStartStop.text("Stop");
            var progressbar = $("#progressbar"),
                progressLabel = $(".progress-label");
            progressbar.show();
            progressLabel.show();

        }
    }

    function load_last_measurement() {
        $.ajax({
            type: "POST",
            url: "/fabui/application/plugins/pcbmill/views/index/ajax/probingLoadLastMeasurement.php",
            data: {
                time: jQuery.now()
            },
            dataType: "html"
        }).done(function(data) {
            if (data.trim().length>0) {
            lastTriggeredTimeStamp = "";
            updateMeasurementProgress(data);

            }
        });

        
    }

    function initialize_probing() {
        /* Check if Calibration is already running */
        $.ajax({
            type: "POST",
            url: "/fabui/application/plugins/pcbmill/views/index/ajax/probingCheckIfRunning.php",
            data: {
                time: jQuery.now()
            },
            dataType: "html"
        }).done(function(data) {
            isRunning(data);
        });



        var progressbar = $("#progressbar"),
            progressLabel = $(".progress-label");

        progressbar.hide();
        progressLabel.hide();

        paper = Raphael("drawingArea");

        var drawingAreaCenter = $("#drawingArea").width();

        var imagePositionX = 0; /* drawingAreaCenter / 2 - width / 2; */
        posX = imagePositionX;

        image = paper.image("/fabui/application/plugins/pcbmill/assets/img/bed.png", imagePositionX, 0, 321, 321);

/*        screwInfoText = paper.text(width / 2 + posX, height / 2 + posY, "Select screws to calibrate").attr({
            "font-family": "Arial",
            "font-size": "20px",
            "font-weight": "normal",
            fill: "#ffffff",
            stroke: "black",
            "stroke-width": "0px",
            "text-anchor": "center",
            "font-style": "normal"
        });*/

/*        bedScanInfoText = paper.text(width / 2 + posX, height / 2 + posY, "Select granularity of Scan").attr({
            "font-family": "Arial",
            "font-size": "20px",
            "font-weight": "normal",
            fill: "#ffffff",
            stroke: "black",
            "stroke-width": "0px",
            "text-anchor": "center",
            "font-style": "normal"
        });*/

        bedScanInfoText.hide();
        var circleSize = 5;

        upperLeftScrew = paper.circle(posX + 30, posY + 10, circleSize).attr({
            "fill": "#f00",
            "stroke": "#fff"
        }).hide();
        lowerLeftScrew = paper.circle(posX + 30, posY + height - 20, circleSize).attr({
            "fill": "#f00",
            "stroke": "#fff"
        }).hide();

        upperRightScrew = paper.circle(posX + width - 40, posY + 10, circleSize).attr({
            "fill": "#f00",
            "stroke": "#fff"
        }).hide();
        lowerRightScrew = paper.circle(posX + width - 40, posY + height - 20, circleSize).attr({
            "fill": "#f00",
            "stroke": "#fff"
        }).hide();


        /* Event Handlers... */
        image.mousemove(onMouseMove);
        image.click(onClick);
        upperLeftScrew.click(onClick);
        upperRightScrew.click(onClick);
        lowerLeftScrew.click(onClick);
        lowerRightScrew.click(onClick);

        /* Hide GUI Elements */
        /*$("#SliderBedScanGranularityText").hide();
        $("#SliderBedScanGranularity").hide();*/
        $("#AccuracyOfScan").hide();
        $("#slider").hide();

        calibrationMethodStr = "BED_MEASUREMENT";

        calculatePointsForMeasurement(0, calibrationMethodStr);

    }

    var lines = [];

    function removeLines() {
        for (var i = 0; i < lines.length; i++) {
            lines[i].remove();
        }
        lines = [];
    }

    var points = [];

    function calculatePointsForMeasurement(nrOfDivides, method) {
        if (calibrationMethodStr == "SCREW_CALIBRATION") {
            nrOfDivides = 0;
        }
        points = new Array(nrOfDivides * nrOfDivides + 2);
        /* Calculate Points for Bed Scan measurement */
        var maxXPhys = 184; /* originally 195 */
        var minXPhys = 22;
        var maxYPhys = 210;
        var minYPhys = 66.5;

        var ptsIdx = 0;
        for (var y = 0; y < (nrOfDivides + 2); y++) {
            for (var x = 0; x < (nrOfDivides + 2); x++) {
                divXPhys = x * (maxXPhys - minXPhys) / (nrOfDivides + 1);
                divYPhys = y * (maxYPhys - minYPhys) / (nrOfDivides + 1);
                points[ptsIdx] = [
                    minXPhys + divXPhys,
                    minYPhys + divYPhys,
                    0,
                    true /* YES, measure all points */
                ];
                ptsIdx++;
            }
        }

        if (calibrationMethodStr == "SCREW_CALIBRATION") {
            points[0][3] = lowerLeftSelected;
            points[1][3] = lowerRightSelected;
            points[2][3] = upperLeftSelected;
            points[3][3] = upperRightSelected;
        }
    }

    function updateBedScanGranularity(nrOfDivides) {
        removeLines();
        var idx = 0;
        var drawingAreaCenter = $("#drawingArea").width();
        var imagePositionX = 0; /* drawingAreaCenter / 2 - width / 2; */
        posX = imagePositionX;

        var deltaX = 27;
        var deltaY = 18;

        var startX = posX + deltaX;
        var endX = posX + image.getBBox().width - deltaX;

        var startY = deltaY;
        var endY = (image.getBBox().height - deltaY);

        for (var i = 0; i < (nrOfDivides + 2); i++) {
            divX = i * (endX - startX) / (nrOfDivides + 1);
            divY = i * (endY - startY) / (nrOfDivides + 1);
            lines[idx++] = paper.path("M " + (posX + deltaX + divX) + " " + deltaY + " L " + (posX + deltaX + divX) + " " + (image.getBBox().height - deltaY));
            lines[idx++] = paper.path("M " + (posX + deltaX) + " " + (deltaY + divY) + " L " + (posX + image.getBBox().width - deltaX) + " " + (deltaY + divY));
        }

        calculatePointsForMeasurement(nrOfDivides, "BED_MEASUREMENT");
    }


    var bedScanGranularityNr = 0;

    $("#calibrationMethod").change(function() {
        var selectedMethod = $(this).val();
        $("#SliderBedScanGranularityText").hide();
        $("#SliderBedScanGranularity").hide();

        calibrationMethodStr = "NONE";
        removeLines();
        disableScrewSelection = false;
        updateVisibility();

        if (selectedMethod === "MeasureWholeBed") {
            $("#SliderBedScanGranularityText").show();
            $("#SliderBedScanGranularity").show();
            calibrationMethodStr = "BED_MEASUREMENT";
            updateBedScanGranularity(bedScanGranularityNr);
            disableScrewSelection = true;
            hideScrews();
            screwInfoText.hide();
            bedScanInfoText.show();
            $("#SliderBedScanGranularityText").text("Granularity of Bed Scan (" + (bedScanGranularityNr + 1) + " x " + (bedScanGranularityNr + 1) + " squares)");
        }
        if (selectedMethod === "ScrewCalibration") {
            calibrationMethodStr = "SCREW_CALIBRATION";
            screwInfoText.show();
            bedScanInfoText.hide();
            calculatePointsForMeasurement(0, "SCREW_CALIBRATION");
        }
        if (selectedMethod === "CheckCalibration") {
            calibrationMethodStr = "CHECK_CALIBRATION";
        }
        if (selectedMethod === "PerformTestPrint") {
            calibrationMethodStr = "PERFORM_TEST_PRINT";
        }
        if (selectedMethod === "None") {
            calibrationMethodStr = "NONE";
        }
        /* alert(selectedMethod); */

    });

//    $(document).ready(function() {
//        initialize();
//    });

    var currentAccuracy = 0;
    var disableScrewSelection = false;
    $("#slider").slider({
        value: 0,
        min: 0,
        max: 200,
        step: 50,
        slide: function(event, ui) {
            var valStr = "";
            switch (ui.value) {
                case 0:
                    valStr = "(low, but quick)";
                    break;
                case 50:
                    valStr = "(medium)";
                    break;
                case 100:
                    valStr = "(slow but very precise)";
                    break;
                case 150:
                    valStr = "(even slower awesome precision)";
                    break;
                case 200:
                    valStr = "(insane, best that you can get)";
                    break;
                default:
                    valStr = "(low, but quick)";
            }
            $("#AccuracyOfScan").text("Accuracy of individual measurements " + valStr);
            currentAccuracy = ui.value;
        }
    });

    function callbackOnSliderChange(event, ui) {
        var valStr = "";
        switch (ui.value) {}
        bedScanGranularityNr = ui.value;
        $("#SliderBedScanGranularityText").text("Granularity of Bed Scan (" + (bedScanGranularityNr + 1) + " x " + (bedScanGranularityNr + 1) + " squares)");
        updateBedScanGranularity(bedScanGranularityNr);
    }


    $("#SliderBedScanGranularity").slider({
        value: 0,
        min: 0,
        max: 100,
        step: 1,
        slide: callbackOnSliderChange
    });


    var additionalProgressLabelText = "";
    var progressbar = $("#progressbar"),
        progressLabel = $(".progress-label");
    progressLabelWithID = $("#progressLabel");

    progressbar.progressbar({
        value: false,
        change: function() {
            if (additionalProgressLabelText == null) additionalProgressLabelText = "";
            if (progressbar.progressbar("value") == false) {
                progressLabel.text("Setting up mechanics...");
            } else {
                progressLabel.text(additionalProgressLabelText + "(" + progressbar.progressbar("value") + "%)");
            }
            var myWidthTxt = "-" + (($.fn.textWidth(progressLabel.text(), '13px arial bold')/2).toFixed(0)) + 'px'; 
            progressLabel.css("margin-left", myWidthTxt);
        },
        complete: function() {
            progressLabel.text("Complete!");
            var myWidthTxt = "-" + (($.fn.textWidth(progressLabel.text(), '13px arial bold')/2).toFixed(0)) + 'px'; 
            progressLabel.css("margin-left", myWidthTxt);
            

            progressbar.hide();
            progressLabel.hide();
        }
    });

</script>

