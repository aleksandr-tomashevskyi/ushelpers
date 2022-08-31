<?php /* Template Name: solutions-children-template */ ?>
<?php //global variables
$choicesLeftArray = get_field('staffing__left-column-content-choice');
$choicesRightArray = get_field('staffing__right-column-content-choice');
?>
<?php
get_header();
?>

<main class="main">
   <?php
      get_template_part( 'template-parts/main-block'); 
   ?>
   <section class="staffing staffing--<?php echo str_replace(" ","-", strtolower(get_the_title()));?>" style="background-image: url(<?php the_field('staffing__background-image')?>); background-repeat: no-repeat;">
      <div class="container">
         <div class="staffing__columns">
            <div class="staffing__column">
            <?php
                  if($choicesLeftArray){
                     foreach($choicesLeftArray as $choice){
                        if($choice == 'staffing__paragraph-above-title'){
                           echo '<p class="staffing__article">', the_field($choice), '</p>';
                        } else{
                           echo '<h2 class="staffing__title">', the_field($choice), '</h2>';
                        }
                     }
                  }
               ?>
            </div>
            <div class="staffing__column">
            <?php
                  if($choicesRightArray){
                     foreach($choicesRightArray as $choice){
                        echo '<p class="staffing__article">', the_field($choice), '</p>';
                     }
                  }
               ?>
            </div>
         </div>
      </div>
   </section>
   <?php get_template_part( 'template-parts/free-call'); ?>
</main>
<?php
get_footer();
?>