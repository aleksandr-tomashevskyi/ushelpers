<?php
get_header();
?>

<main class="main">

<?php 
while(have_posts()){
   the_post();
   the_content();
}
?>

<div class="container">
   <?php echo do_shortcode('[fcs_initialize]') ?>
</div>
<?php echo get_the_ID(); ?>
<div class="container">
   <ul class="free-call-entries">
      <?php 
      $freeCallEntries = new WP_Query(array(
         'post_type' => 'fcs_entries_data',
         'posts_per_page' => -1
      ));
      while($freeCallEntries->have_posts()){
         $freeCallEntries->the_post();?>
         <li>
            <input value='<?php echo esc_attr(get_the_title());?>'>
            <textarea><?php echo esc_attr(get_the_content()); ?></textarea>
         </li>
         <?php
      }
      ?>
   </ul>
</div>
<?php echo get_the_ID(); ?>
<?php echo plugins_url('free-call-scheduler/fcs.js'), 'something'; ?>

</main>

<?php

get_footer();
?>