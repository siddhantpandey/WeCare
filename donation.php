<?php include('connect.php');
  ?>
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
    <style>
      #storyboard1 {
    border-radius: 25px;
    background: #f4f442;
    padding: 20px; 
    
    display: inline-block;
    }
    #storyboard2 {
    border-radius: 25px;
    background: #ff99ff;
    padding: 20px; 
    
    display: inline-block;
    }
        #storyboard {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    display: inline-block;
    }

    </style>
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
						
							<a href="begger.php" id="begger" class="flipLightBox" onclick="document.location=this.id+'.php';return false;">
							<img src="img/donation/p1.jpg" class="img-responsive" alt="" height="1600px" width="1400px" title="Beggar Kids">
							
							</a>
						</div>
					</figure>
					&ensp;
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="street.php" id="street" class="flipLightBox" onclick="document.location=this.id+'.php';return false;"><img src="img/donation/p2.jpg" class="img-responsive" alt="" title="Homeless"></a>
						</div>
					</figure>	
					&ensp;
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="skl.php" class="flipLightBox" id="skl" onclick="document.location=this.id+'.php';return false;">
							<img src="img/donation/p3.jpg" class="img-responsive" alt="" title="Schooling">
							
							</a>
						</div>
					</figure>
					&ensp;
				<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="childlab.php" class="flipLightBox" id="childlab" onclick="document.location=this.id+'.php';return false;">
							<img src="img/donation/p4.jpg" class="img-responsive" alt="" title="Child Labour">
							
							</a>
						</div>
					</figure>
			</div>
		</div>
		
	</div><!--/#gallery-->
	<div id="storyboard">
	<div id="storyboard1">
	    <p>INDIANS waste as much food as the whole of United Kingdom consumes – a statistic that may not so much indicative of our love of surfeit, as it is of our population. Still, food wastage is an alarming issue in India. Our street and garbage bins, landfills have sufficient proof to prove it.
Weddings, canteens, hotels, social and family functions, households spew out so much food.  According to the United Nations Development Programme, up to 40% of the food produced in India is wasted. About 21 million tonnes of wheat are wasted in India and 50% of all food across the world meets the same fate and never reaches the needy. In fact, according to the agriculture ministry, Rs. 50,000 crore worth of food produced is wasted every year in the country.</p>    
	</div>
      <br><br>
  <div id="storyboard1">
     <p>25% of fresh water used to produce food is ultimately wasted, even as millions of people still don’t have access to drinking water. When you calculate the figures in cubic kilometers, this is a bit more than an average river. Even though the world produces enough food to feed twice the world’s present population, food wastage is ironically behind the billions of people who are malnourished. The number of hungry people in India has increased by 65 million more than the population of France. According to a survey by Bhook (an organization working towards reducing hunger) in 2013, 20 crore Indians sleep hungry on any given night. About 7 million children died in 2012 because of hunger/malnutrition. Acres of land are deforested to grow food. Approximately 45% of India’s land is degraded primarily due to deforestation, unsustainable agricultural practices, and excessive groundwater extraction to meet the food demand.
300 million barrels of oil are used to produce food that is ultimately wasted.</p>
      </div>
      
      
      </div>
      <br/><br/>
      <div id="storyboard">
	<div id="storyboard2">
	    <p>Child labour is prominent in rural India - 80% of working children live in India's villages, where most of them work in agriculture. Some of them also work in household industries and are employed in home-based businesses. Children between 14-17 years engaged in hazardous work account for 62.8% of the India's child labour workforce, 10% of whom are hired in family enterprises. Over half of working adolescents do not study. This number is higher for adolescents doing dangerous work. It is not surprising that more boys than girls (38.7 million vs. 8.8 million) are forced into doing hazardous work (according to International Labour Organization’s World Report on Child Labour 2015).</p>    
	</div>
      <br><br>
  <div id="storyboard2">
     <p>One in every 11 children in India is working. Child labour has been decreasing at an abysmal rate of 2.2% per year from 2001 to 2011, as per an analysis of census data by non-governmental organization CRY (Child Rights and You). 80% of working children are based in rural areas and three out of four of these children work in agriculture, as cultivators or in household industries, most of which are home-based employments. More than half of the 5.5 million working children in India are concentrated in five states—Bihar, Uttar Pradesh, Rajasthan, Madhya Pradesh and Maharashtra. Adolescents doing hazardous work form 20.7% of those employed in this age group, while almost 25% of adults work in hazardous conditions. Adolescents between 15 and 17 years of age doing hazardous work form 62.8% of the overall child labour population.</p>
      </div>
      <br/><br/>
      <div id="storyboard2">
     <p>Nearly 10% of adolescents working in hazardous conditions are working in family enterprises. 56% of the working adolescents are no longer studying. And 70% of those in hazardous conditions are not studying. More boys (38.7 million) than girls (8.8 million) are involved in hazardous work. While the incidence of hazardous work among adolescents is highest in Nicaragua, the number of adolescents in hazardous work is greatest in India (2.4 million).
         <b>Source:</b> <i>International Labour Organization’s World Report on Child Labour 2015 and CRY recent analysis of the Census 2011</i></p>
      </div>
      
      </div>
   
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