<?php
get_header();
?>

<main class="main">
   <div class="container">
      <div class="posts-container">
      <?php 
      while(have_posts()){
      the_post(); ?>
         <div class="post">
            <div class="post__thumbnail-container"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); echo $image[0];?>" /></div>
            <div class="post__date-container"><?php echo get_the_date() ?></div>
            <div class="post__title-container"><?php echo get_the_title() ?></div>
            <div class="post__excerpt-container"><?php echo get_the_excerpt() ?></div>
            <div class="post__read-more-button-container"></div>
         </div> 
      <?php
}
?>
      </div>

</div>
</main>

<?php
get_footer();
?>