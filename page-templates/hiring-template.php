<?php /* Template Name: hiring-template */ ?>

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
   <section class="industries">
      <div class="container">
         <div class="industries__outer-grid industries__outer-grid--<?php echo str_replace(" ","-", strtolower(get_the_title()));?>">
            <div class="industries__outer-grid-cell industries__outer-grid-cell--first">
               <?php if(get_field('list-of-specialties__choice')){
                        foreach(get_field('list-of-specialties__choice') as $choice){
                           if($choice == "list-of-specialties__title"){
                              echo '<h2 class="industries__title">';
                              echo get_field($choice);
                              echo '</h2>';
                           } elseif($choice == "list-of-specialties__list"){
                              echo '<ul class="industries__list">';
                              echo get_field($choice);
                              echo '</ul>';
                           } elseif($choice == "list-of-specialties__paragraph-1"){
                              echo  '<p class="industries__article">';
                              echo get_field($choice);
                              echo '</p>';
                           } elseif($choice == "list-of-specialties__paragraph-2"){
                              echo  '<p class="industries__article">';
                              echo get_field($choice);
                              echo '</p>';
                        };
                     }
                  }?>
            </div>
            <div class="industries__outer-grid-cell industries__outer-grid-cell--second">
               <div class="industries__image-container">
                  <img class="industries__image" src="<?php the_field('list-of-specialties__image') ?>" alt="">
            </div>
            </div>
         </div>
      </div>
   </section>
   <section class="staffing staffing--<?php echo str_replace(" ","-", strtolower(get_the_title()));?>" style="background-image: url(<?php the_field('staffing__background-image')?>); background-repeat: no-repeat;">
      <div class="container">
         <div class="staffing__columns">
            <div class="staffing__column">
            <?php
                  if($choicesLeftArray){
                     foreach($choicesLeftArray as $choice){
                        if($choice == 'staffing__title'){
                           echo '<h2 class="staffing__title">', the_field($choice), '</h2>';
                        } 
                        else{
                           echo '<p class="staffing__article">', the_field($choice), '</p>';
                        }
                     }
                  }
               ?>
            </div>
            <div class="staffing__column">
            <?php
                  $choicesRightArray = get_field('staffing__right-column-content-choice');
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