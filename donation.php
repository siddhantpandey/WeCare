(<?php include('server.php');
  ?>)
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WeCare</title>
    
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">WeCare</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#feature">Feature</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Care & Share</a></li>
                        <li><a href="#our-team">Our Team</a></li> 
                        <li><a href="#contact">Contact</a></li>   
                        <li><a href="login.php">Log In</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
  
   <div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Donation Options</h3>
				<p>Select an option to donate for</p>
			</div>
			<div class="row">
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/donation/p1.jpg" class="flipLightBox">
							<img src="img/donation/p1.jpg" class="img-responsive" alt="" height="1600px" width="1400px" title="Beggar Kids">
							
							</a>
						</div>
					</figure>
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/donation/p2.jpg" class="flipLightBox">
							<img src="img/donation/p2.jpg" class="img-responsive" alt="" title="Homeless">
							
							</a>
						</div>
					</figure>	
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/donation/p3.jpg" class="flipLightBox">
							<img src="img/donation/p3.jpg" class="img-responsive" alt="" title="Schooling">
							
							</a>
						</div>
					</figure>
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/donation/p4.jpg" class="flipLightBox">
							<img src="img/donation/p4.jpg" class="img-responsive" alt="" title="Child Labour">
							
							</a>
						</div>
					</figure>
			</div>
		</div>
		
	</div><!--/#gallery-->


   
   <footer>
						
		<div class="container">
			<div class="sub-footer">
				<div class="text-center">
					<div class="col-md-12">
						<form class="form-inline">
							<div class="form-group">
								<button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Enter Your Email</button>
							</div>
							<div class="form-group">
								<button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>			
		<div class="social-icon">
			<div class="container">
				<div class="col-md-6 col-md-offset-3">						
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
					</ul>						
				</div>
			</div>
		</div>						
		<div class="text-center">
			<div class="copyright">
				&copy; 2018 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">WeCare</a>. All Rights Reserved.
			</div>
            <!-- 
                All links in the footer should remain intact. 
                Licenseing information is available at: http://bootstraptaste.com/license/
                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bikin
            -->
		</div>									
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>