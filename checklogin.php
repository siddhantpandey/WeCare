<?php
session_start(); // Right at the top of your script
?>
<?php
if($count==1)
  {
    $_SESSION['success']=true;
    $_SESSION['username']=$myusername;
    header("Location: index.php");
    exit();
  }
else
  {
     $_SESSION['success']=false;
     header("Location: login.php");
     exit();
  }
?>