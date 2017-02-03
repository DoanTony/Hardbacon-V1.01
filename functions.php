<?php
function bootstraps_theme_style() {
	wp_register_style('bootstrap_css_theme', get_stylesheet_directory_uri().'/css/bootstrap-theme.min.css');
 	wp_register_style('bootstrap', get_stylesheet_directory_uri().'	/css/bootstrap.min.css');
	 wp_register_style('style_css', get_stylesheet_directory_uri(). '/css/style.min.css');
	wp_register_style('lato_css', get_stylesheet_directory_uri().'/css/latocss.min.css');
	wp_register_style('palanquin_css', get_stylesheet_directory_uri().'/css/palanquin.min.css');
    wp_register_style('compass_css', get_stylesheet_directory_uri().'/css/compass_css1.min.css');

 	 wp_register_script('ajax_script', get_stylesheet_directory_uri().'/js/ajaxapis.min.js');
     wp_register_script('jsbootstrapcdn', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
     wp_register_script('hardbaconjs', get_stylesheet_directory_uri().'/js/hardbacon_js.js');
     wp_register_script('compass_js', get_stylesheet_directory_uri().'/js/compass_js.min.js');
     wp_register_script('ratehub_creditcard', 'https://www.ratehub.ca/assets/js/widget-loader.js',array(),false);
    




	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrap_css_theme');
	wp_enqueue_style('style_css');
	wp_enqueue_style('lato_css');
	wp_enqueue_style('palanquin_css');
	wp_enqueue_script('ajax_script');
	wp_enqueue_script('jsbootstrapcdn');
	wp_enqueue_script('hardbaconjs');
	wp_enqueue_script('ratehub_creditcard');
	if(is_archive())
	{
		wp_register_script('encyclopedia_js', get_template_directory_uri().'/js/archivedefinition.js',array('jquery'));
     	wp_enqueue_script('encyclopedia_js');

	}
		
    /* Scripts for the compass and results pages ~ Etienne */
    if(is_page('boussole') || is_page('compass') || is_page('compass-results'))
    {
       wp_enqueue_style('compass_css');
	   wp_enqueue_script('compass_js');
    }
}

add_action("wp_enqueue_scripts","bootstraps_theme_style");

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79716965-1', 'auto');
  ga('send', 'pageview');
</script>
<?php }


function my_deregister_heartbeat() {
	global $pagenow;

	if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )
		wp_deregister_script('heartbeat');
}

add_action( 'init', 'my_deregister_heartbeat', 1 );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="French">French Bio</label></th>

			<td>
				<textarea style="height:200px;" name="frbio" id="frbio"><?php the_author_meta( 'frbio', $user-> id ); ?></textarea>
			</td>
		</tr>

	</table>	
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

// Tell WP SEO to use a larger thumbnail
function sc_opengraph_image_size($size="medium") {
	return "full";
}
add_filter('wpseo_opengraph_image_size','sc_opengraph_image_size',10,1);

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'frbio', $_POST['frbio'] );
}

//-- Profile Social Media -- 
function my_new_contactmethods( $contactmethods ) {
	$contactmethods['positionen'] = 'Position title (English)';
	$contactmethods['positionfr'] = 'Position title (French)';	
$contactmethods['twitter'] = 'Twitter';
$contactmethods['facebook'] = 'Facebook';
$contactmethods['linkedin'] = 'Linkedin';
$contactmethods['snapchat'] = 'Snapchat';
$contactmethods['instagram'] = 'Instagram';

return $contactmethods;
}	

add_filter('user_contactmethods','my_new_contactmethods',10,1);


function javascript_theme_style() {

}
register_nav_menu( 'primary', __( 'Primary Menu', 'Menus' ) );
add_action('wp_enqueue_scripts','javascript_theme_style');
add_theme_support( 'post-thumbnails' ); 

function wpml_translate_author_description( $string, $user_id = false ) {
    if ( function_exists( 'icl_translate' ) && $user_id) {
        $author_slug = get_the_author_meta('user_nicename', $user_id);
        return icl_translate('wpml_custom', 'author_description_'.$author_slug, $string);
    }
    return $string;
}
add_filter('get_the_author_description', 'wpml_translate_author_description', '', 2);

$result = add_role( 'manager',__('Manager'),
array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => true, // Allows user to edit pages
'edit_others_posts' => true, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => true, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode

)
);

add_action('init', 'cloneRole');

function cloneRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('administrator');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('officer', 'Officer', $adm->capabilities);
}



function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

add_image_size( 'small-thumbnail', 400, 175 );

function add_last_nav_item($items) {
	global $post;
	  $currentlang = get_bloginfo('language');
	 if($currentlang=="en-US")
	 {
	 	if(is_home() || is_single())
	 	{
		return $items .= '<li><a href="http://hardbacon.ca/fr/" role="button" data-toggle="modal">FR</a></li>';
	 	}
	 	elseif(is_category('definitions')) 
	 	{
	 		return $items .= '<li><a href="http://hardbacon.ca/fr/definitions/" role="button" data-toggle="modal">FR</a></li>';
	 	}
	 	else
	 	{
	 		return $items .= '<li><a href="http://hardbacon.ca/fr/'.$post->post_name.'/" role="button" data-toggle="modal">FR</a></li>';
	 	}
	 	
	 }
	 else
	 {
	 	if(is_home() || is_single())
	 	{
	 			return $items .= '<li><a href="http://hardbacon.ca/" role="button" data-toggle="modal">EN</a></li>';
	 	}
	 	elseif(is_category('definitions')) 
	 	{
	 		return $items .= '<li><a href="http://hardbacon.ca/definitions/" role="button" data-toggle="modal">EN</a></li>';
	 	}
	 	else 
	 	{
	 			return $items .= '<li><a href="http://hardbacon.ca/'.$post->post_name.'/" role="button" data-toggle="modal">EN</a></li>';
	 	}
	
	 }

}
add_filter('wp_nav_menu_items','add_last_nav_item');

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');


function myplugin_settings() {  
// Add tag metabox to page
register_taxonomy_for_object_type('post_tag', 'page'); 
// Add category metabox to page
register_taxonomy_for_object_type('category', 'page');  
}

 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );
