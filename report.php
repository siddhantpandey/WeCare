
<!--new-->

<?php include('config.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $charityName = $_POST['charity'];
    $type = $_POST['radio'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $place = $_POST['location'];
    
    $sql = "INSERT into donor values('$firstName','$lastName',$phone,'$address','$charityName','$type','$time','$date','$place')";
    $result = mysqli_query($link,$sql);
    header("location: message.php?indicator=1");
    mysqli_close($link);
}
?>

<?php include"myheader.php"?>
   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">

        <marquee><h2><b>For monetory donation we accept cheque in the name of charity of your choice only</b></h2></marquee>
        <p>Please fill in the credentials.</p>
        <form action="report.php?indicator=1" method="post">
            <div >
                <label>Firstname</label><br>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname"><br>
                
            </div>    
            <div>
                <label>Lastname</label><br>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname"><br>
            
            </div>
            <div >
                <label>Phone</label><br>
                <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number"><br>
               
            </div>
            <div >
                <label>Address</label><br>
                <input type="text" id="address" name="address" class="form-control" placeholder="Address"><br>
                
            </div>
            <div >
                <label>Charity You Want To Donate To</label><br>
                <input type="text" id="charity" name="charity" class="form-control" placeholder="name of charity you want to donate to"><br>
                
            </div>
            <div >
                <label>Donation Type</label><br>
                <fieldset id="item">
                <input type="radio" id="money" name="radio" value="Money">Money<br>
                <input type="radio" id="goods" name="radio" value="Goods">Goods<br>
                </fieldset>
            </div>
            <br><br>
            <div >
                <label>Schedule A Pickup</label><br>
                <input type="text" id="time" name="time" class="form-control" placeholder="Enter Time"><br>
                <input type="text" id="date" name="date" class="form-control" placeholder="Enter Date"><br>
                <input type="text" id="location" name="location" class="form-control" placeholder="Pickup Location"><br>
            </div>
            <div >
                <input type="submit" id="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>    
      </center>
   
   
   
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