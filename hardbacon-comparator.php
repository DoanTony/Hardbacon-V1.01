    <article>
   <?php
   // =============== Comparator =========================
 $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){

         $tooltipArray = $_SESSION['tooltipen-table'];
         $comparator = "Comparator";
         $brokeragebtn = "Brokerage";
         $robobtn = "Robo Advisor";
         $btndetails = "More details";
         $company = "Companies";
         $brokerageinfo = "Discount brokers (or brokerages) are like cars with manual transmissions. They offer performance, low fees and enable investors to buy pretty much whatever they want, like stocks, bonds or ETFs. However, the investor must have some basic investment know-how to get started.";
         $roboinfo = "Robo-Advisors are like automatic (if not self-driving!) cars. They don’t require any knowledge about investing, and their fees tend to be lower than brokers, but they don’t really allow the investor to be in the driver’s seat.";
    }
    else{
        $tooltipArray = $_SESSION['tooltipfr-table'];
          $brokeragebtn = "Courtier";
          $comparator = "Comparateur";
         $robobtn =  "Robots-Conseiller";
         $btndetails ="Plus de details";
          $company = "Compagnies";
          $brokerageinfo = "Les courtiers à escompte sont comme des voitures manuelles. Ils sont performants, leurs frais sont peu élevés et ils permettent aux investisseurs d’acheter ce qu’ils veulent, que ce soit des actions, des obligations ou des FNB. Par contre, des connaissances de base en investissement sont nécessaires.";
         $roboinfo = "Les robot-conseillers sont comme des voitures automatiques (voire sans conducteur). Ils ne nécessitent aucune connaissance en investissement, leurs frais ont tendance à être peu élevés, mais ils ne permettent pas aux investisseurs d'être au volant.";
    } 
?>

            <div class="tab-control container-fluid">

            <h2><?php echo $comparator; ?></h2>
                <div  class="brokerage col-lg-6 col-md-11 col-sm-11 col-xs-11" id="brokeragebtn">
                   <div class="brokeragetext col-lg-8 col-md-7 col-sm- col-xs-7">
                  <h3><?php echo $brokeragebtn.'s'; ?></h3>
                  <h5><?php echo $brokerageinfo; ?></h5>
                  </div>
                  <div class="img-border  col-lg-4 col-md-4 col-sm-4 col-xs-2">
                  <img src="<?php echo $directory.'/img/brokerage.png'; ?>" alt="brokerage_button" />
                  </div>
                </div>
                <div class="robo selected col-lg-6 col-md-11 col-sm-11 col-xs-11" id="robobtn">
                     <div class="robotext col-lg-8 col-md-8 col-sm-8 col-xs-7">
                       <h3><?php echo $robobtn.'s'; ?></h3>
                       <h5><?php echo $roboinfo; ?></h5>
                     </div> 
                      <div class="img-border col-lg-4 col-md-2 col-sm-4 col-xs-2">
                      <img src="<?php echo $directory.'/img/robo.png'; ?>"  alt="robo_button" />
      
                   </div> 
                </div>
                <div id="robotab">
                 <?php echo do_shortcode('[robo-advisor-table]'); ?>
                 </div>
                <div id="brokeragetab">
                <?php echo do_shortcode('[brokerage-table]');; ?>
                </div>
            </div>
    </article>