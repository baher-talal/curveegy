$(window).load(function () {
  $('.flexslider').flexslider({
    animation: "slide",
    start: function (slider) {
      $('body').removeClass('loading');
    }
  });
});

/* Start container & container-fluid */
$(document).ready(function () {
  function checkWidth() {
    var windowSize = $(window).width();
    if (windowSize <= 1024) {
      $('.container_views').addClass('container-phone');
      $('.container_views').removeClass('container');
    } else {
      $('.container_views').addClass('container');
      $('.container_views').removeClass('container-phone');
    }
  }
  // Execute on load
  checkWidth();
  // Bind event listener
  $(window).resize(checkWidth);
});
/* End container & container-fluid */

// $(document).ready(function ($) {
//   $(".scroll").click(function (event) {
//     event.preventDefault();

//     $('html,body').animate({
//       scrollTop: $(this.hash).offset().top
//     }, 1000);
//   });
// });

/* ===== Start Scroll to Top ==== */
$(window).scroll(function () {
  if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200); // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200); // Else fade out the arrow
  }
});

$('#return-to-top').click(function () { // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0 // Scroll to top of body
  }, 500);
});
/* ===== End Scroll to Top ==== */

