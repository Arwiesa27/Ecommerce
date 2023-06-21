<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Jersey</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
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
                    <span class="badge bg-light text-primary ms-1 rounded-pill">0</span>
                </button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container py-3 mt-5">
        <img class="card-img-top" width="100" height="330" src="/img/bgjersey1.jpg" alt="">
    </div>

    <section class="container-fluid">
        <div class="container mt-1">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($produk as $key => $item )
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="/storage/{{ $item->foto }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $item->nama }}</h5>
                                {{ $item->harga }}
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-success mt-auto" href="/viewop/{{ $item->id }}">View options</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <footer class="py-3 my-3 border-top bg-light">
            <p class="text-center text-dark">Copyright &copy;  <a href="https://www.instagram.com/arwiesa_/" target="blank" class="fw-bold text-decoration-none text-success">Arya Wira Saputra</a></p>
        </footer>
    </div>
