<?php 
/*
Template Name:Services
*/
?>
   <?php get_header(); ?>
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

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array('post_type' => 'service','showposts' => '8');$i=1;
				
									
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?> 	
			   <div class="col-md-6 col-lg-4">
                    <div class="theme-block">
                        <div class="theme-block-picture">
                            <img src="<?php bloginfo('template_url');?>/uploads/service-9.jpg" alt="">
							<?php //the_post_thumbnail('service-image-loop');?>
                        </div>
                        <div class="theme-block-data service-block-data">
                            <div class="service-icon"><i class="fa fa-stethoscope"></i></div>
                            <h4><a><?php the_title();?></a></h4>
                        </div>
                        <div class="theme-block-hidden service-hidden-block">
                            <i class="fa fa-stethoscope"></i>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p class="service-description paragraph-small paragraph-black">
                                <span><?php the_content_limit(250,"");?></span>
                                <a href="<?php the_permalink();?>">(Read More)</a>
                            </p>
                        </div>
                    </div>
                </div>
            
            	 <?php endwhile; ?>  
		 <?php endif; ?>
		 </div>
		  <?php
							$big = 999999999; // need an unlikely integer
							$pages = paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $the_query->max_num_pages,
								'type'  => 'array',
							) );
							if( is_array( $pages ) ) {
								$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
								echo '<ul class="theme-pagination">';
								foreach ( $pages as $page ) {
										echo "<li>$page</li>";
								}
							   echo '</ul>';
								}	
						?>
            <!--ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
				
            </ul-->
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
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-calendar"></i></div>
                        <span>24 hour Service</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-cloud"></i></div>
                        <span>Advanced Technology</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-ambulance"></i></div>
                        <span>Ambulance</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-stethoscope"></i></div>
                        <span>Primary health care</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-shopping-bag"></i></div>
                        <span>Pharmacies and drug stores</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-hospital-o"></i></div>
                        <span>Laboratory and research</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
                    </div>
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-user-md"></i></div>
                        <span>Medical nursing home</span>
<!--                         <p class="paragraph-small paragraph-white">Mel in hinc veri admodum, copiosae epicurei mea ei. Cum at nisl soleat. Eam insolens referrentur efficiantur an. Nibh deleniti ad vix, quodsi aliquam legendos pri in.</p> -->
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
<?php get_footer();?>