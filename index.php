<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>CoderWorld | Largest Coding Community </title>
  <style>
    .x {
      height: 450px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

        <div class="mx-2">
          <!-- <button class="btn btn-danger" id = "b1" onclick="window.location='login.php' " data-bs-toggle="modal">Login</button> -->
          <?php
            if(isset($_SESSION['email']))
              {echo '<button class="btn btn-danger" id = "b1" onclick="window.location=\'dashboard.php\' " data-bs-toggle="modal">Profile</button>';}
            else
            {echo '<button class="btn btn-danger" id = "b1" onclick="window.location=\'login.php\' " data-bs-toggle="modal">Login</button>';}
          ?>
          <!-- <button class="btn btn-danger" id = "b2" onclick="window.location='signup.php' "data-bs-toggle="modal">Signup</button> -->
          <?php
            if(isset($_SESSION['email']))
              {echo '<button class="btn btn-danger" id = "b2" onclick="window.location=\'logout.php\' "data-bs-toggle="modal">Logout</button>';}
            else
            {echo '<button class="btn btn-danger" id = "b2" onclick="window.location=\'signup.php\' "data-bs-toggle="modal">Signup</button>';}
          ?>

        </div>
      </div>
    </div>
  </nav>
  

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login to CoderWorld</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="login">
          <form action="login.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="lemail" id="exampleInputEmail1"
                aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="lpassward" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Don't have an account? </p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal"
            data-bs-dismiss="modal">SignUp</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!--Sign up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">Get an CoderWorld account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
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
                <div id='emailHelp' class='form-text'>We will never share your email with anyone.</div>
                
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
          </form>
        </div>
        <div class="modal-footer">
          <p>Already have an account? </p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal"
            data-bs-dismiss="modal">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="1.jpg" class="d-block w-100 x" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>Welcome to CoderWorld</h2>
          <p>The largest coding community</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="2.jpg" class="d-block w-100 x" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>Competitive Programming Platform</h2>
          <p>The largest coding community</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100 x" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2>The best coding blog</h2>
          <p>Tech News, Development and Fun</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container my-4 w-75 h-25">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">Coding Conferences</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">Like every year, we put together this directory of the top programming and
              software development conferences that are most beneficial to you, the programmers and developers. </p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="thumb1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Development</strong>
            <h3 class="mb-0">deep tech startups for national security
            </h3>
            <div class="mb-1 text-muted">June 24</div>
            <p class="mb-auto">The recent drone attack at an Air Force base in Jammu has put the spotlight on where
              India stands on deep tech and also if the startup space is alive to that question.
            </p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="thumb3.png" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-4 w-75 h-25">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Python</strong>
            <h3 class="mb-0">E2E Software Testing Tool in Python</h3>
            <div class="mb-1 text-muted">June 12</div>
            <p class="card-text mb-auto">Software testing suites and end-to-end testing are critical in software
              building. These tests make sure
              that your software runs smoothly by finding problems ahead of time..</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="180" height="300" src="thumb2.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">News</strong>
            <h3 class="mb-0">Novel face mask developed by MIT, Harvard</h3>
            <div class="mb-1 text-muted">May 21</div>
            <p class="mb-auto">Researchers at MIT and Harvard University have designed a new face mask that can diagnose
              if the wearer is infected with SARS-CoV-2 within 90 minutes.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="https://source.unsplash.com/500x700/?tech,code,laptop
            " alt="">

          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="blog-footer" style="text-align: center;">
    <p>Blog template built for <a href="index.html">CoderWorld</a> by <a href="https://www.linkedin.com/in/sayan-paul-6400a3193/"
        target="_blank">@sayan</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>