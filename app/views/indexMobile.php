<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width, height=device-height, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <title>Private Park 3 Project</title>
  <meta name="author" content="" />
  <meta name="description" content="" />
  <meta name="keywords"  content="" />
  <meta name="Resource-type" content="Document" />


  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />

  <link rel="stylesheet" type="text/css" href="css/styleMobileM.css">
  <link rel="stylesheet" type="text/css" href="css/styleMobileC.css">

  <!--[if IE]>
    <script type="text/javascript">
       var console = { log: function() {} };
    </script>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script> -->
  <script type="text/javascript" src="js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="js/scriptMobile.js"></script>

  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/snap.min.js"></script>

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css" media="screen" />

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="bower_components/scream/dist/scream.js"></script>
  <script src="bower_components/brim/dist/brim.js"></script>

  <script type="text/javascript">

  var language = "{{Session::get('lang')}}";
  console.log(language);
  (function () {

      var scream;
      var brim;

      //IS ALREAD LOADED
      var firstTime = true;

      //APPEND CANVAS TO THIS ELEMENT
      var domElement;

      //SET BASE SIZE
      var width = 640;
      var height = 960;


          //CHECK FOR IOS8 AND IF ITS NOT IN STANDALONE MODE
       if ((platform.os.family == 'iOS' && parseInt(platform.os.version, 10) > 8 || platform.ua.indexOf('like Mac OS X') != -1)&&("standalone" in window.navigator) &&!window.navigator.standalone)
       {
          scream = gajus.Scream({
              width: {
                  portrait: 640,
                  landscape: 1144
              }
          });

          brim = gajus.Brim({
              viewport: scream
          });

          //YOU ARE ON IOS SET FULL SCREEN SIZE
          height = scream.getViewportHeight();
          width = scream.getViewportWidth();

          brim.on('viewchange', function (e) {

              document.body.className = e.viewName;

              //WRONG ORIENTATION SHOW IMAGE

          });
      }

  })();
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
          $('#fullpage').fullpage({
              anchors: ['Mainpage', 'Project', 'Location', 'PlanA', 'PlanB', 'Samapan', 'Contact'],
              menu: '#menu',
              css3: true,
              scrollingSpeed: 500,
              // scrollOverflow: true,
              loopHorizontal: false,
              afterLoad: function(anchorLink, index){

        					if(anchorLink == "Mainpage"){
        						$('#scrollDown').addClass("active");
        						$('#private-logo').addClass("active");
        					}


  		        },
              onLeave: function(index, nextIndex, direction){

                  $('#scrollDown').removeClass("active");
                  $('#private-logo').removeClass("active");



              },
          });

          var parentHeight = $('.fp-tableCell').height()-80;
          var childHeight = $('#mainpageText').height();
          $('#mainpageText').css('margin-top', (parentHeight - childHeight) / 2);

          $('.lineHeightDiv').each(function(){
              var div_height = $(this).height();
              $(this).css('lineHeight', div_height + "px");
          });

          $('.padfromnav').each(function(){
              var div_height = $(this).parent('div').height();
              $(this).css('height', div_height - 80 + "px");
          });
          var parentHeight = $('.fp-tableCell').height()-80;
          var childHeight = $('#mid-vertical-1').height();
          $('#mid-vertical-1').css('padding-top', (parentHeight - childHeight) / 2);
          var childHeight = $('#mid-vertical-2').height();
          $('#mid-vertical-2').css('padding-top', (parentHeight - childHeight) / 2);






        // $('#concept-2').css('height', $(window).height() - $('#concept-2').next('.halfHeightBottom.rectangle').height());
        // $('#concept-2').closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', $('#concept-2').next('.halfHeightBottom.rectangle').height());
      });

      $(window).load(function(){
        console.log($('#houseBImg-1').next().outerHeight());
          $('.halfHeight').each(function(){
            var nextH = $(this).next('.halfHeightBottom.rectangle').outerHeight()+60;
            console.log(nextH);
            $(this).css('height', $(window).height() - nextH);
            $(this).closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);
          });
          var nextH = $('#houseAImg-1').next('.halfHeightBottom.rectangle').outerHeight()+60;
          console.log(nextH);
          $('#houseAImg-1').css('height', $(window).height() - nextH);
          $('#houseAImg-1').closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);
          var nextH = $('#houseBImg-1').next('.halfHeightBottom.rectangle').outerHeight()+60;
          console.log(nextH);
          $('#houseBImg-1').css('height', $(window).height() - nextH);
          $('#houseBImg-1').closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);

          var space = $('.fp-tableCell').height()-$('#locationImage').height()-60;
          console.log("space " + space);
          $('#locationTopic').css('line-height', space / 3 + "px");
          space = space*2 / 3;
          space = space - $('#locationText').height();
          $('#locationText').css('padding', + space / 2 + "px 0");
      });

      $(window).on('resize', function(){
        console.log($('#houseBImg-1').next().outerHeight());
          $('.halfHeight').each(function(){
            var nextH = $(this).next('.halfHeightBottom.rectangle').outerHeight()+60;
            console.log(nextH);
            $(this).css('height', $(window).height() - nextH);
            $(this).closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);
          });
          var nextH = $('#houseAImg-1').next('.halfHeightBottom.rectangle').outerHeight()+60;
          console.log(nextH);
          $('#houseAImg-1').css('height', $(window).height() - nextH);
          $('#houseAImg-1').closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);
          var nextH = $('#houseBImg-1').next('.halfHeightBottom.rectangle').outerHeight()+60;
          console.log(nextH);
          $('#houseBImg-1').css('height', $(window).height() - nextH);
          $('#houseBImg-1').closest(':has(.triangle-down-right)').find('.triangle-down-right').css('bottom', nextH);

          var space = $('.fp-tableCell').height()-$('#locationImage').height()-60;
          console.log("space " + space);
          $('#locationTopic').css('line-height', space / 3 + "px");
          space = space*2 / 3;
          space = space - $('#locationText').height();
          $('#locationText').css('padding', + space / 2 + "px 0");
      });
  </script>
