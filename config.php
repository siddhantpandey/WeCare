<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*
define('DB_SERVER', 'mysql.hostinger.com');
define('DB_USERNAME', 'u114827700_root');
define('DB_PASSWORD', 'Sid#1995');
define('DB_NAME', 'u114827700_wcare');
 */
/* Attempt to connect to MySQL database */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'wecare');



$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>