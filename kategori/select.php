<h2>Kategori</h2>
<a href="?f=kategori&m=insert" class="btn btn-success" role="button">Tambah Data</a>
<?php
    require_once '../dbcontroller.php';
    $db = new DB;
    $jumlahdata = $db->rowCount("SELECT id_kategori FROM tbl_kategori");
    $banyak = 5 ;

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    $halaman = ceil($jumlahdata / $banyak);
    $sql = "SELECT * FROM tbl_kategori ORDER BY kategori ASC LIMIT $mulai, $banyak";

    $row = $db->getAll($sql);
    
    //var_dump($row);

    $no = 1+$mulai;
?>

<table class="table table-striped">
          <thead>
            <tr>
              <th><h4><strong>No.</strong></h4></th>
              <th><h4><strong>Kategori</strong></h4></th>
              <th><h4><strong>Aksi</strong></h4></th>
              
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($row)) {?>
            <?php foreach ($row as $key): ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $key['kategori']?></td>
                    <td><a  onclick="return confirm('Apakah Anda Yakin Akan Menghapus!')" href="?f=kategori&m=delete&id=<?php echo $key['id_kategori'];?> " class="btn btn-sm btn-danger" role="button" data-toggle="tooltip" data-placement="bottom" title="Hapus"> <i class="fas fa-trash-alt"></i></a> | <a data-toggle="tooltip" data-placement="bottom" title="Ubah" onclick="return confirm('Apakah Anda Yakin Akan Mengubah!')" href="?f=kategori&m=update&id=<?php echo $key['id_kategori'];?>" class="btn btn-sm btn-warning" role="button"> <i class="fas fa-pen"></i></a></td>
                    

                </tr>
            <?php endforeach?>
            <?php }?>
          </tbody>  
      </table>

<?php
    for ($i=1; $i <= $halaman ; $i++) { 
        
        echo '<a href="?f=kategori&m=select&p='.$i.'" class="btn btn-sm btn-primary">'.$i.'</a>';
        echo '&nbsp &nbsp';
    }

?>
<script src="../bootstrap/js/tooltip.js"></script>
