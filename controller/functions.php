<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kasirin");

// function query mysql
function query($query) {
  global $koneksi;

  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// function tambah data produk
function tambahProduk($data) {
  global $koneksi;

  // ambil data tiap elemen dari form
  $nama = htmlspecialchars($data["nama"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $merk = htmlspecialchars($data["merk"]);
  $hargaBeli = htmlspecialchars($data["hargaBeli"]);
  $hargaJual = htmlspecialchars($data["hargaJual"]);
  $stok = htmlspecialchars($data["stok"]);
  $satuan = htmlspecialchars($data["satuan"]);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO produk
            VALUES
              (NULL, 
              '$kategori', 
              '$nama', 
              '$merk', 
              $hargaBeli, 
              $hargaJual, 
              $stok, 
              '$satuan',
              CURRENT_TIMESTAMP(), 
              '$gambar' )";

  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}


// function upload gambar
function upload() {
  // ambil data gambar
  $namaFile = $_FILES["gambar"]["name"];
  $sizeFile = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tmpName = $_FILES["gambar"]["tmp_name"];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
        alert('Pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }

  // cek apakah file yang diupload berupa gambar
  $ekstensiGambarValid = ["jpg", "jpeg", "png"];
  $ekstensiGambar = explode(".", $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
        alert('File upload bukan gambar!');
    </script>";
    return false;
  }

  // cek jika gambar ukurannya terlalu besar / 1mb
  if ($sizeFile > 1000000) {
    echo "<script>
        alert('Ukuran gambar terlalu besar.');
    </script>";
    return false;
  }

  // lolos pengecekan, gambar siap untuk diupload
  // generate nama gambar yang baru menggunakan string random
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar;
  move_uploaded_file($tmpName, "img/" . $namaFileBaru);

  return $namaFileBaru;
}

// function hapus produk
function hapus($id) {
  global $koneksi;

  mysqli_query($koneksi, "DELETE FROM produk WHERE id = $id");
  return mysqli_affected_rows($koneksi);
}

// function edit produk
function edit($data) {
  global $koneksi;

  // ambil data tiap elemen dari form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $merk = htmlspecialchars($data["merk"]);
  $harga_beli = htmlspecialchars($data["harga_beli"]);
  $harga_jual = htmlspecialchars($data["harga_jual"]);
  $stok = htmlspecialchars($data["stok"]);
  $satuan = htmlspecialchars($data["satuan"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah gambar memilih gambar baru atau tidak
  if ($_FILES["gambar"]["error"] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query update data
  $query = "UPDATE produk
            SET
              nama = '$nama',
              kategori = '$kategori',
              merk = '$merk',
              harga_beli = '$harga_beli',
              harga_jual = '$harga_jual',
              stok = '$stok',
              satuan = '$satuan',
              gambar = '$gambar'
            WHERE id = $id
            ";

  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}

// function registrasi user
function registrasi($data) {
  global $koneksi;

  // dapatkan data user dari form
  $username = strtolower(stripslashes($data["username"]));
  $namaToko = strtolower(stripslashes($data["namaToko"]));
  $email = strtolower(stripslashes($data["email"]));
  $phone = strtolower(stripslashes($data["phone"]));
  $password = mysqli_real_escape_string($koneksi, $data["password"]);
  $confirmPassword = mysqli_real_escape_string($koneksi, $data["confirmPassword"]);

  // cek apakah username sudah ada atau belum
  $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!');
          </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $confirmPassword) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  // enkripsi password sebelum dimasukkan kedalam database
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru kedalam database
  mysqli_query($koneksi, "INSERT INTO users VALUES(
    NULL,
    '$username',
    '$password',
    '$namaToko',
    '$email', 
    '$phone', 
    CURRENT_TIMESTAMP()
    )");

  return mysqli_affected_rows($koneksi);
}

// function cari produk
function cari($keyword) {
  $query = "SELECT * FROM produk 
    WHERE kategori LIKE '%$keyword%' 
    OR nama LIKE '%$keyword%' 
    OR merk LIKE '%$keyword%'
    ";
  return query($query);
}
