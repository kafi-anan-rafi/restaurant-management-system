<?php
session_start();
include "db_conn.php";

// finding restaurant ID
$res_email = $_SESSION['res_email'];
$sql = "SELECT id FROM restaurant WHERE res_email = '$res_email'";
$res = mysqli_query($conn, $sql) or die("Failed to query database");
$row = mysqli_fetch_row($res);
$res_id = $row[0];

$food_name = $_POST['food_name'];
$food_description = $_POST['food_description'];
$food_price = $_POST['food_price'];
$food_quantity = $_POST['food_quantity'];


$sql = "INSERT INTO food (food_name, food_description, food_price, food_quantity, res_id) VALUES ('$food_name', '$food_description', '$food_price', '$food_quantity', '$res_id')";
$result = mysqli_query($conn, $sql) or die("Failed to query database");
$rows = mysqli_num_rows($result);

if ($rows == 0) {
  $_SESSION['message'] = "Product Successfully Inserted";
  header("location: admin_add_food.php");
  exit();
} else {
  header("location: admin_add_food.php");
  $_SESSION['message'] = "Something went wrong!";
}
