<!--Send Email-->
<?php
//session_name('header');
session_start();
$logined_username = $_SESSION['username'];
$logined_password = $_SESSION['password'];
?>

<!--UI Design-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
   
    <!-- Material Design Bootstrap -->
    <link href="mdb/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="mdb/css/style.css" rel="stylesheet">	
    <style type="text/css">
        
        body{ font: 14px sans-serif; text-align: center; }
        
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
                    <a class="navbar-brand" href="index.php?indicator=1">WeCare</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                       <?php
                        if(isset($_GET['indicator'])){
                          echo' <li class="active"><a href=index.php#header">Home</a></li>
                        <li><a href="index.php#bulletin">Bulletin</a></li>
                        <li><a href="index.php#gallery">Gallery</a></li>
                        <li><a href="index.php#pricing">Care & Share</a></li>
                        <li><a href="index.php#our-team">Our Team</a></li> 
                        <li><a href="index.php#contact">Contact</a></li>
                        <li>';  
                        }
                        else{
                            echo'<li class="active"><a href="#header">Home</a></li>
                        <li><a href="#bulletin">Bulletin</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Care & Share</a></li>
                        <li><a href="#our-team">Our Team</a></li> 
                        <li><a href="#contact">Contact</a></li>
                        <li>';
                        }
                        ?>
                        
                           
                           
                           <?php
                            if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                               echo'<p><a href="logout.php?indicator=1" class="btn btn-danger">' . $logined_username . '</a></p>'; 
                            }
                            else{
                                echo'<p><a href="login.php?indicator=1" class="btn btn-danger">Login</a><a href="adminlogin.php?indicator=1" class="btn btn-danger">Admin</a></p>';
                            }
                            ?>
                            
                            
                            </li>                                 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
    
    