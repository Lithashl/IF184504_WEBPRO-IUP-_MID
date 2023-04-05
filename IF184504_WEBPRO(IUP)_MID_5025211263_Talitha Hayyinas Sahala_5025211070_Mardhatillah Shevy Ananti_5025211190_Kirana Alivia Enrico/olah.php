<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <div class="container">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Data Buku</a>
        </div>
      </nav>

      <figure class="text-center mt-5">
        <blockquote class="blockquote">
          <p>Data Buku yang Tersedia</p>
        </blockquote>
        <figcaption class="blockquote-footer">
         <cite title="Source Title">Kelola Data Buku</cite>
        </figcaption>
      </figure>

      <form action="proses.php" method="post">

      <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
          <input type="judul" class="form-control" id="judul">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
        <div class="col-sm-10">
          <input type="pengarang" class="form-control" id="pengarang">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
        <div class="col-sm-10">
          <input type="penerbit" class="form-control" id="penerbit">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
          <select name="kategori" id="kategori" class="form-control">
              <option value="Umum">Fantasi</option>
              <option value="Umum">Komedi</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
          <?php
            if(isset($_GET['edit'])){
              echo "<button type='button' class='btn btn-primary' name='btnProses' value='edit'>Simpan Perubahan</button>";
            }else{
              echo "<button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Tambah Data</button>";
            }
          ?>
        </div>
    </div>
  </form>
    
    <!-- End Example Code -->
  </body>
</html>