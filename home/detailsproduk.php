<h1>Detail Buku</h1>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_buku WHERE id_buku = $id";

        $row = $db->getAll($sql);
    }

    
$no = 1;
?>

<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="gambar/headphone.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <td>Headphone</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Merk/Type</th>
                                            <td>JBL 12KO</td>
                                        </tr>
                                        <tr>
                                            <th>Stok Produk</th>
                                            <td>150</td>
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
                                                Rp.50.000
                                            </td>
                                            
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        
                        <button type="button" class="btn btn-danger">Beli <i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
      </div>
<table class="table table-striped ">
    <thead>
        <tr >
            
            <th><h4><strong>Buku</strong></th>
            <th><h4><strong>Gambar</strong></th>
            <th><h4><strong>Deskripsi</strong></th>
            <th><h4><strong>Jumlah Halaman</strong></th>
            <th><h4><strong>Tahun Terbit</strong></th>
            <th><h4><strong>Bahasa</strong></th>
            <th><h4><strong>Penerbit</strong></th>
            <th><h4><strong>Berat</strong></th>
        </tr>
    </thead>

    <tbody>
        <?php if(!empty($row)){?>
        <?php foreach ($row as $key ):?>
        <tr>
            
            <td><?php echo $key['buku'];?></td>
            <td> <img style="width:100px; border-radius:20px; " src="upload/<?php echo $key['gambar'];?>" alt=""></td>
            <td><?php echo $key['deskripsi'];?></td>
            <td><?php echo $key['jumlah_halaman'];?></td>
            <td><?php echo $key['tahun_terbit'];?></td>
            <td><?php echo $key['bahasa'];?></td>
            <td><?php echo $key['penerbit'];?></td>
            <td><?php echo $key['berat'];?></td>

        </tr>
        <?php endforeach ?>
        <?php }?>
    </tbody>
</table>