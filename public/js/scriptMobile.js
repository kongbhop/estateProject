$(document).ready(function(){
  $('#open-right').click(function(){
    $('.snap-drawer').addClass('slideActive');
    $('.overlay').addClass('overlayActive');
  });

  $('.overlay').click(function(){
    $('.overlay').removeClass('overlayActive');
    $('.snap-drawer').removeClass('slideActive');
  });

  $('.snap-drawer').click(function(){
    $('.overlay').removeClass('overlayActive');
    $('.snap-drawer').removeClass('slideActive');
  });
});
