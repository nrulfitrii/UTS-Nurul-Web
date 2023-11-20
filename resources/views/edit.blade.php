<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Flower Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            padding-top: 56px; /* Adjust the height of the navbar */
        }

        .form-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #dfe2e5;
            border-radius: 5px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Edit Bunga</h2>
            <form action="{{route('dashboard.update',$data->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required value="{{$data->nama}}">
                </div>
                <div class="form-group">
                    <label for="harga">harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" required value="{{$data->harga}}">
                </div>
                <div class="form-group">
                    <label for="stok">Stock:</label>
                    <input type="number" class="form-control" id="stok" name="stok" required value="{{$data->stok}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit Flower</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
