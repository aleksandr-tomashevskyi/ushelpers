'use strict'

// ***Global Variables**
let bodyScrollDisableFlag = false;
let burgerMenuMemoryFlag = false;
let listActivationFlag = false;
let navInnerElements;
let navListTrigger;
let windowScrollValue;


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

//    Hide scroll function for use in other functions start

function hideShowScroll(){
   if(!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
      // true for mobile device
      if(!bodyScrollDisableFlag){ //checking if scroll was already disabled
         document.body.style.overflow = 'hidden'; //scroll disable
         document.body.style.left = '-7px'; //removing jumping of the content due to scroll width being removed
         bodyScrollDisableFlag = true; //setting memory flag for returning scroll back in the future
      } else{
         document.body.style.overflow = 'auto';
         document.body.style.left = '0';
         bodyScrollDisableFlag = false;
      }
   } else{
      if(!bodyScrollDisableFlag){ //checking if scroll was already disabled
         document.body.style.overflow = 'hidden'; //scroll disable
         bodyScrollDisableFlag = true; //setting memory flag for returning scroll back in the future
      } else{
         document.body.style.overflow = 'auto';
         bodyScrollDisableFlag = false;
      }
   }
}

//    Hide scroll function for use in other functions end

//    Burger menu show\hide start

const menuIconBlock = document.querySelector(".header__menu-icon");


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

function innerListClickCheckBurger(event){
   if(event.target.closest(".navigation__inner-list-trigger")){
      navInnerElements = event.target.closest(".navigation__inner-list-trigger").children;
      headerInnerList(navInnerElements);
   }
}

function checkScreenSize(event){ //check whether we are in burger or full size menu to choose appropriate behavior
   if(document.documentElement.clientWidth >= 1024){
      innerListClickCheck(event);
   } else{
      innerListClickCheckBurger(event);
   }
}

function headerInnerList(element){
   Array.from(element).forEach(showInnerList); //getting nested list and giving it to "open function"
   listActivationFlag = !listActivationFlag; //toggle boolean
}
function showInnerList(el){
   if (el.matches(".navigation__inner-list")){
      el.classList.toggle("navigation__inner-list--active");
      el.parentElement.classList.toggle("navigation__inner-list-trigger--active");
      setTimeout(() => el.firstChild.nextSibling.classList.toggle("navigation__inner-list-content-wrapper--active"), 10);
   }
}

if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
   document.addEventListener("click", checkScreenSize);
}


//    Header inner lists end

//    Fields images change on touch devices start

function fieldsImages(event){
   if(event.target.closest(".fields__card-image-container")){
      event.target.parentElement.lastChild.previousSibling.classList.toggle("fields__card-image-hover--active");
   }
}

if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
   if(document.querySelector(".fields__cards-block")){
      document.querySelector(".fields__cards-block").addEventListener("click", fieldsImages);
   }
}

//    Fields images change on touch devices end

//    Parallax scroll start
const parallaxContainers = document.querySelectorAll(".parallax");

parallaxScroll();

function parallaxScroll(){
   parallaxContainers.forEach((element)=> {
      let parallaxContainerPosition = element.offsetTop - window.innerHeight;
      windowScrollValue = window.scrollY;
      let parallaxChangeValue = (parallaxContainerPosition - windowScrollValue);
      const parallaxOuterContainer = element.firstChild.nextSibling;
      if(windowScrollValue >= parallaxContainerPosition & !(windowScrollValue >=((parallaxContainerPosition + window.innerHeight)+200))){
         parallaxOuterContainer.style.top=`${parallaxChangeValue*0.2}px`;
      }
   })
}

document.addEventListener("scroll", parallaxScroll)

//    Parallax scroll end