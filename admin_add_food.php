<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Add Food | <?php echo $_SESSION['res_name']; ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-danger" href="admin_home.php"><?php echo $_SESSION['res_name']; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./admin_pending_order.php"><span class="bg-danger px-1 text-white rounded-circle">0</span>Pending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_delivered_order.php">Delivered</a>
          </li>
          <li class="nav-item">
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

  <div class="container d-flex flex-column">

    <h2 style="margin-top: 20px;">Add Food Item</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem officia sint reiciendis suscipit. Quas, voluptatem.</p>
    <?php if (isset($_SESSION['message'])) { ?>
      <p class="alert alert-info"><?php echo $_SESSION['message']; ?></p>
    <?php } ?>

    <form action="admin_process_food.php" method="post">
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Food Name</label>
        <input type="text" name="food_name" required class="form-control" id="exampleInputName1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputDescription1" class="form-label">Description</label>
        <input type="text" name="food_description" required class="form-control" id="exampleInputDescription1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPrice1" class="form-label">Price</label>
        <input type="text" name="food_price" required class="form-control" id="exampleInputPrice1">
      </div>
      <div class="mb-3">
        <label for="exampleInputQuantity1" class="form-label">Available Quantity</label>
        <input type="text" name="food_quantity" required class="form-control" id="exampleInputQuantity1" aria-describedby="textHelp">
      </div>
      <button class="btn btn-primary" type="submit">Add Food</button>
    </form>
  </div>

  <!-- OLD Food Add -->
  <!-- <div class="container">
    <h2 style="margin-top: 20px;">Add Food Item</h2>
    <?php if (isset($_SESSION['message'])) { ?>
      <p class="alert alert-success"><?php echo $_SESSION['message']; ?></p>
    <?php } ?>

    <form action="admin_process_food.php" method="post">
      <label>Name</label> <br>
      <input type="text" name="food_name" required><br>
      <label>Category</label> <br>
      <input type="text" name="food_category" required><br>
      <label>Price</label> <br>
      <input type="text" name="food_price" required><br>
      <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Add</button>
    </form>
  </div> -->
</body>

</html>