<?php 
/*
Template Name:Home
*/
?>
<?php get_header(); ?>
<!-- Start Slider Section -->

<div id="slider" class="slider-height">
  <div class="flexslider slider-wrapper">
    <ul class="slides">
      <li>
        <div class="slider-info">
          <h1 class="animated fadeInDown">HARI RAM HOSPITAL <br>
            <span>TREATS YOU LIKE A FRIEND</span></h1>
          <p class="animated fadeInDown">From preventive care and checkups to internal medicine, from cardiology to oncology, 
            our team of doctors and nurses are ready to care for you in your illness.</p>
        </div>
        <img src="http://hariramhospital.com/wp-content/uploads/2019/05/Hari-Ram-Hospital-Image.jpg" alt="Hari Ram Hospital Image" />
        <div class="slider-button slider-appointment"> <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment<i class="fa fa-flag-checkered"></i></a> </div>
      </li>
      <li>
        <div class="slider-info">
          <h2>HARI RAM HOSPITAL <br>
            Your Identity. Our Responsibility</h2>
          <p class="animated fadeInDown">From preventive care and checkups to internal medicine, from cardiology to oncology, 
            our team of doctors and nurses are ready to care for you in your illness.</p>
        </div>
        <img src="http://hariramhospital.com/wp-content/uploads/2019/02/1920x985-top-banner.jpg" alt="Hospital Images" />
        <div class="slider-button slider-appointment"> <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment<i class="fa fa-external-link"></i></a> </div>
      </li>
      <li>
        <div class="slider-info">
          <h2>HARI RAM HOSPITAL <br>
            24/7 Support Services</h2>
          <p class="animated fadeInDown">From preventive care and checkups to internal medicine, from cardiology to oncology, 
            our team of doctors and nurses are ready to care for you in your illness.</p>
        </div>
        <img src="http://hariramhospital.com/wp-content/uploads/2019/02/1920x985-top-banner.jpg" alt="Hari Operation Theater Images" />
        <div class="slider-button slider-appointment"> <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect animated fadeInUp">Make An Appointment<i class="fa fa-chevron-right"></i></a> </div>
      </li>
    </ul>
  </div>
</div>
<!-- End Slider Section --> 
<!-- Start Service Section -->
<div id="hm-service" class="layer-stretch">
  <div class="layer-wrapper">
    <div class="layer-ttl">
      <h3>What We Do</h3>
    </div>
    <div class="layer-container row">
      <div class="hm-service-left col-md-5"> <img src="http://hariramhospital.com/wp-content/uploads/2019/05/doctor-patient.jpg" alt="hari Ram Hospital"> </div>
      <div class="hm-service-right col-md-7">
        <p class="paragraph-medium paragraph-black"></p>
        <div class="hm-service">
          <div class="hm-service-block"> <i class="fa fa-stethoscope"></i> <span>Cardiovascular centre</span> </div>
          <div class="hm-service-block"> <i class="fa fa-child"></i> <span>Childbirth Center</span> </div>
          <div class="hm-service-block"> <i class="fa fa-certificate"></i> <span>Mammography</span> </div>
          <div class="hm-service-block"> <i class="fa fa-h-square"></i> <span>Dermatologist</span> </div>
          <div class="hm-service-block"> <i class="fa fa-stethoscope"></i> <span>Paediatrics</span> </div>
          <div class="hm-service-block"> <i class="fa fa-bullhorn"></i> <span>Radiology Center</span> </div>
        </div>
        <div class="hm-service-view text-center"> <a href="<?php the_permalink();?>services" class="button-icon"> <span>View All Services</span> <i class="fa fa-eye"></i> </a> </div>
      </div>
    </div>
  </div>
</div>
<!-- End Service Section --> 
<!-- Start About Section -->
<div id="hm-about" class="colored-background">
  <div class="layer-stretch">
    <div class="layer-wrapper">
      <div class="layer-ttl layer-ttl-white">
        <h3>Who We Are</h3>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="hm-about-block">
            <div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
            <div class="tbl-cell hm-about-number"> <span class="counter">15</span>
              <p>Doctor(s)</p>
            </div>
          </div>
          <div class="hm-about-block">
            <div class="tbl-cell hm-about-icon"><i class="fa fa-ambulance"></i></div>
            <div class="tbl-cell hm-about-number"> <span class="counter">50</span>
              <p>Room(s)</p>
            </div>
          </div>
          <div class="hm-about-block">
            <div class="tbl-cell hm-about-icon"><i class="fa fa-calendar"></i></div>
            <div class="tbl-cell hm-about-number"> <span class="counter">15</span>
              <p>Year of Experience(s)</p>
            </div>
          </div>
          <div class="hm-about-block">
            <div class="tbl-cell hm-about-icon"><i class="fa fa-clock-o"></i></div>
            <div class="tbl-cell hm-about-number"> <span class="counter">24</span>
              <p>Opening Hours</p>
            </div>
          </div>
          <div class="hm-about-paragraph">
            <p class="paragraph-medium paragraph-white"> 
              <!-- Text --> 
            </p>
          </div>
        </div>
        <div class="col-md-5"> <img class="img-thumbnail" src="http://hariramhospital.com/wp-content/uploads/2019/05/hari-ram-hospital.jpg" alt=""> </div>
      </div>
    </div>
  </div>
