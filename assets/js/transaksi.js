// Variabel global untuk menyimpan nomor urut produk
var nomorProduk = 1;

// Fungsi untuk menambahkan produk ke bagian kasir
function tambahKeKasir(button) {
  var namaProduk = button.getAttribute("data-nama");
  var hargaProduk = button.getAttribute("data-harga");
  var gambar = button.getAttribute("data-gambar");

  // Buat elemen HTML untuk produk yang akan ditambahkan ke bagian kasir
  var produkHTML =
    "<tr>" +
    "<td>" +
    '<div class="checkbox d-inline-block">' +
    '<input type="checkbox" class="checkbox-input" id="checkbox' +
    nomorProduk +
    '" />' +
    '<label for="checkbox' +
    nomorProduk +
    '" class="mb-0"></label>' +
    "</div>" +
    "</td>" +
    "<td>" +
    nomorProduk +
    "</td>" +
    '<td class="nama-gambar"><img src="' +
    gambar +
    '" class="img-fluid rounded avatar-50 mr-3" alt="image" /></td>' +
    '<td class="nama-produk">' +
    namaProduk +
    "</td>" +
    "<td>" +
    '<input type="number" class="form-control w-50 jumlah-produk" value="1" min="1" oninput="updateTotalHarga(this)">' +
    "</td>" +
    '<td class="harga-produk" data-harga="' +
    hargaProduk +
    '">Rp. ' +
    parseInt(hargaProduk).toLocaleString() +
    "</td>" +
    "<td>" +
    '<div class="d-flex align-items-center list-action">' +
    '<button class="badge bg-warning mr-2 p-2 btn-delete" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusProduk(this)">Hapus <i class="ri-delete-bin-line mr-0"></i></button>' +
    "</div>" +
    "</td>" +
    "</tr>";

  // Tambahkan elemen produk ke bagian "Kasir"
  document.getElementById("tabel-kasir").innerHTML += produkHTML;

  // Tambahkan 1 ke nomorProduk untuk nomor urut produk selanjutnya
  nomorProduk++;
  hitungTotalKeseluruhan();
}

// Fungsi untuk mengupdate jumlah produk dan total harga di bagian kasir
function updateTotalHarga(input) {
  var row = input.closest("tr");
  var hargaProduk = parseFloat(
    row.querySelector(".harga-produk").getAttribute("data-harga")
  );
  var jumlahProduk = parseInt(input.value);
  var totalHarga = hargaProduk * jumlahProduk;

  // Perbarui harga produk dalam format tanpa desimal jika .00
  row.querySelector(".harga-produk").innerText =
    "Rp. " +
    (Number.isInteger(totalHarga)
      ? totalHarga
      : totalHarga.toFixed(2)
    ).toLocaleString();

  // Perbarui total keseluruhan
  hitungTotalKeseluruhan();
}

// Fungsi untuk menghapus produk dari bagian kasir
function hapusProduk(button) {
  var row = button.closest("tr");
  row.remove();
  hitungTotalKeseluruhan();
}

// Fungsi untuk mengupdate jumlah produk di bagian kasir
function updateJumlahProduk(button) {
  var row = button.closest("tr");
  var input = row.querySelector(".jumlah-produk");
  updateTotalHarga(input);
  hitungTotalKeseluruhan();
}

// Fungsi untuk memperbarui total keseluruhan transaksi
function hitungTotalKeseluruhan() {
  let totalKeseluruhan = 0;
  const rows = document.querySelectorAll("#tabel-kasir tr");

  rows.forEach((row) => {
    const hargaProdukElement = row.querySelector(".harga-produk");
    const jumlahProdukElement = row.querySelector(".jumlah-produk");

    if (hargaProdukElement && jumlahProdukElement) {
      const hargaProduk = parseFloat(
        hargaProdukElement.getAttribute("data-harga")
      );
      const jumlahProduk = parseInt(jumlahProdukElement.value);
      const totalHarga = hargaProduk * jumlahProduk;
      totalKeseluruhan += totalHarga;
    }
  });

  document.getElementById("total-transaksi").value =
    "Rp. " + totalKeseluruhan.toLocaleString();
  hitungKembalian(); // Panggil fungsi hitungKembalian setelah menghitung total keseluruhan
}

// Fungsi untuk menghitung uang kembalian
function hitungKembalian() {
  const totalTransaksi = parseInt(
    document
      .getElementById("total-transaksi")
      .value.replace("Rp. ", "")
      .replace(/,/g, "")
  );

  const uangDibayar = parseInt(document.getElementById("uang-dibayar").value);

  if (!isNaN(totalTransaksi) && !isNaN(uangDibayar)) {
    const uangKembalian = uangDibayar - totalTransaksi;
    document.getElementById("uang-kembalian").value =
      "Rp. " + uangKembalian.toLocaleString();
  } else {
    document.getElementById("uang-kembalian").value = "";
  }
}

// Fungsi untuk menampilkan tanggal transaksi saat ini
function setTanggalTransaksi() {
  const now = new Date();
  const formattedDate =
    now.getFullYear() +
    "-" +
    ("0" + (now.getMonth() + 1)).slice(-2) +
    "-" +
    ("0" + now.getDate()).slice(-2) +
    " " +
    ("0" + now.getHours()).slice(-2) +
    ":" +
    ("0" + now.getMinutes()).slice(-2) +
    ":" +
    ("0" + now.getSeconds()).slice(-2);
  document.getElementById("tanggal-transaksi").value = formattedDate;
}

// Fungsi untuk mereset bagian kasir
function resetKasir() {
  // Hapus semua produk dari tabel kasir
  document.getElementById("tabel-kasir").innerHTML = "";

  // Reset nilai input total semua, bayar, kembali, dan tanggal transaksi
  document.getElementById("total-transaksi").value = "";
  document.getElementById("uang-dibayar").value = "";
  document.getElementById("uang-kembalian").value = "";
  setTanggalTransaksi();
}

// Panggil fungsi setTanggalTransaksi saat halaman dimuat
window.onload = function () {
  setTanggalTransaksi();
  hitungTotalKeseluruhan();
};

// Panggil fungsi hitungTotalKeseluruhan setiap kali produk diupdate
document.addEventListener("input", function (event) {
  if (event.target.classList.contains("jumlah-produk")) {
    hitungTotalKeseluruhan();
  }
});

// Panggil fungsi hitungKembalian setiap kali nominal uang dibayarkan berubah
document.getElementById("uang-dibayar").addEventListener("input", function () {
  hitungKembalian();
});
