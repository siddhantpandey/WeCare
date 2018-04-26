
<!--BEGGER-->


<?php include('config.php');
  ?>


<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beggars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
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

        .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button4 {border-radius: 12px;}
        
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
                    <a class="navbar-brand" href="index2.php">WeCare</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                          
                        <li><a href="login.php">Log In</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
   
   <!---->
       <br/><br/><br/><br/><br/><br/>
		<div id="wrapper" style="border-radius: 25px;background: url(img/paperback.jpg);background-position: left top;background-repeat: repeat;padding: 20px; width: 100%;height: 500px; ">
		
           <center>
			<!--<section id="content">-->
				<table border="1"  width="75%" cell-padding="10" cellspacing="10" style="border-style: groove;margin-left:-70px;margin-top:50px;margin-bottom:100px;color:black;font-size:25;font-family:Courier">
                    <h1 style="color:black">Beggars</h1>
					<th>Location</th><th>Requirement</th>
					
					<?php

			
					$query="select * from begger";
			                $select_query=mysqli_query($link,$query);
			                while ($row=mysqli_fetch_assoc($select_query)) 
			                {
			                

							echo'<tr>
							<td>'.$row['Location'].'</td>
							<td>'.$row['Requirment'].'</td>
							
						
							</tr>';
							
						

							}

					?>
				</table>
				<a href="report.php"><button class="button button4">Donate</button></a>
				</center>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<!--</section> -->
		</div>
		<br/><br/>
		<div id="storyboard">
	<div id="storyboard1">
	    <p>There are approximately 78 million homeless people in India, with over 11 million children. Often people come to metro cities in search of work but end up without a job, a home and often – penniless. That is what gives birth to beggars and illegal slums. According to the Indian government in 2015, there are over 4 lakh beggars in India with 81,000 belonging to West Bengal. There are 4,13,670 beggars exactly- 2.2 lakh males and 1.91 lakh females. The Bombay Prevention of Begging Act, 1959 was the one of the first provisions to criminalise begging. It did not just make begging an offence but also asked for detention, training and employment of the beggars so they can be taken off the streets.</p>    
	</div>
      <br><br>
  <div id="storyboard1">
     <p>India has an estimated one million or more street children in each of the following cities: New Delhi, Kolkata, and Mumbai.[2] Mainly because of family conflict, they come to live on the streets and take on the full responsibilities of caring for themselves, including working to provide for and protecting themselves. Though street children do sometimes band together for greater security, they are often exploited by employers and the police.</p>
      </div>
      
      
      </div>
      <br/><br/>
      <div id="storyboard">
	<div id="storyboard2">
	    <p></p>    
	</div>
      <br><br>
  <div id="storyboard2">
     <p></p>
      </div>
      <br/><br/>
      <div id="storyboard2">
     <p></p>
      </div>
      
      </div>
		
		
		
		<footer>
		<div id="contact">
			<div class="container">
				<div class="text-center">
					<h3>Contact Us</h3>
					<p>Feel free to contact us any time</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
						<h2>Contact us any time</h2>
						<p>In a elit in lorem congue varius. Sed nec arcu.
						Etiam sit amet augue.
						Fusce fermen tum neque a rutrum varius odio pede 
						ullamcorp-er tellus ut dignissim nisi risus non tortor.
						Aliquam mollis neque.</p>				
					</div>				
					
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<h2>Contact Info</h2>
						<ul>
							<li><i class="fa fa-home fa-2x"></i> Room # 601, Boys' Hostel 3A, Lovely Professional University, Punjab 144411</li><hr>
							<li><i class="fa fa-phone fa-2x"></i> +919872421830</li><hr>
							<li><i class="fa fa-envelope fa-2x"></i> 2018wecare@gmail.com</li>
						</ul>
					</div>
					
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">					
						<form action=""  method="post" >
							<div class="form-group">
								<input type="name" class="form-control" name="first_name" id="firstName" placeholder="firstName">						<input type="name" class="form-control" name="last_name" id="lastName" placeholder="lastName">							
	
							</div>
							<div class="form-group">							
								<input type="email" id="email" class="form-control" name="email" id="InputEmail1" placeholder="email">
							</div>
						
						
					
							<div class="form-group">
								<input type="subject" class="form-control" name="subject" placeholder="Subject" id="subject">
							</div>						
							<textarea class="form-control" rows="5" id="mailbody" name="message"></textarea>							
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" id="sendmail" name="submit">Submit Message</button>
							</div>
						</form>						
					</div>	
				</div>
			</div>
		</div><!--/#contact-->	
		
						
														
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
