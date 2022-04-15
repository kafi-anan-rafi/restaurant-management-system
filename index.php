<?php include 'db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Lets Eat | Welcome</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
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

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(./img/carousel-three.jpg); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="padding-bottom: 200px; font-size: 4rem">Welcome to Let's Eat!</h1>
          <h5>Famous Chef</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url(./img/carousel-two.jpg); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="padding-bottom: 200px; font-size: 4rem">I'm sure you are hungry!</h1>
          <h5>Teasty Food</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url(./img/carousel-one.jpg); height: 32rem; width: 90rem; background-position: center;background-size: cover; color: white;">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="padding-bottom: 200px; font-size: 4rem">Let's eat something.</h1>
          <h5>Delicious Food</h5>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-mid" role="button" data-slide="mid">
        <span class="sr-only">Mid</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="sr-only">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
  </div>

  <!-- Cards -->
  <div class="container d-flex justify-content-between mb-20" style="margin-bottom: 30px">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/img/burger.jpeg" alt="Card image cap" style="">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="/img/pizza.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/chicken-fry.jpg" alt="Card image cap" style="background-position:center; width:fit-content">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <!-- Login Form -->
  <!-- <div id="#login" class="container d-flex flex-column align-items-center">
    <form action="user_login.php" method="post">
      <h2 style="margin-bottom: 20px; margin-top: 10px">Login</h2>
      <?php if (isset($_SESSION['error'])) { ?>
        <p class="error alert alert-danger"><?php echo $_SESSION['error']; ?></p>
      <?php } ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="user_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="user_password" id="exampleInputPassword1">
      </div>
      <button class="btn mb-3 btn-primary" type="submit">Login</button>
      <p>Don't have a user account? <a href="user_registration.php">Register</a></p>
      <h5 style="margin-bottom: 30px;">Are you an admin? <a href="admin_index.php">Login here</a></h5>
    </form>
  </div> -->

  <!-- Footer -->
  <footer class="text-center text-white bg-dark">
    <div class="container p-4">

      <section class="">
        <form action="#">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>

            <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" placeholder="Email address" class="form-control" />
              </div>
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light btn-primary mb-4">
                Subscribe
              </button>
            </div>
          </div>
        </form>
      </section>

      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi.
        </p>
      </section>

      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyright 2022 by
        <a class="text-white" href="https://mdbootstrap.com/">Lets Eat</a>
      </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../script/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>