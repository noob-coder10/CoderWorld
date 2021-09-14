<?php
    $insert=false;
    if(isset($_POST['email'])){
    $connection = mysqli_connect('localhost', 'root');
    session_start();
    mysqli_select_db($connection, 'authentication');
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['passward'];
    $cpass = $_POST['cpassward'];

    $s = "SELECT * FROM credentials WHERE EMAIL = '$email'";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);

    if($num >= 1)
    {
        $insert=true;
        // header('location:signup.php' );
    }
    else
    {
        $data = "INSERT INTO credentials (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$firstname', '$lastname', '$email', '$pass')";

        mysqli_query($connection, $data);
        header('location:login.php' );
    }
    $connection->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Signup</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CoderWorld</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Topics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Technology</a></li>
              <li><a class="dropdown-item" href="#">Another Tech</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Support</a></li>
              <li><a class="dropdown-item" href="#">Write for us</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>


        </div>
      </div>
    </div>
  </nav>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Get an CoderWorld account</p>

                <form action="signup.php" method="POST">
            <div class="row my-2">
              <label for="exampleInputEmail1" class="form-label">Full Name</label>
              <div class="col">
                <input type="text" class="form-control" name="first_name" placeholder="First name"
                  aria-label="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="last_name" placeholder="Last name" aria-label="Last name">
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                aria-describedby="emailHelp">
                <?php
                if($insert==true)
                {
                    echo "<p id='exist' class='form-text text-danger'>User already exists.</p>";
                }
                else
                {
                    echo "<div id='emailHelp' class='form-text'>We will never share your email with anyone.</div>";
                }
                ?>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="passward" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="cpassward" id="cexampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                class="link-danger">Login</a></p>
          </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fa fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
</body>
</html>
