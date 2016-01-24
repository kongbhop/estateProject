<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Private Park Project</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen backgrounds." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css" media="screen" />

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen" />

	<style>



	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type='text/javascript'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js" type='text/javascript'></script>
	<script src="https://maps.googleapis.com/maps/api/js" type='text/javascript'></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>





	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,
				slidesNavigation: true,
				loopHorizontal: false,
				'css3': true,
				menu: '.mainMenu',
				anchors: ['MainpageNav', 'ProjectNav', 'LocationNav', 'PlanANav', 'PlanBNav', 'SamapanNav', 'ContactNav'],

		        afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){
		            var loadedSlide = $(this);

		            $('.slide.fp-slide.active').find('.textcontainer').addClass('active');

		            $('.subMenu').find('li.active').removeClass('active');
           	 		$('.subMenu').find('li').eq(slideIndex).addClass('active');

		        },

		        afterLoad: function(anchorLink, index){
		            var loadedSection = $(this);
		            if(loadedSection.find('.fp-slides').length != 0){
		            	$('.slide.fp-slide.active').find('.textcontainer').addClass('active');
		             	$('.fp-slidesNav').addClass('active');
		            }

					if(anchorLink == "MainpageNav"){
						$('.headTextcontainer').addClass("active");
						$('#scrollDown').addClass("active");
						$('.logo img').addClass("active");
						$('.bottomMenu').addClass("menuActive");
						$('.topMenu').addClass("menuActive");
						$('#private-logo').addClass("active");
					}


		        },

		        onLeave: function(index, nextIndex, direction){
		            var leavingSection = $(this);
		            if(leavingSection.find('.fp-slides').length != 0){
			            $('.slide.fp-slide.active').find('.textcontainer').removeClass('active');
			            $('.fp-slidesNav').removeClass('active');
			        }

							$(this).find('.textcontainer').removeClass('invisible');

					if(nextIndex == 1){
						$('.headTextcontainer').addClass("active");
						$('.logo img').addClass("active");
						$('.bottomMenu').addClass("menuActive");
						$('.topMenu').addClass("menuActive");
					} else {
						$('.headTextcontainer').removeClass("active");
						$('#scrollDown').removeClass("active");
						$('.logo img').removeClass("active");
						$('.bottomMenu').removeClass("menuActive");
						$('.topMenu').removeClass("menuActive");
						$('#private-logo').removeClass("active");
					}


		        },

		        onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex){
		            var leavingSlide = $(this);

		             $('.slide.fp-slide.active').find('.textcontainer').removeClass('active');
								 $(this).find('.textcontainer').removeClass('invisible');


		        }

			});

		});
	</script>

	<script>
      function initialize() {
      	var myLatLng = {lat: 12.689821, lng: 101.213778};
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: myLatLng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		  });


      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script>
  $( document ).ready(function() {
    $('#map-navigate-container').css({
        'position' : 'absolute',
        'top' : '50%',
        'margin-top' : -$('#map-navigate-container').height()/2
    });
  });

  $( window ).resize(function() {
    $('#map-navigate-container').css({
        'position' : 'absolute',
        'top' : '50%',
        'margin-top' : -$('#map-navigate-container').outerHeight()/2
    });
  });
  </script>

</head>
<body>

<div id="header">
	<div class="logo">
		<a href="#MainpageNav"><img src="imgs/logo.png" /></a>
	</div>
	<div class="topMenu">
		<ul id="menu">
			<li class="<?= (Session::get('lang') == 'th')? 'active':'' ?>"><a href="th">ไทย</a></li>
			|
			<li class="<?= (Session::get('lang') == 'en')? 'active':'' ?>"><a href="en">ENGLISH</a></li>
		</ul>
	</div>
	<div class="bottomMenu">
		<ul id="menu" class="mainMenu">
			<li data-menuanchor="ProjectNav"><a href="#ProjectNav"><?= Lang::get('content.navProject') ?></a></li>
			<li data-menuanchor="LocationNav"><a href="#LocationNav"><?= Lang::get('content.navLocation') ?></a></li>
			<li data-menuanchor="PlanANav"><a href="#PlanANav"><?= Lang::get('content.navPlanA') ?></a></li>
			<li data-menuanchor="PlanBNav"><a href="#PlanBNav"><?= Lang::get('content.navPlanB') ?></a></li>
			<li data-menuanchor="SamapanNav"><a href="#SamapanNav"><?= Lang::get('content.navSamapan') ?></a></li>
			<li data-menuanchor="ContactNav"><a href="#ContactNav"><?= Lang::get('content.navContact') ?></a></li>
		</ul>
	</div>

