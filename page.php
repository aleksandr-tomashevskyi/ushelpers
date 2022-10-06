<?php
get_header();
?>

<main class="main">

<?php 
while(have_posts()){
   the_post();
   ?><p><?php the_content();?>test test test</p><?php 
   echo get_the_post_thumbnail();
}
?>
<?php echo get_the_ID(); ?>
<p>Test</p>

</main>

<?php

get_footer();
?>