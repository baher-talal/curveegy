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