</div>


<div id="fullpage">
	<div class="section" id="mainpage">
		<div class="headTextcontainer">
			<h1><?= Lang::get('content.mainPageTopic') ?></h1>
			<h2><?= Lang::get('content.mainPageChild') ?></h2>
			<hr>
			<p><?= Lang::get('content.mainPageContent') ?></p>
		</div>
		<div id="scrollDown">
			<p></p>
			<a href="#ProjectNav" id="">
				<div id="scrollDownImg"></div>
			</a>
		</div>
		<div id="private-logo">
		</div>

		<div class="bottomText">
			ภาพจำลองและเงื่อนไขเป็นไปตามที่บริษัทกำหนด
		</div>
	</div>

	<div class="section" id="project">

	    <div class="slide" id="slide1" name="Exclusive Architecture">
	    	<div class="textcontainer" id="textbox-1-1" ><h2><?= Lang::get('content.concept1Topic') ?></h2>
	    		<p><?= Lang::get('content.concept1Content') ?></p>
	    	</div>
				<div class="bottomText">
					ภาพจำลอง
				</div>
	    </div>
	    <div class="slide" id="slide2" name="Exclusive Lifestyle">
	    	<div class="textcontainer" id="textbox-1-2" ><h2><?= Lang::get('content.concept2Topic') ?></h2>
	    		<p><?= Lang::get('content.concept2Content') ?></p>
	    	</div>
				<div class="bottomText">
					ภาพจำลอง
				</div>
	    </div>
	    <div class="slide" id="slide3" name="Exclusive Neighbourhood">
	    	<div class="textcontainer" id="textbox-1-2" ><h2><?= Lang::get('content.concept3Topic') ?></h2>
	    		<p><?= Lang::get('content.concept3Content') ?></p>
	    	</div>
				<div class="bottomText">
					ภาพจำลอง
				</div>
	    </div>
	</div>
	<div class="section" id="location">
		<div class="slide" id="slide2-1" name="Location ">
			<div class="textcontainer" id="textbox-2-2" ><h2><?= Lang::get('content.locationOnMapTopic') ?></h2>
	    		<p><?= Lang::get('content.locationOnMapContent') ?></p>
	    	</div>
	    </div>
	    <div class="slide" id="slide2-2" name="Map ">
	    	<div class="mapcontainer" id="map">
	    	</div>
	    	<div id="map-navigate-outer">
		    	<div id="map-navigate-container">
		    		<p>ให้เรานำทางท่านไปยัง <br> ไพรเวทพาร์ค 3</p><br>
		    		<a target="_blank" href="http://maps.google.com/maps?q=12.689821,101.213778" class="no-dec"><div class="locationButton">START NAVIGATION</div></a><br>
						<span style="font-size:1.4em;">Using navigation via your tablet or smartphone</span>

		    	</div>
		    </div>

	    </div>
	    <!-- <div class="slide" id="slide2-3" name="Neighbourhood ">
	    	<div class="textcontainer centertext" id="textbox-2-3" ><h2><?= Lang::get('content.neighbourhoodTopic') ?></h2>
	    		<p><?= Lang::get('content.neighbourhoodContent') ?></p>
	    		<ul>
						<?php foreach(Lang::get('content.neighbourhoodBullets') as $bullet): ?>
	    				<li><?= $bullet ?></li>
						<?php endforeach ?>
	    		</ul>
	    	</div>
	    	<div class="gallery">
	    		<div class="grid">
						<?php foreach(Lang::get('content.neighbourhoodPicture') as $pic): ?>
							<figure class="effect-chico">
			    			<img src="<?= $pic['picUrl'] ?>">
			    			<figcaption>
									<h2><span><?= $pic['title'] ?></span></h2>
									<p><?= $pic['desp'] ?></p>
									<a href="<?= $pic['link'] ?>">View more</a>
								</figcaption>
				    	</figure>
						<?php endforeach ?>
			    </div>
		    </div>
	    </div> -->
	</div>

	<div class="section" id="planA">
		<div class="slide" id="planAMain" name="<?= Lang::get('content.planATopic') ?>">
			<div class="textcontainer" id="textbox-type-A" ><h2><?= Lang::get('content.planATopic') ?></h2>
				<p><?= Lang::get('content.planAContent') ?></p>
			</div>
			<div class="bottomText">
				ภาพจำลอง
			</div>
		</div>
		<div class="slide planFloor" id="planAFloor" name="<?= Lang::get('content.floorPlan') ?>">
			<div class="sideCover">
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/A1com.jpg" title="">
						<img src="imgs/A1com.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planADownTopic') ?></p>
					<div class="textLeft textDesp"><?= Lang::get('content.planADownContent') ?></div>
				</div>
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/A2com.jpg" title="">
						<img src="imgs/A2com.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planAUpTopic') ?></p>
					<div class="textLeft textDesp"><?= Lang::get('content.planAUpContent') ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="planB">
		<div class="slide" id="planBMain" name="<?= Lang::get('content.planBTopic') ?>">
			<div class="textcontainer" id="textbox-type-B" ><h2><?= Lang::get('content.planBTopic') ?></h2>
				<p><?= Lang::get('content.planBContent') ?></p>
			</div>
			<div class="bottomText">
				ภาพจำลอง
			</div>
		</div>
		<div class="slide planFloor" id="planBFloor" name="<?= Lang::get('content.floorPlan') ?>">
			<div class="sideCover">
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/B1com.jpg" title="">
						<img src="imgs/B1com.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planBDownTopic') ?></p>
					<div class="textDesp"><?= Lang::get('content.planBDownContent') ?></div>
				</div>
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/B2com.jpg" title="">
						<img src="imgs/B2com.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planBUpTopic') ?></p>
					<div class="textDesp"><?= Lang::get('content.planBUpContent') ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="samapan">
		<div class="slide" id="samapanSlide" name="<?= Lang::get('content.baanSamapanTopic') ?>">
			<img src="imgs/samapan_logo.png" style="margin-top:0px; height:75px; width:auto;" alt="">
			<p class="textTopic"><?= Lang::get('content.baanSamapanTopic') ?></p>
			<p class="textDesp"><?= Lang::get('content.baanSamapanContent') ?>
			</p>
		</div>
		<div class="slide" id="privateSlide" name="<?= Lang::get('content.privateParkTopic') ?>">
			<img src="imgs/private_logo.png" style="height: 130px; width: auto; margin: 0px;" alt="">
			<p class="textTopic"><?= Lang::get('content.privateParkTopic') ?></p>
			<p class="textDesp"><?= Lang::get('content.privateParkContent') ?>
			</p>
		</div>
	</div>

	<div class="section" id="contact">
		<div class="rightContact">
      <div class="customerContactForm">
  			<div class="contactToggle">
  				<div class="contactButton active">
  					<?= Lang::get('content.formContactButton') ?>
  				</div>
  				<div class="attendButton">
  					<?= Lang::get('content.formAttendButton') ?>
  				</div>
  				<div class="clear"></div>
  			</div>
  			<form class="customerContact">
  				<div class="dateBox" style="width:100%; display:none;">
  					<label><?= Lang::get('content.formDate') ?></label><br>
  					<div class="input-append date form_datetime">
						    <input size="16" type="text" value="" name="appointment" aria-invalid="false" aria-required="true" aria-describedby="meetdatetime-error" readonly >
						    <span class="add-on"><i class="icon-th"></i></span>
						</div>
  				</div>
  				<label><?= Lang::get('content.formFirstname') ?></label> <br>
  				<input type="text" name="firstname"> <br>
  				<label><?= Lang::get('content.formLastname') ?></label> <br>
  				<input type="text" name="lastname"> <br>
  				<label><?= Lang::get('content.formTel') ?></label> <br>
  				<input type="text" name="mobile"> <br>
  				<label><?= Lang::get('content.formEmail') ?></label> <br>
  				<input type="text" name="email"> <br>
  				<label><?= Lang::get('content.formDesp') ?></label> <br>
  				<textarea rows="4" name="description"></textarea> <br>
  				<input type="submit" value="<?= Lang::get('content.formSubmitButton') ?>">
  			</form>
      </div>
		</div>
		<div class="leftContact">
			<h1><?= Lang::get('content.contactTopic') ?></h1>
			<h2>
				<?= Lang::get('content.contactDesp') ?>
			</h2>

			<h3>
				<div class="telContact">
					<i class="fa fa-phone"></i> 038 023 023 </br> <i class="fa fa-phone"></i> 082 083 1999
				</div>
			</h3>


		</div>

		<div class="copyrightText">
			&copy Samaphan Property Co.,Ltd. All right reserved.
		</div>

	</div>
</div>

<div class="modal fade" id="thankYouModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
				<div class="loading">
          <img src="imgs/loading.gif" style="width:100px;" alt="">
        </div>
        <div class="finish">
          <p><?= Lang::get('content.formThankYouMsg') ?></p>
  				<button type="button" class="myBtn" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</body>
</html>
