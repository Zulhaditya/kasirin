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
                      <input type="text" class="form-control" name="keyword" autofocus placeholder="Masukkan : Nama / Kategori Barang [ENTER]" autocomplete="off" required>
                      <button type="submit" name="search" class="btn btn-primary add-list mt-3"><i class="las la-search mr-3"></i>Cari</button>
                    </form>
                  </div>
                  <div class="col">
                    <div class="table-responsive">
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
                              <td> <?= $row["gambar"]; ?> </td>
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
                    <input disabled type="text" class="form-control" placeholder="Tanggal" required>
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

  <script>
    function tambahKeKasir(button) {
      var nomorProduk = 1;
      var namaProduk = button.getAttribute('data-nama');
      var hargaProduk = button.getAttribute('data-harga');
      var gambar = button.getAttribute('data-gambar');

      // Buat elemen HTML untuk produk yang akan ditambahkan ke bagian kasir
      var produkHTML = '<tr>' +
        '<td>' +
        '<div class="checkbox d-inline-block">' +
        '<input type="checkbox" class="checkbox-input" id="checkbox' + nomorProduk + '" />' +
        '<label for="checkbox' + nomorProduk + '" class="mb-0"></label>' +
        '</div>' +
        '</td>' +
        '<td>' + nomorProduk + '</td>' +
        '<td class="nama-gambar"><img src="../../product/' + gambar + '" class="img-fluid rounded avatar-50 mr-3" alt="image" /></td>' +
        '<td class="nama-produk">' + namaProduk + '</td>' +
        '<td>' +
        '<input type="number" class="form-control jumlah-produk" value="1" min="1">' +
        '</td>' +
        '<td class="harga-produk" data-harga="' + hargaProduk + '">Rp. ' + hargaProduk + '</td>' +
        '<td>' +
        '<div class="d-flex align-items-center list-action">' +
        '<button class="badge bg-success mr-2 p-2 btn-update" data-toggle="tooltip" data-placement="top" title="Edit">Update <i class="ri-pencil-line mr-0"></i></button>' +
        '<button class="badge bg-warning mr-2 p-2 btn-delete" data-toggle="tooltip" data-placement="top" title="Hapus">Hapus <i class="ri-delete-bin-line mr-0"></i></button>' +
        '</div>' +
        '</td>' +
        '</tr>';

      // Tambahkan elemen produk ke bagian "Kasir"
      document.getElementById('tabel-kasir').innerHTML += produkHTML;
      nomorProduk++;
    }

    // event listener untuk fitur tambah produk
    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('btn-tambah')) {
        tambahKeKasir(event.target);
      }
    })

    // event listener untuk input jumlah produk dan tombol update serta hapus
    document.addEventListener('input', function(event) {
      if (event.target.classList.contains('jumlah-produk')) {
        updateTotalHarga(event.target);
      }
    });

    document.addEventListener('click', function(event) {
      if (event.target.classList.contains('btn-update')) {
        updateJumlahProduk(event.target);
      } else if (event.target.classList.contains('btn-delete')) {
        hapusProduk(event.target);
      }
    });

    // fungsi untuk mengupdate jumlah produk dan total harga di bagian kasir
    function updateTotalHarga(input) {
      var row = input.closest('tr');
      var hargaProduk = parseFloat(row.querySelector('.harga-produk').getAttribute('data-harga'));
      var jumlahProduk = parseInt(input.value);
      var totalHarga = hargaProduk * jumlahProduk;
      row.querySelector('.harga-produk').innerText = 'Rp. ' + totalHarga.toFixed(2);
    }

    // fungsi untuk mengupdate jumlah produk di bagian kasir
    function updateJumlahProduk(button) {
      var row = button.closest('tr');
      var input = row.querySelector('.jumlah-produk');
      updateTotalHarga(input);
    }

    // fungsi untuk menghapus produk dari bagian kasir
    function hapusProduk(button) {
      var row = button.closest('tr');
      row.remove();
    }
  </script>

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