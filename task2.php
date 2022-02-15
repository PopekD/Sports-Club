<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images</title>
</head>
<body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" accept="image/*" /> <!--- because of accept = "image/*" a user will select only images at first --->
         <input type = "submit" value = "Attach"/>
			
    
    <p>File name: <?php if(isset($_FILES['image'])){echo $_FILES['image']['name']; } ?></p>
    <p>File size: <?php if(isset($_FILES['image'])){echo $_FILES['image']['size']; } ?></p>
    <p>File type: <?php if(isset($_FILES['image'])){echo $_FILES['image']['type']; } ?></p>
       
			
      </form>
      
   </body>

<html>

<?php
   if(isset($_FILES['image'])){

      $filename = $_FILES['image']['name'];
      $filesize = $_FILES['image']['size'];
      $filetmp = $_FILES['image']['tmp_name'];

      $file_ext=explode('.', $filename); // we are getting files' extensions
      $errors = 0; // in this variable the errors will be counted
      
      $extensions = array("jpeg","jpg","png");
      
      if(in_array(end($file_ext),$extensions) === false){
         echo "Please choose a JPEG or PNG file extension.";
         $errors++;
      }
      
      if($filesize > 2097152) {
         echo'File size must be less than 2 MB';
         $errors++;
      }

      if($errors == 0 ){
        move_uploaded_file($filetmp,"pictures/".$filename);
          echo "<h3>File uploaded successfully <a href=\"pictures\">Directory</a> </h3>";
      } else {
          echo "Something went wrong";
      }
   }
?>