const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')

menu.addEventListener('click', function() {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
});


// jQuery
$(document).ready(function(){
  $("#navbar__logo").click(function(){
    $.scrollTo('0',200);
  })
})

//Same thing as above just slightly differently
$(document).ready(function(){
  alert('hi');

  var scrollLink = $('.scroll');
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000)
  })
})

// Sandbox
$(document).ready(function(){
  $("#helo").click(function(){
    $.scrollTo(250,200);
  })
})