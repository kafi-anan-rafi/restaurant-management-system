<?php
session_start();
if (isset($_SESSION['res_name'])) {
?>

     <!DOCTYPE html>
     <html>

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../Styles/styles.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <title>Admin Home | Let's Eat</title>
     </head>

     <body>
          <!-- Navigation -->
          <nav class="navbar navbar-expand-sm navbar-light bg-light">
               <div class="container">
                    <a class="navbar-brand" href="../web-tech-project/index.php"><?php echo $_SESSION['res_name']; ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav ml-auto">
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
                                   <a class="nav-link btn btn-sm" style="color: white; background-color: #A9161E" href="admin_logout.php">Logout</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>

          <div class="container">
               <h1>Welcome, <?php echo $_SESSION['res_name']; ?></h1>
               <a class="btn btn-sm btn-primary" href="admin_add_food.php">Add Food</a>
               <a class="btn btn-sm btn-secondary" href="admin_update_food.php">Update Food List</a>
               <a class="btn btn-sm btn-warning" href="admin_remove_food.php">Remove Food</a>
               <a class="btn btn-sm btn-danger" href="admin_logout.php">Logout</a>
          </div>
     </body>

     </html>
<?php
} else {
     header("location: admin_index.php");
     exit();
}
?>