</head>
<body id="brim-main">

<input type="hidden" id="lang" value="<?= Session::get('lang') ?>">

<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-right">
        <div>
            <ul>
              <a href="#Project"><li data-menuanchor="Project"><?= Lang::get('content.navProject') ?></li></a>
              <a href="#Location"><li data-menuanchor="Location"><?= Lang::get('content.navLocation') ?></li></a>
              <a href="#PlanA"><li data-menuanchor="PlanA"><?= Lang::get('content.navPlanA') ?></li></a>
              <a href="#PlanB"><li data-menuanchor="PlanB"><?= Lang::get('content.navPlanB') ?></li></a>
              <a href="#Samapan"><li data-menuanchor="Samapan"><?= Lang::get('content.navSamapan') ?></li></a>
              <a href="#Contact"><li data-menuanchor="Contact"><?= Lang::get('content.navContact') ?></li></a>
              <li>
                <span class="<?= (Session::get('lang') == 'th')? 'active':'' ?>"><a href="th">ไทย</a></span>
                 |
                <span class="<?= (Session::get('lang') == 'en')? 'active':'' ?>"><a href="en">ENGLISH</a></span>
              </li>
            </ul>
        </div>
    </div>
</div>
<div class="overlay"></div>


<div id="toolbar">
  <div class="logo">
    <a href="#Mainpage"><img src="imgs/logo.png" /></a>
    <a href="#" id="open-right"><i class="fa fa-bars"></i></a>
    <a data-menuanchor="Location"  href="#Location" id="open-location"><div id="locationBtn"></div></i></a>
  </div>
