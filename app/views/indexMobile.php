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


  <!-- <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" /> -->

  <link rel="stylesheet" type="text/css" href="css/styleMobileM.css">
  <link rel="stylesheet" type="text/css" href="css/styleMobileC.css">

  <!--[if IE]>
    <script type="text/javascript">
       var console = { log: function() {} };
    </script>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
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
                        <span class="<?= (Session::get('lang') == 'th')? 'active':'' ?>"><a href="th"><img src="imgs/th_icon.png" alt=""> ไทย</a></span>
                         |
                        <span class="<?= (Session::get('lang') == 'en')? 'active':'' ?>"><a href="en"><img src="imgs/us_icon.png" alt=""> ENGLISH</a></span>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>

        <div id="content" class="snap-content">
            <div id="toolbar">
              <div class="logo">
                <a href="#Mainpage"><img src="imgs/logo.png" /></a>
                <a href="#" id="open-right"><i class="fa fa-bars"></i></a>
                <a data-menuanchor="Location"  href="#Location" id="open-location"><i class="fa fa-map-marker"></i></a>
              </div>
            </div>

            <!-- ============= INSERT CONTENT HERE ============== -->
            
        </div>

</body>
</html>
