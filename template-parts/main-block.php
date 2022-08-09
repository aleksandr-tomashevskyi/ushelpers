<section class="main-block">
   <div class="container">
      <div class="main-block__columns <?php if(is_child()) echo 'main-block__columns--solutions-children'?>">
         <div class="main-block__column main-block__column--solutions-page">
            <div class="main-block__image-container">
                     <img class="main-block__image" src="<?php the_field('main-block__image');?>" alt="image">
            </div>
         </div>
         <div class="main-block__column">
            <h1 class="main-block__title"><?php the_field('main-block__title');?></h1>
            <p class="main-block__description"><?php the_field('main-block__text');?></p>
            <button class="main-block__button main-block__button--orange">REQUEST STAFF VIA QUIZ FORM</button>
         </div>
      </div>
   </div>
</section>