<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width, height=device-height">
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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


  <script type="text/javascript">
      $(document).ready(function() {
          $('#fullpage').fullpage({
              anchors: ['Mainpage', 'Project', 'Location', 'PlanA', 'PlanB', 'Samapan', 'Contact'],
              menu: '#menu',
              css3: true,
              scrollingSpeed: 500,
              // scrollOverflow: true,
              loopHorizontal: false
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

          var y = $("#locationImage").position().top;
          var parentLocationH = $("#locationImage").parent('div').height();
          console.log(parentLocationH);
          $("#locationImage").css('height', (parentLocationH *80/100) - y );

      });
  </script>
</head>
<body>

<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-right">
        <div>
            <ul>
              <li data-menuanchor="Project"><a href="#Project"><?= Lang::get('content.navProject') ?></a></li>
              <li data-menuanchor="Location"><a href="#Location"><?= Lang::get('content.navLocation') ?></a></li>
              <li data-menuanchor="PlanA"><a href="#PlanA"><?= Lang::get('content.navPlanA') ?></a></li>
              <li data-menuanchor="PlanB"><a href="#PlanB"><?= Lang::get('content.navPlanB') ?></a></li>
              <li data-menuanchor="Samapan"><a href="#Samapan"><?= Lang::get('content.navSamapan') ?></a></li>
              <li data-menuanchor="Contact"><a href="#Contact"><?= Lang::get('content.navContact') ?></a></li>
              <li>
                <span class="<?= (Session::get('lang') == 'th')? 'active':'' ?>"><a href="th"><img src="imgs/th_icon.png" alt=""> ไทย</a></span>
                 |
                <span class="<?= (Session::get('lang') == 'en')? 'active':'' ?>"><a href="en"><img src="imgs/us_icon.png" alt=""> ENGLISH</a></span>
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
    <a data-menuanchor="Location"  href="#Location" id="open-location"><i class="fa fa-map-marker"></i></a>
  </div>
</div>
<div id="fullpage">
  <div class="section" id="mainpage">
    <div class="padfromnav">
      <div class="centerDiv" id="mainpageText">
          <div id="head"><?= Lang::get('content.mainPageTopic') ?></div>
          <span><?= Lang::get('content.mainPageContent') ?></span>
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
        </div>
      </div>
      <div class="halfHeightBottom triangle-down-right">
      </div>
    </div>
  </div>

  <div class="section" id="location">

    <div class="slide" id="location-1">
      <div class="padfromnav">
        <div class="centerText" id="mainpageText">
            <div id="head"><?= Lang::get('content.locationOnMapTopic') ?></div>
        </div>
        <div class="fullWidth" id="locationImage">
        </div>
        <div class="halfHeightBottom rectangle centerText" id="locationText">
             <div class="text lineHeightDiv">นำทางไปยังไพรเวทพาร์ค 3</div>
             <div class="button lineHeightDiv"><a href="http://maps.apple.com/maps?q=Ban+Samaphan+Private+Park" class="locationButton">START NAVIGATION</a></div>
             <div class="text lineHeightDiv">หริอติดต่อเราโดยตรงผ่าน 038 618 2442</div>
             <div class="button lineHeightDiv"><a href="#" class="locationButton">EXPLORE NEIGHBOURHOOD</a></div>
        </div>
      </div>
    </div>

    <?php foreach(Lang::get('content.neighbourhoodPicture') as $pic): ?>
      <div class="slide">
        <div class="halfHeight" style="background:url(<?= $pic['picUrl'] ?>); background-size: cover;" id="coverBackground">
        </div>
        <div class="halfHeightBottom rectangle" id="neighbourRec">
          <div id="head"><?= $pic['title'] ?>
          </div>
          <div id="description" style="text-align: center;"><?= $pic['desp'] ?>
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right" id="neighbourTri">
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <div class="section" id="houseA">
      <div class="slide" id="houseA-1">
        <div class="halfHeight" id="houseAImg-1">
        </div>
        <div class="halfHeightBottom rectangle" id="houseAText-1">
          <div id="head"><?= Lang::get('content.planATopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planAContent') ?>
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>

      <div class="slide" id="slide2">
        <div class="halfHeight" id="houseAImg-2">
        </div>
        <div class="halfHeightBottom rectangle" id="houseAText-2">
          <div id="head"><?= Lang::get('content.planADownTopic') ?>
          </div>
          <div id="description"><?= Lang::get('content.planADownContent') ?>
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
          </div>
        </div>
      </div>
  </div>




  <!-- ==================CONTACT SECTION================== -->
  <div class="section" id="contact">
    <div class="blankSpace"></div>
    <div>
        <div class="textLeft sidePadding">
          <h1><?= Lang::get('content.contactTopic') ?></h1>
        </div>

        <div class="thankYou" style="display:none;">
          <h2>
            <?= Lang::get('content.formThankYouMsg') ?>
          </h2>
        </div>

        <div class="customerContactForm">
          <span><?= Lang::get('content.contactDesp') ?></span>

          <div class="contactToggle">
            <div class="radio">
              <input type="radio" id="contactRadio" name="contactType" checked/>
              <label for="contactRadio"><?= Lang::get('content.formContactButton') ?></label>
            </div>
            <div class="radio">
              <input type="radio" id="attendRadio" name="contactType" />
              <label for="attendRadio"><?= Lang::get('content.formAttendButton') ?></label>
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
              <button id="submitFirstSection">ดำเนินการต่อ >></button>

            </div>

            <div class="secondSection" style="display:none;">
              <button id="backtoFirstSection"><< ย้อนกลับ</button><br>
              <label><?= Lang::get('content.formEmail') ?></label> <br>
              <input type="text" name="email"> <br>
              <label><?= Lang::get('content.formDesp') ?></label> <br>
              <textarea rows="3" name="description"></textarea> <br>
              <input type="submit" value="<?= Lang::get('content.formSubmitButton') ?>">
            </div>
          </form>
        </div>
    </div>

    <div class="telContact">
      <i class="fa fa-phone"></i> 038 618 2442
    </div>

    <div class="textCenter">
      Samaphan Property Ltd. All right reserved.
    </div>
  </div>



</div>

</body>
</html>
