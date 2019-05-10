<?php 
/*
Template Name:Departments
*/
?>
<?php get_header(); ?>
    <div id="doctor-page" class="layer-stretch">
        <div class="layer-wrapper layer-bottom-10">
            <div class="row">
			
			
			
			<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array('post_type' => 'department','showposts' => '9');$i=1;
				
									
		$the_query = null;
		$the_query = new WP_Query($args);
		 if($the_query->have_posts()):
             while($the_query->have_posts()) : $the_query->the_post();        
 ?> 
                <div class="col-md-4">
                    <div class="theme-block theme-block-hover text-left">
                        <div class="theme-block-picture">
                            <img src="<?php bloginfo('template_url');?>/uploads/service-1.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p class="text-muted"><?php the_content_limit(250,"");?></p>
                            <a href="<?php the_permalink();?>" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary">Read More</a>
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
    </div><!-- End Doctor List Section -->

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