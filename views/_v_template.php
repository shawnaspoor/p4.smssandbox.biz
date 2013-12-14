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

<!--top navbar fixed to the top of the page-->

   <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand active" href="/">Cookies Please</a>
            <div class="nav-collapse collapse">
              <ul class="nav">                

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cookies<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/cookies/chocolatechip">Chocolate Chip</a></li>
                    <li><a href="/cookies/doublechocolatechip">Double Chocolate Chip</a></li>
                    <li><a href="/cookies/peanutbutter">Peanut Butter</a></li>
                    <li><a href="/cookies/snickerdoodle">Snickerdoodle</a></li>
                  </ul>
                </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brownies <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/brownies/walnut">Walnut</a></li>
                    <li><a href="/brownies/chocolatemint">Chocolate Mint</a></li>
                    <li><a href="/brownies/marshmallowcrunch">Marshmallow Crunch</a></li>
                    <li><a href="/brownies/saltedcaramel">Salted Caramel</a></li>
                  </ul>
                </li>
                <li><a href="/users/login">Login</a></li>
                <li><a href="/about">Contact</a></li>
                <li><a href="/contact">Shopping Cart</a></li>
             </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

 
  <div class="container">
    

        		<?php if(isset($content)) echo $content; ?>

        		<?php if(isset($client_files_body)) echo $client_files_body; ?>
        		

          </div>

            <footer class="container">
                  <p>CSCIE-15 Project4 - Shawna Spoor</p>
            </footer>
          </div>



    <!-- javascript - Placed at the end of the document so the pages load faster -->

    <script src="/js/js-bootstrap/jquery.js"></script>
    <script src="/js/js-bootstrap/bootstrap-transition.js"></script>
    <script src="/js/js-bootstrap/bootstrap-alert.js"></script>
    <script src="/js/js-bootstrap/bootstrap-dropdown.js"></script>
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