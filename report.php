
<!--new-->

<?php include('config.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $charityName = $_POST['charity'];
    $type = $_POST['radio'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $place = $_POST['location'];
    
    $sql = "INSERT into donor values('$firstName','$lastName',$phone,'$address','$charityName','$type','$time','$date','$place')";
    $result = mysqli_query($link,$sql);
    header("location: message.php?indicator=1");
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
            <div >
                <label>Firstname</label><br>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname"><br>
                
            </div>    
            <div>
                <label>Lastname</label><br>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname"><br>
            
            </div>
            <div >
                <label>Phone</label><br>
                <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number"><br>
               
            </div>
            <div >
                <label>Address</label><br>
                <input type="text" id="address" name="address" class="form-control" placeholder="Address"><br>
                
            </div>
            <div >
                <label>Charity You Want To Donate To</label><br>
                <input type="text" id="charity" name="charity" class="form-control" placeholder="name of charity you want to donate to"><br>
                
            </div>
            <div >
                <label>Donation Type</label><br>
                <fieldset id="item">
                <input type="radio" id="money" name="radio" value="Money">Money<br>
                <input type="radio" id="goods" name="radio" value="Goods">Goods<br>
                </fieldset>
            </div>
            <br><br>
            <div >
                <label>Schedule A Pickup</label><br>
                <input type="text" id="time" name="time" class="form-control" placeholder="Enter Time"><br>
                <input type="text" id="date" name="date" class="form-control" placeholder="Enter Date"><br>
                <input type="text" id="location" name="location" class="form-control" placeholder="Pickup Location"><br>
            </div>
            <div >
                <input type="submit" id="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>    
      </center>
   
   
   <?php include"myfooter.php";?>