<html>
   <head>
       <style>
           body {
                background-color:azure;
           }
       </style>
   </head>
    <body>
        <?php
            $target_dir = "files/";
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
        
        
    </body>
</html>