<?php 
get_header(); 
    include('data/data-controller.php');
$directory = get_bloginfo('template_directory');

   // =============== Comparator =========================
 $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){
     $brokerage = "Brokerages";
     $brokeragetext = " Discount brokers (or brokerages) are like manual cars. They offer performance, low fees and allow investors to do pretty much whatever they want. However, some basic investment know-how is required by the investor to get started.";
     $tooltipArray = $_SESSION['tooltipen-table'];
      $btndetails = "More details";
  }
    else{
     $tooltipArray = $_SESSION['tooltipfr-table'];
         $brokeragetext ="Les courtiers à escompte sont comme des voitures manuelles. Ils sont performants, leurs frais sont peu élevés et ils permettent aux investisseurs de faire ce qu'ils veulent. Par contre, des connaissances de base en investissement sont nécessaires.";
     $brokerage = "Courtiers à escompte";
     $robobtn =  "Robots-Conseiller";
     $btndetails ="Plus de details";
  } 
  ?>


<!-- ===========================BODY CONTENTS ===================== -->
<div class="container-fluid">
  <div class="row text-center">
    <div class="comparator-header col-xs-12">
      <p class="comparator-name">
        <?php echo $brokerage; ?>
      </p>
      <p class="comparator-information">
       <?php echo  $brokeragetext; ?>
      </p>
    </div>
  
  <div class="comparator col-xs-12">
  <div class="comparator-border col-xs-12">
      <div class=" text-center">
      <?php include('brokerage-table.php'); ?>
  </div>
  </div>
  
  </div>
</div>
</div>

<!-- ============================================================= -->

<!-- ======================= FOOTER ============================== -->
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
                           <p>  INFO@HARDBACON.CA
                          <br/> 5333 AVENUE CASGRAIN 
                          <br/> MONTREAL, QUEBEC
                            <br/> CANADA
                            <br/>    
                        </p>               
         </div>
                    <div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                         &copy;2016 - Hardbacon - All rights reserved.
                    </div>
        </article>   
    </footer>
    <?php wp_footer(); ?>
   
</body>

</html>

    
