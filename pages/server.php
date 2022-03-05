<?php
session_start();
$errors = array();

//connect to db

$conn = mysqli_connect('db', 'root', 'password', 'hsc') or die("could not connect to database");

//register users

if(isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);  
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    

//form validation

if(empty($username)) {
    array_push($errors, "Username is required");
}
if(empty($email)) {
    array_push($errors, "Email is required");
}
if(empty($password_1)) {
    array_push($errors, "Password is required");
}
if(empty($first_name)) {
    array_push($errors, "First name is required");
}
if(empty($last_name)) {
    array_push($errors, "First name is required");
}

if($password_1 != $password_2) {
    array_push($errors, "Passwords do not match");
}


//check db for existing user with same username

$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";
$results = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
    if($user['username'] === $username) {
        array_push($errors, "Username already exists");
    }
    if($user['email'] === $email) {
        array_push($errors, "Email already exists");
    }
}


//register the user if no error

if(count($errors) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO users (username, password, email, first_name, last_name) VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";

    mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');
}

}

// similar script for login

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password_1']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $results = mysqli_query($conn, $query);

        if(mysqli_num_rows($results)) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination. Please try again.");
            header('location: login.php');
        }
    }

}


?>