<?php
include "myheader.php"
    ?>
	<img src="img/thank.jpg" width="1250px" height="500px">
	<br><center>
	<label><p style="font-family:courier;">Your Pickup has been Scheduled.<br> Our Representative will Contact You Shortly</p></label></center>
<?php
    echo "<center><alert>You will be redirected in 5 seconds..</alert></center>";
  header( "refresh:5; url=index.php" ); 
?>
<br/><br/><br/>


<?php include"myfooter.php";?>