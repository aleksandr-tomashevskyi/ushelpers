<?php
   get_header();
//global variables
$allPosts = new WP_Query(array(
   'post_type' => 'post',
));
$currentPostId = get_the_ID();
$allPostsIds = [];
$randomPostChoices = [];
$choosenPostsIds = [];
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
            <div class="post-single__highlights-container">
               <div class="post-single__highlights-content">
                  <h3 class="post-single__highlights-title">Read our other posts:</h3>
                  <?php 
                  while($allPosts->have_posts()){
                     $allPosts->the_post();
                     array_push($allPostsIds, get_the_ID()); //filling an array with all post IDs
                     wp_reset_postdata();
                  };
                  $postsAvailable = count($allPostsIds); //counting all posts
                  if($postsAvailable <= 4){
                     $postsToDisplay = count($allPostsIds) - 1; //setting maximum posts for display to maximum posts available
                  } else{
                     $postsToDisplay = 4; //when number of posts are more than needed we display fixed number of posts
                  }
                  while(count($randomPostChoices)<$postsToDisplay){
                     $newChoice = rand(0,count($allPostsIds)-1);
                     if(!in_array($newChoice, $randomPostChoices) && $allPostsIds[$newChoice] != $currentPostId){
                        array_push($randomPostChoices, $newChoice);
                        array_push($choosenPostsIds, $allPostsIds[$newChoice]);
                     };
                  };
                  ?>
                  <div class="post-highlight-slider">
                     <?php for($i = 0; $i<count($choosenPostsIds); $i++){
                        $postToDisplay = get_post($choosenPostsIds[$i]);
                        ?>
                     <div class="post-highlight">
                           <div class="post-highlight__thumbnail-container"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($postToDisplay), 'full'); echo $image[0];?>" /></div>
                           <div class="post-highlight__date-container"><p class="post-highlight__date">Published on: <?php echo get_the_date('', $postToDisplay); ?></p></div>
                           <div class="post-highlight__title-container"><h3 class="post-highlight__title"><?php echo get_the_title($postToDisplay); ?></h3></div>
                           <div class="post-highlight__excerpt-container"><p class="post-highlight__excerpt"><?php echo get_the_excerpt($postToDisplay); ?></p></div>
                           <div class="post-highlight__read-more-link-container"><a href="<?php echo get_permalink($postToDisplay); ?>" class="post-highlight__read-more-link">Read more</a></div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>           
         </div>
      </div>
</div>
</main>
<?php 

get_footer();

?>