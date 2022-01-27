const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

if (menu!==null){
  menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
  });
}

// jQuery
$(document).ready(function(){
  $("#navbar__logo").click(function(){
    $.scrollTo('0',250);
  })
})

//Same thing as above just slightly differently
$(document).ready(function(){
  var scrollLink = $('.scroll');
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top - 80
    }, 250)
  })
})