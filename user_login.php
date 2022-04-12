<?php
session_start();
require "db_conn.php";

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$sql = "select * from user where user_email='$user_email' and user_password='$user_password'";
$result = mysqli_query($conn, $sql) or die("Failed to query database " .mysqli_error());
$rows = mysqli_num_rows($result);

if($rows > 0){
  $row = mysqli_fetch_assoc($result);
  if($row['user_email'] == $user_email && $row['user_password'] == $user_password){
    $_SESSION['user_name'] = $row['user_name'];
    header("location: user_home.php");
    exit();
  }
} else {
  $_SESSION['error'] = "Incorect email or password";
  header("Location: user_index.php");
  exit();
}
?>