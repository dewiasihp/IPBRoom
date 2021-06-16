<?php
include "function.php";

$get1 = mysqli_query($koneksi, "SELECT * FROM transaksi");
$jml_transaksi = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM user");
$jml_user = mysqli_num_rows($get1);

$get3 = mysqli_query($koneksi, "SELECT * FROM transaksi");
$jml_ruangan = mysqli_num_rows($get1);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style-main.css">
  <title></title>
</head>

<body>
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-2 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <img src="images/logo-ipbroom (biru).png" alt="sana" width="240" class="shadow-sm">
      </div>
      <hr>
      <div class="media d-flex align-items-center">
        <img src="images/foto-profile.jpg" alt="sana" width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <p class="font-weight-normal text-muted mb-0">Selamat datang Admin</p>
          <h5 class="m-0">Tiara Oktaviani</h5>
        </div>
      </div>
    </div>
    <p class="text-secondary font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>
    <ul class="nav nav-tabs flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#home" class="nav-link active text-dark bg-light" data-bs-toggle="tab">
          <img class="mr-3"src="images/home (1).png" alt="monitor" width="20" height="20">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="#data-ruangan" class="nav-link text-dark bg-light" data-bs-toggle="tab">
          <img class="mr-3"src="images/monitor.png" alt="monitor" width="20" height="20">
          Data Ruangan
        </a>
      </li>
      <li class="nav-item">
        <a href="#data-penyewa" class="nav-link text-dark bg-light" data-bs-toggle="tab">
          <img class="mr-3"src="images/monitor.png" alt="monitor" width="20" height="20">
          Data Penyewa
        </a>
      </li>
      <li class="nav-item">
        <a href="#data-tranksaksi" class="nav-link text-dark bg-light" data-bs-toggle="tab">
          <img class="mr-3"src="images/monitor.png" alt="monitor" width="20" height="20">
          Data Tranksaksi
        </a>
      </li>
      <li class="nav-item">
        <a href="login-page.php" class="nav-link text-dark bg-light" data-bs-toggle="tab">
          Log Out
        </a>
      </li>
    </ul>
  </div>
  <div class="tab-content">
    <div class="tab-pane active" id="home">
      <div class="page-content p-5" id="content">
        <!-- Toggle button -->

        <!-- Demo content -->

        <h2 class="display-5 text-dark"><img class="mr-3 mb-2"src="images/home (1).png" alt="monitor" width="48" height="48">Home</h2>
        <div class="separator"></div>
        <div class="row text-black">
          <div class="container">
            <div class="row">
              <div class="col-4">
                <div class="card home-row-1 px-2">
                  <p class="font-weight-normal text-light mb-0">Jumlah Penyewa</p>
                  <h1 class="display-4 text-white font-weight-bold"><?=$jml_user;?></h1>
                </div>
              </div>
              <div class="col-4">
                <div class="card home-row-2 px-2">
                  <p class="font-weight-normal text-light mb-0">Ruangan yang disewa</p>
                  <h1 class="display-4 text-white font-weight-bold"><?=$jml_ruangan;?></h1>
                </div>
              </div>
              <div class="col-4">
                <div class="card home-row-3 px-2">
                  <p class="font-weight-normal text-light mb-0">Jumlah Transaksi</p>
                  <h1 class="display-4 text-white font-weight-bold"><?=$jml_transaksi;?></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="data-penyewa">
      <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <h2 class="display-6 text-dark text-center"></i>Data Penyewa</h2>
        <div class="separator"></div>

        <div class="container mb-3 mt-3">
          <table class="table">
            <thead class="thead-dark bg-blue">
              <tr>
                
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Email</th>
                <th scope="col">No.Telepon</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
                    include "function.php";
                    $query = mysqli_query ($koneksi, "SELECT * FROM user");
                    while ($data = mysqli_fetch_array($query)) {
              ?>
                
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Jabatan']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['No_Handphone']; ?></td>
                <td><a class="btn btn-primary" href="ubahdata.php?ID_USER=<?php echo $data ['id_user']; ?>" role="button">Edit</a>
                    <a class="btn btn-danger" href="hapusdata.php?ID_USER=<?php echo $data ['id_user']; ?>" role="button">Hapus</a></td>
              </tr>
            </tbody>
            <?php 
              }
            ?>
          </table>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="data-tranksaksi">
      <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <h2 class="display-6 text-dark text-center"></i>Data Transaksi</h2>
        <div class="separator"></div>

        <div class="container mb-3 mt-3">
          <table class="table">
            <thead class="thead-dark bg-blue">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Akhir</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
                    include "function.php";
                    $query = mysqli_query ($koneksi, "SELECT * FROM transaksi");
                    while ($data = mysqli_fetch_array($query)) {
              ?>
                
                <td><?php echo $data["id_Transaksi"]; ?></td>
                <td><?php echo $data["Tanggal_Sewa"]; ?></td>
                <td><?php echo $data["Jam_Mulai"]; ?></td>
                <td><?php echo $data["Jam_Akhir"]; ?></td>
                <td><?php echo $data["Keperluan"]; ?></td>
                <td><?php echo $data["Pembayaran"]; ?></td>
                <td><a class="btn btn-primary" href="#" role="button">Edit</a>
                  <a class="btn btn-danger" href="batalkanpenyewaanadmin.php?ID_TRANSAKSI=<?php echo $data ['id_Transaksi']; ?>" role="button">Hapus</a></td>
              </tr>
            </tbody>
            <?php 
              }
            ?>
          </table>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="data-ruangan">
      <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <h2 class="display-6 text-dark text-center"></i>Data Ruangan</h2>
        <div class="separator"></div>

        <div class="container mb-3 mt-3">
          <a class="btn btn-primary mb-4" href="form-tambah-ruangan.php" role="button">+ Tambah Data</a>
          <table class="table">
            <thead class="thead-dark bg-blue">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
                    include "function.php";
                    $query = mysqli_query ($koneksi, "SELECT * FROM Ruangan");
                    while ($data = mysqli_fetch_array($query)) {
              ?>
                <td><?php echo $data["id_Ruangan"]; ?></td>
                <td><?php echo $data["Nama"]; ?></td>
                <td><?php echo $data["Kapasitas"]; ?></td>
                <td><?php echo $data["Lokasi"]; ?></td>
                <td><?php echo $data["Keterangan"]; ?></td>
                <td><?php echo $data["Harga"]; ?></td>
                <td><a class="btn btn-primary" href="ubahdataruangan.php?ID_RUANGAN=<?php echo $data ['id_Ruangan']; ?>" role="button">Edit</a>
                  <a class="btn btn-danger" href="hapusruanganadmin.php?ID_RUANGAN=<?php echo $data ['id_Ruangan']; ?>" role="button">Hapus</a></td>
              </tr>
              <?php 
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>




  <script src="https://kit.fontawesome.com/faac79c019.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="JavaScript/main.js"></script>
</body>

</html>
