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
    disable: 'left',
    dragger: '.open-right'
  });

  var baanSamapanSlider = new Swiper ('.baan-swiper', {
     // Optional parameters
     direction: 'horizontal',
     loop: true,

     // If we need pagination
     pagination: '.swiper-pagination',

     // Navigation arrows
     nextButton: '.baan-swiper>.swiper-button-next',
     prevButton: '.baan-swiper>.swiper-button-prev',

     // And if we need scrollbar
     scrollbar: '.swiper-scrollbar',
   });

  var baanSamapanSlider = new Swiper ('.concept-swiper', {
     // Optional parameters
     direction: 'horizontal',
     loop: true,

     // If we need pagination
     pagination: '.swiper-pagination',

     // Navigation arrows
     nextButton: '.concept-swiper>.swiper-button-next',
     prevButton: '.concept-swiper>.swiper-button-prev',

     // And if we need scrollbar
     scrollbar: '.swiper-scrollbar',
   });

  var baanSamapanSlider = new Swiper ('.planb-swiper', {
     // Optional parameters
     direction: 'horizontal',
     loop: true,

     // If we need pagination
     pagination: '.swiper-pagination',

     // Navigation arrows
     nextButton: '.planb-swiper>.swiper-button-next',
     prevButton: '.planb-swiper>.swiper-button-prev',

     // And if we need scrollbar
     scrollbar: '.swiper-scrollbar',
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
