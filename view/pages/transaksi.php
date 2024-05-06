<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Riwayat Transaksi</title>

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
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
              <div>
                <h4 class="mb-3">Riwayat Transaksi</h4>
                <p class="mb-0">Lihat riwayat transaksi untuk mengetahui transaksi toko terkini.
              </div>
              <a href="transaksi-baru.php" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah</a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
              <table class="data-table table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                  <tr class="ligth ligth-data">
                    <th>
                      <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                        <label for="checkbox1" class="mb-0"></label>
                      </div>
                    </th>
                    <th>Tanggal</th>
                    <th>ID Transaksi</th>
                    <th>Total Transaksi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="ligth-body">
                  <tr>
                    <td>
                      <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                        <label for="checkbox2" class="mb-0"></label>
                      </div>
                    </td>
                    <td>01 jan 2021</td>
                    <td>PO201</td>
                    <td>Rp. 100.000</td>
                    <td>
                      <div class="d-flex align-items-center list-action">
                        <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a>
                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                        <label for="checkbox2" class="mb-0"></label>
                      </div>
                    </td>
                    <td>01 jan 2021</td>
                    <td>PO201</td>
                    <td>Rp. 100.000</td>
                    <td>
                      <div class="d-flex align-items-center list-action">
                        <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a>
                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Page end  -->
      </div>
      <!-- Modal Edit -->
      <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="popup text-left">
                <div class="media align-items-top justify-content-between">
                  <h3 class="mb-3">Product</h3>
                  <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                </div>
                <div class="content edit-notes">
                  <div class="card card-transparent card-block card-stretch event-note mb-0">
                    <div class="card-body px-0 bukmark">
                      <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                        <div class="quill-tool">
                        </div>
                      </div>
                      <div id="quill-toolbar1">
                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                      </div>
                    </div>
                    <div class="card-footer border-0">
                      <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                      </div>
                    </div>
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
</body>

</html>