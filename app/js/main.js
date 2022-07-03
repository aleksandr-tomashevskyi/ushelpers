'use strict'

//    Slick slider start
$(document).ready(function(){
   $('.slider').slick({
      arrows: true,
      speed: 500,
      variableWidth: true
    });
})



//    Slick slider end

//    Popup form start

// let bodyScrollDisableFlag = false;
// let acceptionWindowFlag = false;

// const formLink = document.querySelector(".portfolio__form-link");

// const contactForm = document.querySelector(".popup-form");

// const popupFormButton = document.querySelector(".popup-form__button");

// function hideShowScroll(){
//    if((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))){
//       // true for mobile device
//       // console.log("check")
//       console.log("check")
//       if(!bodyScrollDisableFlag){ //checking if scroll was already disabled
//          document.body.style.overflow = 'hidden'; //scroll disable
//          bodyScrollDisableFlag = true; //setting memory flag for returning scroll back in the future
//       } else{
//          document.body.style.overflow = 'auto';
//             bodyScrollDisableFlag = false;
//       }
// } else{
//    if(!bodyScrollDisableFlag){ //checking if scroll was already disabled
//       document.body.style.overflow = 'hidden'; //scroll disable
//       document.body.style.left = '-7px'; //removing jumping of the content due to scroll width being removed
//       bodyScrollDisableFlag = true; //setting memory flag for returning scroll back in the future
//    } else{
//       document.body.style.overflow = 'auto';
//          document.body.style.left = '0';
//          bodyScrollDisableFlag = false;
//    }
// }
// }

// function showForm(){
//    document.querySelector(".popup-form").classList.toggle("popup-form--active");
//    setTimeout(()=>document.querySelector(".popup-form__body").classList.toggle("popup-form__body--active"), 10);
//    //disabling scroll
//    hideShowScroll();
// }
// function hideForm(event){
//    if(!event.target.closest(".popup-form__body")){
//       document.querySelector(".popup-form").classList.toggle("popup-form--active");
//       document.querySelector(".popup-form__body").classList.toggle("popup-form__body--active");
//       //returning scroll
//       hideShowScroll();
//       if(acceptionWindowFlag){
//          document.querySelector(".popup-form__wrapper").classList.toggle("popup-form__wrapper--accepted");
//          acceptionWindowFlag = false;
//       }
//    }
// }

// function showAccepted(event){
//    event.preventDefault();
//    document.querySelector(".popup-form__wrapper").classList.toggle("popup-form__wrapper--accepted");
//    acceptionWindowFlag = true;
// }

// formLink.addEventListener("click", showForm);
// contactForm.addEventListener("click", hideForm);
// popupFormButton.addEventListener("click", showAccepted);

//    Popup form end


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