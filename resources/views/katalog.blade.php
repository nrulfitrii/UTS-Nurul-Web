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
      background-image: url('flower-background.jpg'); /* Add your own image */
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 0;
      margin-bottom: 0;
    }
    .flower-card {
      margin-bottom: 20px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand" href="{{route('home')}}">Flower Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('katalog')}}">Products
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="row">
    @foreach ($data as $item)
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card flower-card">
              <img class="card-img-top" src="{{ asset('/storage/' . $item->gambar) }}" alt="">
              <div class="card-body">
                  <h4 class="card-title">{{ $item->nama }}</h4>
                  <p class="card-text">{{ $item->harga }}</p>
              </div>
          </div>
      </div>
      @endforeach
  </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
