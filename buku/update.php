<?php
    if (isset($_GET)) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_buku  WHERE id_buku =$id";
        $item = $db->getItem($sql);
        
        $idkategori = $item['id_kategori'];
        
        

    }
    $row = $db->getAll("SELECT * FROM tbl_kategori ORDER BY kategori ASC");

?>

<h1>Update Data</h1>

<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <select name="idkategori" id="" value="<?php echo $item['id_kategori'] ?>">
                <?php foreach ($row as $key):?>
                <option <?php if($idkategori == $key['id_kategori']) echo 'selected';?> value="<?php echo $key['id_kategori'];?>"><?php echo $key['kategori']; ?></option>
                <?php endforeach?>
            </select>
        </div>       
    
        <div class="form-group w-50">
            <label for="buku" >Nama Buku :</label>
            <input type="text" class="form-control" name="buku" id="buku" required autofocus value="<?php echo $item['buku'];?>"> 
        </div>
        
            <label for="deskripsi" >Deskripsi Buku :</label>
            <textarea name="deskripsi" id="deskripsi" cols="146" rows="7"><?php echo $item['deskripsi']?></textarea>
        
        <div class="form-group w-50">
            <label for="stok" autocomplete>Stok :</label>
            <input type="number" class="form-control" name="stok" id="stok" required autofocus value="<?php echo $item['stok'];?>">
        </div>            
        <div class="form-group w-50">
            <label for="jumlahhalaman" autocomplete>Jumlah Halaman :</label>
            <input type="number" class="form-control" name="jumlahhalaman" id="jumlahhalaman" required autofocus value="<?php echo $item['jumlah_halaman'];?>">
        </div>
        <div class="form-group w-50">
            <label for="tahunterbit" autocomplete>Tahun Terbit :</label>
            <input type="text" class="form-control" name="tahunterbit" id="tahunterbit" required autofocus value="<?php echo $item['tahun_terbit'];?> ">
        </div>
        <div class="form-group w-50">
            <label for="bahasa" autocomplete>Bahasa Buku :</label>
            <input type="text" class="form-control" name="bahasa" id="bahasa" required autofocus value="<?php echo $item['bahasa'];?> ">
        </div>
        <div class="form-group w-50">
            <label for="penerbit" autocomplete>Penerbit Buku :</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" required autofocus value="<?php echo $item['penerbit'];?>">
        </div>
        <div class="form-group w-50">
            <label for="berat" autocomplete>Berat Buku :</label>
            <input type="text" class="form-control" name="berat" id="berat" required autofocus value="<?php echo $item['berat'];?> ">
        </div>
        <div class="form-group w-50">
            <label for="gambar" >Gambar:</label> <br>
            <input type="file" name="gambar" id="gambar">
        </div>
        <div class="form-group w-50">
            <label for="harga" >Harga:</label>
            <input type="text" class="form-control" number name="harga" id="harga" required  value="<?php echo $item['harga']?>"> 
        </div>
        <div>
            <button type="submit" name="simpan" class="btn btn-sm btn-primary" >Simpan</button> 
        </div>
    </form>
</div>
  
<?php
    if (isset($_POST['simpan'])) {
    $idkategori = $_POST['idkategori'];
    $buku  = $_POST['buku'];
    $deskripsi  = $_POST['deskripsi'];
    $stok  = $_POST['stok'];
    $jumlahhalaman = $_POST['jumlahhalaman'];
    $tahunterbit = $_POST['tahunterbit'];
    $bahasa = $_POST['bahasa'];
    $penerbit = $_POST['penerbit'];
    $berat = $_POST['berat'];
    $gambar = $item['gambar'];
    $harga = $_POST['harga'];

    $temporary = $_FILES['gambar']['tmp_name'];
        if (!empty($temporary)) {
            $gambar = $_FILES['gambar']['name'];
            move_uploaded_file($temporary , '../upload/'.$gambar);
        }

    $sql = "UPDATE tbl_buku  SET id_kategori=$idkategori, buku ='$buku ', deskripsi = '$deskripsi', stok = $stok, jumlah_halaman = $jumlahhalaman, tahun_terbit = '$tahunterbit', bahasa= '$bahasa', penerbit = '$penerbit', berat = '$berat', gambar='$gambar', harga=$harga WHERE id_buku =$id";
    //echo $sql;
    $db->runSql($sql);
    
    echo '
    <script>
    alert("Data Berhasil Diubah");
    document.location.href="?f=buku&m=select";
    </script>
    ';
    
    
    }


?>