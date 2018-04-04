<?php

	$con=mysqli_connect("127.0.0.1","root","","wecare");
	if(!isset($_SESSION))
	{
		session_start();
	}
	$username=$_POST['username'];
	$pass=$_POST['password'];
	

	$query="SELECT * FROM users WHERE username='$username' AND password='$pass'";
	$select_query=mysqli_query($con,$query);


	if(!$select_query)
	{
		die("query failed".mysqli_error($con));
	}
    $result = mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    echo $num;
    if(mysqli_num_rows($result)==1) {
                //log user in
                $_SESSION['logged']=true;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); //redirect to homepage
            }
	else
	{
		$_SESSION['logged']=false;
		header("Location: login.php");		
	}
?>