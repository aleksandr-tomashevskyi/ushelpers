<?php /* Template Name: contacts */ ?>
<?php //global variables
$globalBlocks = new WP_Query(array(
   'category_name' => 'Reusable blocks'
));
?>

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

<?php // Free call block
   while( $globalBlocks->have_posts()){
      $globalBlocks->the_post();
      if(get_the_ID() == 196){
         the_content();
      };
   };
   ?>
</main>
<?php
get_footer();
?>