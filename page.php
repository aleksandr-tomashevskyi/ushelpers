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
               <div class="popup-window__calendly-content">
                  <!-- Calendly inline widget begin -->
                  <div class="calendly-inline-widget" data-url="https://calendly.com/alehandro-tom/30min" style="min-width:320px;height:630px;"></div>
                  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                  <!-- Calendly inline widget end -->
               </div>
               <div class="popup-window__quiz-content">
                  <?php echo 'do_shortcode("[qsm quiz=2]")'; ?>

                  
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