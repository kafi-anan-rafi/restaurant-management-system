<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>About | <?php echo $_SESSION['user_name'] ?></title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-danger" href="user_home.php"><?php echo $_SESSION['user_name'] ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./user_cart.php"><span class="bg-danger px-1 text-white rounded-circle">0</span>Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user_orders.php">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-danger text-white" href="./user_logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h3 style="margin-top: 20px;">Cart Items</h3>
    <p>Cart items will be shown here!</p>
    <a class="btn btn-danger" href="user_orders.php">Place Order</a>
  </div>

</body>

</html>