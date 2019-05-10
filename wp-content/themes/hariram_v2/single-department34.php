<?php get_header(); ?>
    <!-- Start Doctor List Section -->
    <div id="doctor-page" class="layer-stretch">
        <div class="layer-wrapper layer-bottom-10">
            <div class="row">
                <div class="col-lg-8">
                    <div class="theme-material-card">
					
							 <?php if ( have_posts() ) : ?>
					 <?php while ( have_posts() ) : the_post(); ?>
					 
					 
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="theme-img theme-img-scalerotate">
                                    <?php the_post_thumbnail('full');?>
                                </div>
                            </div>
							
							
                            <div class="col-sm-8">
                                <div class="doctorp-name">
                                    <h3><?php the_title();?></h3>
                                    <span class="badge badge-primary">Head of Department</span>
                                    <p>Orthologist Specilist</p>
                                    <div class="doctorp-social">
                                        <ul class="social-list social-list-bordered">
                                            <li>
                                                <a href="#" id="sample-facebook-6" class="fa fa-facebook rounded"></a>
                                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-facebook-6">Facebook</span>
                                            </li>
                                            <li>
                                                <a href="#" id="sample-twitter-6" class="fa fa-twitter rounded"></a>
                                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-twitter-6">Twitter</span>
                                            </li>
                                            <li>
                                                <a href="#" id="sample-instagram-6" class="fa fa-instagram rounded"></a>
                                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-instagram-6">Instagram</span>
                                            </li>
                                            <li>
                                                <a href="#" id="sample-youtube-6" class="fa fa-youtube rounded"></a>
                                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-youtube-6">Youtube</span>
                                            </li>
                                            <li>
                                                <a href="#" id="sample-linkedin-6" class="fa fa-linkedin rounded"></a>
                                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="sample-linkedin-6">Linkedin</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="doctor-details-extra text-left p-0 pt-4">
                                    <p class="text-center"><i class="fa fa-trophy"></i>8 Awards</p>
                                    <p class="text-center"><i class="fa fa-star"></i>17 year Experience</p>
                                    <p class="text-center"><i class="fa fa-money"></i>Charges: $100</p>
                                </div>
                            </div>
                            <p class="text-muted p-4 m-0 pb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit minus, modi adipisci nesciunt, illum atque temporibus cupiditate blanditiis quo illo cumque doloribus laborum rem neque dolorum, ipsa officiis fugiat expedita.Perspiciatis facere magnam reiciendis modi ratione asperiores fugit minus dolores dignissimos cum.</p>
                            <div class="col-md-5">
                                <div class="sub-ttl font-20 pt-4">Skill & Achievments</div>
                                <div class="doctor-skills">
                                    <p class="font-14">Brain Surgery <span class="badge badge-primary float-right">75%</span></p>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="doctor-skills">
                                    <p class="font-14">Heart Surgery <span class="badge badge-danger float-right">65%</span></p>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="doctor-skills">
                                    <p class="font-14">Trauma Surgery <span class="badge badge-success float-right">80%</span></p>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="doctor-skills">
                                    <p class="font-14">General Surgery <span class="badge badge-warning float-right">87%</span></p>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="doctor-skills">
                                    <p class="font-14">Weekly Consultancy <span class="badge badge-primary float-right">55%</span></p>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="sub-ttl pt-4 font-20">Academic Training</div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="">
                                            <th>Degree</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bachelor of Medicine(BM)</td>
                                            <td><span class="badge badge-danger badge-pill">Dec 1991</span></td>
                                        </tr>
                                        <tr>
                                            <td>Doctor of Medicine(MD)</td>
                                            <td><span class="badge badge-info badge-pill">Apr 1996</span></td>
                                        </tr>
                                        <tr>
                                            <td>Doctor of Osteopathic Medicine</td>
                                            <td><span class="badge badge-success badge-pill">Oct 1998</span></td>
                                        </tr>
                                        <tr>
                                            <td>Master of Surgery</td>
                                            <td><span class="badge badge-danger badge-pill">May 2001</span></td>
                                        </tr>
                                        <tr>
                                            <td>Doctor of Clinical Surgery</td>
                                            <td><span class="badge badge-warning badge-pill">Feb 2004</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="theme-quote">
                                <i class="fa fa-quote-left"></i> Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos.
                            </div>
                       





					   </div>
                    
						<?php endwhile; ?>
						  <?php endif; ?>
					
					</div>
                </div>
                <div class="col-lg-4">
                    <div class="theme-material-card">
                        <div class="sub-ttl">Services</div>
                        <ul class="category-list">
                            <li><a href="#"><i class="fa fa-stethoscope"></i>Cardiovascular centre</a></li>
                            <li><a href="#"><i class="fa fa-child"></i>Childbirth Center</a></li>
                            <li><a href="#"><i class="fa fa-heartbeat"></i>Cardiology</a></li>
                            <li><a href="#"><i class="fa fa-wheelchair-alt"></i>Skin Care</a></li>
                            <li><a href="#"><i class="fa fa-flask"></i>Laboratory Services</a></li>
                            <li><a href="#"><i class="fa fa-certificate"></i>Mammography</a></li>
                            <li><a href="#"><i class="fa fa-h-square"></i>Dermatologist</a></li>
                        </ul>
                    </div>
                    <div class="theme-material-card">
                        <div class="sub-ttl">Time Table</div>
                        <ul class="timetable">
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Mon</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Tue</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Wed</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Thu</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Fri</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Sat</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>
                            <li><a class="pull-left"><i class="fa fa-calendar"></i>Sun</a><a class="pull-right">Holiday</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="theme-material-card">
                <div class="sub-ttl">Related Doctors</div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="theme-block">
                            <div class="theme-block-picture doctor-picture-2">
                                <img src="uploads/doctor-1.jpg" alt="">
                            </div>
                            <div class="doctor-name doctor-name-2">
                                <h4><a>Daniel Barnes</a></h4>
                            </div>
                            <div class="theme-block-hidden">
                                <div class="doctor-name">
                                    <h4><a>Daniel Barnes</a></h4>
                                </div>
                                <div class="doctor-details">
                                    <div class="doctor-specility">
                                        <p>Orthologist</p>
                                    </div>
                                    <div class="doctor-details-extra">
                                        <p><i class="fa fa-shield"></i>CEO &amp; Founder</p>
                                        <p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
                                        <p><i class="fa fa-trophy"></i>Awards: 8</p>
                                        <p><i class="fa fa-star"></i>Experience: 17 year</p>
                                    </div>
                                </div>
                                <div class="doctor-social">
                                    <ul class="social-list social-list-bordered social-list-rounded">
                                        <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-google"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="theme-block">
                            <div class="theme-block-picture doctor-picture-2">
                                <img src="uploads/doctor-2.jpg" alt="">
                            </div>
                            <div class="doctor-name doctor-name-2">
                                <h4><a>Melissa Bates</a></h4>
                            </div>
                            <div class="theme-block-hidden">
                                <div class="doctor-name">
                                    <h4><a>Melissa Bates</a></h4>
                                </div>
                                <div class="doctor-details">
                                    <div class="doctor-specility">
                                        <p>Gynocologist</p>
                                    </div>
                                    <div class="doctor-details-extra">
                                        <p><i class="fa fa-shield"></i>C00s</p>
                                        <p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
                                        <p><i class="fa fa-trophy"></i>Awards: 5</p>
                                        <p><i class="fa fa-star"></i>Experience: 9 year</p>
                                    </div>
                                </div>
                                <div class="doctor-social">
                                    <ul class="social-list social-list-bordered social-list-rounded">
                                        <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-google"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="theme-block">
                            <div class="theme-block-picture doctor-picture-2">
                                <img src="uploads/doctor-3.jpg" alt="">
                            </div>
                            <div class="doctor-name doctor-name-2">
                                <h4><a>Cheri Aria</a></h4>
                            </div>
                            <div class="theme-block-hidden">
                                <div class="doctor-name">
                                    <h4><a>Cheri Aria</a></h4>
                                </div>
                                <div class="doctor-details">
                                    <div class="doctor-specility">
                                        <p>Dermatologist</p>
                                    </div>
                                    <div class="doctor-details-extra">
                                        <p><i class="fa fa-shield"></i>Intern</p>
                                        <p><i class="fa fa-mortar-board"></i>MBBS, MD</p>
                                        <p><i class="fa fa-trophy"></i>Awards: 12</p>
                                        <p><i class="fa fa-star"></i>Experience: 6 year</p>
                                    </div>
                                </div>
                                <div class="doctor-social">
                                    <ul class="social-list social-list-bordered social-list-rounded">
                                        <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-google"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
                                        <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Doctor List Section -->
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
  <?php include('popup_form.php');?>
	
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
    <!-- Start Footer Section -->
   <?php get_footer();?>