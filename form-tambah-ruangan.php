<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style-main.css">
  <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
  <title>Form Sewa Ruangan</title>
</head>

<body>
  <div class="p-5" id="content">
    <!-- Toggle button -->
    <form action="prosespenambahanruangan.php" method="POST" enctype="multipart/form-data">
    <h2 class="display-6 text-dark text-center">Penambahan Data Ruangan</h2>
    <div class="separator"></div>
    <h4 class="mb-3 text-center">Data Ruangan</h4>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">ID</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="id_ruangan">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="nama">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Kapasitas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="kapasitas">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Lokasi</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="lokasi">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Keterangan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="keterangan">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Harga</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="harga">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Foto Ruangan</label>
        <div class="col-sm-8">
          <input type="file" class="form-control" id="inputKeperluan" name="foto" required="">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2">
          <input type="submit" button class="w-100 btn btn-primary" type="submit" value="Simpan">
        </div>
      </div>
    </form>
  </div>

  <script src="https://kit.fontawesome.com/faac79c019.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="JavaScript/main.js"></script>
  <script src="JavaScript/jquery.js"></script>
  <script src="JavaScript/jquery.datetimepicker.full.js"></script>
</body>

</html>
