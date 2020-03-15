<?php get_header();?>
<!--start container-->
<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm">
    
      <?php the_title(); ?>
      <?php echo get_the_post_thumbnail( $post_id, "thumbnail", array( "class" => "alignleft" ) );?>
      <?php the_content(); ?>
		
    </div>
  </div>
</div>
<?php endwhile ?>
<!--end container-->
<?php get_footer() ?>