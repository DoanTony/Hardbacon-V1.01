<?php get_header();
 $directory = get_bloginfo('template_directory'); ?>


<section>

    <div class="about-thumbnail">
        
 <h1>WE HELP YOU GROW YOUR MONEY AND AVOID GETTING SCREWED. NO MATTER HOW MUCH BACON YOU HAVE</h1>
<p>Founded by former business journalist Julien Brault, Hardbacon is a startup dedicated to helping the world’s 7.4 billion people to invest. Through smart tools, helpful apps, and great content, our goals are to educate people about investing and to help them choose relevant investment providers.</p>


    </div>
	<!-- Infoletter Subscrition -->
		<article class="container  about-members col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
<?php
$blogchef = get_users( 'role=officer');
$blogcofounder = get_users( 'role=cofounder');  
$blogadmin = get_users( 'role=Administrator');
$blogusers = get_users( 'role=Editor' );
echo '
<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
<p class="aboutdetail">  MANAGEMENT TEAM </p>
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
echo '</div>
<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
<h1 class="aboutdetail"> DREAM TEAM </h1>';
// ==============   Admins =======================
foreach ( $blogadmin as $user ) {
    
      affichage($user);
}

//regular users
foreach ( $blogcofounder as $user ) {
      affichage($user);
  
}

echo '</div>';
function affichage($user)
{ 
   $directory = get_bloginfo('template_directory');
  ?> 
<div class="members col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="member-picture "><?php 
    echo get_avatar($user -> user_email, 1000);
    echo '</div>';
    echo '<p class="member-name">' . esc_html( $user-> display_name ) . '</p>';
      echo '<p class="position_title">' . esc_html( $user-> positionen ) . '</p>';
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
    echo '<p class="member-description">' . get_user_meta($user-> id , 'description', true) . '</p>';
    ?> 
   
    </div>

<?php }
?>
        </article>   
</section>
<?php get_footer(); ?>