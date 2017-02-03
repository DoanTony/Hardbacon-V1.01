<?php 
get_header(); 
    include('data/data-controller.php');
$directory = get_bloginfo('template_directory');

   // =============== Comparator =========================
 $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){
     $brokerage = "Brokerages";
     $brokeragetext = "Discount brokers (or brokerages) are like cars with manual transmissions. They offer performance, low fees and enable investors to buy pretty much whatever they want, like stocks, bonds or ETFs. However, the investor must have some basic investment know-how to get started. If this is the ride you want, use the comparator below to choose the Canadian discount broker that best suits your needs.";
     $tooltipArray = $_SESSION['tooltipen-table'];
      $btndetails = "More details";
  }
    else{
     $tooltipArray = $_SESSION['tooltipfr-table'];
     $brokeragetext ="Les courtiers à escompte sont comme des voitures manuelles. Ils sont performants, leurs frais sont peu élevés et ils permettent aux investisseurs d’acheter ce qu’ils veulent, que ce soit des actions, des obligations ou des FNB. Par contre, des connaissances de base en investissement sont nécessaires. Si vous croyez c’est le bolide qu’il vous faut, utilisez le comparateur ci-dessous pour choisir le courtier à escompte canadien qui correspond le mieux à vos besoins.";
     $brokerage = "Courtiers à escompte";
     $robobtn =  "Robots-Conseiller";
     $btndetails ="Plus de details";
  } 
  ?>


<!-- ===========================BODY CONTENTS ===================== -->
<div class="container-fluid">
  <div class="row text-center">
    <div class="comparator-header col-xs-12">
      <h1 class="comparator-name">
        <?php echo $brokerage; ?>
      </h1>
      <h2 class="comparator-information">
       <?php echo  $brokeragetext; ?>
      </h2>
    </div>
  
  <div class="comparator col-xs-12">
  <div class="comparator-border col-xs-12">
      <div class=" text-center">
      <?php  echo do_shortcode('[brokerage-table]'); ?>
  </div>
  </div>
  
  </div>
</div>
</div>

<!-- ============================================================= -->

<!-- ======================= FOOTER ============================== -->
<?php get_footer(); ?>