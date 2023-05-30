<!DOCTYPE html>
<html lang="en">
<head>
<title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architechture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    
    </ul>
  
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/archi4.webp" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h5>Architecture</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature4.jpg" class="d-block w-100" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nature</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel4.jpg" class="d-block w-100" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<a id="nature">
<section class="my-4">
     <div class="py-4">
        <h2 class="text-center">Nature</h2>
     </div>
     <div class="container-fluid">
        <div class="row">
        <div
     <div class="col-lg col-md-4 col-12">
        <img src="images/nature1.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/nature2.webp" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/nature3.avif" class="img-fluid pb-3">
     </div>
     </div>
     </div>
</section>
</a>

<a id"architecture">
<section class="my-4">
     <div class="py-4">
        <h2 class="text-center">Architecture</h2>
     </div>
     <div class="container-fluid">
        <div class="row">
        <div
     <div class="col-lg col-md-4 col-12">
        <img src="images/archi1.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/archi2.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/archi3.jpg" class="img-fluid pb-3">
     </div>
     </div>
     </div>
</section>
</a>
<a id="travel">
<section class="my-4">
     <div class="py-4">
        <h2 class="text-center">Travel</h2>
     </div>
     <div class="container-fluid">
        <div class="row">
        <div
     <div class="col-lg col-md-4 col-12">
        <img src="images/travel1.avif" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/travel2.jpg" class="img-fluid pb-3">
     </div>
     <div class="col-lg col-md-4 col-12">
        <img src="images/travel3.jpg" class="img-fluid pb-3">
     </div>
     </div>
     </div>
</section>
</a>
<a id="contact">
<section class="my-4">
     <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
     </div>
     <div class="w-50 m-auto">
        <form action="about.php" method="post">
           <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
           </div>  
           <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control">
           </div>  
           <div class="form-group">
              <label>Number</label>
              <input type="text" name="number" class="form-control">
           </div>  
           <button type="submit" class="btn btn-success">Submit</button>
        </form>  
     </div>
</section>
</a>

<a id="about">
<section class="my-4">
     <div class="py-4">
        <h2 class="text-center">About</h2>
     </div>
     <div class="container-fluid">
        <h3 class="text-center">Mac</h3> <br>
        <p class="text-center">I am a passionate photographer interested in working in Architecture, Nature and Travel Photographie. I am a full time freelancer with an experience of 5years</p>

     </div>
</section>
</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>