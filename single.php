<?php

   get_header();
?>
<main class="main">
   <div class="container">
      <div class="post-single">
         <div class="post-single__thumbnail-container"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full'); echo $image[0];?>" /></div>
         <div class="post-single__wrapper">
            <div class="post-single__content">
               <div class="post-single__title-container"><h1 class="post-single__title"><?php echo get_the_title(); ?></h1></div>
               <div class="post-single__date-container"><p class="post-single__date">Published on: <?php echo get_the_date(); ?></p></div>
               <div class="post-single__post-content-container">
                  <p class="post-single__paragraph"><?php the_content();?></p>
                  <div class="post-single__post-image-block-contaner">
                     <div class="post-single__post-image-contaner"><img class="post-single__post-image" src="<?php the_field('post__paragraph-1-image');?>" alt=""></div>
                     <p class="post-single__image-caption"><?php the_field('post__paragraph-1-image-caption');?></p>
                  </div>
                  <h2 class="post-single__paragraph-title"><?php the_field('post__paragraph-title-1');?></h2>
                  <p class="post-single__paragraph"><?php the_field('post__paragraph-1');?></p>
                  <h2 class="post-single__paragraph-title"><?php the_field('post__paragraph-title-2');?></h2>
                  <p class="post-single__paragraph"><?php the_field('post__paragraph-2');?></p>
               </div>
            </div>
            <div class="post-single__highlights-container"></div>
         </div>
      </div>
</div>
</main>
<?php 

get_footer();

?>