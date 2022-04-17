<?php
require 'db_conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Update Food | <?php echo $_SESSION['res_name']; ?></title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-danger" href="admin_home.php"><?php echo $_SESSION['res_name']; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="./admin_pending_order.php"><span class="bg-danger px-1 text-white rounded-circle">0</span>Pending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_delivered_order.php">Delivered</a>
          </li>
          <a class="nav-link" href="admin_add_food.php">Add Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_update_food.php">Update Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_remove_food.php">Remove Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-danger text-white" href="admin_logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <h2 style="margin-top: 20px;">Update Food List</h2>

    <?php
    $id = $_SESSION['res_id'];
    $sql = "SELECT * FROM food where id = $id";
    $result = mysqli_query($conn, $sql) or die("Failed to query database");
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (empty($items)) : ?>
      <p class="lead mt3">There is no Food</p>
    <?php endif; ?>
    <div class="container d-flex flex-wrap justify-content-between">
      <?php foreach ($items as $item) : ?>
        <form action="admin_update_food.php" method="post">
          <div class="card" style="width: 18rem; margin-bottom: 25px; margin-top: 25px">
            <img class="card-img-top" src="img/burger.jpeg">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item['food_name'] ?></h5>
              <p class="card-text"><?php echo $item['food_description'] ?></p>
              <div class="d-flex justify-content-between">
                <button class="btn btn-sm btn-primary text-white" type="submit">Update</button>
                <b><?php echo $item['food_price'] ?> tk</b>
              </div>
            </div>
          </div>
          <?php
          // $cart = $id+'cart';
          // $_SESSION[$cart];
          $_SESSION['food_name'] = $item['food_name'];
          $_SESSION['food_description'] = $item['food_description'];
          $_SESSION['food_price'] = $item['food_price'];
          $_SESSION['count'] = 0;
          ?>
        </form>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>