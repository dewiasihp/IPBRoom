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
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" action="proseslogin.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
          </div>
          <input type="submit" class="btn btn-primary btn-block" href="index-user.php" role="button" value="Login">
          <a class="mt-4" href="register-page.php">Register</a>
        </form>
      </section>
    </section>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

  </body>

</html>
