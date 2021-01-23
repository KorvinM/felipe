// Avoid `console` errors in browsers that lack a console (html5bp)
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.


$(document).ready(function(){

//slick settings
  $('.slides').slick({
    accessibility: true,
    draggable: false,
    slidesToShow: 1,
    adaptiveHeight:true,
  });

// On before slide change
$('.slides').on(
  'beforeChange',
  function(event, slick, currentSlide){
    $("html, body").animate({ scrollTop: 0 });
    return false;
});

//scrollTop
var basicScrollTop = function () {
  // The button
  var btnTop = document.querySelector('#goTop');
  // Reveal the button
  var btnReveal = function () {
    if (window.scrollY >= 300) {
      btnTop.classList.add('is-visible');
    } else {
      btnTop.classList.remove('is-visible');
    }
  }
  // Smooth scroll top
  // Thanks to => http://stackoverflow.com/a/22610562
  var TopscrollTo = function () {
    if(window.scrollY!=0) {
      setTimeout(function() {
        window.scrollTo(0,window.scrollY-30);
        TopscrollTo();
      }, 5);
    }
  }
  // Listeners
  window.addEventListener('scroll', btnReveal);
  btnTop.addEventListener('click', TopscrollTo);

};
basicScrollTop();


});
