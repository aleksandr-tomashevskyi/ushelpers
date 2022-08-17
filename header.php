<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-screen-scale=1.0">
   <meta name="author" content="Oleksandr Tomashevskyi">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
<header class="header">
         <div class="container">
            <div class="header__content">
               <div class="logo">
                  <?php the_custom_logo();?>
               </div>
               <nav class="navigation">
                  <div class="navigation__body">
                     <ul class="navigation__list">
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="#">request talent</a>
                        </li>
                        <li class="navigation__list-item navigation__inner-list-trigger">
                           <a class="navigation__link" href="<?php echo site_url('/industries') ?>">industries</a>
                           <ul class="navigation__inner-list">
                              <div class="navigation__inner-list-content-wrapper">
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/warehouse-logistics') ?>">Warehouse Logistics</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/trading') ?>">Trading</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/industrial-production') ?>">Industrial Production</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/food-production') ?>">Food Production</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/agriculture') ?>">Agriculture</a></li>
                              </div>
                           </ul>
                        </li>
                        <li class="navigation__list-item navigation__inner-list-trigger">
                           <a class="navigation__link" href="<?php echo site_url('/our-solutions') ?>">our solutions</a>
                           <ul class="navigation__inner-list">
                              <div class="navigation__inner-list-content-wrapper">
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/staffing') ?>">staffing</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/outstaffing') ?>" >outstaffing</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/staff-provision') ?>">staff provision</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/temporary-staff') ?>">temporary staff</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a class="navigation__link navigation__link--inner" href="<?php echo site_url('/staff-leasing') ?>">staff leasing</a></li>
                              </div>
                           </ul>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="#">hiring advice</a>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="<?php echo site_url('/about-us') ?>">about us</a>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="<?php echo site_url('/contacts') ?>">contacts</a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <div class="header__menu-icon"><span class="header__menu-icon-item"></span></div>
            </div>
         </div>
      </header>