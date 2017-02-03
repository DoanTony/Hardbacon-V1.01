<?php get_header();
   $directory = get_bloginfo('template_directory'); ?>



    <section>
    <div class="container landing-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="contents">
     <p> Vous êtes intéressés par <br/>  l'argent et l'investissement?</p>
    <h3> Abonnez-vous à l'infolettre de Hardbacon <br/> et nous vous enverrons du contenu exclusif.</h3>
                </p>
                <br/>
                <br/>
                <br/>
  <?php echo do_shortcode('[sibwp_form id=34]'); ?>
  </div>
 
    <img src="<?php echo $directory; ?>/img/background.png" > 
   </div>
  <div>
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57977d638f49a7e3"></script>
   
<!-- Footer -->
    <footer class="col-lg-12 col-md-12col-sm-12 col-xs-12">

       <article>

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
                        <p>  5333 AVENUE CASGRAIN 
                          <br/>Montreal, Quebec 
                            <br/>Canada
                            <br/> INFO@HARDBACON.CA
                        </p>               
         </div>
                    <div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                         &copy;2016 - Hardbacon - All rights reserved.
                    </div>
        </article>   


 <a href="javascript:" id="return-to-top"><i class="glyphicon glyphicon-arrow-up hidden-lg" onclick="backtotop();"></i></a>
    </footer>
    
    <?php wp_footer(); ?>
   
</body>

</html>
