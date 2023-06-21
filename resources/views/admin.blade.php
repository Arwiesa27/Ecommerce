<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">AryaWiraSaputra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarNav" aria-expanded="false" araria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active text-warning fw-bold" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-warning fw-bold mt-0" href="/portofolio">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-warning fw-bold mt-0" href="/profile/edit">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-warning text-decoration-none fw-bold" href="/logout">Keluar</a>
                </li>
              </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-3 py-5">
        <form action="{{ url('admin/cari') }}" method="get">
            <input type="search" name="cari" id="cari">
            <input type="submit" value="CARI">
        </form>
        <div>
            <a href="{{ url('admin/add') }}"><button class="btn btn-primary mt-2">+Tambah Data</button></a>
        </div>
        <table border="1" class="table table-striped mt-2 text-center" style="width:100%">
            <tr class="bg-secondary">
                <th>NO</th>
                <th>ID</th>
                <th>NAMA PRODUK</th>
                <th>GAMBAR PRODUK</th>
                <th>HARGA PRODUK</th>
                <th>AKSI</th>
            </tr>
            @foreach ($admin as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td><img src="/storage/{{ $item->foto }}" alt="" width="100" height="100"></td>
                <td>{{ $item->harga }}</td>
                <td>
                    <a href="admin/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
                    <a href="admin/edit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js">
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
