<?php

session_start();

// cek apakah sudah dibuat sesion login
if (!isset($_SESSION["login"])) {
  header("Location: ../../login.php");
  exit;
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
                    <input type="text" class="form-control" placeholder="Masukkan : Kode / Nama Barang [ENTER]" data-errors="Input masih kosong." required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="col">
                    <div class="table-responsive">
                      <table id="datatable" class="table data-tables table-striped">
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
                          <tr>
                            <td>1</td>
                            <td>Gambar</td>
                            <td>Rexona</td>
                            <td>Unilever</td>
                            <td>Rp. 50.000</td>
                            <td>
                              <a class="badge bg-primary mr-2 p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah" href="#">Tambah +</a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Gambar</td>
                            <td>Aqua 150ml</td>
                            <td>Danone</td>
                            <td>Rp. 50.000</td>
                            <td>
                              <a class="badge bg-primary mr-2 p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah" href="#">Tambah +</a>
                            </td>
                          </tr>
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
                  <table class="data-tables table mb-0 tbl-server-info">
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
                      <tr>
                        <td>
                          <div class="checkbox d-inline-block">
                            <input type="checkbox" class="checkbox-input" id="checkbox9" />
                            <label for="checkbox9" class="mb-0"></label>
                          </div>
                        </td>
                        <td>1</td>
                        <td>Gambar</td>
                        <td>Tanggo Wafer</td>
                        <td>
                          <div class="form-group w-50">
                            <input type="text" class="form-control" placeholder="Jumlah" data-errors="Total Semua" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </td>
                        <td>Rp. 25.000</td>
                        <td>
                          <div class="d-flex align-items-center list-action">
                            <a class="badge bg-success mr-2 p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#">Update <i class="ri-pencil-line mr-0"></i></a>
                            <a class="badge bg-warning mr-2 p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" href="#">Hapus <i class="ri-delete-bin-line mr-0"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form action="page-list-product.html" data-toggle="validator">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Total Semua</label>
                    <input type="text" class="form-control" placeholder="Total Semua" data-errors="Total Semua" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Bayar</label>
                    <input type="text" class="form-control" placeholder="Total Pembayaran" data-errors="Please Enter Cost." required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kembali</label>
                    <input type="text" class="form-control" placeholder="Total Kembalian" data-errors="Please Enter Price." required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input type="text" class="form-control" placeholder="Tanggal" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-3 mb-4">
                <button type="submit" class="btn btn-primary mr-3">Bayar</button>
                <button type="reset" class="btn btn-danger">Print</button>
              </div>
            </form>
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
</body>

</html>