<?php include('config.php'); ?>

<?php include"myheader.php"?>
<?php

$name =  $address = $issue  = $image = "";
$aadhaar = $phone = 0;
$name_err = $aadhaar_err = $phone_err = $address_err = $issue_err  = "";


if(isset($_SESSION) && $_SERVER["REQUEST_METHOD"] == "POST")
{
     if(empty(trim($_POST["name"]))){
        $name_err = 'Please enter name.';
    } else{
        $name = trim($_POST['name']);
    }
    
    if(empty(trim($_POST["aadhaar"]))){
        $aadhaar_err = 'Please enter aadhaar no.';
    } else{
        $aadhaar = trim($_POST['aadhaar']);
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
    if(empty(trim($_POST["issue"]))){
        $issue_err = 'Please enter issue.';
    } else{
        $issue = trim($_POST['issue']);
    }
    $image = $_POST['fileToUpload'];
    if(empty($name_err) && empty($aadhaar_err) && empty($phone_err) && empty($address_err) && empty($issue_err) && $_SESSION['loggedin']==true)
    {
        $sql = "INSERT into personsofinterest values('$name',$aadhaar,$phone,'$address','$issue','$image')";
        $check = "SELECT aadhaar FROM  personsofinterest WHERE aadhaar=$aadhaar";
        $checkresult=mysqli_stmt_execute($check);
        
        if(mysqli_stmt_num_rows($checkresult)==1)
        {
            echo "Person already exists in database.";
            sleep(2);
            header("location: reportingForm.php?indicator=1");
        }
        else
        {

            $result = mysqli_query($link,$sql);
            echo $result;
            $message="Data submitted successfully. You will be redirected shortly.";
            echo "<script>alert('$message');</script>";
            sleep(5);
            if(!mysqli_error($result))
                header("location: index.php?indicator=1");
        }
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


   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">

        
        <p>Please fill in the credentials.</p>
        <form action="reportingForm.php?indicator=1" method="post" style="width:500px">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" id="name" name="name"class="form-control">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <br/>    
            <div class="form-group <?php echo (!empty($aadhaar_err)) ? 'has-error' : ''; ?>">
                <label>Aadhaar</label>
                <input type="text" id="aadhaar" name="aadhaar" class="form-control" pattern="[0-9]{12}">
                <span class="help-block"><?php echo $aadhaar_err; ?></span>
            </div>
            <br/>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" pattern="[789][0-9]{9}">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <br/>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" id="address" name="address" class="form-control">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <br/>
            <div class="form-group <?php echo (!empty($issue_err)) ? 'has-error' : ''; ?>">
                <label>Issue</label>
                <input type="text" id="issue" name="issue" class="form-control">
                <span class="help-block"><?php echo $issue_err; ?></span>
            </div>
            <br/>
            <div class="form-group">
                <label>Select image to upload:</label>
                <input type="file" id="fileToUpload" name="fileToUpload" required>
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" id="submit" class="btn btn-primary btn-lg btn-success" value="Submit" name="submit">
            </div>
        </form>
    </div>    
      </center>
   
   
   <?php include"myfooter.php";?>