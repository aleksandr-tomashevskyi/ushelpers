<?php /* Template Name: home*/ ?>
<?php //global variables
$globalBlocks = new WP_Query(array(
   'category_name' => 'Reusable blocks'
));
$casesSliderContent = new WP_Query(array(
   'category_name' => 'Cases slides'
))
?>
<?php
get_header();
?>
     <main class="main">
   <?php get_template_part( 'template-parts/popup'); ?>
         <section class="main-block">
            <div class="container">
               <div class="main-block__columns">
                  <div class="main-block__column main-block__column--index-page">
                     <div class="main-block__image-container">
                        <picture>
                           <source class="main-block__image" srcset="<?php the_field('home-main__image-mobile-pc');?>" media="(min-width: 1024px)">
                           <img class="main-block__image" src="<?php the_field('home-main__image-mobile');?>" alt="image">
                        </picture>
                     </div>
                  </div>
                  <div class="main-block__column">
                     <h1 class="main-block__title"><?php the_field('home-main__h1_title');?></h1>
                     <p class="main-block__description"><?php the_field('home-main__text-block-1');?></p>
                     <p class="main-block__sub-title"><?php the_field('home-main__text-block-2');?></p>
                     <button onclick="showForm()" class="main-block__button main-block__button--orange">REQUEST STAFF VIA QUIZ FORM</button>
                     <button class="main-block__button main-block__button--blue">SCHEDULE A FREE CALL</button>
                  </div>
               </div>
               <div class="main-block__text-block">
                  <p class="main-block__text-block-plain-text"><?php the_field('home-main__text-block-3');?></p>
                  <p class="main-block__text-block-sub-title"><?php the_field('home-main__text-block-4');?></p>
               </div>
            </div>
         </section>
         <section class="fields">
            <div class="container">
               <h2 class="fields__title"><?php the_field('fields__title');?></h2>
               <p class="fields__description"><?php the_field('fields__description');?>
               </p>
               <div class="fields__cards-block">
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-1');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-1');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-1-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-2');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-2');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-2-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-3');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-3');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-3-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-4');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-4');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-4-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-5');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-5');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-5-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-6');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-6');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-6-title');?></p>
                  </div>
                  <div class="fields__card-container">
                     <div class="fields__card-image-container">
                        <img class="fields__card-image fields__card-image-initial" src="<?php the_field('fields__shown-picture-7');?>" alt="">
                        <img class="fields__card-image fields__card-image-hover" src="<?php the_field('fields__hidden-picture-7');?>" alt="">
                     </div>
                     <p class="fields__card-description"><?php the_field('fields__picture-7-title');?></p>
                  </div>
               </div>
            <div class="fields__discover-more-container"><a class="fields__discover-more-link" href="#">DISCOVER MORE ABOUT OUR SPECIALISATIONS</a></div>
            </div>
         </div>
      </section>
      <?php
      get_template_part( 'template-parts/parallax');
      ?>
      <section class="getting">
         <div class="container">
            <h2 class="getting__title"><?php the_field('getting__title');?></h2>
            <div class="getting__columns">
               <div class="getting__column">
                  <h3 class="getting__column-title"><?php the_field('getting__column-1-title');?></h3>
                  <p class="getting__column-text"><?php the_field('getting__column-1-text');?>
                  </p>
               </div>
               <div class="getting__column">
                  <h3 class="getting__column-title"><?php the_field('getting__column-2-title');?></h3>
                  <p class="getting__column-text"><?php the_field('getting__column-2-text');?>
                  </p>
               </div>
               <div class="getting__column">
                  <h3 class="getting__column-title"><?php the_field('getting__column-3-title');?></h3>
                  <p class="getting__column-text"><?php the_field('getting__column-3-text');?>
                  </p>
               </div>
            </div>
            <a href="#"><div class="getting__read-more-link">Read more about us</div></a>
         </div>
      </section>
      <section class="cases">
         <div class="container">
            <h2 class="cases__title">Cases</h2>
            <div class="cases-slider">
               
               <?php   
               while( $casesSliderContent->have_posts()){
                  $casesSliderContent->the_post();
                  ?>
                  <div class="cases-slider__slide-container">
                  <div class="cases-slider__text-block">
                     <h3 class="cases-slider__title"><?php the_title();?></h3>
                     <p class="cases-slider__description"><?php 
                     $contentFull = explode(' ',get_the_content()); //separating long string into array of words
                     $excerpt = array();
                     $remainder = array();
                     $i = 0;
                     foreach($contentFull as $value){
                        if($i <= 50){
                           $excerpt[] = $value; //writing first 50 word into this array
                        } else{
                           $remainder[] = $value; //all the rest words come here
                        }
                        $i++;
                     };
                     echo implode(' ' , $excerpt); //assembling 50 words array back into single string
                     ?>
                     <span class="cases-slider__description-remainder">
                     <?php
                     echo implode(' ' , $remainder); //assembling remaind array back into single string
                     ?>
                     </span><button onclick="showFullPost(this)" class="cases-slider__readmore-button">...read more</button></p>
                  </div>
               </div>
                     <?php   
                  };
               ?>
            </div>
         </div>
      </section>
      <section class="solutions">
         <div class="container">
            <h2 class="solutions__title">Choose the best talent solution option for you!</h2>
            <div class="solutions__cards">
               <div class="solutions__card-container">
                  <div class="solutions__card-text-container">
                     <h3 class="solutions__card-title">Staffing</h3>
                     <p class="solutions__card-description">We ensure total secrecy throughout all phases of collaboration and the engagement of skilled professionals that will satisfy all of our clients' needs.</p>
                  </div>
                  <div class="solutions__card-link-container"><a class="solutions__card-link" href="<?php echo get_page_link(236) ?>">read more</a></div>
               </div>
               <div class="solutions__card-container">
                  <div class="solutions__card-text-container">
                     <h3 class="solutions__card-title">Outstaffing</h3>
                     <p class="solutions__card-description">The company hires only about 1/3 of all the workers. This is the core structure that establishes a company's image.</p>
                  </div>
                  <div class="solutions__card-link-container"><a class="solutions__card-link" href="<?php echo get_page_link(200) ?>">read more</a></div>
               </div>
               <div class="solutions__card-container">
                  <div class="solutions__card-text-container">
                     <h3 class="solutions__card-title">Staff Provision</h3>
                     <p class="solutions__card-description">We are an expert in our industry and can help you with your staffing problems irrespective of your line of business.</p>
                  </div>
                  <div class="solutions__card-link-container"><a class="solutions__card-link" href="<?php echo get_page_link(229) ?>">read more</a></div>
               </div>
               <div class="solutions__card-container">
                  <div class="solutions__card-text-container">
                     <h3 class="solutions__card-title">Temporary Staff</h3>
                     <p class="solutions__card-description">Our temporary staffing solution has a lot of expertise and has been there from the beginning of this trend. Our approach revolves around the ideals of quality, safety, and efficiency.</p>
                  </div>
                  <div class="solutions__card-link-container"><a class="solutions__card-link" href="<?php echo get_page_link(234) ?>">read more</a></div>
               </div>
               <div class="solutions__card-container">
                  <div class="solutions__card-text-container">
                     <h3 class="solutions__card-title">Leasing staff </h3>
                     <p class="solutions__card-description">To complete these jobs effectively, the company should collaborate closely with its managers, irrespective of their levels of management. The quality of the leadership is critical to its effectiveness.</p>
                  </div>
                  <div class="solutions__card-link-container"><a class="solutions__card-link" href="<?php echo get_page_link(253) ?>">read more</a></div>
               </div>
            </div>
         </div>
      </section>
      <section class="benefits">
         <div class="container">
            <h2 class="benefits__title">Also, you'll enjoy the following benefits:</h2>
            <div class="benefits__columns">
               <div class="benefits__column">
                  <img class="benefits__column-icon" src="<?php echo get_theme_file_uri("assets/img/benefits-icons/benefit-1.png")?>" alt="image">
                  <h3 class="benefits__column-title">Staff Recruitment</h3>
                  <p class="benefits__column-description">We'll be engaged in selecting personnel, observing all your conditions and wishes for the qualifications of future employees.</p>
               </div>
               <div class="benefits__column">
                  <img class="benefits__column-icon" src="<?php echo get_theme_file_uri("assets/img/benefits-icons/benefit-2.png")?>" alt="image">
                  <h3 class="benefits__column-title">Education of Staff</h3>
                  <p class="benefits__column-description">We provide training for employees and the development of relevant experience.</p>
               </div>
               <div class="benefits__column">
                  <img class="benefits__column-icon" src="<?php echo get_theme_file_uri("assets/img/benefits-icons/benefit-3.png")?>" alt="image">
                  <h3 class="benefits__column-title">Quality Control</h3>
                  <p class="benefits__column-description">We monitor the quality of work carried out by our employees and bear full responsibility for them.</p>
               </div>
               <div class="benefits__column">
                  <img class="benefits__column-icon" src="<?php echo get_theme_file_uri("assets/img/benefits-icons/benefit-4.png")?>" alt="image">
                  <h3 class="benefits__column-title">Salary Payment</h3>
                  <p class="benefits__column-description">All payments to staff, including bonuses, social benefits, and tax payments, are entirely on our shoulders.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="a-week">
         <div class="container__inner">
            <div class="a-week__columns">
               <div class="a-week__column">
                  <h2 class="a-week__title">HOW LONG DOES IT TAKE FOR US TO SOURCE CANDIDATES?</h2>
                  <h4 class="a-week__shout">A WEEK!</h4>
                  <p class="a-week__description">We choose relevant candidates and interview them to learn their personality and details, so you can easily see who matches your criteria to move forward.</p>
                  <button class="a-week__button">START A FREE WEEK TRIAL!</button>
               </div>
               <div class="a-week__column">
                  <div class="a-week__image-container">
                     <img class="a-week__image" src="<?php echo get_theme_file_uri("assets/img/a-week.png")?>" alt="image">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php
      get_template_part( 'template-parts/parallax');
      ?>
   
      <section class="our-partners">
         <div class="container">
            <h2 class="our-partners__title">Our partners</h2>
            <div class="our-partners-slider">
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_1.png")?>" alt="image">
                  </div>
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_2.png")?>" alt="image">
                  </div>
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_3.png")?>" alt="image">
                  </div>
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_4.png")?>" alt="image">
                  </div>
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_5.png")?>" alt="image">
                  </div>
                  <div class="our-partners__image-container">
                     <img class="our-partners__image" src="<?php echo get_theme_file_uri("assets/img/our-partners/logo_6.png")?>" alt="image">
                  </div>
            </div>
         </div>
      </section>
      <section class="veteran">
         <div class="container__inner">
            <div class="veteran__columns">
               <div class="veteran__column">
                  <div class="veteran__image-container">
                     <h2 class="veteran__image-title">WE ARE<br>VETERAN-FRIENDLY</h2>
                     <img class="veteran__image" src="<?php echo get_theme_file_uri("assets/img/veteran.png")?>" alt="image">
                  </div>
               </div>
               <div class="veteran__column">
                  <div class="veteran__image-container">
                     <h2 class="veteran__image-title">GET RID OF PROBLEMS WITH LABOR UNIONS</h2>
                     <img class="veteran__image" src="<?php echo get_theme_file_uri("assets/img/unions.png")?>" alt="image">
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