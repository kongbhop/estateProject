<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Background images - fullPage.js</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen backgrounds." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>

	@font-face {
	    font-family: ThaiSansLite;
	    src: url(font/thaisanslite_r1.ttf);
	}
	@font-face {
	    font-family: Didot;
	    src: url(font/Didot.ttc);
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

	.headTextcontainer {
		background-color:rgba(210, 210, 204, 0.7);
		top: 50%;
		position: relative;
		height: 150px;
		width: 450px;
		margin-right: auto;
		margin-left: auto;
		-webkit-transform: translate3d(0px, -75px, 0px);
		-moz-transform: translate3d(0px, -75px, 0px);
		-ms-transform:translate3d(0px, -75px, 0px);
		transform: translate3d(0px, -75px, 0px);
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
		-webkit-transition: all 1.0s ease-in-out;
		-moz-transition: all 1.0s ease-in-out;
		-o-transition: all 1.0s ease-in-out;
		transition: all 1.0s ease-in-out;
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
		font-size: 1.2em;
		text-align: left;
		padding-left: 0px;
		padding-right: 0px;
	}

	.textcontainer.centertext h2{
		font-family: Didot, ThaiSansLite;
		font-size: 3em;
		text-align: center;
		padding-left: 0px;
	}

	.textcontainer.centertext{
		background-color: rgba(0,0,0,0);
		width: 40%;
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
		-webkit-transition: all 1.0s ease-in-out;
		-moz-transition: all 1.0s ease-in-out;
		-o-transition: all 1.0s ease-in-out;
		transition: all 1.0s ease-in-out;
	}
	.fp-slidesNav.active {
		opacity: 1;
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
	    line-height: 40px;
	}

	.fp-slidesNav ul li {
		display: inline-block;
	    width: 200px;
	    height: 40px;
	    background-color: rgba(162,163,159,0.5);
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
		right: 0px;
	}

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,
				slidesNavigation: true,
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


		        },

		        onLeave: function(index, nextIndex, direction){
		            var leavingSection = $(this);
		             $('.slide.fp-slide.active').find('.textcontainer').removeClass('active');


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
			<li class="active"><a href="">ไทย</a></li>
			|
			<li><a href="">ENGLISH</a></li>
		</ul>
	</div>
	<div class="bottomMenu">
		<ul id="menu" class="mainMenu">
			<li data-menuanchor="Project"><a href="#Project">โครงการไพรเวทพาร์ค3</a></li>
			<li data-menuanchor="Location"><a href="#Location">ที่ตั้งโครงการ</a></li>
			<li data-menuanchor="PlanA"><a href="#PlanA">บ้านแบบ A</a></li>
			<li data-menuanchor="PlanB"><a href="#PlanB">บ้านแบบ B</a></li>
			<li data-menuanchor="Samapan"><a href="#Samapan">บ้านสมาพันธ์</a></li>
			<li data-menuanchor="Contact"><a href="#Contact">ติดต่อเรา</a></li>
		</ul>
	</div>

</div>


<div id="fullpage">
	<div class="section" id="mainpage">
		<div class="headTextcontainer">
			<h1>โครงการไพรเวทพาร์ค</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae erat a dui ornare blandit a id dolor. Nunc tincidunt enim at ultricies mattis. Cras pulvinar diam eu mi</p>
		</div>
	</div>

	<div class="section" id="project">

	    <div class="slide" id="slide1" name="House Type A">
	    	<div class="textcontainer" id="textbox-1-1" ><h2>คอนเซปโครงการ</h2>
	    		<p>โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3</p>
	    	</div>
	    </div>
	    <div class="slide" id="slide2" name="1st Floor Plan">
	    	<div class="textcontainer" id="textbox-1-2" ><h2>คอนเซปโครงการ</h2>
	    		<p>โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3</p>
	    	</div>
	    </div>
	    <div class="slide" id="slide3" name="2nd Floor Plan">
	    	<div class="textcontainer" id="textbox-1-2" ><h2>The Architect</h2>
	    		<p>โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3</p>
	    	</div>
	    </div>
	</div>
	<div class="section" id="location">
		<div class="slide" id="slide2-1" name="Location">

	    </div>
	    <div class="slide" id="slide2-2" name="Map">
	    	<div class="mapcontainer" id="map">
	    	</div>
	    	<div class="textcontainer" id="textbox-2-2" ><h2>Location on Map</h2>
	    		<p>โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3</p>
	    	</div>
	    </div>
	    <div class="slide" id="slide2-3" name="Neighbourhood">
	    	<div class="textcontainer centertext" id="textbox-2-3" ><h2>Neighbourhood</h2>
	    		<p>โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3 โครงการไพรเวทย์พาร์ค 3</p>
	    	</div>
	    </div>
	</div>

	<div class="section" id="planA"></div>

	<div class="section" id="planB"></div>

	<div class="section" id="samapan">
		<div class="slide" id="samapanSlide" name="บ้านสมาพันธ์">
			<img src="imgs/baansamapanlogo.png" alt="">
			<p class="textTopic">บ้านสมาพันธ์</p>
			<p class="textDesp">ไมโครซอฟท์เพิ่มรุ่นย่อย Surface Book อีกหนึ่งรุ่น คือ ซีพียู Core i5 (สเปคซีพียู) แรม 8 กิกะไบต์ SSD จุ 128 กิกะไบต์ และจีพียู NVIDIA ตัวเดียวกับรุ่นท็อป (ซึ่งใกล้เคียงกับ GeForce GT 940M มาก) สนนราคาที่ 1,699 ดอลลาร์เท่านั้น
			</p>
		</div>
		<div class="slide" id="privateSlide" name="โครงการไพรเวทพาร์ค 3">
			<img src="imgs/logo.png" alt="">
			<p class="textTopic">โครงการไพรเวทพาร์ค 3</p>
			<p class="textDesp">ไมโครซอฟท์เพิ่มรุ่นย่อย Surface Book อีกหนึ่งรุ่น คือ ซีพียู Core i5 (สเปคซีพียู) แรม 8 กิกะไบต์ SSD จุ 128 กิกะไบต์ และจีพียู NVIDIA ตัวเดียวกับรุ่นท็อป (ซึ่งใกล้เคียงกับ GeForce GT 940M มาก) สนนราคาที่ 1,699 ดอลลาร์เท่านั้น
			</p>
		</div>
	</div>

	<div class="section" id="contact">
		<div class="rightContact">
      <div class="thankYou" style="display:none;">
        <h2>ขอบคุณสำหรับความสนใจของท่าน</h2>
      </div>
      <div class="customerContactForm">
  			<div class="contactToggle">
  				<div class="contactButton active">
  					ติดต่อสอบถาม
  				</div>
  				<div class="attendButton">
  					นัดหมายเข้าชมโครงการ
  				</div>
  				<div class="clear"></div>
  			</div>
  			<form class="customerContact">
  				<div class="dateBox" style="width:100%; display:none;">
  					<label>วันที่นัดเข้าชมโครงการ</label><br>
  					<input type="date" name="appointment" value=""><br>
  				</div>
  				<label>ชื่อ</label> <br>
  				<input type="text" name="firstname"> <br>
  				<label>นามสกุล</label> <br>
  				<input type="text" name="lastname"> <br>
  				<label>เบอร์โทรศัพท์</label> <br>
  				<input type="text" name="mobile"> <br>
  				<label>อีเมลล์</label> <br>
  				<input type="text" name="email"> <br>
  				<label>ข้อความ</label> <br>
  				<textarea rows="4" name="description"></textarea> <br>
  				<input type="submit" value="ส่งรายละเอียด">
  			</form>
      </div>
		</div>
		<div class="leftContact">
			<h1>Contact us</h1>
			<h2>
				เพียงกรอกรายละเอียดของท่าน <br>
				เราจะติดต่อท่านกลับโดยเร็ว
			</h2>
		</div>

	</div>
</div>

</body>
</html>
