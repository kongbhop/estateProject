$(document).ready(function(){
  $('#open-right').click(function(){
    snapper.open('right');
  });

  $('.overlay').click(function(){
    $('.overlay').removeClass('overlayActive');
    $('.snap-drawer').removeClass('slideActive');
  });

  $('.snap-drawer').click(function(){
      snapper.close();
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
				$("input[type='text']").val("");
				$("textarea").val("");
				$("#thankYouModal").modal("show");
			}
		});
	});

  $(".form_datetime").datetimepicker({
       format: "dd MM yyyy - hh:ii",
       autoclose: true,
   });

   var snapper = new Snap({
    element: document.getElementById('content'),
    disable: 'left'
  });


/* Prevent Safari opening links when viewing as a Mobile App */
(function (a, b, c) {
    if(c in b && b[c]) {
        var d, e = a.location,
            f = /^(a|html)$/i;
        a.addEventListener("click", function (a) {
            d = a.target;
            while(!f.test(d.nodeName)) d = d.parentNode;
            "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
        }, !1)
    }
})(document, window.navigator, "standalone");

});
