    
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/resource/bower_components/jquery/dist/jquery.validate.min.js"></script>
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/resource/dist/js/bootstrap-timepicker.min.js"></script>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/resource/dist/css/bootstrap-timepicker.min.css" rel="stylesheet">
<div class="center wow fadeInDown">
    <h2>Register Here</h2>
    <form role="form" id="registerForm" name="registerForm" novalidate="novalidate">
        <div class="box-border">
            <div class="row">
                <div class="col-md-2">
                    <label>Vicar</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="vicarName" id="vicarName" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="vicarNo" id="vicarNo" placeholder="Enter Mobile No" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="vicarEmail" id="vicarEmail" placeholder="Enter Email Id" required>
                                </div>
                            </div>
               </div>
            <br />
            <div class="row">
                <div class="col-md-2">
                    <label>Youth Secretary / Youth In-charge</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="youthName" id="youthName" placeholder="Enter Your Name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="youthNo" id="youthNo" placeholder="Enter Mobile No" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="youthEmail" id="youthEmail" placeholder="Enter Email Id" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-border">
                        <div class="row">
                            <div class="form-group text-center">
                                <label>Travel Details</label>
                            </div>
                            <div class="col-md-2">
                                <label>Arrival</label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control" name="arrivalType" required >
                                        <option value="">Transport Type</option>
                                        <option value="1">Air</option>
                                        <option value="2">Train</option>
                                        <option value="3">Bus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="arrivalPlace" id="arrivalPlace" placeholder="Station name / Location of Arrival" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon" >
                                            <i class="glyphicon glyphicon-time"></i>
                                        </span>
                                        <input id="arrivalTime" name="arrivalTime" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Departure</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="form-control" name="departType" required>
                                                <option value="">Transport Type</option>
                                                <option value="1">Air</option>
                                                <option value="2">Train</option>
                                                <option value="3">Bus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="departName" id="departName" placeholder="Station name / Location of Arrival" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <span class="input-group-addon" >
                                                    <i class="glyphicon glyphicon-time"></i>
                                                </span>
                                                <input id="departTime" name="departTime" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-border">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label> Details of Visiting Elders </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <div class="col-md-3">
                                                    <label>Name (with Title)</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Mobile Number</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>With / Without Family</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>No. of Dependents</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="visName1" id="visName1" placeholder="Enter Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="visNo1" id="visNo1" placeholder="Enter Mobile No" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <select class="form-control"  name="visFamily1" required>
                                                                    <option value="">Select</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="2">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="visEmail1" id="visEmail1" placeholder="Enter Email Id" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-border">
                                                    <div class="row participantsDetails">
                                                        <div class="col-md-12 text-center">
                                                            <div class="form-group">
                                                                <label> Details of Participants</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <div class="col-md-3">
                                                                <label>Name </label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Mobile Number</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <label>Age</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Gender</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>Email ID</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="pName1" id="pName1" placeholder="Enter Your Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="pNo1" id="pNo1" placeholder="Your Mobile No" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="pAge1" id="pAge1" placeholder="Age" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="pSex1" required>
                                                                                    <option value="">Select</option>
                                                                                    <option value="1">Male</option>
                                                                                    <option value="2">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" name="pEmail1" id="pEmail1" placeholder="Enter Email Id" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row ">
                                                                        <div class="col-md-9" ></div>
                                                                        <div class="col-md-1" >
                                                                            <button class="btn btn-info add_field_button">Add More</button>
                                                                        </div>
                                                                        <div></div>
                                                                        <br />
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                                <input type="submit" id="submitButton" class="btn btn-primary" value="Register" >
                                                                </form>
                                                            </div>
   <script type="text/javascript">
        $(document).ready(function() {
            $('#arrivalTime, #departTime').timepicker();
                $("#registerForm").validate({
                    errorPlacement: function(error, element){
                      /* Need to add this function to remove the error default placement */
                    },
                      submitHandler: function(form) {
                        $(form).submit();
                      }
                     });
             $("#submitButton").click(function(e){ 
             
                var datastring = $("#registerForm").serialize();
                console.log(datastring);
            });

    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".participantsDetails"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="col-md-12"><div class="col-md-3"> <div class="form-group"> <input type="text" class="form-control" name="pName1" id="pName1" placeholder="Enter Your Name" required>   </div></div> <div class="col-md-2"> <div class="form-group">      <input type="text" class="form-control" name="pNo1" id="pNo1" placeholder="Your Mobile No" required>  </div></div><div class="col-md-1"> <div class="form-group"><input type="text" class="form-control" name="pAge1" id="pAge1" placeholder="Age" required> </div></div> <div class="col-md-2"> <div class="form-group"><select class="form-control" name="pSex1" required><option value="">Select</option><option value="1">Male</option>     <option value="2">Female</option>   </select>  </div></div>  <div class="col-md-3">    <div class="form-group"> <input type="email" class="form-control" name="pEmail1" id="pEmail1" placeholder="Enter EmailId" required> </div> </div><a href="#" class="remove_field">x</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    </script>