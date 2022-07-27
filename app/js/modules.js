//    JQuery

$.get( "../modules/global-elements/header.html", function( data ) {
   $( ".header" ).html( data );
 });
   //header
// $(".header").load("../modules/global-elements/header.html");
// //footer
$(".footer").load("../modules/global-elements/footer.html");
//free-call
$(".free-call").load("../modules/global-elements/free-call.html");
$(".parallax").load("../modules/global-elements/parallax.html");