<?php
    $row = $db->getAll("SELECT * FROM tbl_kategori ORDER BY kategori ASC ");

?>
<h1>Tambah Data</h1>
<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <select name="idkategori" id="">
                <?php foreach ($row as $key):?>
                <option value="<?php echo $key['id_kategori'];?>"><?php echo $key['kategori']; ?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group w-50">
            <label for="buku" autocomplete>Buku:</label>
            <input type="text" class="form-control" name="buku" id="buku" required autofocus placeholder="Isikan Buku Disini"> 
        </div>
        <label for="deskripsi" >Deskripsi Buku :</label>
        <textarea name="deskripsi" id="deskripsi" cols="146" rows="7"></textarea>
        <div class="form-group w-50">
            <label for="stok" autocomplete>Stok :</label>
            <input type="number" class="form-control" name="stok" id="stok" required autofocus placeholder="Isikan Stok Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="jumlahhalaman" autocomplete>Jumlah Halaman :</label>
            <input type="number" class="form-control" name="jumlahhalaman" id="jumlahhalaman" required autofocus placeholder="Isikan Jumlah Halaman Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="tahunterbit" autocomplete>Tahun Terbit :</label>
            <input type="text" class="form-control" name="tahunterbit" id="tahunterbit" required autofocus placeholder="Isikan Tahun Terbit Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="bahasa" autocomplete>Bahasa Buku :</label>
            <input type="text" class="form-control" name="bahasa" id="bahasa" required autofocus placeholder="Isikan Bahasa Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="penerbit" autocomplete>Penerbit Buku :</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" required autofocus placeholder="Isikan Penerbit Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="berat" autocomplete>Berat Buku :</label>
            <input type="text" class="form-control" name="berat" id="berat" required autofocus placeholder="Isikan Berat Buku Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="gambar" autocomplete>Gambar:</label>
            <input type="file"  name="gambar" id="gambar" required> 
        </div>
        <div class="form-group w-50">
            <label for="harga" autocomplete>Harga:</label>
            <input type="number" class="form-control" name="harga" id="harga" required autofocus placeholder="Isikan Harga Disini"> 
        </div>
        <div>
            <button type="submit" class="btn btn-sm btn-primary" name="simpan">Simpan</button>
        </div>
    </form>
</div>

<?php
    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $buku = $_POST['buku'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $jumlahhalaman = $_POST['jumlahhalaman'];
        $tahunterbit = $_POST['tahunterbit'];
        $bahasa = $_POST['bahasa'];
        $penerbit = $_POST['penerbit'];
        $berat = $_POST['berat'];
        $gambar = $_FILES['gambar']['name'];
        $temporary = $_FILES['gambar']['tmp_name'];
        $harga = $_POST['harga'];
        
        if (empty($gambar)) {
            echo '<script>
            alert("Cek Kembali Data Anda");
            document.location.href="?f=buku&m=insert";
            </script>';
        }else {
            $sql = "INSERT INTO tbl_buku VALUES ('', $idkategori, '$buku', '$deskripsi', $stok,  $jumlahhalaman, '$tahunterbit', '$bahasa', '$penerbit', '$berat', '$gambar', $harga)";
            move_uploaded_file($temporary, '../upload/'.$gambar);
            $db->runSql($sql);
            echo '<script>
            alert("Data Berhasil Ditambahkan");
            document.location.href="?f=buku&m=select";
            </script>';
            
        }
        
    }

?>