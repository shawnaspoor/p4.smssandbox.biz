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
	<link href="/css/custom.css" rel="stylesheet">
  

   <!--javascript that needs to be in the head -->
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="/js/jquery.validate.js" type="text/javascript"></script>

</head>

<body>	

<!--top navbar fixed to the top of the page-->

    <div class="navbar-wrapper">
    <!--   Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
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
                    <li><a href="/cookies/muddybuddies">Muddy Buddies</a></li>
                    <li><a href="/cookies/oatmealscotchies">Oatmeal Scotchies</a></li>
                    <li><a href="/cookies/coconutoatmeal">Coconut Oatmeal Cookies</a></li>
                
                  </ul>
                </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brownies <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/brownies/caramel">Caramel Peanut Butter</a></li>
                    <li><a href="/brownies/butterfinger">Butterfingers</a></li>
                  </ul>
                </li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cakes and Bread <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/cakesandbread/whoopiepies">Whoopie Pies</a></li>
                    <li><a href="/cakesandbread/pumpkinbread">Pumpkin Bread (Seasonal)</a></li>
                  </ul>
                </li>
                <?php if($user): ?>
                <li><a href="/users/profile">Profile</a></li>
                <li><a href="/users/logout">Logout</a></li>
                <?php else: ?>
                <li><a href="/users/login">Login</a></li>
                 <li><a href="/users/signup">Sign Up</a></li>
               <?php endif; ?>
                
                <li><a href="/cart/cart">Shopping Cart</a></li>
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
      <p ><a href="mailto:kat@cookiespls.com">Contact Us</a> | CookiePls &reg; </p> 
       <p >CSCIE-15 Project 4 - Shawna Spoor</p>
    </footer>
  



    <!-- javascript - Placed at the end of the document so the pages load faster -->
    <script src="/js/orderform.js"></script>
    <script src="/js/js-bootstrap/jquery.js"></script>
    <script src="/js/js-bootstrap/bootstrap-alert.js"></script>
    <script src="/js/js-bootstrap/bootstrap-dropdown.js"></script>
    <script src="/js/js-bootstrap/bootstrap-button.js"></script>
    <script src="/js/js-bootstrap/bootstrap-collapse.js"></script>
    <script src="/js/js-bootstrap/bootstrap-carousel.js"></script>

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