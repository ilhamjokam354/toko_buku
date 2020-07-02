<h1>Tambah Data</h1>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="username" autocomplete>Username:</label>
            <input type="text" class="form-control" name="username" id="username" required autofocus placeholder="Isikan Username Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="email" autocomplete>Email:</label>
            <input type="email" class="form-control" name="email" id="email" required autofocus placeholder="Isikan Email Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="password" autocomplete>Password:</label>
            <input type="password" class="form-control" name="password" id="password" required autofocus placeholder="Isikan Password Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="password2" >Konfirmasi Password:</label>
            <input type="password" class="form-control" name="password2" id="password2" required placeholder="Isikan Konfirmasi Password Disini"> 
        </div>
        <div class="form-group w-50">
            <label for="level" >Level:</label><br>
            <select name="level" id="">
                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-sm btn-primary" name="simpan">Simpan</button>
        </div>
    </form>
</div>
<?php  
    if (isset($_POST['simpan'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);
        $password2 = hash('sha256', $_POST['password2']);
        $level = $_POST['level'];

        if ($password === $password2) {
            $sql = "INSERT INTO tbl_user VALUES('', '$username','$email',  '$password','$level', 1 )";
            $db->runSql($sql);
            echo '<script>
            alert("Tambah Data Berhasil");
            document.location.href="?f=user&m=select";
            </script>';
        }else {
            echo '<script>
            alert("Cek Kembali Data Anda");
            document.location.href="?f=user&m=insert";
            </script>';
        }

    }

?>