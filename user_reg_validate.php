<?php
session_start(); 
include "db_conn.php";

$user_name = $_POST['user_name'];
$user_address = $_POST['user_address'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM user WHERE user_email = '$user_email' LIMIT 1";
$results = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($results);

if($rows == 0){
  $password = md5($user_password);
  $query = "INSERT INTO user (user_name, user_address, user_email, user_password) VALUES ('$user_name', '$user_address', '$user_email', '$password')";
  if(mysqli_query($conn, $query)){
    $_SESSION['user_name'] = $user_name;
    header("location: user_home.php");
    exit();
  }

} else {
    header("location: user_registration.php?error=This email is already taken!");
    exit();
}
?>