export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function () {
      console.log('clicked');
      $('.mobile-nav').toggleClass('show-nav');
      if ($('.mobile-nav').hasClass('show-nav')) {
          $('.hamburger').addClass('is-active');
      } else {
          $('.hamburger').removeClass('is-active');
      }
  });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
