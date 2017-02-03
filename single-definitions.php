<?php
// -- Author : Tony Doan --
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 
}
else{
	get_header();
}   
 // --- DATA  ---- 
    $directory = get_bloginfo('template_directory');
     $currentlang = get_bloginfo('language');

    	$the_term = get_post_meta($post -> ID);
    	$term = new Term();
    	$term -> _set(get_the_title(),
    	$the_term['definition-synonyms'][0],
    	$post -> post_content,
    	$the_term['video-embed-url'][0],
    	$the_term['author-name'][0],
    	$post -> post_date,
    	$the_term['english-term'][0]);

    	if($currentlang=="en-US")
    	{
    		$urldefinition = "/definitions";
    	}
    	else
    	{
    		$urldefinition = "/fr/definitions";
    	}
?>

		<li id="<?php echo $term -> get_name(); ?>">
		<div class="encyclopedia-container ">
				<p class="content-header">
				<span class="term-title"><?php echo $term -> get_name(); ?> </span> <br/>
				<span class="term-synonym">Synonyms: <?php echo $term -> get_synonyms(); ?></span>
				</p>
				<div class="thecontents">
					<div class="content-description col-lg-8 col-md-8 col-sm-6 col-xs-12">	
						<?php echo $term -> get_definition();  ?>
						<div class="author text-right">
						<br/>
							<span><?php echo $term -> get_author();?></span>
						</div>
					</div>
					<div class="text-center col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="video">
						<iframe width="350" height="600"  src="<?php echo $term -> get_embed_url(); ?> " frameborder="0" allowfullscreen></iframe> 
						</div>
					</div>
				</div>
				<?php if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {}
						else{
					echo '<a href="'.get_site_url().$urldefinition.'" style="font-size:18px; font-weight:500"> << Go back to more definitions </a>';
					 }?>		
		</div>
		</li>
<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {}
else{
	get_footer();
}   
 ?>