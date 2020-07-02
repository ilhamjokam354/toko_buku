<h2>Pelanggan</h2>
<!-- <a href="?f=pelanggan&m=insert" class="btn btn-success" role="button">Tambah Data</a> -->
<?php
    require_once '../dbcontroller.php';
    $db = new DB;
    $jumlahdata = $db->rowCount("SELECT id_pelanggan FROM tbl_pelanggan");
    $banyak = 5 ;

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    $halaman = ceil($jumlahdata / $banyak);
    $sql = "SELECT * FROM tbl_pelanggan ORDER BY pelanggan ASC LIMIT $mulai, $banyak";

    $row = $db->getAll($sql);
    
    //var_dump($row);

    $no = 1+$mulai;
?>

<table class="table table-striped">
          <thead>
            <tr>
              <th><h4><strong>No.</strong></h4></th>
              <th><h4><strong>Pelanggan</strong></h4></th>
              <th><h4><strong>Alamat</strong></h4></th>
              <th><h4><strong>Telepon</strong></h4></th>
              <th><h4><strong>Email</strong></h4></th>
              <th><h4><strong>Aksi</strong></h4></th>
              <th><h4><strong>Status</strong></h4></th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($row)) {?>
            <?php foreach ($row as $key): ?>
                <tr>
                    <?php
                        if ($key['aktif']== 1) {
                            $status = "Aktif";
                        }else {
                            $status = "Tidak Aktif";
                        }
                    ?>
                    <td><?php echo $no++?></td>
                    <td><?php echo $key['pelanggan']?></td>
                    <td><?php echo $key['alamat']?></td>
                    <td><?php echo $key['telp']?></td>
                    <td><?php echo $key['email']?></td>
                    <td><a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus')" href="?f=pelanggan&m=delete&id=<?php echo $key['id_pelanggan']?>" class="btn btn-danger" role="button"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a href="?f=pelanggan&m=update&id=<?php echo $key['id_pelanggan'];?>" class="btn btn-info" role="button"><?php echo $status;?></a></td>

                </tr>
            <?php endforeach?>
            <?php }?>
          </tbody>  
      </table>

<?php
    for ($i=1; $i <= $halaman ; $i++) { 
        
        echo '<a href="?f=pelanggan&m=select&p='.$i.'" class="btn btn-sm btn-primary">'.$i.'</a>';
        echo '&nbsp &nbsp';
    }

?>
