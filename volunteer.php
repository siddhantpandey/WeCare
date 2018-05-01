<?php include('config.php'); ?>
<?php

$firstName = $lastName = $charity = $address = $time = $date = $place = "";
$phone = 0;
$firstName_err = $lastName_err = $phone_err = $address_err = $charity_err = $radio_err = $time_err = $date_err = $place_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
     if(empty(trim($_POST["firstname"]))){
        $firstName_err = 'Please enter first name.';
    } else{
        $firstName = trim($_POST['firstname']);
    }
    
    if(empty(trim($_POST["lastname"]))){
        $lastName_err = 'Please enter last name.';
    } else{
        $lastName = trim($_POST['lastname']);
    }
    if(empty(trim($_POST["phone"]))){
        $phone_err = 'Please enter phone.';
    } else{
        $phone = trim($_POST['phone']);
    }
    if(empty(trim($_POST["address"]))){
        $address_err = 'Please enter address.';
    } else{
        $address = trim($_POST['address']);
    }
    if(empty($firstName_err) && empty($lastName_err) && empty($phone_err) && empty($phone_err) && empty($address_err)){
    $sql = "INSERT into volunteer values('$firstName','$lastName',$phone,'$address','n/a')";
    $result = mysqli_query($link,$sql);
    header("location: message.php?indicator=1");}
    mysqli_close($link);
}
?>

<?php include"myheader.php"?>
   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">

        <marquee><h2><b>For monetory donation we accept cheque in the name of charity of your choice only</b></h2></marquee>
        <p>Please fill in the credentials.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="width:500px">
            <div class="form-group <?php echo (!empty($fistName_err)) ? 'has-error' : ''; ?>">
                <label>Firstname</label><br>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $firstName_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($lastName_err)) ? 'has-error' : ''; ?>">
                <label>Lastname</label><br>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $lastName_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label><br>
                <input type="number" id="phone" name="phone" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label><br>
                <input type="text" id="address" name="address" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <br><br>
            
            <div >
                <input type="submit" id="submit" value="Register as Volunteer" name="submit" class="btn btn-primary btn-lg btn-success" style="width:200px">
            </div>
        </form>
    </div>    
      </center>
   
   
   <?php include"myfooter.php";?>