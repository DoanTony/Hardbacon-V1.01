  <?php get_header(); ?>
  <!-- Header -->
    <header>
          <section class="pages">
                 <div class="postcontainer">
                <?php 
                query_posts('cat=1');
                if(have_posts()):
                  while(have_posts()) : the_post();
                ?>
                   <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                          </div>
                   <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                   <?php  
                    the_content();
                
                   endwhile;      
                else:
                  echo 'NON-EXISTANT POST';
           
              endif;
?>
              </div>

          </section>

    </header>

   
    <?php get_footer(); ?>