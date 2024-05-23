// Variabel global untuk menyimpan nomor urut produk
var nomorProduk = 1;

// Fungsi untuk menambahkan produk ke bagian kasir
function tambahKeKasir(button) {
  var namaProduk = button.getAttribute("data-nama");
  var hargaProduk = button.getAttribute("data-harga");
  var gambar = button.getAttribute("data-gambar");

  // Buat elemen HTML untuk produk yang akan ditambahkan ke bagian kasir
  const produkHTML = `
    <tr>
      <td>
        <div class="checkbox d-inline-block">
          <input type="checkbox" class="checkbox-input" id="checkbox${nomorProduk}" />
          <label for="checkbox${nomorProduk}" class="mb-0"></label>
        </div>
      </td>
      <td>${nomorProduk}</td>
      <td class="nama-gambar"><img src="${gambar}" class="img-fluid rounded avatar-50 mr-3" alt="image" /></td>
      <td class="nama-produk">${namaProduk}</td>
      <td><input type="number" class="form-control w-50 jumlah-produk" value="1" min="1" oninput="updateTotalHarga(this)"></td>
      <td class="harga-produk" data-harga="${hargaProduk}">Rp. ${parseInt(
    hargaProduk
  ).toLocaleString()}</td>
      <td>
        <div class="d-flex align-items-center list-action">
          <button class="badge bg-warning mr-2 p-2 btn-delete" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusProduk(this)">Hapus <i class="ri-delete-bin-line mr-0"></i></button>
        </div>
      </td>
    </tr>`;
  // Tambahkan elemen produk ke bagian "Kasir"
  document
    .querySelector("#tabel-kasir tbody")
    .insertAdjacentHTML("beforeend", produkHTML);

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

// Function untuk menangani pembayaran
function prosesPembayaran() {
  const totalTransaksi = document.getElementById("total-transaksi").value;
  const uangDibayar = document.getElementById("uang-dibayar").value;
  const uangKembalian = document.getElementById("uang-kembalian").value;
  const tanggalTransaksi = document.getElementById("tanggal-transaksi").value;

  if (!totalTransaksi || !uangDibayar || !uangKembalian) {
    console.log("Pastikan semua kolom pembayaran terisi");
    return;
  }

  if (
    parseInt(uangDibayar.replace("Rp. ", "").replace(/,/g, "")) <
    parseInt(totalTransaksi.replace("Rp. ", "").replace(/,/g, ""))
  ) {
    console.log("Uang yang dibayarkan tidak cukup.");
    return;
  }

  console.log("Pembayaran berhasil!");

  // Reset form
  // resetKasir();
}

// Function untuk mencetak struk pembayaran
function printStruk() {
  const totalTransaksi = document.getElementById("total-transaksi").value;
  const uangDibayar = document.getElementById("uang-dibayar").value;
  const uangKembalian = document.getElementById("uang-kembalian").value;
  const tanggalTransaksi = document.getElementById("tanggal-transaksi").value;

  let strukHTML = `
    <html>
    <head>
      <style>
        body { font-family: 'Courier New', Courier, monospace; }
        .struk-container { width: 300px; margin: auto; }
        .struk-header { text-align: center; margin-bottom: 20px; }
        .struk-footer { text-align: center; margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; }
        table th, table td { text-align: left; padding: 5px; }
        .total, .uang-dibayar, .uang-kembalian { text-align: right; }
        .line { border-top: 1px dashed #000; margin: 10px 0; }
        .thank-you { margin-top: 20px; }
      </style>
    </head>
    <body>
      <div class="struk-container">
        <div class="struk-header">
          <h2>Innovatinesia</h2>
          <p>Daik, Lingga</p>
        </div>
        <div class="line"></div>
        <p>Tanggal Transaksi: ${tanggalTransaksi}</p>
        <div class="line"></div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Qty</th>
              <th>Harga</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>`;

  const rows = document.querySelectorAll("#tabel-kasir tbody tr");

  rows.forEach((row, index) => {
    const namaProduk = row.querySelector(".nama-produk").innerText;
    const jumlahProduk = row.querySelector(".jumlah-produk").value;
    const hargaProduk = row
      .querySelector(".harga-produk")
      .getAttribute("data-harga");
    const totalHarga = parseInt(hargaProduk) * parseInt(jumlahProduk);

    strukHTML += `
      <tr>
        <td>${index + 1}</td>
        <td>${namaProduk}</td>
        <td>${jumlahProduk}</td>
        <td>Rp. ${parseInt(hargaProduk).toLocaleString()}</td>
        <td>Rp. ${totalHarga.toLocaleString()}</td>
      </tr>`;
  });

  strukHTML += `
          </tbody>
        </table>
        <div class="line"></div>
        <p class="total">Total Transaksi: Rp. ${totalTransaksi}</p>
        <p class="uang-dibayar">Uang Dibayar: Rp. ${parseInt(
          uangDibayar
        ).toLocaleString()}</p>
        <p class="uang-kembalian">Uang Kembalian: Rp. ${uangKembalian}</p>
        <div class="line"></div>
        <div class="struk-footer">
          <p class="thank-you">Terima Kasih telah belanja!</p>
        </div>
      </div>
    </body>
    </html>`;

  const strukWindow = window.open("", "_blank");
  strukWindow.document.write(strukHTML);
  strukWindow.document.close();
  strukWindow.print();
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
