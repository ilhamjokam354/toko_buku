<h2>Buku</h2>
<link rel="stylesheet" href="home/style.css">

  <?php
    
    if (isset($_GET['idp'])) {
        $id_produk = $_GET['idp'];
    }

    $page = (isset($_GET['p']))? $_GET['p'] : 1;
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $where = "WHERE id_kategori = $id";
        $id = '&id='.$id;
    }else {
        $where = "";
        $id = "";
    }
  ?> 
    <div class="mt-4 mb-4">
        <?php 
            $row = $db->getAll("SELECT * FROM tbl_kategori ORDER BY kategori ASC");
        ?>

        
    </div>
<?php
    $jumlahdata = $db->rowCount("SELECT id_buku FROM tbl_buku $where ");
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

    <div class="container" >
        <?php if(!empty($row)){?>
        <?php foreach ($row as $key ):?>
    
    
        <div class="card" >
            <div class="imgbox">
                <img width="400px" height="200px" src="upload/<?php echo $key['gambar']?>" alt="" srcset="">
            </div>
            <div class="contentbox">
                <h2><?php echo $key['buku']?></h2>
                
                <p>Harga : Rp. <?php echo number_format($key['harga'], 0,',','.' )?></p>
                <p>Stok : <?php echo $key['stok']?></p>
                <a href="?f=home&m=beli&id=<?php echo $key['id_buku'];?> "><span>Beli <i class="fas fa-shopping-cart"></i></span></a>
                <a data-toggle="modal" data-target="#mymodal<?php echo $key['id_buku'];?>" href=""><span>Detail Buku <i class="fas fa-info-circle"></i></span></a>
            </div>
        </div>
    
        

        <?php endforeach ?>
        <?php }?>
    </div>

    <!-- modal -->
    <?php 
        $all = $db->getAll("SELECT * FROM tbl_buku");
    
    ?>
    <?php foreach ($all as $k ):?>
    <div class="modal fade" id="mymodal<?php echo $k['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="Kembali"><span aria-hidden="true"><i class="fas fa-times "></i></span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Detail Buku</h3>
                        
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img style="width:300px; height:400px; border-radius:20px;"  src="upload/<?php echo $k['gambar']?>" alt="">
                                </div>
                                <div class="col-md-8">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Nama Buku</th>
                                            <td><?php echo $k['buku']?></td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi Buku</th>
                                            <td><?php echo $k['deskripsi']?></td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Halaman</th>
                                            <td><?php echo $k['jumlah_halaman']?></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Terbit</th>
                                            <td><?php echo $k['tahun_terbit']?></td>
                                        </tr>
                                        <tr>
                                            <th>Bahasa</th>
                                            <td><?php echo $k['bahasa']?></td>
                                        </tr>
                                        <tr>
                                            <th>Penerbit</th>
                                            <td><?php echo $k['penerbit']?></td>
                                        </tr>
                                        <tr>
                                            <th>Berat</th>
                                            <td><?php echo $k['berat']?></td>
                                        </tr>
                                        <tr>
                                            <th>Rating</th>
                                            <td style="color: orange;">
                                                <i class="fas fa-star "></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>Harga</th>
                                            <td>
                                                Rp. <?php echo number_format($k['harga'], 0,',','.' )?>
                                            </td>
                                            
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        
                        <a href="?f=home&m=beli&id=<?php echo $key['id_buku'];?> " class="btn btn-danger"><span>Beli <i class="fas fa-shopping-cart"></i></span></a>
                        </div>

            </div>
        </div>
    </div>
    <?php endforeach?>

    <!-- pagination -->
    <div style="clear:both;" class="text-center"> 

        <nav aria-label="...">
            <ul class="pagination pagination-lg">
        <?php
            
            
            for ($i=1; $i <= $halaman ; $i++){   
            $link_active = ($page == $i)?  "active":"" ; //ilmu baru?>         
            <li class="<?php echo $link_active; ?>" > <a class="page-link" href="?f=home&m=produk&p=<?php echo $i.$id;?>"><?php echo $i;?></a></li>
        
            <?php }?>

            </ul>
        </nav>
    </div>
    
   
    
      
    
  