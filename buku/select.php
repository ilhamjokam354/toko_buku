<h2>Buku</h2>

    <div><a href="?f=buku&m=insert" class="btn btn-sm btn-success" role="button">Tambah Data </a><br>
    </div>

    <?php
        if (isset($_POST['opsi'])) {

            $opsi = $_POST['opsi'];
            $where = "WHERE id_kategori = $opsi ";
            //echo $where;
        }else {
            $opsi = 0;
            $where = "";
        }
    ?>

    <div class="mt-4 mb-4">
        <?php 
            $row = $db->getAll("SELECT * FROM tbl_kategori ORDER BY kategori ASC");
        ?>
        <br>
        <form action="" method="post">
            <select name="opsi" onchange="this.form.submit()">
            <?php foreach ($row as $key): ?>
                <option <?php if($key['id_kategori']==$opsi ) echo 'selected';?> value="<?php echo $key['id_kategori'];?>" ><?php echo $key['kategori'];?></option>
            <?php endforeach ?>    
                <!-- <option value="">Kategori 2</option>
                <option value="">Kategori 3</option> -->
            </select>
        </form>
    </div>
<?php
    require_once '../dbcontroller.php';
    $db = new DB;
    $jumlahdata = $db->rowCount("SELECT id_buku FROM tbl_buku $where");
    $banyak = 3 ;

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    $halaman = ceil($jumlahdata / $banyak);
    $sql = "SELECT * FROM tbl_buku $where ORDER BY buku ASC LIMIT $mulai, $banyak";

    $row = $db->getAll($sql);
    
    //var_dump($row);

    $no = 1+$mulai; 
?>

<table class="table table-striped ">
    <thead>
        <tr >
            <th><h4><strong>No</strong></h4></th>
            <th><h4><strong>Buku</strong></th>
            <th><h4><strong>Stok</strong></th>
            <th><h4><strong>Harga</strong></th>
            <th><h4><strong>Gambar</strong></th>
            <th><h4><strong>Aksi</strong></th>
            
        </tr>
    </thead>

    <tbody>
        <?php if(!empty($row)){?>
        <?php foreach ($row as $key ):?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $key['buku'];?></td>
            <td><?php echo $key['stok'];?></td>
            <td><?php echo $key['harga'];?></td>
            <td> <img style="width:100px; " src="../upload/<?php echo $key['gambar'];?>" alt=""></td>
            <td><a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('Apakah Anda Yakin Akan Menghapus!')" href="?f=buku&m=delete&id=<?php echo $key['id_buku'];?> " class="btn btn-sm btn-danger" role="button"> <i class="fas fa-trash-alt" ></i></a> <a data-toggle="tooltip" data-placement="bottom" title="Ubah" onclick="return confirm('Apakah Anda Yakin Akan Mengubah!')" href="?f=buku&m=update&id=<?php echo $key['id_buku'];?>" class="btn btn-sm btn-warning" role="button"> <i class="fas fa-pen" ></i></a></td>
            

        </tr>
        <?php endforeach ?>
        <?php }?>
    </tbody>
</table>

<?php
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=buku&m=select&p='.$i.'" class="btn btn-primary " role="button">'.$i.'</a>';
        echo '&nbsp &nbsp';
    }

?>
<script src="../bootstrap/js/tooltip.js"></script>