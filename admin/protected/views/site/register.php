    
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/resource/bower_components/jquery/dist/jquery.validate.min.js"></script>
 <script src="<?php echo Yii::app()->request->baseUrl; ?>/resource/dist/js/bootstrap-timepicker.min.js"></script>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/resource/dist/css/bootstrap-timepicker.min.css" rel="stylesheet">
<div class="center wow fadeInDown">
    <h2>Register Here</h2>
    <br />
    <form role="form" id="registerForm" name="registerForm" novalidate="novalidate">
        <div class="box-border">
            <div class="row">
                <div class="col-md-2">
                    <label>Vicar</label>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="vicarName" id="vicarName" placeholder="Enter Your Name" value="<?= $users['vicarName'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="vicarNo" id="vicarNo" placeholder="Enter Mobile No"  value="<?= $users['vicarNo'] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="vicarEmail" id="vicarEmail" placeholder="Enter Email Id"  value="<?= $users['vicarEmail'] ?>" required>
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
                        <input type="text" class="form-control" name="youthName" id="youthName" placeholder="Enter Your Name"  value="<?= $users['youthName'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="youthNo" id="youthNo" placeholder="Enter Mobile No"  value="<?= $users['youthNo'] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="youthEmail" id="youthEmail" placeholder="Enter Email Id"  value="<?= $users['youthEmail'] ?>" required>
                                </div>
                            </div>
                        </div>
                    </div><br />

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
                                        <option <?= ($transport['arrivalType'] == 0)?'selected="selected"':"" ?> value="0">Transport Type</option>
                                        <option <?= ($transport['arrivalType'] == 1)?'selected="selected"':"" ?> value="1">Air</option>
                                        <option <?= ($transport['arrivalType'] == 2)?'selected="selected"':"" ?> value="2">Train</option>
                                        <option <?= ($transport['arrivalType'] == 3)?'selected="selected"':"" ?> value="3">Bus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="arrivalPlace" id="arrivalPlace"  value="<?= $transport['arrivalPlace'] ?>" placeholder="Station name / Location of Arrival" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon" >
                                            <i class="glyphicon glyphicon-time"></i>
                                        </span>
                                        <input id="arrivalTime" name="arrivalTime" type="text"  value="<?= $transport['arrivalTime'] ?>" class="form-control">
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
                                                <option <?= ($transport['departType'] == 0)?'selected="selected"':"" ?> value="0">Transport Type</option>
                                                <option <?= ($transport['departType'] == 1)?'selected="selected"':"" ?>  value="1">Air</option>
                                                <option <?= ($transport['departType'] == 2)?'selected="selected"':"" ?>  value="2">Train</option>
                                                <option <?= ($transport['departType'] == 3)?'selected="selected"':"" ?>  value="3">Bus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="departName" id="departName" value="<?= $transport['departPlace'] ?>"  placeholder="Station name / Location of Arrival" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <span class="input-group-addon" >
                                                    <i class="glyphicon glyphicon-time"></i>
                                                </span>
                                                <input id="departTime" name="departTime" type="text" value="<?= $transport['departTime'] ?>"  class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />

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
                                                <div class="col-md-2">
                                                    <label>No. of Childs</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>No. of Adults</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="visName1" id="visName1"  value="<?= $transport['visitorName'] ?>"  placeholder="Enter Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="visNo1" id="visNo1"  value="<?= $transport['visitorNo'] ?>"  placeholder="Enter Mobile No" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <select class="form-control"  name="visFamily1" required>
                                                                    <option <?= ($transport['visitorFamily'] == "")?'selected="selected"':"" ?>  value="">Select</option>
                                                                    <option <?= ($transport['visitorFamily'] == "Yes")?'selected="selected"':"" ?>  value="Yes">Yes</option>
                                                                    <option <?= ($transport['visitorFamily'] == "No")?'selected="selected"':"" ?>  value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="noChilds">
                                                                                    <option <?= ($transport['noChilds'] == "0")?'selected="selected"':"" ?>  value="0">0</option>
                                                                                    <option <?= ($transport['noChilds'] == "1")?'selected="selected"':"" ?> value="1">1</option>
                                                                                    <option <?= ($transport['noChilds'] == "2")?'selected="selected"':"" ?> value="2">2</option>
                                                                                    <option <?= ($transport['noChilds'] == "3")?'selected="selected"':"" ?> value="3">3</option>
                                                                                    <option <?= ($transport['noChilds'] == "4")?'selected="selected"':"" ?> value="4">4</option>
                                                                                </select>
                                                                               </div>
                                                                        </div>
                                                                           <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <select class="form-control"  name="noAdults">
                                                                                    <option <?= ($transport['noAdults'] == "0")?'selected="selected"':"" ?> value="0">0</option>
                                                                                    <option <?= ($transport['noAdults'] == "1")?'selected="selected"':"" ?>  value="1">1</option>
                                                                                    <option <?= ($transport['noAdults'] == "2")?'selected="selected"':"" ?>  value="2">2</option>
                                                                                    <option <?= ($transport['noAdults'] == "3")?'selected="selected"':"" ?>  value="3">3</option>
                                                                                    <option <?= ($transport['noAdults'] == "4")?'selected="selected"':"" ?>  value="4">4</option>
                                                                                </select>
                                                                               </div>
                                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />

                                                <input type="submit" id="submitButton" class="btn btn-primary" value="Save" >
                                                 </form>
                                        <form role="form" id="partRegister" name="partRegister" novalidate="novalidate">
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
                                                        <?php
                                                            foreach ($participants as $key => $value) { 
                                                                ?>
                                                                                   <div class="col-md-12">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="pName1" id="pName1" value="<?= $value[0] ?>" placeholder="Enter Your Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <input type="tel" class="form-control"  pattern="[0-9]{10}" name="pNo1" id="pNo1" value="<?= $value[1] ?>" placeholder="Your Mobile No" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="pAge1" id="pAge1" value="<?= $value[2] ?>" placeholder="Age" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <select class="form-control" name="pSex1" required>
                                                                                    <option <?= ($value[3] == "")?'selected="selected"':"" ?>  value="">Select</option>
                                                                                    <option <?= ($value[3] == "Male")?'selected="selected"':"" ?>  value="Male">Male</option>
                                                                                    <option <?= ($value[3] == "Female")?'selected="selected"':"" ?>  value="Female">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" name="pEmail1" id="pEmail1" value="<?= $value[4] ?>" placeholder="Enter Email Id" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                       <?php     }
                                                         ?> 
                                    
                                                                    </div>
                                                                    <div class="row ">
                                                                        <div class="col-md-9" ></div>
                                                                        <div class="col-md-1" >
                                                                          <input type="submit" id="partSubmit" class="btn btn-info add_field_button" value="Add Participants" >
                                                                            </div>
                                                                        <div></div>
                                                                        <br />
                                                                        <br />
                                                                    </div>
                                                                </div>
                                                                  <br />
                                                                     
                                                <input type="submit" id="partSubmit" class="btn btn-primary" value="Submit" >
                                                              </form>  
                                                               
                                                            </div>
   <script type="text/javascript">
        $(document).ready(function() {
            $('#arrivalTime, #departTime').timepicker();
             $("#partRegister").validate({
                   rules: {
                        pName: {
                            number:true,
                            minlength:10,
                        },
                       pEmail: {
                            required: true,
                            email: true
                        },
                       pNo: {
                            number:true,
                            minlength:10,
                        },
                       pAge: {
                           number:true,
                        },

                    },
                errorPlacement: function(error, element){
                    },
                      submitHandler: function(form) {
                       partSubmit();
                      }
             });
             function partSubmit(){
                      // var datastring = $("#registerForm").serialize();
            var data = JSON.stringify($("#partRegister").serializeArray());
            console.log(data);
             $.ajax({
                url: "partDetails",
                method: "POST",
                data: {datastring:data },
                dataType:JSON,
                 success: function(result){
                     $("body").html(result);
                }
            });
             }
               $("#registerForm").validate({
                     rules: {
                        vicarNo: {
                            number:true,
                            minlength:10,
                        },
                       vicarEmail: {
                            required: true,
                            email: true
                        },
                       youthNo: {
                            number:true,
                            minlength:10,
                        },
                       youthEmail: {
                            required: true,
                            email: true
                        },
                         visNo1: {
                            number:true,
                            minlength:10,
                        },
                    },
                    errorPlacement: function(error, element){
                    },
                      submitHandler: function(form) {
                       submitBasic();
                      }
                     });    
        function submitBasic(){
             // var datastring = $("#registerForm").serialize();
            var data = JSON.stringify($("#registerForm").serializeArray());
            console.log(data);
             $.ajax({
                url: "RegisterDetails",
                method: "POST",
                data: {datastring:data },
                dataType:JSON,
                 success: function(result){
                     $("body").html(result);
                }
            });
        }

    var max_fields      = 40; //maximum input boxes allowed
    var wrapper         = $(".participantsDetails"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
         if($("#partRegister" ).valid()){
              partSubmit();
              e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="col-md-12"><div class="col-md-3"> <div class="form-group"> <input type="text" class="form-control" name="pName'+x+'" id="pName'+x+'" placeholder="Enter Your Name" required>   </div></div> <div class="col-md-2"> <div class="form-group">      <input type="text" class="form-control" name="pNo'+x+'" id="pNo'+x+'" placeholder="Your Mobile No" required>  </div></div><div class="col-md-1"> <div class="form-group"><input type="text" class="form-control" name="pAge'+x+'" id="pAge'+x+'" placeholder="Age" required> </div></div> <div class="col-md-2"> <div class="form-group"><select class="form-control" name="pSex'+x+'" required><option value="">Select</option><option value="1">Male</option>     <option value="2">Female</option>   </select>  </div></div>  <div class="col-md-3">    <div class="form-group"> <input type="email" class="form-control" name="pEmail'+x+'" id="pEmail'+x+'" placeholder="Enter EmailId" required> </div> </div><a href="#" class="remove_field">x</a></div>'); //add input box
                }
        }
      
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
          partSubmit();
    })
});
    </script>