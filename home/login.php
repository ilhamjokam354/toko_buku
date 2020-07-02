<div class="container">
      <center>
      <div class="col-md-5 col-md-offset-3">
          <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 > <span class="glyphicon glyphicon-book"> </span> TOKO BUKU</h2>
            <h3>LOGIN SYSTEM</h3>
          </div>

          <div class="panel-body">
            <div class="alert alert-success"> <span class="glyphicon glyphicon-pushpin"></span>
              MASUKKAN USERNAME DAN PASSWORD DENGAN BENAR!
            </div>
            
            <div class="col-md-11">     
            <form action="" method="post">
              <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="email" class="form-control" name="email" placeholder="Email" autofocus aria-describedby="basic-addon1" required="required">
              </div>
              <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Password </span>
              <input type="password" name="pass" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="required" >
            </div>
            <br>
            </div>
            <div>
              <input type="submit" name="login" class="btn btn-block btn-primary" value="LOGIN">

                
            </div>


            </form>
          

            
          </div>
        </div>
        </center>
      </div>

    </div> <!-- /container -->

<?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['pass']);
        
        $sql = "SELECT * FROM tbl_pelanggan WHERE email = '$email' AND password ='$password' AND aktif = 1";
        $count = $db->rowCount($sql);
        // echo $count;
        
        if ($count == 0) {
            echo '<script>
            alert("Email Belum Terdaftar Atau Password Salah");
            document.location.href="?f=home&m=login";
            </script>';
        }else {
            $sql = "SELECT * FROM tbl_pelanggan WHERE email = '$email' AND password ='$password' AND aktif = 1";
            $row = $db->getItem($sql);

            $_SESSION['pelanggan']=$row['email']; 
            $_SESSION['id_pelanggan']=$row['id_pelanggan'];

            echo '<script>
            alert("Login Berhasil, Selamat Berbelanja (: ");
            document.location.href="index.php";
            </script>';

        }
    }
?> 