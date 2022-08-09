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
                           <a class="navigation__link" href="./industries-parent.html">industries</a>
                           <ul class="navigation__inner-list">
                              <div class="navigation__inner-list-content-wrapper">
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./warehouse.html" class="navigation__link navigation__link--inner">Warehouse Logistics</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./trading.html" class="navigation__link navigation__link--inner">Trading</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./industrial-production.html" class="navigation__link navigation__link--inner">Industrial Production</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./food-production.html" class="navigation__link navigation__link--inner">Food Production</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./agriculture.html" class="navigation__link navigation__link--inner">Agriculture</a></li>
                              </div>
                           </ul>
                        </li>
                        <li class="navigation__list-item navigation__inner-list-trigger">
                           <a class="navigation__link" href="./our-solutions-parent.html">our solutions</a>
                           <ul class="navigation__inner-list">
                              <div class="navigation__inner-list-content-wrapper">
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./staffing.html" class="navigation__link navigation__link--inner">staffing</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./outstaffing.html" class="navigation__link navigation__link--inner">outstaffing</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./staff-provision.html" class="navigation__link navigation__link--inner">staff provision</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./temporary-staff.html" class="navigation__link navigation__link--inner">temporary staff</a></li>
                                 <li class="navigation__list-item navigation__inner-list-item"><a href="./staff-leasing.html" class="navigation__link navigation__link--inner">staff leasing</a></li>
                              </div>
                           </ul>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="#">hiring advice</a>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="./about-us.html">about us</a>
                        </li>
                        <li class="navigation__list-item">
                           <a class="navigation__link" href="./contacts.html">contacts</a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <div class="header__menu-icon"><span class="header__menu-icon-item"></span></div>
            </div>
         </div>
      </header>