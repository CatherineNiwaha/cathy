<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      body{
    background-color: bisque;
    text-align: center;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">YourLogo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </div>
      </nav><br>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="banner1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="banner2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="banner3.jpg" alt="Third slide">
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
      </div><br>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="product1.jpg" alt="Product 1">
              <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">$19.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="product2.jpg" alt="Product 2">
              <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">$29.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="product3.jpg" alt="Product 3">
              <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">$39.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">About Us</h5>
              <p>Some text about the company.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
              <ul class="list-unstyled mb-0">
                <li><a href="#!" class="text-dark">Home</a></li>
                <li><a href="#!" class="text-dark">Shop</a></li>
                <li><a href="#!" class="text-dark">Contact</a></li>
                <li><a href="#!" class="text-dark">Account</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Follow Us</h5>
              <ul class="list-unstyled mb-0">
                <li><a href="#!" class="text-dark">Facebook</a></li>
                <li><a href="#!" class="text-dark">Twitter</a></li>
                <li><a href="#!" class="text-dark">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
          © 2024 Your Company
        </div>
      </footer>
                        
</body>
</html>