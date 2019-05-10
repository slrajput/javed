<?php 
/*
Template Name:Doctors
*/
?>
   <?php get_header(); ?>
  <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Doctors</h1>
                <p><a href="#">Home</a> &#8594; <span>Doctors</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="doctor-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
					
					<?php 
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array('post_type' => 'doctor','showposts' => '8');$i=1;
				
									
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?> 	
 
 
                        <div class="col-md-6">
                            <div class="theme-block">
                                <div class="theme-block-picture doctor-picture-2">
                                    <?php the_post_thumbnail('doctor-image'); ?>
                                </div>
                                <div class="doctor-name doctor-name-2">
                                    <h4><a><?php the_title();?></a></h4>
                                </div>
                                <div class="theme-block-hidden">
                                    <div class="doctor-name">
                                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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

                    
                </div>
	
			<?php get_sidebar();?>

			</div>
        </div>
    </div><!-- End Doctor List Section -->
    <!-- Start Department List Section -->
    <div class="parallax-background parallax-background-2">
        <div class="layer-stretch">
            <div class="layer-wrapper layer-bottom-10">
                <div class="layer-ttl layer-ttl-white">
                    <h3>Our Department </h3>
                </div>
                <div class="row">
<?php $d_args = array('post_type' => 'department','showposts' => '6');$i=1;
				
									
		$d_query = null;
		$d_query = new WP_Query($d_args);
		 if($d_query->have_posts()):
             while($d_query->have_posts()) : $d_query->the_post();        
 ?> 	
				   <div class="col-md-4">
                        <div class="department-block">
                            <div class="tbl-cell department-icon"><i class="fa fa-glass"></i></div>
                            <div class="tbl-cell department-detail">
                                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                <p class="paragraph-small paragraph-white"><?php the_content_limit(250,"");?></p>
                            </div>
                        </div>
                    </div>
					
		 <?php endwhile; ?>  
		 <?php endif; ?>			
					
                </div>
            </div>
        </div>
    </div><!-- End Department List Section -->
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