 <?php 
 function blog()
 {
?>
   <div class="blog row">
        <a href="<?php echo get_permalink(); ?>">  <?php the_post_thumbnail('medium', array(
             'alt' => trim(strip_tags( $post->post_title )),
               'title' => trim(strip_tags( $post->post_title )),
                  ));?>     
            <div class="title"> 
            <p><?php the_title();  ?> </p>
             </div>
        </a>
</div>    
<?php } ?>