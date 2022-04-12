<!DOCTYPE html>
<html>

<head>
    <title>Registration | Let's Eat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
     <p><a class="btn btn-success" href="index.php">Go home!</a></p>
     <form action="user_reg_validate.php" method="post">
        <h2>Customer Registration</h2>  
        <?php if (isset($_GET['error'])) { ?>
            <p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Name <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="text" name="user_name" required><br>
        <label>Address <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="text" name="user_address" required><br>
        <label>E-mail <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="text" name="user_email" required><br>
        <label>Password <span class="text-danger">*</span></label> <br>
        <input class="mb-2" type="password" name="user_password" required><br>
        <button class="btn btn-primary mt-2" type="submit">Register</button>
        <p>Already have an account? <a href="user_index.php">Login</a></p>
     </form>
</body>

</html>