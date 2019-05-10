<?php

//theme options 

require_once ( get_stylesheet_directory() . '/theme-options.php' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support('post-thumbnails');

get_option('thumbnail_crop');

add_image_size('blog-image', 184, 121, true);

add_image_size('doctor-image', 250,260, true);
add_image_size('single-doctor-image', 210,186, true);
add_image_size('testimonial-image', 200,200, true);

add_image_size('slider-image', 1920,985, true);

add_image_size('service-image', 513, 150, true);
add_image_size('service-image-loop', 352, 312, true);


register_nav_menus(array(
			'primary_menu'=>_('Primary Menu'),
			'footermenu'=>_('Footermenu'),
			'topmenu'=>_('Topmenu')			
						));

						
//footbar

if(function_exists('register_sidebar'))

{

register_sidebar(array(

'name'=>'Footbar',

'description'=>'these are the wedgets for the footbar',

'before_widget'=>'<div class="col-md-4 footer-block">',

'after_widget'=>'</div>',

'before_title'=>'<div class="footer-ttl"><p>',

'after_title'=>'</p></div>'

));

}


if(function_exists('register_sidebar'))

{

register_sidebar(array(

'name'=>'Sidebar',

'description'=>'these are the wedgets for the sidebar',

'before_widget'=>'<div class="side">',

'after_widget'=>'</div>',

'before_title'=>'<h2>',

'after_title'=>'</h2>'

));

}




// Admin mnu

add_action('init', 'slider');  

function slider() {  

   $labels = array(

		'name' => _x('Slider', 'post type general name'),

		'singular_name' => _x('slider', 'post type singular name'),

		'add_new' => _x('Add New slider', 'portfolio item'),

		'add_new_item' => __('Add New slider'),

		'edit_item' => __('Edit slider'),

		'new_item' => __('New slider'),

		'view_item' => __('View slider'),

		'search_items' => __('Search slider'),

		'not_found' =>  __('Nothing found'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'slider' , $args );

}



// Admin mnu

add_action('init', 'gallery');  

function gallery() {  

   $labels = array(

		'name' => _x('Gallery', 'post type general name'),

		'singular_name' => _x('gallery', 'post type singular name'),

		'add_new' => _x('Add New gallery', 'portfolio item'),

		'add_new_item' => __('Add New gallery'),

		'edit_item' => __('Edit gallery'),

		'new_item' => __('New gallery'),

		'view_item' => __('View gallery'),

		'search_items' => __('Search gallery'),

		'not_found' =>  __('Nothing found'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'gallery' , $args );

}

add_action( 'init', 'create_book_tax' );

function create_book_tax() {
	register_taxonomy(
		'genre',
		'gallery',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}





// Admin mnu

add_action('init', 'doctor');  

function doctor() {  

   $labels = array(

		'name' => _x('Doctors', 'post type general name'),

		'singular_name' => _x('doctor', 'post type singular name'),

		'add_new' => _x('Add New doctor', 'portfolio item'),

		'add_new_item' => __('Add New doctor'),

		'edit_item' => __('Edit doctor'),

		'new_item' => __('New doctor'),

		'view_item' => __('View doctor'),

		'search_items' => __('Search doctor'),

		'not_found' =>  __('Nothing doctor'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'doctor' ,$args );

}


// Admin mnu

add_action('init', 'services');  

function services() {  

   $labels = array(

		'name' => _x('Services', 'post type general name'),

		'singular_name' => _x('service', 'post type singular name'),

		'add_new' => _x('Add New service', 'portfolio item'),

		'add_new_item' => __('Add New service'),

		'edit_item' => __('Edit service'),

		'new_item' => __('New service'),

		'view_item' => __('View service'),

		'search_items' => __('Search service'),

		'not_found' =>  __('Nothing service'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(
		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'service' ,$args );

}




add_action('init', 'testimonial');  

function testimonial() {  

   $labels = array(

		'name' => _x('Testimonials', 'post type general name'),

		'singular_name' => _x('testimonial', 'post type singular name'),

		'add_new' => _x('Add New testimonial', 'portfolio item'),

		'add_new_item' => __('Add New testimonial'),

		'edit_item' => __('Edit testimonial'),

		'new_item' => __('New testimonial'),

		'view_item' => __('View testimonial'),

		'search_items' => __('Search testimonial'),

		'not_found' =>  __('Nothing testimonial'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'testimonial' ,$args );

}


// Admin mnu

add_action('init', 'department');  

function department() {  

   $labels = array(

		'name' => _x('Departments', 'post type general name'),

		'singular_name' => _x('department', 'post type singular name'),

		'add_new' => _x('Add New department', 'portfolio item'),

		'add_new_item' => __('Add New department'),

		'edit_item' => __('Edit department'),

		'new_item' => __('New department'),

		'view_item' => __('View department'),

		'search_items' => __('Search department'),

		'not_found' =>  __('Nothing found'),

		'not_found_in_trash' => __('Nothing found in Trash'),

		'parent_item_colon' => ''

	);

 

	$args = array(

		'labels' => $labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,		

		'rewrite' => true,

		'capability_type' => 'post',

		'hierarchical' => false,

		'menu_position' => 05,

		'supports' => array('title','editor','thumbnail')

	  ); 

 

	register_post_type( 'department' , $args );

}

function subscribe_email(){
	
}


/*
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"menu-megamenu\">\n";
  }
}*/

class My_Walker_Nav_Menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
		
		$locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations['primary_menu'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $count = 0;
    foreach( $menu_items as $menu_item ){
        if( $menu_item->menu_item_parent == $item->ID ){
            $count++;           
        }       
    }
	
	
       // $submenu = ($count > 6) ? 'menu-megamenu' : 'menu-dropdown';
        $output .= "\n$indent<ul class=\"menu-megamenu\">\n";
    }
  
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $item_html = '';
    parent::start_el($item_html, $item, $depth, $args);
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations['primary_menu'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $count = 0;
    foreach( $menu_items as $menu_item ){
        if( $menu_item->menu_item_parent == $item->ID ){
            $count++;           
        }       
    }
     $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = ($args->walker->has_children && $count>6) ? 'menu-megamenu-li' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		
		
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id.$count ) . '"' : '';
        
        $output .= $indent . '<li rel="testm" ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        //$attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle '.$count.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item $count"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		 $item_output .= ( $args->walker->has_children ) ? '<i class="fa fa-chevron-down"></i>':'';
        $item_output .= '</a>';
		
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
    
}
function the_content_limit($max_char, $stripteaser = 0, $more_file = '') {

   $content = get_the_content($more_link_text, $stripteaser, $more_file);

   $content = apply_filters('the_content', $content);

   $content = str_replace(']]>', ']]&gt;', $content);

       $content = strip_tags($content);        

          if (strlen($_GET['p']) > 0) {

                 echo $content;

          }

          else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {

                       $content = substr($content, 0, $espacio);

                       $content = $content;

                       echo $content;

          }

          else {

                 echo $content;

          }

       }
function appointment_form(  ) {
ob_start();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	function validate_field(field,messege)
	{
		if($('#side_your_name').val()==""){

		return false;
		
		}
		else return true;
		
	}
	
	$(document).ready(function(){
		
		 
		$("#side_make_apointment").click(function(){
			var form_validate=false;
var your_name=$('#side_your_name').val();

if(your_name ==""){  $('.side_name_error').css("visibility", "visible"); form_validate=false;  return false;} else { form_validate=true; $('.side_name_error').css("visibility", "hidden");  }

var your_email=$('#side_your_email').val();
if(your_email ==""){  $('.side_email_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.side_email_error').css("visibility", "hidden"); }

var your_phone=$('#your_phone').val();
if(your_phone ==""){  $('.side_phone_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.side_phone_error').css("visibility", "hidden"); }


var appointment_department=$('#side_appointment_department').val();
if(appointment_department ==""){  $('.side_department_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.side_department_error').hide(); }
var appointment_doctor=$('#side_appointment_doctor').val();
if(appointment_doctor ==""){  $('.side_doctor_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.side_doctor_error').css("visibility", "hidden"); }

var appointment_date=$('#side_appointment_date').val();
if(appointment_date ==""){  $('.side_date_error').css("visibility", "visible"); form_validate=false; return false;} else { form_validate=true; $('.side_date_error').css("visibility", "hidden"); }

if(form_validate){

 $.post("<?php bloginfo('template_url');?>/sendmail.php", {your_name:your_name,your_phone:your_phone,your_email:your_email,appointment_department:appointment_department,appointment_doctor:appointment_doctor,appointment_date:appointment_date}, function(result){
	 if(result=="Tehre is some issue please try again!")
	 {	
		$("#side_error_message").html("");
		$("#side_error_message").html(result);
		
		//$(".close").click();
		
		}
	else{
		$("#side_error_message").html("");
		
		$("#side_error_message").html(result);
		
		
		
	}
		
		
}); }
		});
		
		
	});
	</script>
	<div class="sub-ttl">Make An Appointment</div>
						<span id="error_message"></span>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" name="your_name"  id="side_your_name">
                            <label class="mdl-textfield__label" for="sideapnt-name">Name</label>
                            <span class="mdl-textfield__error side_name_error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="your_email" id="side_your_email">
                            <label class="mdl-textfield__label" for="sideapnt-email">Email</label>
                            <span class="mdl-textfield__error side_email_error">Please Enter Valid Email!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[0-9]*"name="your_phone"  id="side_your_phone"">
                            <label class="mdl-textfield__label" for="sideapnt-mobile">Mobile Number</label>
                            <span class="mdl-textfield__error side_phone_error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                            <i class="fa fa-hospital-o"></i>
                            <select class="mdl-selectfield__select" name="appointment_department" id="side_appointment_department">
                                <option value=""></option>
                                <option value="Gynaecology">Gynaecology</option>
                                <option value="Orthology">Orthology</option>
                                <option value="Dermatologist">Dermatologist</option>
                                <option value="Anaesthesia">Anaesthesia</option>
                                <option value="Ayurvedic">Ayurvedic</option>
                            </select>
                            <label class="mdl-selectfield__label side_department_error" for="sideapnt-department ">Choose Department</label>
                        </div>
                        <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                            <i class="fa fa-user-md"></i>
                            <select class="mdl-selectfield__select" name="appointment_doctor" id="side_appointment_doctor">
                                <option value=""></option>
                                <option value="Daniel Barnes">Dr. Daniel Barnes</option>
                                <option value="Steve Soeren">Dr. Steve Soeren</option>
                                <option value="Barbara Baker">Dr. Barbara Baker</option>
                                <option value="Melissa Bates">Dr. Melissa Bates</option>
                                <option value="Linda Adams">Dr. Linda Adams</option>
                            </select>
                            <label class="mdl-selectfield__label side_doctor_error" for="sideapnt-doctor">Choose Doctor</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-calendar-o"></i>
                            <input class="mdl-textfield__input" type="text" name="appointment_date" id="side_appointment_date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <label class="mdl-textfield__label" for="sideapnt-date">Date</label>
                            <span class="mdl-textfield__error side_date_error">Please Enter Valid Date!</span>
                        </div>
                        <div class="side-error"></div>
                        <button id="side_make_apointment" class="btn button-primary button-lg side-appointment" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Processing">Submit</button>
                    </div>
<?php
	return ob_get_clean();
}
add_shortcode( 'appointment_form', 'appointment_form' );

function get_menu_by_heirarchy($menu_name){
	$menu_obj =wp_get_nav_menu_items($menu_name);
$menu_obj_array=array();

$i=0;
	foreach($menu_obj as $menu_list)
	{
		$menu_title=$menu_list->title;
		$menu_url=$menu_list->url;
		$menu_id=$menu_list->ID;
		$menu_parent=$menu_list->menu_item_parent;
		
		if($menu_parent == 0)
		{
			$menu_obj_array[$i]=array($menu_title,$menu_url,$menu_parent,$menu_id,$menu_id=>array());$i++;
		}
		else {
		$menu_obj_array[$i-1][$menu_parent][]=array($menu_title,$menu_url,$menu_id,$menu_parent);
		}
	}
	
	return $menu_obj_array;
}
function get_actual_depth($total_c,$coulan_c)
{
	
	if($tcount <= 12) { $depth=$coulan_c; }else { $depth=floor($total_c/$coulan_c);}
	$emp_c=$depth-($total_c%$coulan_c);
	if($emp_c > 2) get_actual_depth($total_c-$emp_c,$coulan_c);
	else return depth;
	
}
?>
