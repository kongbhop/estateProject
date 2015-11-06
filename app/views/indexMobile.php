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



            <!-- ============== Contact Section =============== -->
            <div class="contactSection">
              <div class="blankSpace"></div>
              <div>
                  <div class="textLeft sidePadding">
                    <h1 class="sectionHeader"><?= Lang::get('content.contactTopic') ?></h1>
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
                      <label><?= Lang::get('content.formEmail') ?></label> <br>
                      <input type="text" name="email"> <br>
                      <label><?= Lang::get('content.formDesp') ?></label> <br>
                      <textarea rows="4" name="description"></textarea> <br>
                      <input type="submit" value="<?= Lang::get('content.formSubmitButton') ?>">
                    </form>
                  </div>
              </div>

              <div class="telContact">
                <i class="fa fa-phone"></i> 038 618 2442
              </div>

              <div class="center">
                Samaphan Property Ltd. All right reserved.
              </div>
            </div>
        </div>

        <div class="modal fade" id="thankYouModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <p style="font-size: 2em"><?= Lang::get('content.formThankYouMsg') ?></p>
        				<button type="button" class="myBtn" data-dismiss="modal" style="font-size: 1.5em">OK</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


</body>
</html>
