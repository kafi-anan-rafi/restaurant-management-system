<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customer Registration | Let's Eat</title>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-danger" href="../web-tech-project/index.php">Let's Eat</a>
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

    <!-- Login Form -->
    <p class="mt-20"></p>
    <div class="container d-flex flex-column">
        <form action="user_reg_validate.php" method="post">
            <h2 style="margin-bottom: 20px; margin-top: 10px">Customer Registration</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" name="user_name" required class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress1" class="form-label">Address</label>
                <input type="text" name="user_address" required class="form-control" id="exampleInputAddress1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="user_email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" required name="user_password" id="exampleInputPassword1">
            </div>
            <button class="btn mb-3 btn-primary" type="submit">Register</button>
            <p>Already have an account? <a class="text-danger" href="user_index.php">Login</a></p>
        </form>
    </div>

    <!-- OLD User Registration -->
    <!-- <div class="container">
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
            <button class="btn btn-primary mt-2 mb-3" type="submit">Register</button>
            <p>Already have an account? <a href="user_index.php">Login</a></p>
        </form>
    </div> -->
</body>

</html>