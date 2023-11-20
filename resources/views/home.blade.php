<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Flower Shop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom Styles -->
  <style>
    body {
      padding-top: 56px; /* Adjust the height of the navbar */
    }
    .jumbotron {
      background-image: url('{{asset('/storage/mawar.jpg')}}'); /* Add your own image */
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 0;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Flower Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('katalog')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Welcome to our Flower Shop</h1>
      <p class="lead">Beautiful flowers for every occasion.</p>
      <a href="{{route('katalog')}}" class="btn btn-primary btn-lg">Shop Now</a>
    </header>

    <!-- Shop Information -->
    <div class="row">
      <div class="col-lg-12 mb-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">About Our Flower Shop</h4>
            <p class="card-text">
              Welcome to Flower Shop, your go-to destination for exquisite floral arrangements. We pride ourselves in offering a wide variety of fresh and beautiful flowers for all occasions. Whether you're celebrating a special event, expressing your love, or simply want to brighten someone's day, we have the perfect flowers for you.
            </p>
            <p class="card-text">
              Our dedicated team of florists is committed to creating stunning bouquets and arrangements that capture the essence of every moment. With a passion for flowers and a keen eye for design, we ensure that each creation is a work of art.
            </p>
            <p class="card-text">
              Explore our online store to discover our latest floral collections. We offer convenient online ordering and prompt delivery to make your flower shopping experience delightful and hassle-free. Thank you for choosing Flower Shop – where beauty blooms!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
