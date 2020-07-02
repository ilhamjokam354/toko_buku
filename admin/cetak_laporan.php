<?php
   require_once '../dbcontroller.php';
   $db = new DB;
   $row = $db->getAll('SELECT * FROM vorderdetail WHERE status = 1');
   $no = 1; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Penjualan</title>
</head>
<body>
    <center>
        <h1>Buku Pedia</h1>
        <h3>Cetak Laporan Penjualan</h3>
    </center>
 
    <table border="1" width="100%" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Pelanggan</td>
                <td>Alamat Pelanggan</td>
                <td>Telepon Pelanggan</td>
                <td>Tanggal Order</td>
                <td>Kategori Buku</td>
                <td>Buku</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Total</td>
                <td>Bayar</td>
                <td>Kembali</td>
                <td>Status</td>
            </tr>
            <tbody>
                <?php foreach($row as $key): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $key['pelanggan'] ?></td>
                    <td><?= $key['alamat'] ?></td>
                    <td><?= $key['telp'] ?></td>
                    <td><?= $key['tgl_order'] ?></td>
                    <td><?= $key['kategori'] ?></td>
                    <td><?= $key['buku'] ?></td>
                    <td>Rp. <?= number_format($key['harga'], 0,',','.' ) ?></td>
                    <td><?= $key['jumlah'] ?></td>
                    <td>Rp. <?= number_format($key['total'], 0,',','.' ) ?></td>
                    <td>Rp. <?= number_format($key['bayar'], 0,',','.' ) ?></td>
                    <td>Rp. <?= number_format($key['kembali'], 0,',','.' ) ?></td>
                    <td>Lunas</td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </thead>
    </table>

    <script>
        window.print()
    </script>
</body>
</html>