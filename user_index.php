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
     <p><a class="btn btn-success mt-10" href="index.php">Go home!</a></p>
     <form action="user_login.php" method="POST">
        <h2>Customer Login</h2>
        <?php if (isset($_SESSION['error'])) { ?>
            <p class="error alert alert-danger"><?php echo $_SESSION['error']; ?></p>
        <?php } ?>
        <label>E-mail <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="text" name="user_email" required><br>

        <label>Password <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="password" name="user_password" required><br> 

        <button class="btn btn-sm btn-primary" type="submit">Login</button>
        <p>Don't have a user account? <a href="user_registration.php">Register</a></p>
     </form>
</body>

</html>


<?php
session_unset();
?>