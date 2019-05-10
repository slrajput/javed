<?php get_header(); ?>
	 <?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
  <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1><?php the_title();?></h1>
                <!--p><a href="#">Home</a> &#8594; <span>Privacy policy</span></p-->
            </div>
        </div>    
    </div><!-- End Page Title Section -->
    <!-- Start Privacy Policy Section -->
    <div class="layer-stretch">
        <div class="layer-wrapper"> 
            <div class="layer-fixed">
                <?php the_content();?>
            </div>
        </div>
    </div><!-- End Privacy Policy Section -->
	 <?php endwhile; ?>  
		 <?php endif; ?>	
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
<!-- Start Register Modal -->
<!-- Fixed Appointment Button at Bottom -->
    <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom -->
<?php get_footer();?>