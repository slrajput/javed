  <?php get_header(); ?> <!-- Start Page Title Section -->
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Services</h1>
                <p><a href="#">Home</a> &#8594; <span>Services</span></p>
            </div>
        </div> 
    </div><!-- End Page Title Section -->
    <!-- Start Service List Section --> 
    <div id="service-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="row">
			
			 <?php if ( have_posts() ) : ?>
					 <?php while ( have_posts() ) : the_post(); ?>
			
			
                <div class="col-md-6 col-lg-4">
                    <div class="theme-block">
                        <div class="theme-block-picture">
                            <img src="uploads/service-1.jpg" alt="">
                        </div>
                        <div class="theme-block-data service-block-data">
                            <div class="service-icon"><i class="fa fa-stethoscope"></i></div>
                            <h4><a><?php the_title(); ?></a></h4>
                        </div>
                        <div class="theme-block-hidden service-hidden-block">
                            <i class="fa fa-stethoscope"></i>
                            <h4><a><?php the_title(); ?></a></h4>
                            <p class="service-description paragraph-small paragraph-black">
                                <span><?php the_content_limit(550,"");?></span>
                                <a href="<?php the_permalink();?>">(Read More)</a>
                            </p>
                        </div>          
                    </div>
                </div>
                
			
			<?php endwhile; ?>
						  <?php endif; ?>
			
				
				
            </div>
            
			
			 <div id="pagination">
                              
                              <div>
                          		 <?php
						  global $wp_query;
						  $big=999999999;
						  echo paginate_links(array(
						  'base'=>str_replace($big,'%#%',get_pagenum_link($big)),
						  'format'=>'?paged=%#%',
						  'current'=>max(1,get_query_var('paged')),
						  'total'=>$wp_query->max_num_pages
						  ));
						  ?>
                          </div>
                         </div><!-- close pagination -->
						 
            <!--ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
            </ul--->
        </div>
    </div><!-- End Service List Section -->
    <!-- Start Feature List Section -->
    <div class="parallax-background parallax-background-1">
        <div class="layer-stretch">
            <div class="layer-wrapper layer-bottom-10 text-center">
                <div class="layer-ttl layer-ttl-white">
                    <h3>Why Choose Us</h3>
                </div>
                <div class="layer-container">
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-phone"></i></div>
                        <span>Emergency Departments</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-calendar"></i></div>
                        <span>24 hour Service</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-cloud"></i></div>
                        <span>Advanced Technology</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-ambulance"></i></div>
                        <span>Ambulance</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-stethoscope"></i></div>
                        <span>Primary health care</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-shopping-bag"></i></div>
                        <span>Pharmacies and drug stores</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-hospital-o"></i></div>
                        <span>Laboratory and research</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-user-md"></i></div>
                        <span>Medical nursing home</span>
                        <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Feature List Section -->
    <!-- Start Emergency Section -->
    <div id="emergency">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl">
                    <h3>On Emergency</h3>
                </div>
                <div class="layer-container">
                    <div class="paragraph-medium paragraph-black">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.
                    </div>
                    <div class="emergency-number">Call : 0000000000</div>
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
       <!-- Start Footer Section -->
    <footer id="footer">
        <div class="layer-stretch">
            <!-- Start main Footer Section -->
            <div class="row layer-wrapper">
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl"><p>Basic Info</p></div>
                    <div class="footer-container footer-a">
                        <div class="tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">
                                        Bypass road Bhiwadi <br> 
										Rajasthan 301019
                                    </p>
                                </div>
                            </div>
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">094140 13800</p>
                                </div>
                            </div>
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">info@hariramhospital.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl"><p>Quick Links</p></div>
                    <div class="footer-container footer-b">
                        <div class="tbl">
                            <div class="tbl-row">
                                <ul class="tbl-cell">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                    <li><a href="terms-conditions.html">Terms condition</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                </ul>
                                <ul class="tbl-cell">
                                    <li><a href="doctors.html">Doctors</a></li>
                                    <li><a href="departments-1.html">Departments</a></li>
                                    <li><a href="blogs-main.html">Blog</a></li>
                                    <li><a href="myappointment.html">Appointment</a></li>
                                    <li><a href="index.html">News</a></li>
                                    <li><a href="index.html">Career</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl"><p>Newsletter</p></div>
                    <div class="footer-container footer-c">
                        <div class="footer-subscribe">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                <label class="mdl-textfield__label" for="subscribe-email">Your Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                            </div>
                            <div class="footer-subscribe-button">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
                            </div>
                        </div>
                        <ul class="social-list social-list-colored footer-social">
                            <li>
                                <a href="#" target="_blank" id="footer-facebook" class="fa fa-facebook"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span>
                            </li>
                            <li>
                                <a href="#" target="_blank" id="footer-twitter" class="fa fa-twitter"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-twitter">Twitter</span>
                            </li>
                            <li>
                                <a href="#" target="_blank" id="footer-google" class="fa fa-google"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-google">Google</span>
                            </li>
<!--
                            <li>
                               <a href="#" target="_blank" id="footer-instagram" class="fa fa-instagram"></a>
                               <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span>
                            </li>
-->
                            <li>
                                <a href="#" target="_blank" id="footer-youtube" class="fa fa-youtube"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-youtube">Youtube</span>
                            </li>
<!--
                            <li>
                                <a href="#" target="_blank" id="footer-linkedin" class="fa fa-linkedin"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-linkedin">Linkedin</span>
                            </li>
-->
<!--
                            <li>
                               <a href="#" target="_blank" id="footer-flickr" class="fa fa-flickr"></a>
                               <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-flickr">Flickr</span>
                            </li>
-->
                            <li>
                                <a href="#" target="_blank" id="footer-rss" class="fa fa-rss"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-rss">Rss</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End main Footer Section -->
        <!-- Start Copyright Section -->
<!--
        <div id="copyright">
            <div class="layer-stretch">
                <div class="paragraph-medium paragraph-white">2017 © Pepdev ALL RIGHTS RESERVED.</div>
            </div>
        </div> End of Copyright Section 
-->
    </footer><!-- End of Footer Section -->

    <!-- **********Included Scripts*********** -->

    <!-- Jquery Library 2.1 JavaScript-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Popper JavaScript-->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="js/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="js/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="js/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="js/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="js/jquery.counterup.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="js/smoothscroll.min.js"></script>
    <!--Custom JavaScript for Klinik Template-->
    <script src="js/custom.js"></script>
</body>
</html>