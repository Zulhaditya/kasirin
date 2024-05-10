<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kasirin");

// function query mysql
function query($query)
{
  global $koneksi;

  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $row;
}

// function registrasi user
function registrasi($data)
{
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
    '', 
    '$username',
    '$password', 
    '$namaToko',
    '$email', 
    '$phone', 
    CURRENT_TIMESTAMP()
    )");

  return mysqli_affected_rows($koneksi);
}
