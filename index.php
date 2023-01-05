<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="css\style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PHOTO GALLERY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nature</a>
          <a class="dropdown-item" href="#">Architecture</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\a1.jpg" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
    <h5>Architecture</h5>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\n1.jpg" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
    <h5>Nature</h5>
   
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\t1.jpg" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
    <h5>Travel</h5>
    
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  

<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/n2.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/n3.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/n4.jpg" class="img-fluid bp-3">
    </div>
    </div>
    </div>
  </div>
</section>

<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/a2.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/a3.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/a4.jpg" class="img-fluid bp-3">
    </div>
    </div>
    </div>
  </div>
</section>


<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/t1.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/t5.jpg" class="img-fluid bp-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/t3.jpg" class="img-fluid bp-3">
    </div>
    </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>