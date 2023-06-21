<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Jersey</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">Arwiesa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarNav" aria-expanded="false" araria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="tugas1.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" aria-expanded="false" href="#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex ms-auto">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-success ms-1 rounded-pill">0</span>
                </button>
            </form>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col-6 mt-5">
                @if(file_exists("storage/". $produk->foto))
                <img class="card-img-top" src="/storage/{{ $produk->foto }}" alt=""><br>
                @endif
            </div>
            <div class="col-6 mt-5">
                <h1 class="fw-bold mb-2">{{ $produk->nama }}</h1>
                <h5 class="mt-lg-5">{{ $produk->harga }}</h5>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem;">
                        <div class="text-center"><a class="btn btn-outline-success mt-auto" href="https://api.whatsapp.com/send?phone=6285703240636&text=%22hallo22%">Beli Sekarang</a></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
