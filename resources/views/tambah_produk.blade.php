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
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produk">Produk</a>
      </li>
    </ul>
    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Form Tambah Produk</h2>

    <form>
      <div class="row mb-3">
        <div class="col-md-3">
          <label class="form-label">Kode Produk</label>
          <input type="text" class="form-control" placeholder="Input Kode Produk">
        </div>
        <div class="col-md-4">
          <label class="form-label">Nama Produk</label>
          <input type="text" class="form-control" placeholder="Input Nama Produk">
        </div>
        <div class="col-md-4">
          <label class="form-label">Jenis Produk</label>
          <select class="form-select">
            <option selected>Pilih Produk</option>
            @for ($i = 0; $i < count($jenisProduk); $i++)
              <option value="{{ $jenisProduk[$i] }}">{{ $jenisProduk[$i] }}</option>
            @endfor
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Harga</label>
          <input type="number" class="form-control" placeholder="Input Harga">
        </div>
      </div>

      <button type="submit" class="btn btn-success w-100">Simpan</button>
    </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