</div>
<div id="fullpage">
  <div class="section" id="mainpage">
    <div class="padfromnav" id="brim-mask">
      <div class="centerDiv" id="mainpageText">
          <div id="head"><?= Lang::get('content.mainPageTopic') ?></div>
          <span><?= Lang::get('content.mainPageContent') ?></span>
      </div>
      <div id="scrollDown">
  			<p></p>
  			<a href="#Project" id="">
  				<div id="scrollDownImg"></div>
  			</a>
  		</div>
  		<div id="private-logo">
      </div>
    </div>
  </div>

  <div class="section" id="concept">
    <div class="slide" id="slide1">
      <div class="halfHeight" id="concept-1">
      </div>
      <div class="halfHeightBottom rectangle" id="text-1">
        <div id="head"><?= Lang::get('content.concept1Topic') ?>
        </div>
        <div id="description"><?= Lang::get('content.concept1Content') ?>
          <br> <br>
        </div>
      </div>
      <div class="halfHeightBottom triangle-down-right">
      </div>
    </div>

    <div class="slide" id="slide2">
      <div class="halfHeight" id="concept-2">
      </div>
      <div class="halfHeightBottom rectangle" id="text-2">
        <div id="head"><?= Lang::get('content.concept2Topic') ?>
        </div>
        <div id="description"><?= Lang::get('content.concept2Content') ?>
          <br> <br>
        </div>
      </div>
      <div class="halfHeightBottom triangle-down-right">
      </div>

    </div>

    <div class="slide" id="slide3">
      <div class="halfHeight" id="concept-3">
      </div>
      <div class="halfHeightBottom rectangle" id="text-3">
        <div id="head"><?= Lang::get('content.concept3Topic') ?>
        </div>
        <div id="description"><?= Lang::get('content.concept3Content') ?>
          <br> <br>
        </div>
      </div>
      <div class="halfHeightBottom triangle-down-right">
      </div>
    </div>
  </div>

  <div class="section" id="location">

      <div class="padfromnav">
        <div class="centerText" id="locationTopic">
            <div class="no-margin" id="head"><?= Lang::get('content.locationOnMapTopic') ?></div>
        </div>
        <a href="imgs/map.png">
          <div id="locationImage">
            <img src="imgs/map.png" id="hidden-map"/>
          </div>
        </a>
        <div class="halfHeightBottom rectangle centerText" id="locationText">
             <div class="text lineHeightDiv">นำทางไปยังไพรเวทพาร์ค 3</div>
             <div class="button lineHeightDiv"><a href="http://maps.apple.com/maps?q=12.689821,101.213778" class="locationButton">START NAVIGATION</a></div>
        </div>
      </div>

  </div>

  <div class="section" id="houseA">
      <div class="slide" id="houseA-1">
        <div class="halfHeight" id="houseAImg-1">
        </div>
        <div class="halfHeightBottom rectangle" id="houseAText-1">
          <div id="head"><?= Lang::get('content.planATopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planAContent') ?>
            <br> <br>
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right" id="hAtri">
        </div>
      </div>

      <div class="slide" id="slide2">
        <div class="halfHeight" id="houseAImg-2">
        </div>
        <div class="halfHeightBottom rectangle" id="houseAText-2">
          <div id="head"><?= Lang::get('content.planADownTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planADownContent') ?>
            <br> <br>
          </div>
        </div>
      </div>

      <div class="slide" id="slide3">
        <div class="halfHeight" id="houseAImg-3">
        </div>
        <div class="halfHeightBottom rectangle" id="houseAText-3">
          <div id="head"><?= Lang::get('content.planAUpTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planAUpContent') ?>
            <br> <br> <br>
          </div>
        </div>
      </div>
  </div>

  <div class="section" id="houseB">
      <div class="slide" id="houseB-1">
        <div class="halfHeight" id="houseBImg-1">
        </div>
        <div class="halfHeightBottom rectangle" id="houseBText-1">
          <div id="head"><?= Lang::get('content.planBTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planBContent') ?>
            <br> <br>
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>

      <div class="slide" id="slide2">
        <div class="halfHeight" id="houseBImg-2">
        </div>
        <div class="halfHeightBottom rectangle" id="houseBText-2">
          <div id="head"><?= Lang::get('content.planBDownTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planBDownContent') ?>
            <br> <br>
          </div>
        </div>
      </div>

      <div class="slide" id="slide3">
        <div class="halfHeight" id="houseBImg-3">
        </div>
        <div class="halfHeightBottom rectangle" id="houseBText-3">
          <div id="head"><?= Lang::get('content.planBUpTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planBUpContent') ?>
            <br> <br>
          </div>
        </div>
      </div>
  </div>

  <div class="section" id="samapan">
    <div class="slide" id="samapanSlide" name="<?= Lang::get('content.baanSamapanTopic') ?>">
      <div id="mid-vertical-1">
        <img src="imgs/baansamapanlogo.png" style="width: 170px;" alt="">
        <p class="textTopic"><?= Lang::get('content.baanSamapanTopic') ?></p>
        <p class="textDesp"><?= Lang::get('content.baanSamapanContent') ?>
        </p>
      </div>
    </div>
    <div class="slide" id="privateSlide" name="<?= Lang::get('content.privateParkTopic') ?>">
      <div id="mid-vertical-2">
        <img src="imgs/private_logo.png" style="width: 100px;" alt="">
        <p class="textTopic"><?= Lang::get('content.privateParkTopic') ?></p>
        <p class="textDesp"><?= Lang::get('content.privateParkContent') ?>
        </p>
      </div>
    </div>
  </div>



  <!-- ==================CONTACT SECTION================== -->
  <div class="section" id="contact">
    <div class="blankSpace"></div>
    <div>
        <div class="textLeft sidePadding">
          <h1 style="margin-bottom:0px;"><?= Lang::get('content.contactTopic') ?></h1>
        </div>

        <div class="thankYou" style="display:none;">
          <h2>
            <?= Lang::get('content.formThankYouMsg') ?>
          </h2>
        </div>

        <div class="customerContactForm">
          <span><?= Lang::get('content.contactDesp') ?></span>
          <div class="telContact">
            <i class="fa fa-phone"></i> 038 023 023, 082 083 1999
          </div>
          <div class="contactToggle row no-padding" style="margin-top: 10px; margin-bottom: 10px;">
            <div class="radio col-xs-6"  style="padding:0; margin:0;">
              <input type="radio" id="contactRadio" name="contactType" checked/>
              <label for="contactRadio"><?= Lang::get('content.formContactButton') ?></label>
            </div>
            <div class="radio col-xs-6"  style="padding:0; margin:0;">
              <input type="radio" id="attendRadio" name="contactType"/>
              <label for="attendRadio" style="padding:0; margin:0;"><?= Lang::get('content.formAttendButton') ?></label>
            </div>

            <div class="clear"></div>
          </div>

          <form class="customerContact">
            <div class="firstSection">
              <div class="dateBox" style="width:100%; display:none;">
                <label><?= Lang::get('content.formDate') ?></label><br>
      					<div class="input-append date form_datetime">
    						    <input size="16" type="text" value="" name="appointment" readonly>
    						    <span class="add-on"><i class="icon-th"></i></span>
    						</div>
              </div>

              <label><?= Lang::get('content.formFirstname') ?></label> <br>
              <input type="text" name="firstname"> <br>
              <label><?= Lang::get('content.formLastname') ?></label> <br>
              <input type="text" name="lastname"> <br>
              <label><?= Lang::get('content.formTel') ?></label> <br>
              <input type="text" name="mobile"> <br>
              <button id="submitFirstSection"><?= Lang::get('content.continueButton') ?> >></button>

            </div>

            <div class="secondSection" style="display:none;">
              <button id="backtoFirstSection"><< <?= Lang::get('content.backButton') ?></button><br>
              <label><?= Lang::get('content.formEmail') ?></label> <br>
              <input type="text" name="email"> <br>
              <label><?= Lang::get('content.formDesp') ?></label> <br>
              <textarea rows="3" name="description"></textarea> <br>
              <input type="submit" value="<?= Lang::get('content.formSubmitButton') ?>">
            </div>
          </form>
        </div>
    </div>



    <div class="textCenter">
      &copy Samaphan Property Co.,Ltd. All rights Reserved.
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
</div>

<div class="modal fade" id="navigateModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="xButton" data-dismiss="modal"><i class="fa fa-times fa-1"></i></div>
        <div class="clear"></div>
        <p>LET US NAVIGATE YOU TO OUR SITE</p><br>
        <br>
        <div class="button lineHeightDiv hideNavigateModal"><a data-menuanchor="Location" href="#Location" class="locationButton">START NAVIGATION</a></div>
        <br>
        <br>
        <div>
          <div class="col-xs-4 right textTopic" style="padding-right:0px">CALL :</div>
          <div class="col-xs-8 left">038 023 023 </br> 082 083 1999</div>
        </div>
        <div class="clear"></div>
        <br>
        <p style="padding: 0 3%; line-height: 1em;"><small>USING GOOGLE MAPS TO BRING YOU TO OUR SITE</small></p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
