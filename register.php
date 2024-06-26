<?php
require './controller/functions.php';

if (isset($_POST["tombolRegistrasi"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Berhasil mendaftar!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo mysqli_error($koneksi);
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" ">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->

  <div class="wrapper">
    <section class="login-content">
      <div class="container">
        <div class="row align-items-center justify-content-center height-self-center">
          <div class="col-lg-8">
            <div class="card auth-card">
              <div class="card-body p-0">
                <div class="d-flex align-items-center auth-content">
                  <div class="col-lg-7 align-self-center">
                    <div class="p-3">
                      <h2 class="mb-2">Daftar</h2>
                      <p>Buat akun dan kelola transaksi toko anda.</p>
                      <form action="" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="username" class="floating-input form-control" type="text" placeholder=" ">
                              <label>Username</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="namaToko" class="floating-input form-control" type="text" placeholder=" ">
                              <label>Nama Toko</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="email" class="floating-input form-control" type="email" placeholder=" ">
                              <label>Email</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="phone" class="floating-input form-control" type="text" placeholder=" ">
                              <label>No. HP</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="password" class="floating-input form-control" type="password" placeholder=" ">
                              <label>Password</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="floating-label form-group">
                              <input name="confirmPassword" class="floating-input form-control" type="password" placeholder=" ">
                              <label>Konfirmasi Password</label>
                            </div>
                          </div>
                        </div>
                        <button name="tombolRegistrasi" type="submit" class="btn btn-primary">Daftar</button>
                        <p class="mt-3">
                          Sudah punya akun <a href="login.php" class="text-primary">Login.</a>
                        </p>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-5 content-right">
                    <img src="assets/images/login/01.png" class="img-fluid image-right" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Backend Bundle JavaScript -->
  <script src="assets/js/backend-bundle.min.js"></script>

  <!-- Table Treeview JavaScript -->
  <script src="assets/js/table-treeview.js"></script>

  <!-- Chart Custom JavaScript -->
  <script src="assets/js/customizer.js"></script>

  <!-- Chart Custom JavaScript -->
  <script async src="assets/js/chart-custom.js"></script>

  <!-- app JavaScript -->
  <script src="assets/js/app.js"></script>
</body>

</html>