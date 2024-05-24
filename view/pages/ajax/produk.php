<?php
require '../../../controller/functions.php';

$keyword = $_GET["keyword"];
$querySelect = "SELECT * FROM produk 
                  WHERE kategori LIKE '%$keyword%' 
                  OR nama LIKE '%$keyword%' 
                  OR merk LIKE '%$keyword%'
                ";
$produk = query($querySelect);
?>

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
          <img src="img/<?= $row["gambar"] ?>" class="img-fluid rounded avatar-50 mr-3" alt="image" />
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