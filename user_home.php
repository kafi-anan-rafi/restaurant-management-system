<?php
session_start();
if (isset($_SESSION['user_name'])) {
?>

     <!DOCTYPE html>
     <html>

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../Styles/styles.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <title>Home | Let's Eat</title>
     </head>

     <body>
          <!-- Navigation -->
          <nav class="navbar navbar-expand-sm navbar-light bg-light">
               <div class="container">
                    <a class="navbar-brand text-danger" href="user_home.php"><?php echo $_SESSION['user_name']; ?></a>
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

          <!-- Carousel -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url(./img/pizza-one.jpg); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
                         <div class="carousel-caption d-none d-md-block">
                              <h2 style="padding-bottom: 200px; font-size: 3rem;"><span class="text-light bg-danger pl-2 pr-2">Welcome <?php echo $_SESSION['user_name'] ?>!</span></h2>
                              <h5>Restaurant</h5>
                              <p>Provides Teasty Food That People Love.</p>
                         </div>
                    </div>

               </div>
          </div>

          <div class="container">
               <h1 class="text-center" style="margin-top: 20px;">Want to eat something?</h1>

               <h3 class="mt-4">Foods</h3>

               <!-- query food items from database -->
               <!-- store them in associative array -->
               <!-- use loop to print them here as cart -->
               <?php
               include "db_conn.php";
               $sql = "select food_name, food_category, food_price from food";
               $result = mysqli_query($conn, $sql) or die("Failed to query database");
               $rows = mysqli_num_rows($result);

               if ($rows > 0) {
                    $row = mysqli_fetch_assoc($result); ?>
                    <table class="table">
                         <thead>
                              <th>Name</th>
                              <th>Category</th>
                              <th>Price</th>
                              <th></th>
                         </thead>


                    </table>
               <?php } ?>
          </div>


     </body>

     </html>

<?php
} else {
     header("Location: user_index.php");
     exit();
} ?>