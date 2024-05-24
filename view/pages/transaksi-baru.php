<?php

session_start();
require '../../controller/functions.php';

// cek apakah sudah dibuat sesion login
if (!isset($_SESSION["login"])) {
  header("Location: ../../login.php");
  exit;
}

// variable untuk menyimpan hasil pencarian produk
$produk = [];

// jika tombol search di klik dan keyword pencarian ada
if (isset($_POST["search"]) && !empty($_POST["keyword"])) {
  $produk = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Transaksi Baru</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  <link rel="stylesheet" href="../../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../../assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendor/remixicon/fonts/remixicon.css">

</head>

<body class=" color-light ">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title"><i class="ri-search-fill"></i>Cari Barang</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12 mb-4">
                    <form action="" method="post">
                      <input id="keyword" type="text" class="form-control" name="keyword" autofocus placeholder="Masukkan : Nama / Kategori Barang [ENTER]" autocomplete="off" required>
                      <button id="tombol-cari" type="submit" name="search" class="btn btn-primary add-list mt-3"><i class="las la-search mr-3"></i>Cari</button>
                    </form>
                  </div>
                  <div class="col">
                    <div id="table-list" class="table-responsive">
                      <table id="datatable" class="table table-striped">
                        <thead>
                          <tr class="ligth">
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($produk as $row) : ?>
                            <tr>
                              <td> <?= $i; ?> </td>
                              <td>
                                <img src="../../assets/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image" />
                              </td>
                              <td><?= $row["nama"]; ?></td>
                              <td><?= $row["merk"]; ?></td>
                              <td><?= $row["harga_jual"]; ?></td>
                              <td>
                                <button onclick="tambahKeKasir(this)" data-nama="<?php echo $row['nama']; ?>" data-harga="<?php echo $row['harga_jual']; ?>" data-gambar="<?php echo $row['gambar']; ?>" class="badge bg-primary mr-2 p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah" href="#">
                                  Tambah +
                                </button>
                              </td>
                            </tr>
                            <?php $i++; ?>
                          <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                  <h4 class="card-title"><i class="ri-wallet-fill"></i>Kasir</h4>
                </div>
              </div>
              <div class="card-body">
                <p>List data barang berdasarkan transaksi saat ini.</p>
                <div class="table-responsive rounded mb-3">
                  <table id="tabel-kasir" class="table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                      <tr class="ligth ligth-data">
                        <th>
                          <div class="checkbox d-inline-block">
                            <input type="checkbox" class="checkbox-input" id="checkbox1" />
                            <label for="checkbox1" class="mb-0"></label>
                          </div>
                        </th>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="ligth-body">

                    </tbody>
                  </table>
                </div>
                <div class="row">
                  <div class="col">
                    <form data-toggle="validator">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Total Semua</label>
                            <input id="total-transaksi" disabled type="text" class="form-control" placeholder="Total Semua" data-errors="Total Semua" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Bayar</label>
                            <input id="uang-dibayar" type="text" class="form-control" placeholder="Total Pembayaran" data-errors="Please Enter Cost." required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Kembali</label>
                            <input id="uang-kembalian" type="text" disabled class="form-control" placeholder="Total Kembalian" data-errors="Please Enter Price." required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input id="tanggal-transaksi" disabled type="text" class="form-control" placeholder="Tanggal" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center mt-3 mb-4">
                        <button type="button" class="btn btn-primary mr-3" onclick="prosesPembayaran()">Bayar</button>
                        <button type="button" class="btn btn-danger mr-3" onclick="printStruk()">Print</button>
                        <button type="button" class="btn btn-danger" onclick="resetKasir()">Reset</button>
                      </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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

  <!-- script kelola data transaksi -->
  <script src="../../assets/js/transaksi.js"></script>
</body>

</html>