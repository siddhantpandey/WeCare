<!--new-->

<?php include('config.php'); ?>
<?php
// Define variables and initialize with empty values
$name = $issue = $address = "";
$aadhaar = $phone = 0;
$name_err = $aadhaar_err =$phone_err = $address_err = $issue_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if name is empty
    if(empty(trim($_POST["name"]))){
        $name_err = 'Please enter name.';
    } else{
        $name = trim($_POST["name"]);
    }
    
    // Check if aadhaar is empty
    if(empty(trim($_POST['aadhaar']))){
        $aadhaar_err = 'Please enter aadhaar.';
    } else{
        $aadhaar = trim($_POST['aadhaar']);
    }
    
    // Check if phone is empty
    if(empty(trim($_POST['phone']))){
        $phone_err = 'Please enter phone.';
    } else{
        $phone = trim($_POST['phone']);
    }
    
    // Check if address is empty
    if(empty(trim($_POST['address']))){
        $address_err = 'Please enter address.';
    } else{
        $address = trim($_POST['address']);
    }
    
    // Check if issue is empty
    if(empty(trim($_POST['issue']))){
        $issue_err = 'Please enter issue.';
    } else{
        $issue = trim($_POST['issue']);
    }
    $image = $_POST['fileToUpload'];
    
    
    
    if(empty($name_err) && empty($aadhaar_err) && empty($phone_err) && empty($address_err) && empty($issue_err)){
    $sql = "INSERT into personsofinterest values('$name',$aadhaar,$phone,'$address','$issue','$image')";
    $check = "SELECT aadhaar FROM  personsofinterest WHERE aadhaar=$aadhaar";
    $result=mysqli_stmt_execute($check);
    if(mysqli_stmt_num_rows($result)==1){
        echo "Person already exists in database.";
        header("location: reportingForm.php?indicator=1");
    }
    else{
        $result = mysqli_query($link,$sql);
        $message="Data submitted successfully. You will be redirected shortly.";
        echo "<script>alert('$message');</script>";
        header("location: index.php?indicator=1");
    }
    }
    // Close connection
    mysqli_close($link);
}
?>

<?php
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
               $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($_FILES['file']['size']) {
                    echo "File Uploaded ";
                    $uploadOk = 1;
                } else {
                    echo "File upload failed";
                    $uploadOk = 0;
                }
            }
        ?>

<?php include"myheader.php";?>

   
   <!--Log In Form-->
   <br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <center>
   <div class="wrapper">
        <h2>Person of Interest</h2>
        <p>Please fill in the credentials.</p>
        <br/>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="width:500px">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" id="name" name="name"class="form-control" value="<?php echo $name; ?>" >
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <br/>    
            <div class="form-group <?php echo (!empty($aadhaar_err)) ? 'has-error' : ''; ?>">
                <label>Aadhaar</label>
                <input type="number" id="aadhaar" name="aadhaar" class="form-control">
                <span class="help-block"><?php echo $aadhaar_err; ?></span>
            </div>
            <br/>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label>
                <input type="number" id="phone" name="phone" class="form-control">
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
                <input type="file" id="fileToUpload" name="fileToUpload" id="fileToUpload">
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" id="submit" class="btn btn-primary btn-lg btn-success" value="Submit" name="submit">
            </div>
        </form>
    </div>    
      </center>
   <br/>
   <br/>
   <br/>
   <br/>
   <?php include"myfooter.php";?>