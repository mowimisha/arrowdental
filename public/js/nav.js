$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 300) {
      $(".navbar").addClass('navbar-fixed'),
      $(".navbar").addClass('navbar-scroll');
    }
    if ($(window).scrollTop() < 281) {
      $(".navbar").removeClass('navbar-fixed'),
      $(".navbar").removeClass('navbar-scroll');
    }
  });
});