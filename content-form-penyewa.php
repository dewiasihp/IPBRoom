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
    <form action="prosespenyewaan.php" method="POST">
    <h2 class="display-6 text-dark text-center">Data Transaksi</h2>
    <div class="separator"></div>
    <h4 class="mb-3 text-center">Penyewaan</h4>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">NIM/NIP</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="id_transaksi">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Tanggal</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="tanggal">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputJam-mulai" class="col-sm-2 col-form-label text-right">Jam Mulai</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="inputJam-mulai" name="jam_mulai">
        </div>
        <label for="inputJam-akhir" class="col-sm-2 col-form-label text-right">Sampai</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="inputJam-akhir" name="jam_akhir">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Keperluan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="keperluan">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Pembayaran</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="pembayaran">
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
