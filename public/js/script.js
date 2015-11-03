$(document).ready(function(){
	$("#demosMenu").change(function(){
	  window.location.href = $(this).find("option:selected").attr("id") + '.html';
	});

	$(".contactButton").click(function(){
		$(".contactButton").addClass("active");
		$(".attendButton").removeClass("active");
		$(".dateBox").slideUp();
	});

	$(".attendButton").click(function(){
		$(".attendButton").addClass("active");
		$(".contactButton").removeClass("active");
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

	$(".fancybox").fancybox({
		padding: 0 ,
		helpers : {
	   overlay: {
	    css: {'background-color': 'rgba(0,0,0,0.4)'} // or your preferred hex color value
	   } // overlay
	  } // helpers
	});

	

	$(".form_datetime").datetimepicker({
			 format: "dd MM yyyy - hh:ii",
			 autoclose: true,
	 }).off('focus')
	  .click(function () {
	      $(this).datetimepicker('show');
		});

	$(".form_datetime input").click(function () {
	      $(".form_datetime").datetimepicker('show');
				console.log("ADFASF");
	});



});
