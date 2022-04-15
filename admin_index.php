<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Login | Let's Eat</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container" style="display: flex;">
            <a class="navbar-brand" href="../web-tech-project/index.php">Let's Eat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./admin_index.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user_index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm" style="color: white; background-color: #A9161E" href="./user_registration.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <p class="mt-40"></p>
    <div class="container d-flex flex-column mt-20 align-items-center">
        <form action="admin_login.php" method="post">
            <h2 style="margin-bottom: 20px; margin-top: 10px">Admin Login</h2>
            <?php if (isset($_SESSION['error'])) { ?>
                <p class="error alert alert-danger"><?php echo $_SESSION['error']; ?></p>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="res_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="res_password" id="exampleInputPassword1" required>
            </div>
            <button class="btn mb-3 btn-primary" type="submit">Login</button>
            <p>Don't have a user account? <a href="admin_registration.php">Register</a></p>
        </form>
    </div>

    <!-- <div class="container">
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
    </div> -->

</body>

</html>


<?php
session_unset();
?>