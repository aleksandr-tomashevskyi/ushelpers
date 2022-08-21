<div class="four-columns-grid">
   <div class="four-columns-grid__grid-cell four-columns-grid__grid-cell--first">
      <h2 class="four-columns-grid__title"><?php the_field('four-grid__title'); ?></h2>
      <p class="four-columns-grid__description"><?php the_field('four-grid__main-text');?></p>
   </div>
   <div class="four-columns-grid__grid-cell four-columns-grid__grid-cell--second">
      <a class="four-columns-grid__cell-link" href="<?php echo get_page_link(get_field('four-grid__link-id-second')); ?>">
         <h3 class="four-columns-grid__cell-title"><?php the_field('four-grid__second-cell-title');?></h3>
         <p class="four-columns-grid__read-more">Click to read more</p>
         <div class="four-columns-grid__cell-image-container">
            <picture>
               <source srcset="<?php the_field('four-grid__second-cell-img--1024');?>" media="(min-width: 1024px)">
               <img class="four-columns-grid__cell-image four-columns-grid__cell-image--vertical" src="<?php the_field('four-grid__second-cell-img');?>" alt="image">
            </picture>
         </div>
      </a>
   </div>
   <div class="four-columns-grid__grid-cell four-columns-grid__grid-cell--third">
      <a class="four-columns-grid__cell-link" href="<?php echo get_page_link(get_field('four-grid__link-id-third')); ?>"> 
      <h3 class="four-columns-grid__cell-title"><?php the_field('four-grid__third-cell-title');?></h3>
      <p class="four-columns-grid__read-more">Click to read more</p>
      <div class="four-columns-grid__cell-image-container">
            <img class="four-columns-grid__cell-image four-columns-grid__cell-image--vertical" src="<?php the_field('four-grid__third-cell-img');?>" alt="image">
      </div>
   </a>
   </div>
   <div class="four-columns-grid__grid-cell four-columns-grid__grid-cell--fourth">
      <a class="four-columns-grid__cell-link" href="<?php echo get_page_link(get_field('four-grid__link-id-fourth')); ?>">
      <h3 class="four-columns-grid__cell-title"><?php the_field('four-grid__fourth-cell-title');?></h3>
      <p class="four-columns-grid__read-more">Click to read more</p>
      <div class="four-columns-grid__cell-image-container">
            <img class="four-columns-grid__cell-image" src="<?php the_field('four-grid__fourth-cell-img');?>" alt="image">
      </div>
      </a>
   </div>
   <div class="four-columns-grid__grid-cell four-columns-grid__grid-cell--fifth">
      <a class="four-columns-grid__cell-link" href="<?php echo get_page_link(get_field('four-grid__link-id-fifth')); ?>">
      <h3 class="four-columns-grid__cell-title"><?php the_field('four-grid__fifth-cell-title');?></h3>
      <p class="four-columns-grid__read-more">Click to read more</p>
      <div class="four-columns-grid__cell-image-container">
            <img class="four-columns-grid__cell-image" src="<?php the_field('four-grid__fifth-cell-img');?>" alt="image">
      </div>
      </a>
   </div>
   <div class="four-columns-grid__grid-cell
   four-columns-grid__grid-cell--sixth">
      <a class="four-columns-grid__cell-link" href="<?php echo get_page_link(get_field('four-grid__link-id-sixth')); ?>">
      <h3 class="four-columns-grid__cell-title"><?php the_field('four-grid__sixth-cell-title');?></h3>
      <p class="four-columns-grid__read-more">Click to read more</p>
      <div class="four-columns-grid__cell-image-container">
            <img class="four-columns-grid__cell-image four-columns-grid__cell-image--vertical" src="<?php the_field('four-grid__sixth-cell-img');?>" alt="image">
      </div>
      </a>
   </div>
</div>