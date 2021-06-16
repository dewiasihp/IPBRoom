<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>IPBRoom</title>
</head>

<body class="bg">
  <div class="navbar navbar-dark navbar-index">

  </div>
  <br>
  <br>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <table>
        <tr>
          <td><img src="images/logo ipbroom.png" alt="logo-ipb" width="300px"></td>
        </tr>
      </table>
    </section>
    <br>
    <br>
    <section class="row justify-content-center">
      <div class="card mb-5">
        <div class="card-header text-center h5">
          Buat Akun IPBRoom
        </div>
        <div class="card-body">
          <form action="prosesregistrasi.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="inputNama" name="nama" placeholder="8-12 Karakter">
            </div>
            <div class="form-group">
              <label for="nim">Nomer Induk</label>
              <input type="text" class="form-control" id="inputNIM" name="nim" placeholder="NIM/NIP">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <select id="inputJabatan" class="form-control" name="jabatan">
                <option selected>Mahasiswa/Dosen/Pegawai</option>
                <option class="font-weight-normal">Mahasiswa</option>
                <option class="font-weight-normal">Dosen</option>
                <option class="font-weight-normal">Pegawai</option>
              </select>
            </div>
            <div class="form-group">
              <label for="no_handphone">No.Telepon</label>
              <input type="text" class="form-control" id="inputNama" name="no_telepon" placeholder="8-12 Karakter">
            </div>
            <input type="submit" class="btn btn-primary text-right" value="Daftar" role="button">
          </form>

        </div>
      </div>
    </section>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
