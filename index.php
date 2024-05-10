<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Kasirin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <link rel="stylesheet" href="assets/css/backend-plugin.min.css" />
  <link rel="stylesheet" href="assets/css/backend.css?v=1.0.0" />
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendor/remixicon/fonts/remixicon.css" />
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center"></div>
  </div>
  <!-- loader END -->

  <!-- Wrapper Start -->
  <div class="wrapper">
    <div class="iq-sidebar sidebar-default">
      <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="index.php" class="header-logo mt-2">
          <img src="assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo" />
          <h5 class="logo-title light-logo ml-3">Kasirin</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
          <i class="las la-bars wrapper-menu"></i>
        </div>
      </div>
      <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="active">
              <a href="index.php" class="svg-icon">
                <svg class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                  <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
            <li class="">
              <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <span class="ml-4">Produk</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="10 15 15 20 20 15"></polyline>
                  <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
              </a>
              <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                  <a href="view/pages/list-produk.php">
                    <i class="las la-minus"></i><span>Data Produk</span>
                  </a>
                </li>
                <li class="">
                  <a href="view/pages/tambah-produk.php">
                    <i class="las la-minus"></i><span>Tambah Produk</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                  <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                </svg>
                <span class="ml-4">Kategori</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="10 15 15 20 20 15"></polyline>
                  <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
              </a>
              <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                  <a href="view/pages/kategori-produk.php">
                    <i class="las la-minus"></i><span>Kategori Produk</span>
                  </a>
                </li>
                <li class="">
                  <a href="view/pages/tambah-kategori-produk.php">
                    <i class="las la-minus"></i><span>Tambah Kategori</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=" ">
              <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                  <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>
                <span class="ml-4">Transaksi</span>
                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="10 15 15 20 20 15"></polyline>
                  <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                </svg>
              </a>
              <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li class="">
                  <a href="view/pages/transaksi.php">
                    <i class="las la-minus"></i><span>Lihat Transaksi</span>
                  </a>
                </li>
                <li class="">
                  <a href="view/pages/transaksi-baru.php">
                    <i class="las la-minus"></i><span>Tambah Transaksi</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="view/pages/laporan.php" class="">
                <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                <span class="ml-4">Reports</span>
              </a>
              <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle"></ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- topbar -->
    <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0 mt-3">
          <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="index.php" class="header-logo">
              <img src="assets/images/logo.png" class="img-fluid rounded-normal" alt="logo" />
              <h5 class="logo-title ml-3">Kasirin</h5>
            </a>
          </div>
          <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
              <i class="ri-menu-3-line"></i>
            </button>
            <a href="view/pages/transaksi-baru.php" class="btn border add-btn shadow-none mx-2 d-none d-md-block"><i class="las la-plus mr-2"></i>Transaksi Baru</a>
          </div>
        </nav>
      </div>
    </div>

    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-transparent card-block card-stretch card-height border-none">
              <div class="card-body p-0 mt-lg-2 mt-0">
                <h3 class="mb-3">Halo, Zulhaditya</h3>
                <p class="mb-0 mr-4">
                  Lihat dashboard untuk melihat penghasilan dan pendapatan toko.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                      <div class="icon iq-icon-box-2 bg-info-light">
                        <img src="assets/images/product/1.png" class="img-fluid" alt="image" />
                      </div>
                      <div>
                        <p class="mb-2">Total Pengeluaran</p>
                        <h4 style="font-size: 16px;">Rp. 2.700.000</h4>
                      </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                      <span class="bg-info iq-progress progress-1" data-percent="85">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                      <div class="icon iq-icon-box-2 bg-danger-light">
                        <img src="assets/images/product/2.png" class="img-fluid" alt="image" />
                      </div>
                      <div>
                        <p class="mb-2">Total Pendapatan</p>
                        <h4 style="font-size: 16px;">Rp. 3.700.000</h4>
                      </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                      <span class="bg-danger iq-progress progress-1" data-percent="70">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-4 card-total-sale">
                      <div class="icon iq-icon-box-2 bg-success-light">
                        <img src="assets/images/product/3.png" class="img-fluid" alt="image" />
                      </div>
                      <div>
                        <p class="mb-2">Produk Terjual</p>
                        <h4>643 pcs</h4>
                      </div>
                    </div>
                    <div class="iq-progress-bar mt-2">
                      <span class="bg-success iq-progress progress-1" data-percent="75">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card card-block card-stretch card-height">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="header-title">
                  <h4 class="card-title">List Produk</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                    <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006" data-toggle="dropdown">
                      Bulan<i class="ri-arrow-down-s-line ml-1"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton006">
                      <a class="dropdown-item" href="#">Tahun</a>
                      <a class="dropdown-item" href="#">Bulan</a>
                      <a class="dropdown-item" href="#">Minggu</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled row top-product mb-0">
                  <li class="col-lg-3">
                    <div class="card card-block card-stretch card-height mb-0">
                      <div class="card-body">
                        <div class="bg-warning-light rounded">
                          <img src="assets/images/product/01.png" class="style-img img-fluid m-auto p-3" alt="image" />
                        </div>
                        <div class="style-text text-left mt-3">
                          <h5 class="mb-1">Organic Cream</h5>
                          <p class="mb-0">789 Item</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-3">
                    <div class="card card-block card-stretch card-height mb-0">
                      <div class="card-body">
                        <div class="bg-danger-light rounded">
                          <img src="assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image" />
                        </div>
                        <div class="style-text text-left mt-3">
                          <h5 class="mb-1">Rain Umbrella</h5>
                          <p class="mb-0">657 Item</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-3">
                    <div class="card card-block card-stretch card-height mb-0">
                      <div class="card-body">
                        <div class="bg-info-light rounded">
                          <img src="assets/images/product/03.png" class="style-img img-fluid m-auto p-3" alt="image" />
                        </div>
                        <div class="style-text text-left mt-3">
                          <h5 class="mb-1">Serum Bottle</h5>
                          <p class="mb-0">489 Item</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-lg-3">
                    <div class="card card-block card-stretch card-height mb-0">
                      <div class="card-body">
                        <div class="bg-success-light rounded">
                          <img src="assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image" />
                        </div>
                        <div class="style-text text-left mt-3">
                          <h5 class="mb-1">Organic Cream</h5>
                          <p class="mb-0">468 Item</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-transparent card-block card-stretch mb-4">
              <div class="card-header d-flex align-items-center justify-content-between p-0">
                <div class="header-title">
                  <h4 class="card-title mb-0">Produk Terlaris</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
                  <div>
                    <a href="#" class="btn btn-primary view-btn font-size-14">Lihat Semua</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-block card-stretch card-height-helf">
              <div class="card-body card-item-right">
                <div class="d-flex align-items-top">
                  <div class="bg-warning-light rounded">
                    <img src="assets/images/product/04.png" class="style-img img-fluid m-auto" alt="image" />
                  </div>
                  <div class="style-text text-left">
                    <h5 class="mb-2">Coffee Beans Packet</h5>
                    <p class="mb-2">Total Penjualan : 457</p>
                    <p class="mb-0">Total : Rp. 279.000</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-block card-stretch card-height-helf">
              <div class="card-body card-item-right">
                <div class="d-flex align-items-top">
                  <div class="bg-danger-light rounded">
                    <img src="assets/images/product/05.png" class="style-img img-fluid m-auto" alt="image" />
                  </div>
                  <div class="style-text text-left">
                    <h5 class="mb-2">Bottle Cup Set</h5>
                    <p class="mb-2">Total Penjualan : 211</p>
                    <p class="mb-0">Total : Rp. 350.000</p>
                  </div>
                </div>
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
                <li class="list-inline-item">
                  <a href=".backend/privacy-policy.html">Privacy Policy</a>
                </li>
                <li class="list-inline-item">
                  <a href="backend/terms-of-service.html">Terms of Use</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 text-right">
              <span class="mr-1">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                ©
              </span>
              <a href="#" class="">Kasirin</a>.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
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