
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
    if(empty(trim($_POST["charity"]))){
        $charity_err = 'Please enter charity name.';
    } else{
        $charity = trim($_POST['charity']);
    }
    if(empty(trim($_POST["radio"]))){
        $radio_err = 'Please select donation type.';
    } else{
        $type = trim($_POST['radio']);
    }
    if(empty(trim($_POST["time"]))){
        $time_err = 'Please enter time.';
    } else{
        $time = trim($_POST['time']);
    }
    if(empty(trim($_POST["date"]))){
        $date_err = 'Please enter date.';
    } else{
        $date = trim($_POST['date']);
    }
    if(empty(trim($_POST["location"]))){
        $place_err = 'Please enter pickup location.';
    } else{
        $place = trim($_POST['location']);
    }
    if(empty($firstName_err) && empty($lastName_err) && empty($phone_err) && empty($phone_err) && empty($address_err) && empty($charity_err) && empty($radio_err) && empty($time_err) && empty($date_err) && empty($place_err) && $_SESSION['loggedin']==true)
    {
    $sql = "INSERT into donor values('$firstName','$lastName',$phone,'$address','$charityName','$type','$time','$date','$place')";
    $result = mysqli_query($link,$sql);
    header("location: message.php?indicator=1");
        
    }
    else
    {
        echo "<script>
alert('You must login first. You will be redirected shortly.');
window.location.href='login.php?indicator=1';
</script>";
    }
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
        <form action="report.php?indicator=1" method="post" style="width:500px">
            <div class="form-group <?php echo (!empty($fistName_err)) ? 'has-error' : ''; ?>">
                <label>Firstname</label><br>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $firstName_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($lastName_err)) ? 'has-error' : ''; ?>">
                <label>Lastname</label><br>
                <input type="tel" id="lastname" name="lastname" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $lastName_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label><br>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="" pattern="[789][0-9]{9}"><br>
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label><br>
                <input type="text" id="address" name="address" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($charity_err)) ? 'has-error' : ''; ?>">
                <label>Charity You Want To Donate To</label><br>
                <input type="text" id="charity" name="charity" class="form-control" placeholder=""><br>
                <span class="help-block"><?php echo $charity_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($radio_err)) ? 'has-error' : ''; ?>">
                <label>Donation Type</label><br>
                <fieldset id="item">
                <input type="radio" id="money" name="radio" value="Money">Money<br>
                <input type="radio" id="goods" name="radio" value="Goods">Goods<br>
                </fieldset>
                <span class="help-block"><?php echo $radio_err; ?></span>
            </div>
            <br><br>
            <div >
                <label>Schedule A Pickup</label><br>
                <div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                <input type="time" id="time" name="time" class="form-control" placeholder="Enter Time"><br>
                <span class="help-block"><?php echo $time_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                <input type="date" id="date" name="date" class="form-control" placeholder="Enter Date"><br>
                <span class="help-block"><?php echo $date_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($place_err)) ? 'has-error' : ''; ?>">
                <input type="text" id="location" name="location" class="form-control" placeholder="Pickup Location"><br>
                <span class="help-block"><?php echo $place_err; ?></span>
                </div>
            </div>
            <div >
                <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary btn-lg btn-success" style="width:200px">
            </div>
        </form>
    </div>    
      </center>
      

   
   <?php include"myfooter.php";?>