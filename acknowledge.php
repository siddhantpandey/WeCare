<?php
    if(isset($_POST['send'])){
        
      
    $to = "admin@wecarecenter.com"; // this is your Email address
    $message = 'Name: '.$_POST['first_name'].' '.$_POST['last_name']."\r\n\r\n";
    $message .= 'Email: '.$_POST['email']."\r\n\r\n";
    $message .= 'Comments: '.$_POST['message'];
    $subject = $_POST['subject'];
    $headers = 'From: ' . $_POST['email'] . "\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    ini_set("SMTP","mx1.hostinger.com");
    ini_set("smtp_port","587");
    $success = mail($to,$subject,$message,$headers);
  }
?>
<?php include"myheader.php";?>

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
<?php
    echo "<center><alert>You will be redirected in 5 seconds..</alert></center>";
  header( "refresh:5; url=index.php" ); 
 
?>
<br/><br/>
<?php include"myfooter.php";?>