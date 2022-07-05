'use strict'

//    Slick slider start
$(document).ready(function(){
   $('.slider').slick({
      arrows: true,
      speed: 500,
      variableWidth: true,
      centerMode: true,
      adaptiveHeight: true
    });
})

//    Slick slider end

//    Burger menu show\hide start

const menuIconBlock = document.querySelector(".header__menu-icon");
let burgerMenuMemoryFlag = false;


function showHideBurgerMenu(event){
   document.querySelector(".navigation__body").classList.toggle("navigation__body--active");
   if(!burgerMenuMemoryFlag){
      burgerMenuMemoryFlag = true;
   } else{
      burgerMenuMemoryFlag = false;
   }
   hideShowScroll();
}

menuIconBlock.addEventListener("click", showHideBurgerMenu)

//    Burger menu show\hide end

//    Header inner lists start

function headerInnerList(event){
   if(event.target.closest(".navigation__inner-list-trigger")){
   document.querySelector(".navigation__inner-list").classList.toggle("navigation__inner-list--active");
}
}

document.querySelector(".navigation__list").addEventListener("click", headerInnerList);


//    Header inner lists end