</div>
<!-- End About Section --> 

<!-- Start Feature Section -->
<div id="hm-feature" class="layer-stretch">
  <div class="layer-wrapper layer-bottom-10">
    <div class="layer-ttl">
      <h3>Why Choose Us</h3>
    </div>
    <div class="row">
      <?php $args = array('post_type' => 'service','showposts' => '6');					
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?>
      <div class="col-sm-6 col-md-4">
        <div class="hm-feature-block-1 text-center">
          <div class="theme-img theme-img-scalerotate">
            <?php the_post_thumbnail('service-image'); ?>
          </div>
          <span>
          <?php the_title(); ?>
          </span>
          <p class="paragraph-small paragraph-black">
            <?php the_content_limit(250,"");?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- End Feature Section --> 
<!-- Start Doctor Section -->
<div class="colored-background">
  <div class="layer-stretch">
    <div class="layer-wrapper">
      <div class="layer-ttl layer-ttl-white">
        <h3>Our Team</h3>
      </div>
      <div class="layer-container">
        <div id="hm-doctor-slider" class="owl-carousel owl-theme theme-owl-dot">
          <?php $args = array('post_type' => 'doctor','showposts' => '12');					
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?>
          <div class="hm-doctor"> <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('doctor-image');?>
            <h6>
              <?php the_title();?>
            </h6>
            <p>M.D. (Gen. Med)</p>
            </a> </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Doctor Section --> 
<!-- Start Feature Section -->
<div id="dep-feature" class="layer-stretch">
  <div class="layer-wrapper layer-bottom-10">
    <div class="layer-ttl">
      <h3>Our Department</h3>
    </div>
    <div class="row">
      <?php $args = array('post_type' => 'department','showposts' => '6');					
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?>
      <div class="col-sm-6 col-md-4">
        <div class="hm-feature-block-1">
          <div class="theme-img theme-img-scalerotate"> <a href="<?php the_permalink();?>">
            <?php if(has_post_thumbnail()){?>
            <?php the_post_thumbnail('service-image'); }else {?>
            <?php } ?>
            <img src="<?php bloginfo('template_url');?>/uploads/feature-2.jpg" alt=""></a> </div>
          <span class="text-center"><a href="<?php the_permalink();?>">
          <?php the_title();?>
          </a></span>
          <p class="paragraph-small paragraph-black">
            <?php the_content_limit(150,"");?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- End Feature Section --> 
<!-- Start Testimonial Section -->
<div id="testimonial" class="colored-background">
  <div class="layer-stretch">
    <div class="layer-wrapper">
      <div class="layer-ttl layer-ttl-white">
        <h3>What People Say</h3>
      </div>
      <div class="layer-container">
        <div id="testimonial-slider" class="owl-carousel owl-theme theme-owl-dot">
          <?php $args = array('post_type' => 'services','showposts' => '6');					
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?>
          <div class="testimonial-block"> <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('testimonial-image'); ?>
            </a>
            <div class="paragraph-medium paragraph-white"> <i class="fa fa-quote-left"></i>
              <?php the_content_limit(450,"");?>
            </div>
            <a>Reuben Snow</a> </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonial Section --> 
<!-- Start Emergency Section -->
<div id="emergency">
  <div class="layer-stretch">
    <div class="layer-wrapper">
      <div class="layer-ttl">
        <h3>On Emergency</h3>
      </div>
      <div class="layer-container">
        <div class="paragraph-medium paragraph-black"> 24x7 Service Available </div>
        <div class="emergency-number">Call : 094140 13800</div>
      </div>
    </div>
  </div>
</div>
<!-- End Emergency Section --> 
<!-- Start Make an Appointment Modal -->

<?php include('popup_form.php');?>
<!-- Start Login Modal -->

<?php include('loginpopup.php');?>
<?php include('registerpopup.php');?>
<!-- Fixed Appointment Button at Bottom -->
<div id="appointment-button" class="animated fadeInUp">
  <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
  <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
</div>
<!-- End Fixed Appointment Button at Bottom -->

<?php get_footer();?>
