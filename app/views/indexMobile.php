<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<title>Private Park 3 Project</title>
  	<meta name="author" content="" />
  	<meta name="description" content="" />
  	<meta name="keywords"  content="" />
  	<meta name="Resource-type" content="Document" />

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script src="semantic/dist/semantic.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styleMobileM.css">
    <link rel="stylesheet" type="text/css" href="css/styleMobileC.css">

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
                scrollingSpeed: 500
            });

            var parentHeight = $('.fp-tableCell').height();
            var childHeight = $('#mainpageText').height();
            $('#mainpageText').css('margin-top', (parentHeight - childHeight) / 2);
            



        });
    </script>

  </head>
  <body>
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


  </body>
</html>
