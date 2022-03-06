<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $selection = mysqli_query($conn, " SELECT `id` FROM `users` WHERE `username` = '{$_SESSION['username']}' ");
    $row_rsmQuery = mysqli_fetch_assoc($selection);
    $user_id = $row_rsmQuery['id'];
    $mem_type = $_COOKIE['index'];
    $currentDateTime = date('Y-m-d H:i:s');
    $promocode = $_POST['promocode'];

    if ($mem_type == 1){
        $data = strtotime( "+1 month");
    }else if ($mem_type == 2){
        $data = strtotime( "+3 month");
    }else {
        $data = strtotime( "+12 month");
    }
    $expiry = date('Y-m-d H:i:s', $data);

    if($promocode == "FEB22"){
        $_promocode = 1;
        echo '<script>alert("You have got 20% discount. Congratulations!") </script>';
    }else if (empty($promocode)){
        $_promocode = 0;
    }

   

$sql ="INSERT INTO `membership` (`user_id`, `mem_id`, `promo_id`, `order_date`, `expiry_date`) VALUES ('$user_id', '$mem_type', '$_promocode', '$currentDateTime', '$expiry')";


    if(mysqli_query($conn, $sql)){  
    }

mysqli_close($conn);

}
?>