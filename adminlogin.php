
<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter admin username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your admin password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    session_start();
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            $_SESSION['username'] = $username;   
                            $_SESSION['password'] = $password;      
                            $_SESSION['loggedin'] = true;
                            header("location: adminhome.php?indicator=1");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<?php include"myheader.php";?>
   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">
        <h2>Admin-Login</h2>
        <p>Please fill in your credentials to login as admin.</p>
        <br/><br/>
        <form action="adminlogin.php?indicator=1" method="post" style="width:500px">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Admin-Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
            <br/>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Admin-Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-success" value="Login">
            </div>
            <br/>
            <p>Don't have an account? <a href="adminregister.php?indicator=1">Sign up as admin now</a>.</p>
        </form>
    </div>    
      </center>
    <br/>
   <br/>
   <br/>
   <br/>  
 <?php include"myfooter.php";?>