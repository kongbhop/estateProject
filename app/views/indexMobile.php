<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
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

  <script type="text/javascript" src="js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="js/scriptMobile.js"></script>

  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/snap.min.js"></script>


  <script type="text/javascript">
      $(document).ready(function() {
          $('#fullpage').fullpage({
              anchors: ['Mainpage', 'Concept', 'Location', 'PlanA', 'PlanB', 'Samapan', 'Contact'],
              menu: '#menu',
              css3: true,
              scrollingSpeed: 500,
          });

          var parentHeight = $('.fp-tableCell').height();
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
    <a href="#" id="open-location"><i class="fa fa-map-marker"></i></a>
  </div>
</div>
<div id="fullpage">
  <div class="section" id="mainpage">
    <div class="padfromnav">
      <div class="centerDiv" id="mainpageText">
          <div id="head">PRIVATE PARK3</div>
          <span>best of housing property in rayong</span>
      </div>
    </div>
  </div>

  <div class="section" id="concept">
    <div class="padfromnav">
      <div class="slide" id="slide1">
        <div class="halfHeight" id="concept-1">
        </div>
        <div class="halfHeightBottom rectangle" id="text-1">
          <div id="head">OUR CONCEPT
          </div>
          <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor finibus neque ac tempus. Nullam euismod dolor eget maximus eleifend. Praesent luctus dui eget justo ornare
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>

      <div class="slide" id="slide2">
        <div class="halfHeight" id="concept-2">
        </div>
        <div class="halfHeightBottom rectangle" id="text-2">
          <div id="head">OUR CONCEPT
          </div>
          <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor finibus neque ac tempus. Nullam euismod dolor eget maximus eleifend. Praesent luctus dui eget justo ornare
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>

      <div class="slide" id="slide3">
        <div class="halfHeight" id="concept-3">
        </div>
        <div class="halfHeightBottom rectangle" id="text-3">
          <div id="head">OUR CONCEPT
          </div>
          <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor finibus neque ac tempus. Nullam euismod dolor eget maximus eleifend. Praesent luctus dui eget justo ornare
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>
    </div>
  </div>

  <div class="section" id="location">
    <div class="padfromnav">
      <div class="centerText" id="mainpageText">
          <div id="head">LOCATION</div>
      </div>
      <div class="fullWidth" id="locationImage">
      </div>
      <div class="halfHeightBottom rectangle centerText" id="locationText">
           <div class="text lineHeightDiv">นำทางไปยังไพรเวทพาร์ค 3</div>
           <div class="button lineHeightDiv"><a href="#" class="locationButton">START NAVIGATION</a></div>
           <div class="text lineHeightDiv">หริอติดต่อเราโดยตรงผ่าน 038 618 2442</div>
           <div class="button lineHeightDiv"><a href="#" class="locationButton">EXPLORE NEIGHBOURHOOD</a></div>
      </div>
    </div>
  </div>


</div>

</body>
</html>
