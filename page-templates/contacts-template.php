<?php /* Template Name: contacts */ ?>
<?php
get_header();
?>
<main class="main">
<?php get_template_part( 'template-parts/popup'); ?>
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
                  <p class="contacts__description">Call or text us by:<br>WhatsApp: <a href="https://wa.me/<?php str_replace(' ', '', the_field('contacts__address-field-1'))?>" class="contacts__whattsup-link"><?php the_field('contacts__address-field-1')?></a><br>Mail: <a href="mailto:<?php the_field('contacts__address-field-2')?>" class="contacts__email-link"><?php the_field('contacts__address-field-2')?></a><br><?php the_field('contacts__address-field-3')?></p>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>

<?php get_template_part( 'template-parts/free-call'); ?>

</main>
<?php
get_footer();
?>