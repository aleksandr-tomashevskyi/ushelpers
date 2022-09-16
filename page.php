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
   <div class="call-scheduler">
      <div class="call-scheduler__card">
         <form class="call-scheduler__form" method='POST' action='<?php echo esc_url(admin_url('admin-post.php')) ?>' onsubmit='formHandleChange()'>
         <input type="hidden" name="action" value='get_form_data'>
         <input type="hidden" name="page-id-redirect" value="<?php echo get_the_ID(); ?>">
         <input type="hidden" name="country-dial-code">
            <div class="call-scheduler__wrapper">
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Your name</label>
                  <input type="text" name='user-name' class="call-scheduler__input" pattern="^[a-zA-Z]+$">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Phone</label>
                  <input type="tel" name='user-phone' class="call-scheduler__input call-scheduler__input--phone" pattern="[0-9]{5,12}">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Email</label>
                  <input type="email" name='user-email' class="call-scheduler__input call-scheduler__input--email">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Date for call</label>
                  <input type="date" name='user-date' class="call-scheduler__input">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Time for call</label>
                  <input type="time" name='user-time' class="call-scheduler__input">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <button type="submit" class="call-scheduler__input">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
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

</main>

<?php

get_footer();
?>