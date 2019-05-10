   	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	function validate_field(field,messege)
	{
		if($('#your_name').val()==""){

		return false;
		
		}
		else return true;
		
	}
	
	$(document).ready(function(){
		
		 
		$("#make_apointment").click(function(){
			var form_validate=false;
var your_name=$('#your_name').val();

if(your_name ==""){  $('.name_error').css("visibility", "visible"); form_validate=false;  return false;} else { form_validate=true; $('.name_error').css("visibility", "hidden");  }

var your_email=$('#your_email').val();
if(your_email ==""){  $('.email_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.email_error').css("visibility", "hidden"); }

var your_phone=$('#your_phone').val();
if(your_phone ==""){  $('.phone_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.phone_error').css("visibility", "hidden"); }


var appointment_department=$('#appointment_department').val();
if(appointment_department ==""){  $('.department_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.department_error').hide(); }
var appointment_doctor=$('#appointment_doctor').val();
if(appointment_doctor ==""){  $('.doctor_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.doctor_error').css("visibility", "hidden"); }

var appointment_date=$('#appointment_date').val();
if(appointment_date ==""){  $('.date_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.date_error').css("visibility", "hidden"); }

if(form_validate){

 $.post("<?php bloginfo('template_url');?>/sendmail.php", {your_name:your_name,your_phone:your_phone,your_email:your_email,appointment_department:appointment_department,appointment_doctor:appointment_doctor,appointment_date:appointment_date}, function(result){
	 if(result=="Tehre is some issue please try again!")
	 {	
		$("#error_message").html("");
		$("#error_message").html(result);
		
		//$(".close").click();
		
		}
	else{
		$("#error_message").html("");
		$(".modal-body").hide();
		$("#error_message").html(result);
		setTimeout(function(){ $(".close").click();}, 5000);
		
		
	}
		
		
}); }
		});
		
		
	});
	</script> <div id="appointment" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Make An Appointment1</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
					<span id="error_message"></span>
                </div>
                <div class="modal-body">
                    <div class="appointment-error"></div>
                    <div class="row">
					
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-user-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" name="your_name"  id="your_name">
                                <label class="mdl-textfield__label"   for="appointment-name">Name</label>
                                <span class="mdl-textfield__error name_error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-envelope-o"></i>
                                <input class="mdl-textfield__input"  name="your_email" id="your_email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                <label class="mdl-textfield__label" for="appointment-email">Email</label>
                                <span class="mdl-textfield__error email_error">Please Enter Valid Email!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-phone"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[0-9]*" name="your_phone"  id="your_phone">
                                <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error phone_error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-hospital-o"></i>
                                <select class="mdl-selectfield__select" name="appointment_department" id="appointment_department">
                                    <option value=""></option>
                                    <option value="Gynaecology">Gynaecology</option>
                                    <option value="Orthology">Orthology</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Anaesthesia">Anaesthesia</option>
                                    <option value="Ayurvedic">Ayurvedic</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-department">Choose Department</label>
								 <span class="mdl-textfield__error department_error">Please Select Department!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-user-md"></i>
                                <select class="mdl-selectfield__select" name="appointment_doctor" id="appointment_doctor">
                                    <option value=""></option>
                                    <option value="Dr. Daniel Barnes">Dr. Daniel Barnes</option>
                                    <option value="Dr. Steve Soeren">Dr. Steve Soeren</option>
                                    <option value="Dr. Barbara Baker">Dr. Barbara Baker</option>
                                    <option value="Dr. Melissa Bates">Dr. Melissa Bates</option>
                                    <option value="Dr. Linda Adams">Dr. Linda Adams</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor</label>
								 <span class="mdl-textfield__error doctor_error">Please Select Department!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-calendar-o"></i>
                                <input class="mdl-textfield__input" type="text" name="appointment_date" id="appointment_date" onfocus="(this.type='date')" onblur="(this.type='text')">
                                <label class="mdl-textfield__label" for="appointment-date">Date</label>
                                <span class="mdl-textfield__error date_error">Please Enter Valid Date Number!</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button id="make_apointment" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg make-appointment">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Make an Appointment Modal -->
   
