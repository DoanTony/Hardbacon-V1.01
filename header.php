<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <?php wp_head(); ?>
<?php ?>
 <?php 
  $currentlang = get_bloginfo('language');
     $directory = get_bloginfo('template_directory');
 if($currentlang=="en-US"){
   $title = "Hardbacon: Compare Canadian Discount Brokers and Robo-Advisors";
 }
 else
 {
   $title = "Hardbacon: Comparez les courtiers et les robot-conseillers";
 }

 ?>
    <title><?php if(is_home())
    { 
    	echo $title; 
     } 
     elseif(is_archive())
     {
      echo the_archive_title();
     }
     else
     {
 		 echo the_title();
     }  
     ?></title>




<!-- fav Icon -->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>

<body>

    <!-- Navigation -->
    <div  id="mainNav">
        <nav class="navbar navbar-default">
            <div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12" role="navigation">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation </span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
                <a href="<?php bloginfo('url'); ?>">  <img class="hardbacon-logo" src="http://hardbaconmedia.hardbacon.ca/media/2016/09/hardbacon-logo.png" alt="hardbacon_logo"/> </a>
             
              </div>
                  <div class="header-social text-left"> 

                        <ul class="list-inline">
      
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

                        </ul>    
                        </div>           
              <div class="navigation">
            
                      
                    <div class="nav navbar-nav navbar-right">

                    <?php 
                      $args = array('theme_location' => 'primary',
                        'menu_class' => 'hb-menu' );
                      ?>
                      <?php wp_nav_menu($args); ?>
                     
                  </div>

              </div>
          
       
    </nav>
   </div>
 
<div id="hardbacon-body">

