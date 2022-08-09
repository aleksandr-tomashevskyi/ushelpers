<?php /* Template Name: industry-children-template */ ?>

<?php
get_header();
?>
<main class="main">
            <?php
               get_template_part( 'template-parts/main-block');
            ?>
         <section class="industries">
            <div class="container">
               <div class="industries__outer-grid">
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
                     <div class="industries__inner-grid">
                        <div class="industries__inner-grid-cell industries__inner-grid-cell--first industries__inner-grid-cell--first-warehouse">
                           <img class="industries__inner-grid-cell-image" src="<?php the_field('list-of-specialties__block-image-1')?>" alt="">
                           <h3 class="industries__inner-grid-cell-title"><?php the_field('list-of-specialties__block-title-1')?></h3>
                        </div>
                        <div class="industries__inner-grid-cell industries__inner-grid-cell--second industries__inner-grid-cell--second-warehouse">
                           <img class="industries__inner-grid-cell-image" src="<?php the_field('list-of-specialties__block-image-2')?>" alt="">
                           <h3 class="industries__inner-grid-cell-title"><?php the_field('list-of-specialties__block-title-2')?></h3>
                        </div>
                        <div class="industries__inner-grid-cell industries__inner-grid-cell--third industries__inner-grid-cell--third-warehouse">
                           <img class="industries__inner-grid-cell-image" src="<?php the_field('list-of-specialties__block-image-3')?>" alt="">
                           <h3 class="industries__inner-grid-cell-title"><?php the_field('list-of-specialties__block-title-3')?></h3>
                        </div>
                     </div>
                  </div>
                  <div class="industries__outer-grid-cell industries__outer-grid-cell--third">
                  <?php
                     $my_postid = 159;//This is page id or post id
                     $content_post = get_post($my_postid);
                     $content = $content_post->post_content;
                     $content = apply_filters('the_content', $content);
                     $content = str_replace(']]>', ']]&gt;', $content);
                     echo $content;
                     ?>
                  </div>
               </div>
            </div>
         </section>
         <?php
            get_template_part( 'template-parts/choice-links');
         ?>
         <?php

         // $globalBlocks = new WP_Query(array(
         //    'category_name' => 'Reusable blocks'
         // ));

         // while( $globalBlocks->have_posts()){
         //    $globalBlocks->the_post();
         //    if(get_the_ID() == 163){
         //       the_content();
         //    };
         // };
            // $my_postid = 163;//This is page id or post id
            // $content_post = get_post($my_postid);
            // $content = $content_post->post_content;
            // $content = apply_filters('the_content', $content);
            // $content = str_replace(']]>', ']]&gt;', $content);
            // echo $content;
            ?>
</main>
<?php
get_footer();
?>