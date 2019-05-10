<?php get_header(); ?>

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
                                <?php the_post_thumbnail('single-doctor-image');?>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="doctorp-name">
                                <h3><?php the_title();?></h3>
                                <span class="badge badge-primary">
                                    <!--   Head of Department-->
                                </span>
                                <p>Orthologist Specilist</p>
                            </div>
                        </div>
                        <p class="text-muted p-4 m-0 pb-0"><?php the_content();?></p>
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
             <?php 
                    $args = array('post_type' => 'doctor','showposts' => '3');
                    $the_query = null;
                    $the_query = new WP_Query($args);
                    if($the_query->have_posts()):
                    while($the_query->have_posts()) : $the_query->the_post();        
                 ?> 	
             <div class="col-sm-6 col-md-4">
                    <div class="theme-block">
                        <div class="theme-block-picture doctor-picture-2">
                              <?php the_post_thumbnail('doctor-image'); ?>
                        </div>
                        <div class="doctor-name doctor-name-2">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        </div>
                        <div class="theme-block-hidden">
                            <div class="doctor-name">
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            </div>
                            <div class="doctor-details">

                               <div class="doctor-specility">
                                    <p>Dermatologist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
             <?php endwhile; ?>  
             <?php endif; ?>		
            </div>
        </div>
        </div>
    </div>

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
<!-- Start Footer Section -->

<?php get_footer();?>