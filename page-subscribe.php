<?php get_header();
   $directory = get_bloginfo('template_directory'); ?>



    <section>
    <div class="container landing-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="contents">
    <p>INTERESTED IN<br/> MONEY AND INVESTING?</p>
    <h3>SUBSCRIBE TO OUR NEWSLETTER AND GET EXCLUSIVE CONTENT.</h3>
           
 <?php echo do_shortcode('[sibwp_form id=1]'); ?>
   </div>
    <img src="<?php echo $directory; ?>/img/background.png" > 
   </div>
  <div>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57977d638f49a7e3"></script>

 
<?php get_footer(); ?>