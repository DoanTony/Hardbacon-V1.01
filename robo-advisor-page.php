<?php 
get_header(); 
    include('data/data-controller.php');
$directory = get_bloginfo('template_directory');

   // =============== Comparator =========================
 $currentlang = get_bloginfo('language');
 if($currentlang=="en-US"){
   $robotext ="Robo-Advisors are like automatic (if not self-driving!) cars. They don’t require any investing knowledge, and their fees tend to be lower than brokers, but they don’t really put the investor into the driver’s seat. If this is the ride you want, use the comparator below to choose the Canadian robo-advisor that best suits your needs.";
     $robo = "Robo-Advisors";
     $tooltipArray = $_SESSION['tooltipen-table'];
      $btndetails = "More details";
  }
    else{
     $tooltipArray = $_SESSION['tooltipfr-table'];
     $robotext="Les robot-conseillers sont comme des voitures automatiques (voire sans conducteur). Ils ne nécessitent aucune connaissance en investissement, leurs frais ont tendance à être peu élevés, mais ils ne permettent pas aux investisseurs d'être au volant. Si vous croyez c’est le bolide qu’il vous faut, utilisez le comparateur ci-dessous pour choisir le robot-conseiller canadien qui correspond le mieux à vos besoins.";
     $robo = "Robots-Conseillers";
     $btndetails ="Plus de details";
  } 
  ?>


<!-- ===========================BODY CONTENTS ===================== -->
<div class="container-fluid">
  <div class="row text-center">
    <div class="comparator-header col-xs-12">
      <h1 class="comparator-name">
        <?php echo $robo; ?>
      </h1>
      <h2 class="comparator-information">
      <?php echo $robotext; ?>
     </h2>
    </div>
  
  <div class="comparator col-xs-12">
  <div class="comparator-border col-xs-12">
      <div class=" text-center">
      <?php  echo do_shortcode('[robo-advisor-table]'); ?>
  </div>
  </div>
  
  </div>
</div>
</div>

<!-- ============================================================= -->

<!-- ======================= FOOTER ============================== -->
<?php get_footer(); ?>