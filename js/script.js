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

$(document).ready(function ($) {
  $(".scroll").click(function (event) {
    event.preventDefault();

    $('html,body').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000);
  });
});


$(document).ready(function () {
  /*
  var defaults = {
  	containerID: 'toTop', // fading element id
  	containerHoverID: 'toTopHover', // fading element hover id
  	scrollSpeed: 1200,
  	easingType: 'linear'
  };
  */

  $().UItoTop({
    easingType: 'easeOutQuart'
  });

});
