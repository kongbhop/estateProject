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
  <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>

  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>

  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen" />

  <script type="text/javascript" src="js/snap.min.js"></script>

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css" media="screen" />

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.0/js/swiper.jquery.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" /> -->

  <link rel="stylesheet" type="text/css" href="css/styleMobileM.css">
  <link rel="stylesheet" type="text/css" href="css/styleMobileC.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.0/css/swiper.min.css">

  <script>
    $( document ).ready(function() {
        mainTextH = $("#headTextContainer").height()
        $("#headTextContainer").css("margin-top", "-" + ((mainTextH/2)) +"px");
        console.log(mainTextH);

    });
  </script>


</head>
<body>
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <ul>
                      <li data-menuanchor="Project"><a class="menuAnchor" href="#Project"><?= Lang::get('content.navProject') ?></a></li>
                      <li data-menuanchor="Location"><a class="menuAnchor" href="#Location"><?= Lang::get('content.navLocation') ?></a></li>
                      <li data-menuanchor="PlanA"><a class="menuAnchor" href="#PlanA"><?= Lang::get('content.navPlanA') ?></a></li>
                      <li data-menuanchor="PlanB"><a class="menuAnchor" href="#PlanB"><?= Lang::get('content.navPlanB') ?></a></li>
                      <li data-menuanchor="Samapan"><a class="menuAnchor" href="#Samapan"><?= Lang::get('content.navSamapan') ?></a></li>
                      <li data-menuanchor="Contact"><a class="menuAnchor" href="#Contact"><?= Lang::get('content.navContact') ?></a></li>
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
                <a class="menuAnchor" href="#Mainpage"><img src="imgs/logo.png" /></a>
                <a href="#" id="open-right"><i class="fa fa-bars"></i></a>
                <a data-menuanchor="Location"  href="#Location" id="open-location"><i class="fa fa-map-marker"></i></a>
              </div>
            </div>

            <!-- ============= INSERT CONTENT HERE ============== -->



            <div class="container full-height no-padding" id="mainPage">
              <div class="container no-padding" id="headTextContainer">
                <h1 class="nowrap">PRIVATE PARK3</h1>
                <p class="nowrap">Best of housing property in Rayong</p>
              </div>

              <div class="triangle-down-left"></div>
            </div>

            <div class="container no-padding" id="concept" name="Project">
              <div class="row" id="head-concept">
                <p>PRIVATE PARK</p>
              </div>
              <div class="swiper-container concept-swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide concept-slide ">
                        <div class="concept-img" id="concept-img-1">
                        </div>
                        <div class="row concept-text">
                          <h1>Our Concept</h1>
                          <p class="warp normText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam sit amet orci consectetur gravida. Aliquam viverra, nisl nec tristique blandit, urna nisl pellentesque tortor, vitae pellentesque magna eros ut ex. Nam rutrum lectus dui, ut porttitor risus hendrerit sed. Integer augue orci  </p>
                        </div>
                      </div>
                      <div class="swiper-slide concept-slide">
                        <div class="concept-img" id="concept-img-2">
                        </div>
                        <div class="row concept-text">
                          <h1>Our Concept</h1>
                          <p class="warp normText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam sit amet orci consectetur gravida. Aliquam viverra, nisl nec tristique blandit, urna nisl pellentesque tortor, vitae pellentesque magna eros ut ex. Nam rutrum lectus dui, ut porttitor risus hendrerit sed. Integer augue orci  </p>
                        </div>
                      </div>
                      <div class="swiper-slide concept-slide">
                        <div class="concept-img" id="concept-img-3">
                        </div>
                        <div class="row concept-text">
                          <h1>Our Concept</h1>
                          <p class="warp normText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam sit amet orci consectetur gravida. Aliquam viverra, nisl nec tristique blandit, urna nisl pellentesque tortor, vitae pellentesque magna eros ut ex. Nam rutrum lectus dui, ut porttitor risus hendrerit sed. Integer augue orci  </p>
                        </div>
                      </div>
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev mobilePrevBtn"></div>
                  <div class="swiper-button-next mobileNextBtn"></div
              </div>
            </div>

            <div class="textHead" name="Location">
              LOCATION
            </div>
            <!-- =============== Location Section ============== -->
            <div class="locationSection">
              <!-- Slider main container -->
              <div class="swiper-container location-swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/A1.jpg')"></div>
                        <!-- <img src="imgs/B1.jpg" alt=""> -->
                        <div class="textSection">
                          <h3><?= Lang::get('content.locationNavigate') ?></h3>

                          <div>
                            <a class="defaultBtn" href="http://maps.apple.com/maps?q=Ban+Samaphan+Private+Park">START NAVIGATION</a>
                          </div>

                          <h4 class="normText"><?= Lang::get('content.locationDirectContact') ?></h4>

                          <div>
                            <a class="defaultBtn locationNextBtn">EXPLORE OUR NEIGHBORHOOD</a>
                          </div>
                        </div>
                      </div>
                      <?php foreach(Lang::get('content.neighbourhoodPicture') as $pic): ?>
                        <div class="swiper-slide horizonatalSection" id="placeItem">
                          <div class="imgSection" id="placeImg" style="background-image:url('<?= $pic['picUrl'] ?>')"></div>
                          <div class="textSection">
                            <h2><span><?= $pic['title'] ?></span></h2>
                            <p class="normText"><?= $pic['desp'] ?></p>
                            <a href="<?= $pic['link'] ?>" class="normText">View more</a>
                          </div>
                        </div>
                      <?php endforeach ?>
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev mobilePrevBtn"></div>
                  <div class="swiper-button-next mobileNextBtn"></div>
              </div>

            </div>

            <div class="textHead">
              HOUSE TYPE
            </div>

            <!-- =============== Plan A Section ============== -->
            <div class="planASection" name="PlanA">
              <!-- Slider main container -->
              <div class="swiper-container plana-swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/houseA.jpg')"></div>
                        <!-- <img src="imgs/houseB.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planATopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planAContent') ?></div>

                          <div>
                            <a class="defaultBtn planANextBtn">MORE DETAILS</a>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/A1.jpg')"></div>
                        <!-- <img src="imgs/B1.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planADownTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planADownContent') ?></div>
                        </div>
                      </div>
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/A2.jpg')"></div>
                        <!-- <img src="imgs/B2.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planAUpTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planAUpContent') ?></div>
                        </div>
                      </div>
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev mobilePrevBtn"></div>
                  <div class="swiper-button-next mobileNextBtn"></div>
              </div>

            </div>

            <!-- =============== Plan B Section ============== -->
            <div class="planBSection" name="PlanB">
              <!-- Slider main container -->
              <div class="swiper-container planb-swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/houseB.jpg')"></div>
                        <!-- <img src="imgs/houseB.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planBTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planBContent') ?></div>

                          <div>
                            <a class="defaultBtn planBNextBtn">MORE DETAILS</a>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/B1.jpg')"></div>
                        <!-- <img src="imgs/B1.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planBDownTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planBDownContent') ?></div>
                        </div>
                      </div>
                      <div class="swiper-slide horizonatalSection">
                        <div class="imgSection" style="background-image:url('imgs/B2.jpg')"></div>
                        <!-- <img src="imgs/B2.jpg" alt=""> -->
                        <div class="textSection">
                          <h2><?= Lang::get('content.planBUpTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.planBUpContent') ?></div>
                        </div>
                      </div>
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev mobilePrevBtn"></div>
                  <div class="swiper-button-next mobileNextBtn"></div>
              </div>

            </div>


            <!-- ================= BAAN SAMAPAN SECTION =================== -->
            <div class="baanSamapanSection" name="Samapan">

              <!-- Slider main container -->
              <div class="swiper-container baan-swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide horizonatalSection">
                        <img src="imgs/baansamapanlogo.png" alt="">
                        <p>
                          <h2><?= Lang::get('content.baanSamapanTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.baanSamapanContent') ?></div>
                        </p>
                      </div>
                      <div class="swiper-slide horizonatalSection">
                        <img src="imgs/logo.png" alt="">
                        <p>
                          <h2><?= Lang::get('content.privateParkTopic') ?></h2>

                          <div class="normText"><?= Lang::get('content.privateParkContent') ?></div>
                        </p>
                      </div>
                      <!-- <div class="swiper-slide">Slide 3</div> -->
                      <!-- ... -->
                  </div>
                  <!-- If we need pagination -->
                  <!-- <div class="swiper-pagination"></div> -->

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev mobilePrevBtn"></div>
                  <div class="swiper-button-next mobileNextBtn"></div>

                  <!-- If we need scrollbar -->
                  <div class="swiper-scrollbar"></div>
              </div>

            </div>

            <!-- ============== Contact Section =============== -->
            <div class="contactSection" name="Contact">
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
