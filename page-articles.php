<?php 
get_header();
   $directory = get_bloginfo('template_directory'); 
    $currentlang = get_bloginfo('language');
include('blog.php');
$counter = 1;
?>
<section class="container-fluid article-page clearfix">
<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
<div class="blog-blocks">
<?php 
 $args = array(
           'cat' => '1',
           'post_type' => 'post',
           'posts_per_page' => 6,
           'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),

           );

  query_posts($args);
//query_posts('cat=1&posts_per_page=6&paged=1');
  while(have_posts()) : the_post();
    {?>
  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
   <div class="article-blog">
          <div class="container-fluid">
            <?php echo blog(); ?>
            <div class="subinfo row"> 
                  <p> <?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?> </p> 
                </div>  
               <div class="bloginfo row">  
                    <div class="author col-xs-6 text-left">  
                        <p><?php the_author(); ?></p>
                    </div>
                    <div class="publishdate col-xs-6 text-right"> 
                        <p><?php echo the_time('d/m/Y'); echo ' '; the_time('g:i a'); ?> </p>
                    </div>  
                </div>   
          </div>
      </div>
    </div>

<?php }
endwhile;
?>
</div>

</div>

<div class="newsletter col-lg-3 col-md-4">

<?php  if($currentlang=="en-US"){   ?>
  <img src="<?php echo $directory.'/img/subscribe.png'; ?>" alt="subscribe">
    <div class="newsletter-text">
       <p>Interested in
                  <br/>money and
                  <br/>investing?
                  <br/>
                  <br/>Subscribe to
                  <br/>Hardbacon&#39;s
                  <br/>newsletter
                    </p>
           <div>
        <?php echo do_shortcode('[sibwp_form id=1]'); ?>
        </div>
      </div> 
<?php }else{ ?>


  <img src="<?php echo $directory.'/img/subscribe.png'; ?> ">
  <div class="newsletter-text">
       <p> Vous êtes intéressés 
              <br/>par l'argent et  
              <br/>l&#39;investissement?
              <br/>
              <br/>Abonnez-vous 
              <br/>   à l&#39;nfolettre
              <br/> de Hardbacon.
        </p>
        <div>
        <?php echo do_shortcode('[sibwp_form id=4]'); ?>
         </div>   
     </div>
<?php } ?>
   </div>
<div class="paginations text-center col-xs-12"> 
<?php echo paginate_links($args); ?>
</div>   
</section>

<?php $argspage = array(
 
); ?>


<!-- ======================= FOOTER ============================== -->
    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="footer-menu col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <ul>
            <?php 

                $args = array('menu' => 'Footer-menu' );
                ?>
            <?php wp_nav_menu($args); ?>

            </ul>
     </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       
                        <ul class="social list-inline">
                           <li>
                                <a href="https://www.snapchat.com/add/hardbaconca">
                                  <img src="<?php echo $directory.'/img/Snapchat_white.png'; ?>" alt="Snapchat" >
                                </a>
        
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hardbaconca/">
                                      <img src="<?php echo $directory.'/img/Facebook_white.png'; ?>" alt="Facebook" >
                                </a>   
                            </li>
                            <li>
                                <a href="https://twitter.com/hardbaconca">
                                      <img src="<?php echo $directory.'/img/Twitter_white.png'; ?>" alt="Twitter" >
                                </a>                              
                     
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/hardbacon">
                                   <img src="<?php echo $directory.'/img/Linkedin_white.png'; ?>" alt="Linkedin" >
                                </a>
                            </li>
                             <li>
                                <a href="https://www.instagram.com/hardbaconca/">
                                   <img src="<?php echo $directory.'/img/Instagram_white.png'; ?>" alt="Instagram" >
                                </a>
                            </li>


                        </ul>
         </div>
               
         <div class="contacts col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <h3>Contact</h3>
                           <p>  INFO@HARDBACON.CA
                          <br/>  5333 AVENUE CASGRAIN 
                          <br/> MONTREAL, QUEBEC
                            <br/> CANADA
                            <br/>    
                        </p>               
         </div>
                    <div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                         &copy;2016 - Hardbacon - All rights reserved.
                    </div>
        </article>   

 <a href="javascript:" id="return-to-top"><i class="glyphicon glyphicon-arrow-up hidden-lg" onclick="backtotop();"></i></a>
    </footer>
     

</div>
    <?php wp_footer(); ?>
   
  
</body>

</html>
