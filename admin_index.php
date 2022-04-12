<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login | Let's Eat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
     <p><a class="btn btn-success" href="index.php">Go home!</a></p>
     <form action="admin_login.php" method="post">
        <h2>Admin Login</h2>
        <?php if (isset($_SESSION['error'])) { ?>
            <p class="error alert alert-danger"><?php echo $_SESSION['error']; ?></p>
        <?php } ?>
        <label>E-mail <span class="text-danger">*</span></label> <br>
        <input type="text" name="res_email" required><br>
        <label>Password <span class="text-danger">*</span></label> <br>
        <input type="password" name="res_password" required><br>
        <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Login</button>
        <p>Don't have an admin account? <a href="admin_registration.php">Register</a></p>
     </form>
</body>

</html>


<?php
session_unset();
?>