<h2>User</h2>
<a href="?f=user&m=insert" class="btn btn-success" role="button">Tambah Data</a>
<?php
    require_once '../dbcontroller.php';
    $db = new DB;
    $jumlahdata = $db->rowCount("SELECT id_user FROM tbl_user");
    $banyak = 5 ;

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }

    $halaman = ceil($jumlahdata / $banyak);
    $sql = "SELECT * FROM tbl_user ORDER BY user ASC LIMIT $mulai, $banyak";

    $row = $db->getAll($sql);
    
    //var_dump($row);

    $no = 1+$mulai;
?>

<table class="table table-striped">
          <thead>
            <tr>
              <th><h4><strong>No.</strong></h4></th>
              <th><h4><strong>User</strong></h4></th>
              <th><h4><strong>Email</strong></h4></th>
              <th><h4><strong>Password</strong></h4></th>
              <th><h4><strong>Level</strong></h4></th>
              <th><h4><strong>Delete</strong></h4></th>
              <th><h4><strong>Update</strong></h4></th>
              
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($row)) {?>
            <?php foreach ($row as $key): ?>
                <tr>
                <?php
                if ($key['aktif']== 1) {
                    $aktif ='AKTIF';
                }else {
                    $aktif ='BANNED';
                }
                ?>
                    <td><?php echo $no++?></td>
                    <td><?php echo $key['user']?></td>
                    <td><?php echo $key['email']?></td>
                    <td><?php echo $key['password']?></td>
                    <td><?php echo $key['level']?></td>
                    <td><a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('Apakah Anda Yakin Akan Menghapus?')" href="?f=user&m=delete&id=<?php echo $key['id_user'];?>" class="btn btn-sm btn-danger" role="button"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a onclick="return confirm('Apakah Anda Yakin Akan Mengubah?')" href="?f=user&m=update&id=<?php echo $key['id_user'];?>" class="btn btn-sm btn-info " role="button"><?php echo $aktif;?></a></td>
                    

                </tr>
            <?php endforeach?>
            <?php }?>
          </tbody>  
      </table>

<?php
    for ($i=1; $i <= $halaman ; $i++) { 
        
        echo '<a href="?f=&m=select&p='.$i.'" class="btn btn-sm btn-primary">'.$i.'</a>';
        echo '&nbsp &nbsp';
    }

?>
