<?php
    $jumlahdata = $db->rowCount("SELECT id_order FROM vorder ");
    $banyak = 5 ;

    $halaman = ceil($jumlahdata / $banyak);
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    
    $sql = "SELECT * FROM vorder ORDER BY status, id_order ASC LIMIT $mulai, $banyak";

    $row = $db->getAll($sql);
    
    //var_dump($row);

    $no = 1+$mulai;
?>

<h2>ORDER PEMBELIAN</h2>
<a href="../admin/cetak_laporan.php" target="_blank" class="btn btn-sm btn-danger"><i class="fas fa-print"></i> Cetak Laporan</a>
<br>
<table class="table table-striped">
    <thead>
        <tr >
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Bayar</th>
            <th>Kembali</th>
            <th>Status</th>

        </tr>
    </thead>

    <tbody>
        <?php if(!empty($row)){?>
        <?php foreach ($row as $key ):?>
            <?php
                if ($key['status'] == 0) {
                    $status = '<td ><a href="?f=order&m=bayar&id='.$key['id_order'].'">Bayar</a></td>';
                }else {
                    $status = '<td>Lunas</td>';
                }    
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $key['pelanggan'];?></td>
            <td><?php echo $key['tgl_order'];?></td>
            <td><?php echo number_format($key['total'], 0,',','.' );?></td>
            <td><?php echo number_format($key['bayar'], 0,',','.' );?></td>
            <td><?php echo number_format($key['kembali'], 0,',','.' );?></td>

            <?php  echo $status; ?>
            
            

        </tr>
        <?php endforeach ?>
        <?php }?>
    </tbody>
</table>

<?php
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=order&m=select&p='.$i.'" class="btn btn-sm btn-primary" > '.$i.'</a>';
        echo '&nbsp &nbsp';
    }

?>