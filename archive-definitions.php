<?php  get_header();

   $args = array(
    'numberposts'  => -1,
    'orderby' => 'ID',
    'order' => 'ASC',
    'post_type' => 'definitions',
    'suppress_filters' => false // Helps for Language page by not suppressing filters 
    );

   $definitionsTable = get_posts($args);
   $definitionLists = Array();
       $siteurl = site_url();
    $currentlang = get_bloginfo('language');

      if($currentlang=="en-US")
      {
        $urldefinition = "/definitions/";
      }
      else
      {
        $urldefinition = "/fr/definitions/";
      }

   foreach($definitionsTable as $posts)
   {  
      $post = get_post_meta($posts -> ID ,"" ,true);
      $definition = new term();
      $definition -> set_name(get_the_title($posts -> ID));
      $definition -> set_pageurl(get_permalink($posts-> ID));
    
      array_push($definitionLists,$definition);
   } ?>
      <section class="container-fluid "> 
      <div class="row preload-content">
      <div class="encyclopedia-container  col-lg-9 col-md-9 col-sm-19 col-xs-12">  
                <ol type="A" class="encyclopedia-content"> 
                <!-- ============== Content pre-loaded with Ajax ============== -->
                </ol>
        
       </div>       
              <div id="encyclopedia-menu" class="encyclopedia-menu col-lg-3 col-md-3 col-sm-3 col-xs-12"> 
                <ol type="a" id="list-definitions">
                  <?php 
                    foreach($definitionLists as $definition)
                    { 
                      $name = $definition -> get_name();

                      ?>
                      <a href="<?php echo $definition -> get_pageurl(); ?> " name="<?php echo $name; ?>"> <li name="<?php echo $name; ?>"> 
                     <label for="<?php echo $name ?>" data-name="<?php echo $name; ?>">&nbsp;>&nbsp;<?php echo $name; ?>
                       </label>
                       <label for="find">Find out More</label></li></a>
                   <?php }
                  ?>
                </ol>
              </div>  
              </div>
              <div id="loading" class="text-center col-lg-9 col-md-9 col-sm-19 col-xs-12"><img src="http://hardbaconmedia.hardbacon.ca/media/2016/09/hb-loading.gif" />
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>

              </div>
              
      </section>   
<?php 
get_footer();
?>