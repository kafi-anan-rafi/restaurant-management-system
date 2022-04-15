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
          <title><?php echo $_SESSION['res_name']; ?> | Let's Eat</title>
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
                                   <a class="nav-link" href="./admin_pending_order.php"><span class="bg-danger px-1 text-white rounded-circle">0</span>Pending</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="admin_add_food.php">Delivered</a>
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

          <!-- Carousel -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url(./img/restaurant.jpeg); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
                         <div class="carousel-caption d-none d-md-block">
                              <h1 style="padding-bottom: 200px; font-size: 4rem;"><span class="text-light bg-danger pl-2 pr-2">Welcome <?php echo $_SESSION['res_name'] ?>!</span></h1>
                              <h5>Restaurant</h5>
                              <p>Provides Teasty Food That People Love.</p>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container">
               <h1 style="margin-top: 20px;">Pending Orders</h1>
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