<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>therecordplayer.com</title>
  <!--Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- CSS file -->
  <link rel="stylesheet" href="./style/style.css">
  <!-- google font link for headers-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&display=swap" rel="stylesheet">
  <!-- google font link for body-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Barlow&display=swap" rel="stylesheet">
</head>

<body>
  <!-- navigation bar -->
  <div class="container-fluid p-0">


    <!-- first child -->
    <nav class="navbar navbar-expand-lg " id="background">
      <div class="container-fluid">
        <h6> The Record Player </h6>
        <a class="navbar-brand" href="#"><img src="./images/playerLogo.png" alt="A record player cartoon" class="logo"></a>
        <!-- reactive component to the webpage. Button with dropdown menu will appear when webpage collapses -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- The following code id="navbarSupportedContent" needs to be there so that button gives output -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sign In</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true"><img src="./images/cart.png" alt="Shopping cart cartoon" class="cart"></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <!-- second child  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!-- third child -->
    <div class="welcome">
      <h3 class="text-center">The Record Player</h3>
      <p id="p1" class="text-center">"Welcome! Here is your ultimate destination for a curated collection of vinyl records that will transport you through the timeless melodies of music history."</p>
    </div>

    <!-- fourth child -->
    <div class="row">
      <div class="col-md">
        <!-- products -->
        <div class="row">
          <div class="col-md-4">
            <div class="card"><a href="#">
                <img src="./images/nina.png" class="card-img-top" alt="Nina Simone Album Cover"></a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <a href="#">
                <img src="./images/nirvana.png" class="card-img-top" alt="Jimi Hendrix Album Cover">
              </a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <a href="#">
                <img src="./images/travis.png" class="card-img-top" alt="Travis Scott Album Cover"></a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- last child -->
    <!-- <div class="bg-info p-3 text-center" ><p>All Rights Reserved©- Designed by Luca Souza - 2023</p></div>
-->
  </div>
  <!--bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>