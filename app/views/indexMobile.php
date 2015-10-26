<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Private Park Project</title>
  <meta name="author" content="Alvaro Trigo Lopez" />
  <meta name="description" content="fullPage full-screen backgrounds." />
  <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
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
  <script type="text/javascript" src="js/script.js"></script>

  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>


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
          //$('#mainpageText').css('margin-top', (parentHeight - childHeight) / 2);

          $('.halfHeightBottom').hei
      });
  </script>
</head>
<body>



<div id="fullpage">
  <div class="section" id="mainpage">
      <div class="centerText centerDiv" id="mainpageText">
          <div id="head">PRIVATE PARK3</div>
          <span>best of housing property in rayong</span>
      </div>
    </div>

    <div class="section" id="concept">
      <div class="slide" id="slide1">
        <div class="halfHeight" id="concept-1">
        </div>
        <div class="halfHeightBottom" id="text-1">
          <div id="head">OUR CONCEPT
          </div>
          <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor finibus neque ac tempus. Nullam euismod dolor eget maximus eleifend. Praesent luctus dui eget justo ornare
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>

      <div class="slide" id="slide1">
        <div class="halfHeight" id="concept-1">
        </div>
        <div class="halfHeightBottom" id="text-1">
          <div id="head">OUR CONCEPT
          </div>
          <div id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor finibus neque ac tempus. Nullam euismod dolor eget maximus eleifend. Praesent luctus dui eget justo ornare
          </div>
        </div>
        <div class="halfHeightBottom triangle-down-right">
        </div>
      </div>
    </div>

    <div class="section" id="location">
      <div class="centerText centerDiv" id="mainpageText">
          <div id="head">PRIVATE PARK3</div>
          <span>best of housing property in rayong</span>
      </div>
    </div>

  </div>

  

</div>

</body>
</html>
