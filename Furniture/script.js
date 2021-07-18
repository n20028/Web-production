$(function() { 
  $('#mask').hide();
  $('.header-right-button').click(function() {
    $('header').toggleClass('open');
    $('#mask').toggle(0);
    $('.nav').slideToggle();
});
  $('#mask').click(function() {
    $('header').toggleClass('open');
    $('#mask').toggle(0);
    $('.nav').slideToggle();
  })
});