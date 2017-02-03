<?php
get_header();
$currentlang = get_bloginfo('language');
the_content();
if($currentlang == "en-US")
{
	header('Refresh: 5;url=http://hardbacon.ca');
}
else
{
	header('Refresh: 5;url=http://hardbacon.ca/fr');
}

 wp_footer(); ?>