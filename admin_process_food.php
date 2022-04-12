<?php
  session_start();
  include "db_conn.php";

  $food_name = $_POST['food_name'];
  $food_category = $_POST['food_category'];
  $food_price = $_POST['food_price'];
  $res_id = 1;
  
  $sql = "INSERT INTO food (food_name, food_category, food_price, res_id) VALUES ('$food_name', '$food_category', '$food_price', '$res_id')";
  $result = mysqli_query($conn, $sql) or die("Failed to query database");
  $rows = mysql_num_rows($result);

  if($rows > 0){
    $_SESSION['message'] = "Product Successfully Inserted";
    header("location: admin_add_food.php");
    exit();
  } else {
    header("location: admin_add_food.php");
    $_SESSION['message'] = "Something went wrong!";
  }
?>
