<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <title>Let's Eat</title>
</head>
<body class="container">
  <h1 class="text-success">Welcome to Let's Eat!</h1>
  <p>I'm sure you are hungry. So let's eat something.</p>
  
  <form action="user_login.php" method="post">
    <h5>Login as Customer!</h5>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error alert alert-danger"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>E-mail <span class="text-danger">*</span></label> <br>
    <input type="text" name="user_mail" required><br>
    <label>Password <span class="text-danger">*</span></label> <br>
    <input type="password" name="user_password" required><br> 
    <button class="btn mt-3 mb-4 btn-sm btn-primary" type="submit">Login</button>
    <p>Don't have a user account? <a href="user_registration.php">Register</a></p>
  </form>
  
  <h5 class="text-danger">Are you an admin? <a href="admin_index.php">click here</a></h5>
</body>
</html>