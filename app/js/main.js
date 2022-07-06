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
   // hideShowScroll();
}

menuIconBlock.addEventListener("click", showHideBurgerMenu)

//    Burger menu show\hide end

//    Header inner lists start

let listActivationFlag = false;
let navInnerElements;
let navListTrigger;


function showInnerList(el){
   if (el.matches(".navigation__inner-list")){
      el.classList.toggle("navigation__inner-list--active");
      el.parentElement.classList.toggle("navigation__inner-list-trigger--active");
   }
}

function innerListClickCheck(event){
   //checking if the click was on trigger list el
   if(event.target.closest(".navigation__inner-list-trigger")){
      //checking if it's already open
      if(listActivationFlag){
         //checking if clicked trigger is the same as already opened list
         if(event.target.closest(".navigation__inner-list-trigger").firstChild.nextSibling.textContent == navListTrigger.firstChild.nextSibling.textContent){
            //closing already opened list
            navInnerElements = event.target.closest(".navigation__inner-list-trigger").children;
            headerInnerList(navInnerElements);
         } else{
            //closing already opened list and opening new one
            headerInnerList(navInnerElements);
            navInnerElements = event.target.closest(".navigation__inner-list-trigger").children;
            headerInnerList(navInnerElements);
         }
      } else{
         //opening inner list
         navInnerElements = event.target.closest(".navigation__inner-list-trigger").children;
         headerInnerList(navInnerElements);
      }
      // remembering the item with opened list for future checks
      navListTrigger = event.target.closest(".navigation__inner-list-trigger");
   } else{
      //closing already opened list after click elsewhere
      if(listActivationFlag){
         headerInnerList(navInnerElements);
      }
   }
   
}

function headerInnerList(element){
   Array.from(element).forEach(showInnerList);
   listActivationFlag = !listActivationFlag; //toggle boolean
}

if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
   document.addEventListener("click", innerListClickCheck);
}


//    Header inner lists end