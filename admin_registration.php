<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration | Let's Eat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
     <p><a class="btn btn-success" href="index.php">Go home!</a></p>
     <form action="admin_reg_validate.php" method="post">
        <h2>Admin Registration</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Restaurant Name <span class="text-danger">*</span></label> <br>
        <input type="text" name="res_name" required><br>
        <label>Address <span class="text-danger">*</span></label> <br>
        <input type="text" name="res_address" required><br>
        <label>E-mail <span class="text-danger">*</span></label> <br>
        <input type="text" name="res_email" required><br>
        <label>Password <span class="text-danger">*</span></label> <br>
        <input type="password" name="res_password" required><br>
        <button class="btn btn-sm btn-primary mt-3 mb-3" type="submit">Register</button>
        <p>Already have an account? <a href="admin_login.php">Login</a></p>
     </form>
</body>

</html>