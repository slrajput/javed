<?php 
/*
Template Name:Gallery
*/
?>
<?php get_header(); ?>
    <div class="page-ttl">
        <div class="layer-stretch">
            <div class="page-ttl-container">
                <h1>Gallery</h1>
                <p><a href="#">Home</a> &#8594; <span>Gallery</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Gallery Section -->
    <div id="gallery-page">
        <div class="text-center p-2 pt-4 pb-4">
            <div class="filter-menu">
			<button class="gallery-filter active" data-filter="all">All</button>
			<?php
$taxonomy = 'genre';
$terms = get_terms($taxonomy);

if ( $terms && !is_wp_error( $terms ) ) :
?>
    
        <?php foreach ( $terms as $term ) { ?>
           
			<button class="gallery-filter" data-filter="<?php echo $term->slug;?>"><?php echo $term->name; ?></button>
        <?php } ?>
   
<?php endif;?>


              
            </div>
            
        </div>

        <div class="gallery-container">
            <ul class="portfolio-image">
			<?php
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array('post_type' => 'gallery','showposts' => '20');$i=1;
			$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post(); 
			?>
                <li class="gallery-block filter surgery opd">
                    <a href="<?php bloginfo('template_url');?>/uploads/gallery/gallery-1.jpg">
                        <img src="<?php bloginfo('template_url');?>/uploads/gallery/gallery-1.jpg" alt="image">
                        <div class="gallery-layer">
                            <div class="gallery-layer-dark">
                                <p><i class="fa fa-search-plus"></i></p>
                            </div>
                        </div>
                    </a>
                </li>
                
			 <?php endwhile; ?>  
		 <?php endif; ?>	
				
            </ul>
        </div>
    </div><!-- End Gallery Section -->
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
       <!-- Start Make an Appointment Modal -->
   <?php include('popup_form.php');?>
 <!-- Start Login Modal -->
 <?php include('loginpopup.php');?>
 <?php include('registerpopup.php');?>
    <!-- Fixed Appointment Button at Bottom -->
    <div id="appointment-button" class="animated fadeInUp">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Button at Bottom -->
<?php get_footer();?>