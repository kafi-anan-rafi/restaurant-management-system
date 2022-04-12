<?php 
session_start();
if (isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>

<head>
     <title>Home | Let's Eat</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
     <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
     <a class="btn btn-warning mt-3" href="user_orders.php">Orders</a>
     <a class="btn btn-danger mt-3" href="user_logout.php">Logout</a>
     
     <h3 class="mt-4">Foods</h3>
     <?php
          include "db_conn.php";
          $sql = "select food_name, food_category, food_price from food";
          $result = mysqli_query($conn, $sql) or die("Failed to query database");
          $rows = mysqli_num_rows($result);

          if($rows > 0) {
               $row = mysqli_fetch_assoc($result); ?>
               <table class="table">
               <thead> <th>Name</th> <th>Category</th> <th>Price</th> <th></th></thead>

               
          <?php 
               }
          ?>
               </table>
          

     <h3 class="mt-4">Restaurants</h3>
     <p>All the restaurant will be shown here!</p>
     <?php
          include "db_conn.php";
          
          // $sql = "select  from restaurant";
          
     ?>

     <h3 class="mt-4">Venue List</h3>
     <p>Available venue will be shown here!</p>
     <!-- Show the venue list -->
     <?php
          include "db_conn.php";
          
     ?>

</body>
</html>

<?php 
}else{
     header("Location: user_index.php");
     exit();
} ?>