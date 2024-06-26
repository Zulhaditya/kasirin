<?php

session_start();
require './controller/functions.php';

// cek cookie
if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  // ambil username berdasarkan id
  $result = mysqli_query($koneksi, "SELECT username FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash("sha256", $row["username"])) {
    $_SESSION["login"] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST["tombolLogin"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  // cek username
  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
  if (mysqli_num_rows($result) === 1) { // cek apakah ada baris yang dikembalikan oleh database

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

      // set session login
      $_SESSION["login"] = true;

      // cek fitur ingat saya menggunakan cookies
      if ($_POST["remember"]) {

        // buat cookie
        setcookie("id", $row["id"], time() + 60);
        setcookie("key", hash("sha256", $row["username"]), time() + 60);
      }

      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

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
                      <h2 class="mb-2">Login</h2>
                      <p>Masuk dan kelola transaksi toko anda.</p>
                      <form action="" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class=" form-group">
                              <label style="font-weight: bold; color: #676E8A;">Username</label>
                              <input name="username" class="floating-input form-control" type="text" placeholder=" ">
                              <?php if (isset($error)) : ?>
                                <div class="text-danger mt-2 fw-bold">Username atau password salah!</div>
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label style="font-weight: bold; color: #676E8A;">Password</label>
                              <input name="password" class="floating-input form-control" type="password" placeholder=" ">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-3">
                              <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label control-label-1" for="customCheck1">Ingat saya</label>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <a href="auth-recoverpw.html" class="text-primary float-right">Lupa password?</a>
                          </div>
                        </div>
                        <button name="tombolLogin" type="submit" class="btn btn-primary">Masuk</button>
                        <p class="mt-3">
                          Belum punya akun? <a href="register.php" class="text-primary">Daftar.</a>
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