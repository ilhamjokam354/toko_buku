<div class="container">
      <center>
      <div class="col-md-5 col-md-offset-3">
          <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 > <span class="glyphicon glyphicon-book"> </span> TOKO BUKU</h2>
            <h3>Registrasi</h3>
          </div>

          <div class="panel-body">
            <div class="alert alert-success"> <span class="glyphicon glyphicon-pushpin"></span>
              MASUKKAN DATA DENGAN BENAR DAN LENGKAP!
            </div>
            
            <div class="col-md-11">     
            <form action="" method="post">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Pelanggan</span>
              <input type="text" class="form-control" name="pelanggan" placeholder="Pelanggan" autofocus aria-describedby="basic-addon1" required="required">
              </div>
              <br>
              <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Alamat</span>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat" autofocus aria-describedby="basic-addon1" required="required">
              </div>
              <br>
              <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">No Telepon</span>
              <input type="text" class="form-control" name="telepon" placeholder="No Telepon" autofocus aria-describedby="basic-addon1" required="required">
              </div>
              <br>
              <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="email" class="form-control" name="email" placeholder="Email" autofocus aria-describedby="basic-addon1" required="required">
              </div>
              <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Password </span>
              <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="required" >
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Konfirmasi Password </span>
              <input type="password" name="password2" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="required" >
            </div>
            <br>
            </div>
            <div>
              <input type="submit" name="login" class="btn btn-block btn-primary" value="Daftar">

                
            </div>


            </form>
          

            
          </div>
        </div>
        </center>
      </div>

    </div> <!-- /container -->

<?php
    if (isset($_POST['login'])) {
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon =  $_POST['telepon'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $password2 = hash('sha256', $_POST['password2']);
    
    
        if ($password === $password2) {
            $sql = "INSERT INTO tbl_pelanggan VALUES('', '$pelanggan', '$alamat', '$telepon', '$email', '$password', 1 )";
            //echo $sql;
            $db->runSql($sql);
            
            echo "<script>
            alert('Registrasi Berhasil Silahkan Login!');
            document.location.href='?f=home&m=login';
            </script>";
        }else {
            echo '<script>
            alert("Username Atau Password Salah");
            document.location.href="?f=home&m=daftar";
            </script>';
        }
    

    
    }

?>