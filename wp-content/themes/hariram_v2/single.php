<?php get_header(); ?>
	 <?php if ( have_posts() ) : ?>
					 <?php while ( have_posts() ) : the_post(); ?>
  <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1><?php the_title();?></h1>
                <!--p><a href="#">Home</a> &#8594; <a href="#">Services</a> &#8594; <span>Skin Care</span></p-->
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Service Section -->
    <div id="service-page-1">
        <div class="layer-stretch">
            <div class="row layer-wrapper">
                <div class="col-lg-8 text-center">
                    <div class="theme-material-card">
                        <div class="theme-img theme-img-scalerotate"><?php the_post_thumbnail('full');?></div>
                        <div class="service-post">
                            <?php the_content();?>
                        </div>
                    </div>
					
				<?php endwhile; ?>
				<?php endif; ?>
                </div>
				<?php get_sidebar();?>
		   </div>
        </div>
    </div><!-- End Service Section -->
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
 <?php include('loginpopup.php');?>
 <?php include('registerpopup.php');?>
 <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom --> 
<?php get_footer();?>