$(document).ready(function (){
$('.nav-show-click-s').hide();
$(".click_display_nav").click(function (ev) {
    ev.preventDefault();
    if ($(this).hasClass("rotation-lien")) {
        $(this).removeClass("rotation-lien");
        
    }
    else {
        $(this).addClass("rotation-lien")
  
    }
    $('.nav-show-click-s').slideToggle();
});

});