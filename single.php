<?php get_header(); ?>
<?php
$post_id = $post -> ID;
?>
<?php $directory = get_bloginfo("template_directory"); ?>

<?php  $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){

  $published = "Published on ";
  $at = " at ";
 }
 else
 {
     $published = "Publié le ";
      $at = " à ";
 }

 ?>
<!-- POST PAGE TEMPLATE -->
<section>
	
  <article class="post-thumbnail ">

                 <?php the_post_thumbnail('', array(
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title )),
                    )); ?>
                <div class="post-title col-lg-9 col-md-9 col-sm-9 col-xs-12">
                 <h1><?php the_title(); ?></h1>
                  <i><?php the_author(); ?></i>
                 <br/>
                 
               </div>
   </article>
    <article class="post-section col-lg-8 col-md-8 col-sm-8 col-xs-12">

               <!-- The contents -->
             <p id="publish-date"> <b> <?php echo $published; the_time('d/m/Y'); echo $at; the_time('G:i');?>  </b></p>
           <?php       
              if(have_posts()): the_post() ?>   
             <div  class="post-content">
             
                 <br/>
                 <p>
                 <?php the_content(); ?>
                 </p>
            </div>
            <?php
                 else : 
                 echo '<h1> NON-EXISTANT POST</h1>';
                 endif;  ?> 
    </article>

    <!-- Newsletter box -->
    <article class="newsletter-strap col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container-fuild text-center">
      <div class="subscribe-box">
            <?php
         $currentlang = get_bloginfo('language');
         if($currentlang=="en-US"):
        ?>
                <p>
                If you liked this article, you will love Hardbacon’s Newsletter. 
                <br/>Subscribe now to receive exclusive content 
                 <br/> you’ll never see on our Website!
                </p>
                          
              <?php echo do_shortcode('[sibwp_form id=5]'); ?>
            
              </div>
              <?php else: ?>
            <p>
               Si vous avez aimé cet article, 
               <br/>vous allez adorer l'infolettre de Hardbacon. 
                <br/>Abonnez-vous maintenant pour recevoir du contenu exclusif, 
                 <br/>que vous ne verrez jamais sur notre site Web.
                </p>
                   <div>
                      <?php echo do_shortcode('[sibwp_form id=6]'); ?>
                <?php endif; ?>
               </div>
           </div>
      </div>

    </article>

    <!-- Infoletter Subscrition -->

    <article class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- The author -->
          <div class="post-author">
                     <div class="post-author-picture text-center ">
                     <div class="author-picture text-center">
                     <?php echo get_avatar( get_the_author_email(), 1000  ); ?> 
                    </div>
                      <h3>
                           <?php the_author(); ?></h3>  
                                   <div class="post-social-container">
                        <?php
                        // -- CHECK IF SOCIAL MEDIA EXIST -- 

                         // -- Facebook -- 
                         if(get_the_author_meta('facebook')){
                          echo '<a href="';
                          the_author_meta('facebook');
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/facebook.png"> </a>';
                        } 

                         // -- Linkedin -- 

                          if(get_the_author_meta('linkedin')){
                        
                          echo '   <a href="';
                          the_author_meta('linkedin');
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/linkedin.png"> </a>';
                        } 

                        // -- Snapchat --
                        if(get_the_author_meta('snapchat')){
                        
                          echo '   <a href="';
                          the_author_meta('snapchat');
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/snapchat.png"> </a>';
                        } 

                        // -- Instagram 
                        if(get_the_author_meta('instagram')){
                        
                          echo '   <a href="';
                          the_author_meta('instagram');
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/instagram.png"> </a>';
                        } 

                           // -- Twitter --

                          if(get_the_author_meta('twitter')){
                        
                          echo '   <a href="';
                          the_author_meta('twitter');
                          echo '"> <img class="post-author-social" src="'. $directory. '/img/social-media/twitter.png"> </a>';
                        } 

                        // -- Website -- 
                        if(get_the_author_meta('user_url')){
                        
                          echo '   <a href="';
                          the_author_meta('user_url');
                          echo '"> <img class="post-author-social" src="'. $directory. '/img/social-media/weburl.png"> </a>';
                        } 
                        ?>
               
         </div> 
                     </div>                   
                       <!-- Post Author Information -->
       <?php
       $currentlang = get_bloginfo('language');
       if($currentlang=="en-US"){
      ?>   <h4>
                <?php the_author_meta('description'); ?> 
              </h4>

      <?php } else { ?>
          <h4 >
             <?php the_author_meta('frbio'); ?> 
             </h4>
      <?php } ?>
                      
    </article>
<article>
    <div class="old-articles container col-lg-11 col-md-11 col-sm-11 col-xs-12">
        <?php $counter=0; ?>
        <?php 
        query_posts('cat=1');
        if(have_posts()):
         while(have_posts()) : the_post(); 
              if(get_the_id()!= $post_id)
             { ?>

                   <div class="post-minithumbnails col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                        <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail('medium_large', array(
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title )),
                    )); ?></a>
                       <p class="info-mini">  <a href="<?php echo get_permalink(); ?>"> <?php  echo the_title(); ?></a>
                        <br/><i class="author"><?php the_author(); ?></i>
                       </p>

              
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
        </div>
     
     </article>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57977d638f49a7e3"></script>
</section>


<?php get_footer(); ?>