<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

	<!--the css link out would go here-->
	 <!-- CSS -->
  <link href="/css/css-bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="/css/css-bootstrap/bootstrap-responsive.css" />
	<link href="/css/footer.css" rel="stylesheet">


</head>

<body>	

	<!---top navbar fixed to the top of the page-->

   <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand active" href="#">Cookies Please</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">                

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cookies<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Chocolate Chip</a></li>
                    <li><a href="#">Double Chocolate Chip</a></li>
                    <li><a href="#">Peanut Butter</a></li>
                    <li><a href="#">Snickerdoodle</a></li>
                  </ul>
                </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brownies <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Walnut</a></li>
                    <li><a href="#">Chocolate Mint</a></li>
                    <li><a href="#">Marshmallow Crunch</a></li>
                    <li><a href="#">Salted Caramel</a></li>
                  </ul>
                </li>
                <li><a href="#">Login</a></li>
                <li><a href="#about">Contact</a></li>
                <li><a href="#contact">Shopping Cart</a></li>
             </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

 
    <!--Carousel-->
     <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="cookiespleaselogo.jpg" alt="Cookies Please">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cookies Please</h1>
              <p class="lead">Your online source for my most delicious medical marijuana baked goods in southern California.</p>
              <a class="btn btn-large btn-primary" href="#">Order today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="chewy-brownies.jpg" alt="Brownies">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="chocolatechip.jpg" alt="Chocolate Chip">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->





    <div class="container">

		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
		
	 </div>

      <div id="push"></div>
  </div>

  <div id="footer">
    <div class="container">
        <p class="muted credit">CSCIE-15 Project4 - Shawna Spoor</p>
   </div>
 </div>




    <!-- javascript - Placed at the end of the document so the pages load faster -->

    <script src="/js/js-bootstrap/jquery.js"></script>
    <script src="/js/js-bootstrap/bootstrap-transition.js"></script>
    <script src="/js/js-bootstrap/bootstrap-alert.js"></script>
    <script src="/js/js-bootstrap/bootstrap-modal.js"></script>
    <script src="/js/js-bootstrap/bootstrap-dropdown.js"></script>
    <script src="/js/js-bootstrap/bootstrap-scrollspy.js"></script>
    <script src="/js/js-bootstrap/bootstrap-tab.js"></script>
    <script src="/js/js-bootstrap/bootstrap-tooltip.js"></script>
    <script src="/js/js-bootstrap/bootstrap-popover.js"></script>
    <script src="/js/js-bootstrap/bootstrap-button.js"></script>
    <script src="/js/js-bootstrap/bootstrap-collapse.js"></script>
    <script src="/js/js-bootstrap/bootstrap-carousel.js"></script>
    <script src="/js/js-bootstrap/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="/js/js-bootstrap/holder/holder.js"></script>
  </body>
</html>