<?php 
session_start();
if (isset($_SESSION['res_name'])) {
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Home | Let's Eat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
     <h1>Welcome, <?php echo $_SESSION['res_name']; ?></h1>
     <a class="btn btn-sm btn-primary" href="admin_add_food.php">Add Food</a>
     <a class="btn btn-sm btn-secondary" href="admin_update_food.php">Update Food List</a>
     <a class="btn btn-sm btn-warning" href="admin_remove_food.php">Remove Food</a>
     <a class="btn btn-sm btn-danger" href="admin_logout.php">Logout</a>
</body>

</html>
<?php 
}else{
     header("location: admin_index.php");
     exit();
}
?>