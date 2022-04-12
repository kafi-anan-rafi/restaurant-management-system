<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Add Food | Let's Eat</title>
</head>
<body class="container">
  
<a class="btn btn-success mb-3" href="admin_home.php">Go Home</a>
  
  <h3>Add Food Item</h3>
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
</body>
</html>