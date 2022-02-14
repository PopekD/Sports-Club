
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
			
    
    <p>Sent file: <?php if(isset($_FILES['image'])){echo $_FILES['image']['name']; } ?></p>
    <p>File size: <?php if(isset($_FILES['image'])){echo $_FILES['image']['size']; } ?></p>
    <p>File type: <?php if(isset($_FILES['image'])){echo $_FILES['image']['type']; } ?></p>
       
			
      </form>
      
   </body>

<html>

<?php
   if(isset($_FILES['image'])){

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];

      $file_ext=explode('.',$file_name);
      $errors = 0;
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array(end($file_ext),$extensions)=== false){
         echo "extension not allowed, please choose a JPEG or PNG file.";
         $errors++;
      }
      
      if($file_size > 2097152) {
         echo'File size must be excately 2 MB';
         $errors++;
      }

      if( $errors == 0 ){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
          echo "<h3>File uploaded successfully <a href=\"uploads\">Directory</a> </h3>";
          
      }
   }
?>