<?php /* Template Name: solutions-children-template */ ?>
<?php //global variables
$globalBlocks = new WP_Query(array(
   'category_name' => 'Reusable blocks'
));
$choicesLeftArray = get_field('staffing__left-column-content-choice');
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