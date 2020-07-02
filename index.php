<?php
    session_start();
    require_once 'dbcontroller.php';
    $db = new DB;
    
    $sql = "SELECT * FROM tbl_kategori ORDER BY kategori";
    $all = $db->getAll($sql);

    if (isset($_GET['log'])) {
        session_destroy();
        header('location:index.php');
    }

    function cart(){
        global $db;
        $cart = 0;
        //var_dump($_SESSION);    
        foreach ($_SESSION as $key => $value) {
            if ($key<>'pelanggan' && $key<>'id_pelanggan' && $key<>'user' && $key<>'level' && $key<>'id_user'){
                $id = substr($key,1);
                $sql = "SELECT * FROM tbl_buku WHERE id_buku= $id";
                // echo $sql;
                // echo '<br>';
                $row = $db->getAll($sql);
                foreach ($row as $key) {
                   $cart++;
                }
                // echo '<pre>';
                // print_r($row);
                // echo '</pre>';
            }
        }
        return $cart;
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Toko Buku | SMK</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css_new/admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="bokk.ico" type="image/x-icon">
    
    <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    
  </head>

  <body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fas fa-store" ></i> BukuPedia </a>
        </div>
        <!-- pengisian profil -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php 
                    if (isset($_SESSION['pelanggan'])) {
                        echo '<li><a><i class="fas fa-user" data-toggle="tooltip" data-placement="bottom" title="Pelanggan"></i> : '.$_SESSION['pelanggan'].' </a></li>
                            <li><a href="?f=home&m=beli"><i class="fas fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Keranjang Pembelian"></i> '.cart().'</a></li>
                            <li><a href="?f=home&m=histori"><i class="fas fa-shopping-basket" data-toggle="tooltip" data-placement="bottom" title="Histori Pembelian"></i></a></li>
                        ';
                    }else {
                        echo'
                            <li><a href="?f=home&m=login" ><i class="fas fa-sign-in-alt"></i> Login  </a></li>
                    
                            <li><a href="?f=home&m=daftar" ><i class="fas fa-sign-out-alt"></i> Daftar </a></li>        
                        ';
                    }
                ?>    
            
          </ul>
        </div>
      </div>
    </nav>
        
    <!-- pengisian kategori -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
            <li class="active" ><a  > Kategori Buku <i class="fas fa-book"></i></a></li>
            </ul>  
          <?php if (!empty($all)) { ?>
        
          <ul class="nav nav-sidebar">
          <?php foreach ($all as $key ): ?>
             <li id="active"><a href="?f=home&m=produk&id=<?php echo $key['id_kategori']?>"><?php echo $key['kategori']?></a></li>
          <?php endforeach?>
          </ul>
          <?php  }?>
          </ul>
            
          <?php if(isset($_SESSION['pelanggan'])){ ?>
          <ul class='nav nav-sidebar'>
              <li class='active' ><a onclick='return confirm("Apakah Anda Yakin Ingin Keluar?")' href='?log=logout' > <span class='glyphicon glyphicon-log-out'> </span> Keluar <span class='sr-only'>(current)</span></a></li>
          </ul>
          <?php } ?>
         </div>

        <!-- pengisian konten -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
            <?php
                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f= $_GET['f'];
                    $m=  $_GET['m'];

                    $file = $f.'/'.$m.'.php';
                    require_once $file;
                }else {
                    require_once 'home/produk.php';
                }
            
            ?>       
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="bootstrap/js/tooltip.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  </body>
</html>