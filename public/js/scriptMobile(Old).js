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

  $("#contactRadio").click(function(){
		$(".dateBox").slideUp();
	});

	$("#attendRadio").click(function(){
		$(".dateBox").slideDown();
	});

  $(".customerContact").submit(function(){
    event.preventDefault();
    // console.log($(this).serializeArray());
    $.ajax(
    {
      url: 'contact',
      type: "POST",
      data: $(this).serializeArray(),
      success: function(data, textStatus,jqXHR){
        $(".customerContactForm").slideUp();
        $(".thankYou").slideDown();
      }
    });
  });

  $(".form_datetime").datetimepicker({
       format: "dd MM yyyy - hh:ii",
       autoclose: true,
   });

});