<?php

session_start();

// cek apakah sudah dibuat sesion login
if (!isset($_SESSION["login"])) {
  header("Location: ../../login.php");
  exit;
}

require '../../controller/functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil ditambahkan atau tidak
  if (tambahProduk($_POST) > 0) {
    echo "
      <script>
        alert('Produk berhasil ditambahkan!');
        document.location.href = '../../index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Produk gagal ditambahkan.');
        document.location.href = '../../index.php';
      </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Produk</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../../assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">

    <?php include "../components/sidebar.php"; ?>
    <?php include "../components/topbar.php"; ?>

    <div class="content-page">
      <div class="container-fluid add-form-list">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title">Tambah Produk</h4>
                </div>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama *</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama produk" data-errors="Please Enter Name." required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Kategori *</label>
                        <input name="kategori" type="text" class="form-control" placeholder="Masukkan kategori" data-errors="Kategori masih kosong" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Harga Jual *</label>
                        <input name="hargaJual" type="text" class="form-control" placeholder="Masukkan harga jual" data-errors="Harga jual masih kosong" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Harga Beli *</label>
                        <input name="hargaBeli" type="text" class="form-control" placeholder="Masukkan harga beli" data-errors="Harga beli masih kosong" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Merk</label>
                        <input name="merk" type="text" class="form-control" placeholder="Masukkan merk" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Stok *</label>
                        <input name="stok" type="text" class="form-control" placeholder="Jumlah stok" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gambar *</label>
                        <input name="gambar" type="file" class="form-control image-file" name="pic" accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Satuan</label>
                        <input name="satuan" type="text" class="form-control" placeholder="pcs/ml" required>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <button name="submit" type="submit" class="btn btn-primary mr-2">Tambah</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Page end  -->
      </div>
    </div>
  </div>
  <!-- Wrapper End-->
  <footer class="iq-footer">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-lg-6 text-right">
              <span class="mr-1">
                <script>
                  document.write(new Date().getFullYear())
                </script>©
              </span> <a href="#" class="">POS Dash</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Backend Bundle JavaScript -->
  <script src="../../assets/js/backend-bundle.min.js"></script>

  <!-- Table Treeview JavaScript -->
  <script src="../../assets/js/table-treeview.js"></script>

  <!-- Chart Custom JavaScript -->
  <script src="../../assets/js/customizer.js"></script>

  <!-- Chart Custom JavaScript -->
  <script async src="../../assets/js/chart-custom.js"></script>

  <!-- app JavaScript -->
  <script src="../../assets/js/app.js"></script>
</body>

</html>