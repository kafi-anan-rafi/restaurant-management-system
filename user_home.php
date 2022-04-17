<?php
session_start();
include "db_conn.php";
$_SESSION['count'] = 0;
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
                              <!-- <li class="nav-item">
                                   <a class="nav-link" href="./user_cart.php"><span class="bg-danger px-1 text-white rounded-circle">0</span>Cart</a>
                              </li> -->
                              <li class="nav-item">
                                   <a class="nav-link" style="margin-right: 5px" href="./user_orders.php"><span class="bg-danger px-1 mr-1 text-white rounded-circle">0</span>Orders</a>
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
                    <div class="carousel-item active" style="background-image: url(./img/pizza-new.png); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
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
               <p class="text-center" style="margin-bottom: 20px;">Order food now. You will get the food within 30 minute</p>

               <!-- query food items from database -->
               <!-- store them in associative array -->
               <!-- use loop to print them here as cart -->
               <?php
               $sql = "SELECT * FROM food";
               $result = mysqli_query($conn, $sql) or die("Failed to query database");
               $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

               if (empty($items)) : ?>
                    <p class="lead mt3">There is no Food</p>
               <?php endif; ?>
               <div class="container d-flex flex-wrap justify-content-between">
                    <?php foreach ($items as $item) : ?>
                         <form action="user_place_order.php" method="post">
                              <div class="card" style="width: 18rem; margin-bottom: 25px">
                                   <img class="card-img-top" src="img/burger.jpeg">
                                   <div class="card-body">
                                        <h5 class="card-title"><?php echo $item['food_name'] ?></h5>
                                        <p class="card-text"><?php echo $item['food_description'] ?></p>
                                        <div class="d-flex justify-content-between">
                                             <button class="btn btn-sm btn-danger text-white" type="submit">Order</button>
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

<?php
} else {
     header("Location: user_index.php");
     exit();
} ?>