
<!--new-->

<?php include('config.php'); ?>
<?php
// Define variables and initialize with empty values
$name = $issue = $address = "";
$aadhaar = $phone = 0;
$name_err = $aadhaar_err =$phone_err = $address_err = $issue_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
 
    // Check if name is empty
    if(empty($_POST["name"])){
        $name_err = 'Please enter name.';
    } else{
        $name = $_POST["name"];
    }
    
    // Check if aadhaar is empty
    if(empty($_POST['aadhaar'])){
        $aadhaar_err = 'Please enter aadhaar.';
    } else{
        $aadhaar = $_POST['aadhaar'];
    }
    
    // Check if phone is empty
    if(empty($_POST['phone'])){
        $phone_err = 'Please enter phone.';
    } else{
        $phone = trim($_POST['phone']);
    }
    
    // Check if address is empty
    if(empty($_POST['address'])){
        $address_err = 'Please enter address.';
    } else{
        $address = $_POST['address'];
    }
    
    // Check if issue is empty
    if(empty($_POST['issue'])){
        $issue_err = 'Please enter issue.';
    } else{
        $issue = $_POST['issue'];
    }
    $image = $_POST['fileToUpload'];
    $sql = "INSERT into personsOfInterest values('$name',$aadhaar,$phone,'$address','$issue','$image')";
    $check = "SELECT aadhaar FROM  personsOfInterest WHERE aadhaar=$aadhaar";
    $result=mysqli_stmt_execute($check);
    if(mysqli_stmt_num_rows($result)==1){
        echo "Person already exists in database.";
        header("location: reportingForm.php");
    }
    else{
        $result = mysqli_query($link,$sql);
        $message="Data submitted successfully. You will be redirected shortly.";
        echo "<script>alert('$message');</script>";
        header("location: reportingForm.php");
    }
    // Close connection
    mysqli_close($link);
}
?>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>



 <html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Persons of Interest</title>
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
   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">
        <h2>Person of Interest</h2>
        <p>Please fill in the credentials.</p>
        <form action="reportingForm.php" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" id="name" name="name"class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($aadhaar_err)) ? 'has-error' : ''; ?>">
                <label>Aadhaar</label>
                <input type="number" id="aadhaar" name="aadhaar" class="form-control">
                <span class="help-block"><?php echo $aadhaar_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label>
                <input type="number" id="phone" name="phone" class="form-control">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" id="address" name="address" class="form-control">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($issue_err)) ? 'has-error' : ''; ?>">
                <label>Issue</label>
                <input type="text" id="issue" name="issue" class="form-control">
                <span class="help-block"><?php echo $issue_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                <label>Select image to upload:</label>
                <input type="file" id="fileToUpload" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="form-group">
                <input type="submit" id="submit" class="btn btn-primary" value="Submit" name="submit">
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