<?php
    if(isset($_POST['send'])){
    $to = "2018wecare@gmail.com"; // this is your Email address
    echo $to;
    $message = 'Name: '.$_POST['first_name'].' '.$_POST['last_name']."\r\n\r\n";
    $message .= 'Email: '.$_POST['email']."\r\n\r\n";
    $message .= 'Comments: '.$_POST['message'];
    $subject = $_POST['subject'];
    
    echo $message;
      
    $headers = 'From: ' . $_POST['email'] . "\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","465");
    $success = mail($to,$subject,$message,$headers);
  }
?>
<html>
<head>
	<title>Thank You!!</title>
	
</head>
<body>

	<img src="img/thank.jpg" width="1250px" height="500px">
	<br><center>
	<?php if(isset($success) && $success){?>
	<h1>Thank You</h1>
      <p>Your message has been sent.</p>
      <?php } else {?>
      <h1>Oops!</h1>
    <p>Sorry, there was a problem sending your message.</p>
    <?php }?>   
    </center>
</body>
</html>
<?php
    echo "<center><alert>You will be redirected in 5 seconds..</alert></center>";
  header( "refresh:5; url=index.php" ); 
?>