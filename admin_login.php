<?php
session_start();
require "db_conn.php";

$res_email = $_POST['res_email'];
$res_password = $_POST['res_password'];

$sql = "select * from restaurant where res_email='$res_email' and res_password='$res_password'";
$result = mysqli_query($conn, $sql) or die("Failed to query database");
$rows = mysqli_num_rows($result);

if ($rows > 0) {
  $row = mysqli_fetch_assoc($result);
  if ($row['res_email'] == $res_email && $row['res_password'] == $res_password) {
    $_SESSION['res_id'] = $row['id'];
    $_SESSION['res_email'] = $res_email;
    $_SESSION['res_name'] = $row['res_name'];
    header("location: admin_home.php");
    exit();
  }
} else {
  $_SESSION['error'] = "Incorect email or password";
  header("Location: admin_index.php");
  exit();
}
