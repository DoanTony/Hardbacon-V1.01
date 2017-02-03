<?php get_header();
   $directory = get_bloginfo('template_directory'); ?>


<section>

    <div class="about-thumbnail">
        
      <h1>Nous vous aidons à faire fructifier votre argent et à éviter de vous faire fourrer. Peu importe combien vous avez d'argent</h1>
<p>Fondé par l'ancien journaliste économique Julien Brault , Hardbacon est une start-up dédiée à aider les 7,4 milliards d'habitants de la planète à investir . Grâce à des outils intelligents , des applications utiles, et un excellent contenu , nos objectifs sont de sensibiliser les gens à investir et à les aider à choisir les fournisseurs d'investissement pertinents .</p>
    </div>
    <article class="container  about-members col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
<?php
$blogchef = get_users( 'role=officer');
$blogmanager = get_users( 'role=manager');  
$blogadmin = get_users( 'role=Administrator');
$blogcofounder = get_users( 'role=cofounder' );
echo '
<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">   
 <p class="aboutdetail">  ÉQUIPE DE DIRECTIONS </p>
 <div class="members col-lg-4 col-md-4 col-sm-12 col-xs-12" style="height:0;margin:0;" >
</div>';
// =============== Officers  =======================
foreach ( $blogchef as $user ) {
  if($user-> positionen == "CEO") // FOR CEO TO BE SHOWN FIRST ON MOBILE
    { 
       affichage($user);
    }
 }
foreach ( $blogchef as $user ) {
   if($user-> positionen != "CEO")
    { 
       affichage($user);
    } 
  }
//==============================================
echo ' </div>  <h1 class="aboutdetail"> DREAM TEAM </h1>
<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12"> ';
// ================ ADMINS ========================
foreach ( $blogadmin as $user ) {
    
      affichage($user);
}

//regular users
foreach ( $blogcofounder as $user ) {
      affichage($user);
  
}

echo'</div>';
function affichage($user)
{ 
   $directory = get_bloginfo('template_directory');
  ?> 
<div class="members col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="member-picture "><?php 
    echo get_avatar($user -> user_email, 1000);
    echo '</div>';
    echo '<p class="member-name">' . esc_html( $user-> display_name ) . '</p>';
      echo '<p class="position_title">' . esc_html( $user-> positionfr ) . '</p>';
    ?>
    <div class="post-social-container">
                        <?php
                        // -- CHECK IF SOCIAL MEDIA EXIST -- 

                         // -- Facebook -- 
                               if($user-> facebook){
                        
                          echo '   <a href="';
                         echo  $user-> facebook;
                          echo '"> <img class="post-author-social" src="'. $directory. '/img/social-media/facebook.png"> </a>';
                        } 

                        

                         // -- Linkedin -- 

                          if($user-> linkedin ){
                        
                          echo '   <a href="';
                           echo  $user-> linkedin ;
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/linkedin.png"> </a>';
                        } 

                        // -- Snapchat --
                        if($user-> snapchat){
                        
                          echo '   <a href="';
                       echo   $user-> snapchat;
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/snapchat.png"> </a>';
                        } 

                        // -- Instagram 
                        if($user-> instagram){
                        
                          echo '   <a href="';
                         $user-> instagram;
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/instagram.png"> </a>';
                        } 

                           // -- Twitter --
                         if($user-> twitter){
                          echo '<a href="';
                         echo  $user-> twitter;
                          echo '"> <img class="post-author-social" src="'. $directory.'/img/social-media/twitter.png"> </a>';
                        } 
                   
                        // -- Website -- 
                        if($user-> user_url){ 
                        
                          echo '   <a href="';
                        echo   $user-> user_url;
                          echo '"> <img class="post-author-social" src="'. $directory. '/img/social-media/weburl.png"> </a>';
                        } 
                        ?>
     </div> 
      <?php
    echo '<p class="member-description">' . get_user_meta($user-> id , 'frbio', true) . '</p>';
    ?> 
   
    </div>

<?php }
?>
        </article>   
</section>
<?php get_footer(); ?>