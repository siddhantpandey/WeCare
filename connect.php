(<?php include('server.php');
  ?>)
  <?php
  if(isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        
        
        $email = mysqli_real_escape_string($db,$_POST['email']);
        
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        
        
        
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
        
        if(empty($username)) {
            array_push($errors,"Username is required");
        }
        
        if(empty($email)) {
            array_push($errors,"Email is required");
        }
        
        if(empty($password_1)) {
            array_push($errors,"Password is required");
        }
        
        if($password_1 != $password_2) {
            array_push($errors,"The two passwords do not match");
        }
        
        // if there are no errors, save user to database
        if(count($errors) ==0) {
            $password = md5($password_1); //encrypt password before storing in database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: to.php'); //redirect to homepage
        }
    }
?>