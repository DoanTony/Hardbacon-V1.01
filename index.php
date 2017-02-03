<?php get_header(); 
    $directory = get_bloginfo('template_directory');
?>
<section class="container-fluid hardbacon-index">
	<!-- Infoletter Subscrition -->
<div class="container infoletter col-lg-3 col-md-4 col-sm-4 col-xs-12">

    <!-- InfoLetter Moto -->
            <?php
 $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"):
?>
  <img src="<?php echo $directory.'/img/subscribe.png'; ?>" alt="subscribe">
  <div class="subscribe-text">
		 <h1>Interested in money and investing?
		 <br/><br/>Subscribe to Hardbacon&#39;s newsletter
     </h1>
		     <div>
		  <?php echo do_shortcode('[sibwp_form id=1]'); ?>
		  </div>
	 </div>
         
<?php else: ?>


  <img src="<?php echo $directory.'/img/subscribe.png'; ?> ">
  <div class="subscribe-text">
   <h1> Vous êtes intéressés par l'argent et l'investissement?
    <br/><br/>Abonnez-vous à l'infolettre de Hardbacon. </h1>
   	  <?php echo do_shortcode('[sibwp_form id=4]'); ?>

                 </div>
         

<?php endif; ?>
              
		</div>

<!-- Blogs Section -->
		<div class="container recentblog col-lg-6 col-md-4 col-sm-4 col-xs-12">
                          <?php query_posts('cat=1&posts_per_page=1'); 
                            
                          if(have_posts()): the_post()
                            ?>
                        
                          <?php $recentblog = get_the_id(); ?>
                            <div>
                        <a href="<?php echo get_permalink(); ?>">  <?php the_post_thumbnail('medium_large', array(
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title )),
                    ));?>     
                       
                       <div class="info"> 
                       <p><?php the_title();  ?> </p>
                       
                       <br/><i> <?php the_author(); ?></i>
                         </div>
                         </a>
   </div>
                            <?php
                          else : 
                            echo '<h1> NON-EXISTANT POST</h1>';
                          endif;  ?> 
		</div>

    <!-- Old blog sections -->
		<div class="container oldblog col-lg-3 col-md-4 col-sm-4 col-xs-12">

		   <?php 

       query_posts('cat=1&posts_per_page=4&paged=1');
		                 if(have_posts()):
                              while(have_posts()  ) : the_post(); 
                            if(get_the_id()!=$recentblog):
                            ?>
                            <!-- Clicking on the post get the ID -->

                                 <a href="<?php echo get_permalink(); ?>"> 
                                   
                                  <div class="oldblog-minithumbnails">
                                 <?php the_post_thumbnail('medium_large', array(
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title )),
                    )); ?> 
                                 
                                          <div class="info-mini">
                                        	<p><?php  echo the_title(); ?></p>
                                          <i><?php   the_author(); ?></i>
                                  </div>
                                </div>
                                 </a>
                                  
                            <?php

                              endif;  
                             endwhile;
                          else : 
                            echo '<article><h1> NON-EXISTANT POST</h1></article>';
                          endif;  ?> 
		</div>
</section>

<?php get_footer(); ?>