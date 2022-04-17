<?php
session_start();
// $_SESSION['food_name'] = $item['food_name'];
// $_SESSION['food_description'] = $item['food_name'];
// $_SESSION['food_price'] = $item['food_price'];
if (isset($_SESSION['food_name']) && isset($_SESSION['food_description']) && isset($_SESSION['food_price'])) {
  $_SESSION['count']++;
  header('location: user_orders.php');
}
