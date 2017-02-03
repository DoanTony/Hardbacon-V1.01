<?php get_header(); 
?>
<?php $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){
 	$oops = "OOPS! THIS PAGE DOESN'T EXIST. ";
 	$content = "HERE ARE OUR LATEST ARTICLES.";
 }
 else
 {
	$oops = "OUPS! CETTE PAGE N'EXISTE PAS.";
 	$content = "VOICI NOS DERNIER ARTICLES";
 }
?>
<section class="page404 container-fluid index">

 <p class="text404"><?php echo $oops; ?><br/>
<?php echo $content; ?></p>

  <div class="old-articles  col-lg-11 col-md-11 col-sm-11 col-xs-12">
        <?php $counter=0; ?>
        <?php 
        query_posts('cat=1');
        if(have_posts()):
         while(have_posts()) : the_post(); 
              if(get_the_id()!= $post_id)
             { ?>

                   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                      <div class="post-minithumbnails" >
                        <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('medium', array(
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title )),
                    )); ?></a>
                       <p class="info-mini">  <a href="<?php echo get_permalink(); ?>"> <?php  echo the_title(); ?></a>
                        <br/><i class="author"><?php the_author(); ?></i>
                       </p>

                      </div>
                    </div>
           <?php  $counter++; 
             }  
             if($counter==3)
              {
                break;
              }
          endwhile;
       endif;
                           ?>
     
        
        </div>
</section>

<?php get_footer(); ?>