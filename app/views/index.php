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

	<style>

	@font-face {
	    font-family: ThaiSansLite;
	    src: url('font/thaisanslite_r1-webfont.eot');
	    src: url('font/thaisanslite_r1-webfont.eot?#iefix') format('embedded-opentype'),
	         url('font/thaisanslite_r1-webfont.woff2') format('woff2'),
	         url('font/thaisanslite_r1-webfont.woff') format('woff'),
	         url('font/thaisanslite_r1-webfont.ttf') format('truetype');
	    font-weight: normal;
	    font-style: normal;

	}
	@font-face {
	    font-family: Didot;
	    src: url(font/Didot.ttc);
	}

	.grid {
		position: relative;
		margin: 0 auto;
		padding: 1em 0 4em;
		max-width: 1000px;
		list-style: none;
		text-align: center;
	}

	/* Common style */
	.grid figure {
		position: relative;
		float: left;
		overflow: hidden;
		margin: 10px 1%;
		width: 30%;
		background: #ffffff;
		text-align: center;
		cursor: pointer;
	}

	.grid figure img {
		position: relative;
		display: block;
		height: auto;
		width: 100%;
		opacity: 0.7;
	}

	.grid figure figcaption {
		padding: 2em;
		color: #444;
		text-transform: uppercase;
		font-size: 1.25em;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	.grid figure figcaption::before,
	.grid figure figcaption::after {
		pointer-events: none;
	}

	.grid figure figcaption,
	.grid figure figcaption > a {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	/* Anchor will cover the whole item by default */
	/* For some effects it will show as a button */
	.grid figure figcaption > a {
		z-index: 1000;
		text-indent: 200%;
		white-space: nowrap;
		font-size: 0;
		opacity: 0;
	}

	.grid figure h2 {
		word-spacing: -0.15em;
		font-weight: 300;
	}

	.grid figure h2 span {
		font-weight: 800;
	}

	.grid figure h2,
	.grid figure p {
		margin: 0;
	}

	.grid figure p {
		font-weight: bold;
		letter-spacing: 1px;
		font-size: 80%;
	}

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 4em;
		font-family: 'Didot', 'ThaiSansLite', Arial, Helvetica;
		/*color: #fff;*/
		margin:0;
		padding:0;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}


	/* Backgrounds will cover all the section
	* --------------------------------------- */
	.section{
		background-size: cover;
	}
	.slide{
		background-size: cover;
		background-position: center center;
	}

	/* Defining each section background and styles
	* --------------------------------------- */
	#section0{
		background-image: url(imgs/sec0.jpg);
		background-position: center center;
	}




 	/*Adding background for the slides
	* --------------------------------------- */
	#slide1{
		background-image: url(imgs/sec1-1.jpg);
	}
	#slide2{
		background-image: url(imgs/sec1-2.jpg);
	}
	#slide3{
		background-image: url(imgs/sec1-3.jpg);
	}

	#slide2-1{
		background-color: #C6C6C4;
	}
	#slide2-2{
		background-color: #DDDDDD;
	}
	#slide2-3{
		background-color: #DDDDDD;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}


	figure.effect-chico img {
		width: 100%;
		height: 100%;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
		-webkit-transform: scale(1.12);
		transform: scale(1.12);
	}

	figure.effect-chico:hover img {
		opacity: 0.5;
		-webkit-transform: scale(1);
		transform: scale(1);
	}

	figure.effect-chico figcaption {
		padding: 0em;
	}

	figure.effect-chico figcaption::before {
		position: absolute;
		top: 30px;
		right: 30px;
		bottom: 30px;
		left: 30px;
		border: 1px solid #fff;
		content: '';
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
	}

	figure.effect-chico figcaption::before,
	figure.effect-chico p {
		opacity: 0;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s, transform 0.35s;
	}

	figure.effect-chico h2 {
		padding: 20% 0 20px 0;
	}

	figure.effect-chico p {
		margin: 0 auto;
		max-width: 200px;
		-webkit-transform: scale(1.5);
		transform: scale(1.5);
	}

	figure.effect-chico:hover figcaption::before,
	figure.effect-chico:hover p {
		opacity: 1;
		-webkit-transform: scale(1);
		transform: scale(1);
	}

	@media screen and (max-width: 50em) {
		.content {
			padding: 0 10px;
			text-align: center;
		}
		.grid figure {
			display: inline-block;
			float: none;
			margin: 10px auto;
			width: 100%;
		}
	}


	.headTextcontainer {
		background-color:rgba(210, 210, 204, 0.7);
		top: 50%;
		position: relative;
		padding: 30px;
		width: 450px;
		margin-right: auto;
		margin-left: auto;
		opacity: 0;
		-webkit-transition: all 0.75s ease-in-out;
		-moz-transition: all 0.75s ease-in-out;
		-o-transition: all 0.75s ease-in-out;
		transition: all 0.75s ease-in-out;
	}

	.headTextcontainer.active {
		opacity: 1;
		-webkit-transform: translate3d(0px, -35px, 0px);
		-moz-transform: translate3d(0px, -35px, 0px);
		-ms-transform:translate3d(0px, -35px, 0px);
		transform: translate3d(0px, -35px, 0px);
	}

	.headTextcontainer h1{
		font-family: ThaiSansLite;
		color: #333;
		font-size: 3em;
	}

	.headTextcontainer p{
		font-family: ThaiSansLite;
		font-size: 1.25em;
		padding: 0px 20px;
		line-height: 1em;
	}

	.textcontainer {
		background-color:rgba(210, 210, 204, 0.7);
		color:#000;
		max-width: 600px;
		min-width: 300px;
		width: 40%;
		right: 100px;
		opacity: 0;
		font-family: ThaiSansLite;
		padding-bottom: 40px;
		padding-top: 40px;
		position: relative;
		top: 15%;
		left: 2.5%;

	}
	.textcontainer.active {
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
	}

	.textcontainer:not(.active) {
		-webkit-transition: all 0.1s ease-in-out;
		-moz-transition: all 0.1s ease-in-out;
		-o-transition: all 0.1s ease-in-out;
		transition: all 0.1s ease-in-out;
	}

	.textcontainer h2{
		font-family: Didot, ThaiSansLite;
		font-size: 3em;
		text-align: left;
		padding-left: 10%;

	}

	.textcontainer p{
		font-size: 1.2em;
		padding-left: 15%;
		padding-right: 10%;
		text-align: left;
	}

	.textcontainer.centertext p{
		font-size: 20px;
		text-align: left;
		padding-left: 0px;
		padding-right: 0px;
	}

	.textcontainer.centertext ul li{
		text-align: left;
	}

	.textcontainer.centertext ul{
		list-style-type: disc;
		padding-left: 10%;
	}

	.textcontainer.centertext h2{
		font-family: Didot, ThaiSansLite;
		font-size: 3em;
		text-align: center;
		padding-left: 0px;
	}

	.textcontainer.centertext{
		background-color: rgba(0,0,0,0);
		width: 35%;
		font-size: 20px;
	}

	.textcontainer.active{
		opacity: 1;
		-webkit-transform: translate3d(34px, 0px, 0px);
		-moz-transform: translate3d(34px, 0px, 0px);
		-ms-transform:translate3d(34px, 0px, 0px);
		transform: translate3d(34px, 0px, 0px);
	}

	.mapcontainer {
		background-color:rgba(210, 210, 204, 0.7);
		color:#000;
		max-height: 600px;
		min-height: 300px;
		width: 60%	;
		height: 60%;
		opacity: 1;
		font-family: ThaiSansLite;
		padding-bottom: 40px;
		padding-top: 40px;
		position: relative;
		float: right;
		top: 15%;
		right: 2.5%;

	}

	.fp-slidesNav.bottom {
		bottom: 40px;
		opacity: 0;
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.fp-slidesNav.active {
		opacity: 1;
		-webkit-transition: all 0.2s ease-in-out;
		-moz-transition: all 0.2s ease-in-out;
		-o-transition: all 0.2s ease-in-out;
		transition: all 0.2s ease-in-out;
	}

	.fp-slidesNav ul {

	}

	.fp-slidesNav ul li a {
	    display: block;
	    position: relative;
	    z-index: 1;
	    width: 100%;
	    height: 100%;
	    cursor: pointer;
	    text-decoration: none;
	    color: #111;
	    font-size: 1.25em;
	    line-height: 35px;
	}

	.fp-slidesNav ul li {
		display: inline-block;
	    width: 200px;
	    height: 35px;
	    background-color: rgba(162,163,159,0.6);
	    margin: 0px 0px;
	}

	.fp-slidesNav ul li a.active,
	.fp-slidesNav ul li:hover a {
		width: 100%;
		background-color: rgba(162,163,159,0.8);
		-webkit-transition: all 0.1s ease-in-out;
	    -moz-transition: all 0.1s ease-in-out;
	    -o-transition: all 0.1s ease-in-out;
	    transition: all 0.1s ease-in-out;
	}

	.fp-slidesNav ul li a span {
	    border-radius: 0%;
	    position: absolute;
	    z-index: 1;
		line-height: 2.5em;
	    height: 2.5em;
	    -webkit-transition: all 0.1s ease-in-out;
	    -moz-transition: all 0.1s ease-in-out;
	    -o-transition: all 0.1s ease-in-out;
	    transition: all 0.1s ease-in-out;
	}

	.fp-slidesNav ul li:hover a span{

	}

	#textbox-2-2 {
		width: 40%;
		margin-top: 50px;

	}

	#textbox-2-3 {
		float: right;
		left: -10%;
	}

	.gallery {
		width: 50%;
		height: 100%;
		padding-top: 60px;
		padding-left: 5%;
	}
	#scrollDown {
		position: absolute;
		bottom: 30px;
		text-align: center;
		width: 100%;
		height: 30px;
		opacity: 0;
		-webkit-transition: all 1.5s ease-in-out;
	    -moz-transition: all 1.5s ease-in-out;
	    -o-transition: all 1.5s ease-in-out;
	    transition: all 1.5s ease-in-out;
	}
	#scrollDown.active{
		-webkit-transform: translate3d(0px, 5px, 0px);
		-moz-transform: translate3d(0px, 5px, 0px);
		-ms-transform:translate3d(0px, 5px, 0px);
		transform: translate3d(0px, 5px, 0px);
		opacity: 1;
	}

	#scrollDownImg {
		background: url("imgs/down.png") no-repeat;
		-webkit-background-size: contain;
	    -moz-background-size: contain;
	    -o-background-size: contain;
	    background-size: contain;
	    background-position: center center;
	    height: 100%;
	    width: 30px;
	    margin-left: auto;
	    margin-right: auto;
	    -webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    -o-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;
	}

	#scrollDownImg:hover {
		opacity: 0.5;
		-webkit-transform: translate3d(0px, 5px, 0px);
		-moz-transform: translate3d(0px, 5px, 0px);
		-ms-transform:translate3d(0px, 5px, 0px);
		transform: translate3d(0px, 5px, 0px);
	}

	#scrollDown p{
		margin: 0 0 2px;
		color: #fff;
		font-size: 1.25em;
	}

	.fancybox img:hover {
		-webkit-transition: all 0.1s ease-in-out;
	    -moz-transition: all 0.1s ease-in-out;
	    -o-transition: all 0.1s ease-in-out;
	    transition: all 0.1s ease-in-out;
	    -webkit-transform:scale(1.05); /* Safari and Chrome */
	    -moz-transform:scale(1.05); /* Firefox */
	    -ms-transform:scale(1.05); /* IE 9 */
	    -o-transform:scale(1.05); /* Opera */
	     transform:scale(1.05);
	}

	.fp-controlArrow.fp-prev {
		-webkit-transform: translate3d(0px, 60px, 0px);
		-moz-transform: translate3d(0px, 60px, 0px);
		-ms-transform:translate3d(0px, 60px, 0px);
		transform: translate3d(0px, 60px, 0px);
		-webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    -o-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;

	}

	.fp-controlArrow.fp-prev:hover {
		-webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    -o-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;
	    opacity: 0.7;
		-webkit-transform: translate3d(-5px, 60px, 0px);
		-moz-transform: translate3d(-5px, 60px, 0px);
		-ms-transform:translate3d(-5px, 60px, 0px);
		transform: translate3d(-5px, 60px, 0px);
	} 

	.fp-controlArrow.fp-next {
		-webkit-transform: translate3d(0px, 60px, 0px);
		-moz-transform: translate3d(0px, 60px, 0px);
		-ms-transform:translate3d(0px, 60px, 0px);
		transform: translate3d(0px, 60px, 0px);
		-webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    -o-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;

	}

	.fp-controlArrow.fp-next:hover {
		-webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    -o-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;
	    opacity: 0.7;
		-webkit-transform: translate3d(5px, 60px, 0px);
		-moz-transform: translate3d(5px, 60px, 0px);
		-ms-transform:translate3d(5px, 60px, 0px);
		transform: translate3d(5px, 60px, 0px);
	} 

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
				anchors: ['Mainpage', 'Project', 'Location', 'PlanA', 'PlanB', 'Samapan', 'Contact'],

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

					if(anchorLink == "Mainpage"){
						$('.headTextcontainer').addClass("active");
						$('#scrollDown').addClass("active");
						$('.logo img').addClass("active");
						$('.bottomMenu').addClass("menuActive");
						$('.topMenu').addClass("menuActive");
					}


		        },

		        onLeave: function(index, nextIndex, direction){
		            var leavingSection = $(this);
		            if(leavingSection.find('.fp-slides').length != 0){
			            $('.slide.fp-slide.active').find('.textcontainer').removeClass('active');
			            $('.fp-slidesNav').removeClass('active');
			        }


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
								}


		        },

		        onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex){
		            var leavingSlide = $(this);

		             $('.slide.fp-slide.active').find('.textcontainer').removeClass('active');


		        }

			});

		});
	</script>

	<script>
      function initialize() {
      	var myLatLng = {lat: -25.363, lng: 131.044};
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: myLatLng,
          zoom: 10,
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

</head>
<body>

<div id="header">
	<div class="logo">
		<a href="#Mainpage"><img src="imgs/logo.png" /></a>
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
			<li data-menuanchor="Project"><a href="#Project"><?= Lang::get('content.navProject') ?></a></li>
			<li data-menuanchor="Location"><a href="#Location"><?= Lang::get('content.navLocation') ?></a></li>
			<li data-menuanchor="PlanA"><a href="#PlanA"><?= Lang::get('content.navPlanA') ?></a></li>
			<li data-menuanchor="PlanB"><a href="#PlanB"><?= Lang::get('content.navPlanB') ?></a></li>
			<li data-menuanchor="Samapan"><a href="#Samapan"><?= Lang::get('content.navSamapan') ?></a></li>
			<li data-menuanchor="Contact"><a href="#Contact"><?= Lang::get('content.navContact') ?></a></li>
		</ul>
	</div>

</div>


<div id="fullpage">
	<div class="section" id="mainpage">
		<div class="headTextcontainer">
			<h1><?= Lang::get('content.mainPageTopic') ?></h1>
			<p><?= Lang::get('content.mainPageContent') ?></p>
		</div>
		<div id="scrollDown">
			<p></p>
			<a href="#Project" id="">
				<div id="scrollDownImg"></div>
			</a>
		</div>
	</div>

	<div class="section" id="project">

	    <div class="slide" id="slide1" name="House Type A">
	    	<div class="textcontainer" id="textbox-1-1" ><h2><?= Lang::get('content.concept1Topic') ?></h2>
	    		<p><?= Lang::get('content.concept1Content') ?></p>
	    	</div>
	    </div>
	    <div class="slide" id="slide2" name="1st Floor Plan">
	    	<div class="textcontainer" id="textbox-1-2" ><h2><?= Lang::get('content.concept2Topic') ?></h2>
	    		<p><?= Lang::get('content.concept2Content') ?></p>
	    	</div>
	    </div>
	    <div class="slide" id="slide3" name="2nd Floor Plan">
	    	<div class="textcontainer" id="textbox-1-2" ><h2><?= Lang::get('content.concept3Topic') ?></h2>
	    		<p><?= Lang::get('content.concept3Content') ?></p>
	    	</div>
	    </div>
	</div>
	<div class="section" id="location">
		<div class="slide" id="slide2-1" name="Location ">

	    </div>
	    <div class="slide" id="slide2-2" name="Map ">
	    	<div class="mapcontainer" id="map">
	    	</div>
	    	<div class="textcontainer" id="textbox-2-2" ><h2><?= Lang::get('content.locationOnMapTopic') ?></h2>
	    		<p><?= Lang::get('content.locationOnMapContent') ?></p>
	    	</div>
	    </div>
	    <div class="slide" id="slide2-3" name="Neighbourhood ">
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
	    </div>
	</div>

	<div class="section" id="planA">
		<div class="slide" id="planAMain" name="<?= Lang::get('content.planATopic') ?>">
			<div class="textcontainer" id="textbox-1-1" ><h2><?= Lang::get('content.planATopic') ?></h2>
				<p><?= Lang::get('content.planAContent') ?></p>
			</div>
		</div>
		<div class="slide planFloor" id="planAFloor" name="<?= Lang::get('content.floorPlan') ?>">
			<div class="sideCover">
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/A1.jpg" title="">
						<img src="imgs/A1.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planADownTopic') ?></p>
					<div class="textLeft textDesp"><?= Lang::get('content.planADownContent') ?></div>
				</div>
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/A2.jpg" title="">
						<img src="imgs/A2.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planAUpTopic') ?></p>
					<div class="textLeft textDesp"><?= Lang::get('content.planAUpContent') ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="planB">
		<div class="slide" id="planBMain" name="<?= Lang::get('content.planBTopic') ?>">
			<div class="textcontainer" id="textbox-1-1" ><h2><?= Lang::get('content.planBTopic') ?></h2>
				<p><?= Lang::get('content.planBContent') ?></p>
			</div>
		</div>
		<div class="slide planFloor" id="planBFloor" name="<?= Lang::get('content.floorPlan') ?>">
			<div class="sideCover">
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/B1.jpg" title="">
						<img src="imgs/B1.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planBDownTopic') ?></p>
					<div class="textDesp"><?= Lang::get('content.planBDownContent') ?></div>
				</div>
				<div class="floorPlan">
					<a class="fancybox" rel="fancybox" href="imgs/B2.jpg" title="">
						<img src="imgs/B2.jpg" alt="" />
					</a>
					<p class="textTopic"><?= Lang::get('content.planBUpTopic') ?></p>
					<div class="textDesp"><?= Lang::get('content.planBUpContent') ?></div>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="samapan">
		<div class="slide" id="samapanSlide" name="<?= Lang::get('content.baanSamapanTopic') ?>">
			<img src="imgs/baansamapanlogo.png" alt="">
			<p class="textTopic"><?= Lang::get('content.baanSamapanTopic') ?></p>
			<p class="textDesp"><?= Lang::get('content.baanSamapanContent') ?>
			</p>
		</div>
		<div class="slide" id="privateSlide" name="<?= Lang::get('content.privateParkTopic') ?>">
			<img src="imgs/logo.png" alt="">
			<p class="textTopic"><?= Lang::get('content.privateParkTopic') ?></p>
			<p class="textDesp"><?= Lang::get('content.privateParkContent') ?>
			</p>
		</div>
	</div>

	<div class="section" id="contact">
		<div class="rightContact">
      <div class="thankYou" style="display:none;">
        <h2><?= Lang::get('content.formThankYouMsg') ?></h2>
      </div>
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
  					<!-- <div class="input-append date form_datetime">
						    <input size="16" type="text" value="" name="appointment" aria-invalid="false" aria-required="true" aria-describedby="meetdatetime-error" readonly >
						    <span class="add-on"><i class="icon-th"></i></span>
						</div> -->
						<div class="input-group date form_datetime" data-date="2012-12-21T15:25:00Z">
                                                <input name="meetdatetime" class="form-control" id="meetdatetime" aria-invalid="false" aria-required="true" aria-describedby="meetdatetime-error" type="text" size="16" readonly=""><span class="help-block help-block-error" id="meetdatetime-error"></span>
												
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
		</div>

	</div>
</div>

</body>
</html>
