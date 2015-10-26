<!DOCTYPE html>
<html>
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


    <link rel="stylesheet" type="text/css" href="css/styleMobileM.css">
    <link rel="stylesheet" type="text/css" href="css/styleMobileC.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="js/scriptMobile.js"></script>

    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="js/snap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['Mainpage', 'Concept', 'Location', 'PlanA', 'PlanB', 'Samapan', 'Contact'],
                menu: '#menu',
                css3: true,
                scrollingSpeed: 500
            });

            var parentHeight = $('.fp-tableCell').height();
            var childHeight = $('#mainpageText').height();
            $('#mainpageText').css('margin-top', (parentHeight - childHeight) / 2);




        });
    </script>

  </head>
  <body>
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">
            <div>
                <ul>
                  <li data-menuanchor="Project"><a href="#Project"><?= Lang::get('content.navProject') ?></a></li>
                  <li data-menuanchor="Location"><a href="#Location"><?= Lang::get('content.navLocation') ?></a></li>
                  <li data-menuanchor="PlanA"><a href="#PlanA"><?= Lang::get('content.navPlanA') ?></a></li>
                  <li data-menuanchor="PlanB"><a href="#PlanB"><?= Lang::get('content.navPlanB') ?></a></li>
                  <li data-menuanchor="Samapan"><a href="#Samapan"><?= Lang::get('content.navSamapan') ?></a></li>
                  <li data-menuanchor="Contact"><a href="#Contact"><?= Lang::get('content.navContact') ?></a></li>
                  <li>
              			<span class="<?= (Session::get('lang') == 'th')? 'active':'' ?>"><a href="th">ไทย</a></span>
              			|
              			<span class="<?= (Session::get('lang') == 'en')? 'active':'' ?>"><a href="en">ENGLISH</a></span>
                  </li>
                </ul>
            </div>
        </div>
        <div class="snap-drawer snap-drawer-right"></div>
    </div>
    <div id="content" class="snap-content" style="">
      <div id="fullpage">
        <div class="section" id="mainpage">
          <div class="centerText centerDiv" id="mainpageText">
              <h1>PRIVATE PARK 3</h1>
              <span>best of housing property in rayong</span>
          </div>
        </div>

        <div class="section" id="concept">
          <div class="slide" id="slide1" name="House Type A">
            <div class="halfHeight" id="concept-1">
            </div>
            <div class="halfHeightBottom" id="concept-1">
            </div>
          </div>
        </div>

    </div>

    <script type="text/javascript">
        var snapper = new Snap({
            element: document.getElementById('content')
        });

    </script>

  </body>


</html>
