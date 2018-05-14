<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
$_SESSION['username']=null;
$_SESSION['password']=null;
 
// Redirect to login page
header("location: index.php?indicator=1");
exit;
?>