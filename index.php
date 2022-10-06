<?php
get_header();
?>

<main class="main">
   <div class="container">
      <div class="posts-container">
      <?php 
      while(have_posts()){
      the_post(); ?>
         <div class="post-blog">
            <div class="post-blog__thumbnail-container"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); echo $image[0];?>" /></div>
            <div class="post-blog__date-container"><p class="post-blog__date"><?php echo get_the_date(); ?></p></div>
            <div class="post-blog__title-container"><h3 class="post-blog__title"><?php echo get_the_title(); ?></h3></div>
            <div class="post-blog__excerpt-container"><p class="post-blog__excerpt"><?php echo get_the_excerpt(); ?></p></div>
            <div class="post-blog__read-more-link-container"><a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-blog__read-more-link">Read more</a></div>
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