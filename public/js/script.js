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
});
