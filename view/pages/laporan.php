<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laporan</title>

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
                  <h4 class="card-title">Cari Laporan Per Bulan</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih</label>
                      </div>
                      <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Bulan</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih</label>
                      </div>
                      <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Tahun</option>
                        <option value="1">2024</option>
                        <option value="2">2023</option>
                        <option value="3">2022</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-primary mt-2"><i class="ri-search-fill"></i>Cari</button>
                    <button type="button" class="btn btn-success mt-2"><i class="ri-refresh-fill"></i>Refresh</button>
                    <button type="button" class="btn btn-info mt-2"><i class="ri-bill-fill"></i>Excel</button>
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
                  <h4 class="card-title">Hasil Laporan</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Cari data penjualan berdasarkan jangka periode tertentu.</p>
                <div class="table-responsive">
                  <table id="datatable" class="table data-tables table-striped">
                    <thead>
                      <tr class="ligth">
                        <th>No.</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Modal</th>
                        <th>Total</th>
                        <th>Tanggal Transaksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>BR001</td>
                        <td>Rexona</td>
                        <td>3</td>
                        <td>Rp. 50.000</td>
                        <td>Rp. 60.000</td>
                        <td>2011/04/25</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>BR002</td>
                        <td>ABC Choco</td>
                        <td>4</td>
                        <td>Rp. 20.000</td>
                        <td>Rp. 30.000</td>
                        <td>2011/04/25</td>
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