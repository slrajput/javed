<?php 
/*
Template Name:Contact Us
*/
?>
<?php get_header(); ?>
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Contact Us</h1>
                <p><a href="#">Home</a> &#8594; <span>Contact Us</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Contact Detail Section -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	
	$(document).ready(function(){
		
		 
		$("#submit_form").click(function(){
			var form_validate=false;
var contact_name=$('#contact_name').val();

if(contact_name ==""){  $('.contact_name_error').css("visibility", "visible"); form_validate=false;  return false;} else { form_validate=true; $('.contact_name_error').css("visibility", "hidden");  }

var contact_mobile=$('#contact_mobile').val();
if(contact_mobile ==""){  $('.contact_mobile_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.contact_mobile_error').css("visibility", "hidden"); }


var contact_email=$('#contact_email').val();
if(contact_email ==""){  $('.contact_email_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.contact_email_error').hide(); }

var contact_subject=$('#contact_subject').val();
if(contact_subject ==""){  $('.contact_subject_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.contact_subject_error').css("visibility", "hidden"); }


var contact_message=$('#contact_message').val();
if(contact_message ==""){  $('.contact_message_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.contact_message_error').css("visibility", "hidden"); }


if(form_validate){

 $.post("<?php bloginfo('template_url');?>/contact_us.php", {contact_name:contact_name,contact_mobile:contact_mobile,contact_email:contact_email,contact_subject:contact_subject,contact_message:contact_message}, function(result){
	 if(result=="Tehre is some issue please try again!")
	 {	
		$("#contact_us_error_message").html("");
		$("#contact_us_form").hide();
		
		
		$("#contact_us_error_message").html(result);
		
		//$(".close").click();
		
		}
	else{
		$("#contact_us_error_message").html("");
		$("#contact_us_form").hide();
		$("#contact_us_error_message").html(result);
		setTimeout(function(){ $(".close").click();}, 5000);
		
		
	}
		
		
}); }
		});
		
		
	});
	</script>
    <div id="contact-page" class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3 contact-info-block">
                    <div class="contact-info-inner">
                        <i class="fa fa-plus-square-o"></i>
                        <span>APPOINTMENT</span>
                        <p class="paragraph-medium paragraph-black">94140 13800</p>
                        <p>info@hariramhospital.com</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 contact-info-block">
                    <div class="contact-info-inner">
                        <i class="fa fa-phone"></i>
                        <span>Call Us</span>
                        <p class="paragraph-medium paragraph-black">94140 13800</p>
						<!-- <p>Text</p> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 contact-info-block">
                    <div class="contact-info-inner">
                        <i class="fa fa-envelope"></i>
                        <span>Email Us</span>
                        <p class="paragraph-medium paragraph-black">info@hariramhospital.com</p>
						<!-- <p>support@yourdomain.com </p> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 contact-info-block">
                    <div class="contact-info-inner">
                        <i class="fa fa-map-marker"></i>
                        <span>Location</span>
                        <p class="paragraph-medium paragraph-black">Bypass road Bhiwadi</p>
                        <p class="paragraph-medium paragraph-black">Rajasthan, 301019</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Detail Section -->
    <!-- Start Request Form Section -->
    <div id="contact_form" class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl"><h3>Make a Request</h3></div>
			<div id="contact_us_error_message"></div>
            <div id="contact_us_form" class="contact-form row text-center">
                <div class="col-md-4">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input id="contact_name" id="contact_name" class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*">
                        <label class="mdl-textfield__label" for="contact-name">Your Name</label>
                        <span class="contact_name_error mdl-textfield__error">Please Enter Valid Name!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="contact_email" name="contact_email">
                        <label class="mdl-textfield__label" for="contact-email">Your Email</label>
                        <span class="contact_email_error mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-phone"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="contact_mobile" id="contact_mobile"> 
                        <label class="mdl-textfield__label" for="contact-mobile">Your Mobile Number</label>
                        <span class="contact_mobile_error mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-rocket"></i>
                        <input class="mdl-textfield__input" type="text" id="contact_subject" name="contact_subject">
                        <label class="mdl-textfield__label" for="contact-subject">Your Subject</label>
                        <span class="contact_subject_error mdl-textfield__error">Please Enter Subject Related to Your Query!</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-paper-plane"></i>
                        <textarea class="mdl-textfield__input" id="contact_message" name ="contact_message" ></textarea>
                        <label class="mdl-textfield__label" for="contact-message">Your Request</label>
                        <span class="contact_message_error mdl-textfield__error">Please Enter Your Query!</span>
                    </div>
                </div>
                <div class="col-md-12 contact-error">

                </div>
                <div class="col-md-12">
                    <div class="form-submit">
                        <button id="submit_form" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary contact-submit">Submit your Query</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Request Form Section -->
    <!-- Start Google Map Section -->
    <div id="map">
        <div class="map-wrapper">
            <div id="map-container"></div>
        </div>
        <div class="map-address">
            <div class="map-icon"><i class="fa fa-map-marker"></i></div>
            <div class="map-address-ttl">Our Location</div>
            <div class="paragraph-medium paragraph-black">Bypass Road Bhiwadi Rajasthan 301019</div>
        </div>
    </div><!-- End Google Map Section -->
    <!-- Start Emergency Section -->
    <div id="emergency">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl">
                    <h3>On Emergency</h3>
                </div>
                <div class="layer-container">
                    <div class="paragraph-medium paragraph-black">
                      24x7 Service Available
                    </div>
                    <div class="emergency-number">Call : 094140 13800</div>
                </div>
            </div>
        </div>
    </div><!-- End Emergency Section -->
    <!-- Start Make an Appointment Modal -->
    <div id="appointment" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Make An Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="appointment-error"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-user-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="appointment-name">
                                <label class="mdl-textfield__label" for="appointment-name">Name</label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-envelope-o"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="appointment-email">
                                <label class="mdl-textfield__label" for="appointment-email">Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-phone"></i>
                                <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="appointment-mobile">
                                <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number</label>
                                <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-hospital-o"></i>
                                <select class="mdl-selectfield__select" id="appointment-department">
                                    <option value="">&nbsp;</option>
                                    <option value="1">Gynaecology</option>
                                    <option value="2">Orthology</option>
                                    <option value="3">Dermatologist</option>
                                    <option value="4">Anaesthesia</option>
                                    <option value="5">Ayurvedic</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-department">Choose Department</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                <i class="fa fa-user-md"></i>
                                <select class="mdl-selectfield__select" id="appointment-doctor">
                                    <option value="">&nbsp;</option>
                                    <option value="1">Dr. Daniel Barnes</option>
                                    <option value="2">Dr. Steve Soeren</option>
                                    <option value="3">Dr. Barbara Baker</option>
                                    <option value="4">Dr. Melissa Bates</option>
                                    <option value="5">Dr. Linda Adams</option>
                                </select>
                                <label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-calendar-o"></i>
                                <input class="mdl-textfield__input" type="text" id="appointment-date" onfocus="(this.type='date')" onblur="(this.type='text')">
                                <label class="mdl-textfield__label" for="appointment-date">Date</label>
                                <span class="mdl-textfield__error">Please Enter Valid Date Number!</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg make-appointment">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Make an Appointment Modal -->
    <!-- Start Login Modal -->
    <div id="loginpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Login Now</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>    
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="loginpopup-email">
                        <label class="mdl-textfield__label" for="loginpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="loginpopup-password">
                        <label class="mdl-textfield__label" for="loginpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password!</span>
                        <div class="forgot-pass">Forgot Password?</div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                        <i class="fa fa-question"></i>
                        <input class="mdl-textfield__input" type="number" id="loginpopup-bot">
                        <label class="mdl-textfield__label" for="loginpopup-bot">What is 7 plus 1 = <em>* </em></label>
                        <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                    </div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Login Now</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Don't have an account?</span>
                        <a href="#" class="">Register as New User</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Login Modal -->
    <!-- Start Register Modal -->
    <div id="registerpopup" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Register as New User</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="registerpopup-name">
                        <label class="mdl-textfield__label" for="registerpopup-name">Name <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="registerpopup-email">
                        <label class="mdl-textfield__label" for="registerpopup-email">Email <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" id="registerpopup-password">
                        <label class="mdl-textfield__label" for="registerpopup-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                    </div>
                    <div class="login-condition">By clicking Creat Account you agree to our <a href="#">terms &#38; condition</a></div>
                    <div class="form-submit">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Create Account</button>
                    </div>
                    <div class="or-using">Or Using</div>
                    <div class="social-login">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-google"><i class="fa fa-google"></i>Google</a>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Already have an account?</span>
                        <a href="#" class="">Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Register Modal -->
    <!-- Fixed Appointment Button at Bottom -->
    <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom -->
    <?php get_footer();?>