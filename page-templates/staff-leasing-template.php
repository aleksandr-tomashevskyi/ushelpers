<?php /* Template Name: staff-leasing-template */ ?>

<?php
get_header();
?>

<main class="main">
   <?php
      get_template_part( 'template-parts/main-block'); 
   ?>
   <section class="staff-leasing">
      <div class="container">
         <div class="staff-leasing__columns">
            <div class="staff-leasing__column staff-leasing__column--left">
               <div class="staff-leasing__full-width-container">
                  <div class="container-for-full-width">
                     <h2 class="staff-leasing__title"><?php the_field('staff-leasing__title');?></h2>
                  </div>
               </div>
               <p class="staff-leasing__article"><?php the_field('staff-leasing__article-1')?></p>
               <p class="staff-leasing__article"><?php the_field('staff-leasing__article-2')?></p>
            </div>
            <div class="staff-leasing__column staff-leasing__column--right">
               <div class="staff-leasing__image-container">
                  <img class="staff-leasing__image" src="<?php the_field('staff-leasing__image')?>" alt="image">
               </div>
               <p class="staff-leasing__image-description"><?php the_field('staff-leasing__image-description') ?></p>
            </div>
         </div>
      </div>
      <section class="work-stages">
         <div class="container">
            <div class="work-stages__full-width-container work-stages__full-width-container">
               <div class="container-for-full-width">
                  <div class="work-stages__columns">
                     <div class="work-stages__column work-stages__column--left">
                        <div class="work-stages__image-container">
                           <img class="work-stages__image" src="<?php the_field('work-stages__image'); ?>" alt="image">
                        </div>
                     </div>
                     <div class="work-stages__column">
                        <div class="work-stages__article-container">
                           <h2 class="work-stages__title"><?php the_field('work-stages__title'); ?></h2>
                        </div>
                        <div class="work-stages__article-container">
                           <div class="work-stages__list-columns">
                           <?php the_field('work-stages__list-1'); ?>
                           <?php the_field('work-stages__list-2'); ?>
                           <?php the_field('work-stages__list-3'); ?>
                           </div>
                           <p class="work-stages__article work-stages__article--white"><?php the_field('work-stages__article-lower'); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </section>
   <?php get_template_part( 'template-parts/free-call'); ?>
</main>

<?php
get_footer();
?>