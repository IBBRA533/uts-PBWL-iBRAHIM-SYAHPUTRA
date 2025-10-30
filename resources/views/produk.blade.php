<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>
    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      ☰
    </button>
  </div>
</nav>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
    </ul>
    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="fw-bold">Halaman Produk</h1>
  <a href="/produk/tambah" class="btn btn-primary">Tambah Produk</a>
</div>
<div class="container mt-5">
<table class="table table-bordered table-striped" style="background-color: #1085e5;">
  <thead class="table-primary">
    <tr>
      <th>Kode Produk</th>
      <th>Nama Produk</th>
      <th>Jenis Produk</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 0; $i < count($produk); $i++)
      <tr>
        <td>{{ $produk[$i]['kode'] }}</td>
        <td>{{ $produk[$i]['nama'] }}</td>
        <td>{{ $produk[$i]['jenis'] }}</td>
        <td>{{ $produk[$i]['harga'] }}</td>
      </tr>
    @endfor
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
