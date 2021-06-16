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
<?php
include "function.php";

$id = $_REQUEST['ID_RUANGAN'];
$data = mysqli_query( $koneksi, "SELECT * FROM ruangan WHERE id_Ruangan = '$id'");
while ($tampil = mysqli_fetch_array($data)){
?>

  <div class="p-5" id="content">
    <!-- Toggle button -->
    <form action="updatedataruangan.php" method="POST">
    <h2 class="display-6 text-dark text-center">Pengubahan Data</h2>
    <div class="separator"></div>
    <h4 class="mb-3 text-center">Data Ruangan</h4>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">ID</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="id" value="<?php echo $tampil ['id_Ruangan']; ?>">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="nama" value="<?php echo $tampil ['Nama']; ?>">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Kapasitas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="kapasitas"value="<?php echo $tampil ['Kapasitas']; ?>">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Lokasi</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="lokasi" value="<?php echo $tampil ['Lokasi']; ?>">
        </div>
      </div>
      <div class="mb-3 row ml-4">
        <label for="inputKeperluan" class="col-sm-2 col-form-label text-right">Keterangan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputKeperluan" name="keterangan" value="<?php echo $tampil ['Keterangan']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2">
          <input type="submit" button class="w-100 btn btn-primary" type="submit" value="ubah" name="ubah">
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

<?php
}

?>
</body>

</html>