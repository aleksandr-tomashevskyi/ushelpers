<?php /* Template Name: contacts */ ?>

<?php
get_header();
?>
<main class="main">

<section class="contacts">
   <div class="container">
      <div class="contacts__columns">
         <h2 class="contacts__page-title">now we are active in these states, but ready for new challenges</h2>
         <div class="contacts__column">
            <div class="contacts__image-contaner">
               <img class="contacts__image" src="<?php the_field('contacts__image')?>" alt="image">
            </div>
            <div class="contacts__column">
            <div class="contacts__block-wrapper">
               <div class="contacts__text-container">
                  <h2 class="contacts__title">OUR CONTACTS</h2>
                  <p class="contacts__description">Call or text us by:<br><?php the_field('contacts__address-field-1')?><br><?php the_field('contacts__address-field-2')?><br><?php the_field('contacts__address-field-3')?></p>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>

<?php get_template_part( 'template-parts/free-call'); ?>

<div class="container">
   <div class="call-scheduler">
      <div class="call-scheduler__card">
         <form action="POST" class="call-scheduler__form">
            <div class="call-scheduler__wrapper">
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Your name</label>
                  <input type="text" class="call-scheduler__input">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Phone</label>
                  <input type="tel" class="call-scheduler__input">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Date for call</label>
                  <input type="date" class="call-scheduler__input">
               </div>
               <div class="call-scheduler__single-entry-wrapper">
                  <label>Time for call</label>
                  <input type="time" class="call-scheduler__input">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

</main>
<?php
get_footer();
?>