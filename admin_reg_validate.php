<?php
session_start(); 
include "db_conn.php";

$res_name = $_POST['res_name'];
$res_address = $_POST['res_address'];
$res_email = $_POST['res_email'];
$res_password = $_POST['res_password'];

$sql = "SELECT * FROM restaurant WHERE res_email = '$res_email' LIMIT 1";
$results = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($results);

if($rows == 0) {
  $query = "INSERT INTO restaurant (res_name, res_address, res_email, res_password) VALUES ('$res_name', '$res_address', '$res_email', '$res_password')";
  if(mysqli_query($conn, $query)){
    $_SESSION['res_name'] = $res_name;
    header("location: admin_home.php");
    exit();
  }
} else {
    header("location: admin_registration.php?error=This email is already taken!");
    exit();
}
?>