<?php
    session_start();
    require_once '../dbcontroller.php';
    $db = new DB;

    if (!isset($_SESSION['user'])) {
      header('location:login.php');
    }

    if (isset($_GET['log'])) {
      session_destroy();
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css_new/admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../bokk.ico" type="image/x-icon">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
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
          <a class="navbar-brand" href="index.php"><i class="fas fa-store"></i> TOKO BUKU </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Level: <?php echo $_SESSION['level'];?></a></li>
            <li><a href="?f=user&m=updateuser&id=<?php echo $_SESSION['iduser']?>"><i class="fa fa-user " data-toggle="tooltip" data-placement="bottom" title="User"> </i> <?php echo $_SESSION['user'];?></a></li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php
            $level = $_SESSION['level'];

            switch ($level) {
              case 'admin':
                  echo '
                    <ul class="nav nav-sidebar">
                      
                      <li ><a href="?f=kategori&m=select" >Kategori Buku</a></li>
                      <!-- <li><a href="?menu=data_penjualan">Data Penjualan</a></li> -->
                    </ul>
                    <ul class="nav nav-sidebar">
                      <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                      <li><a href="?f=buku&m=select">Buku</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                      <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                      <li><a href="?f=order&m=select">Order</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                      <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                      <li><a href="?f=order_detail&m=select">Order Detail</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                      <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                      <li><a href="?f=pelanggan&m=select">Pelanggan</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                      <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                      <li><a href="?f=user&m=select">User</a></li>
                    </ul>
                  ';
                break;
              
              case 'kasir':
                echo '
                  <ul class="nav nav-sidebar">
                  
                    <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                    <li><a href="?f=order&m=select">Order</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <!-- <li class="active"><a href="#">TRANSAKSI BUKU <span class="sr-only">(current)</span></a></li> -->
                    <li><a href="?f=order_detail&m=select">Order Detail</a></li><br>
                ';
                break; 
                
              default:
                  echo 'Tidak Ada Data';
                break;
            }
          
          ?>
          
          <ul class="nav nav-sidebar">
            <li class="active" ><a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="?log=logout" > <span class="glyphicon glyphicon-log-out"> </span> Keluar <span class="sr-only">(current)</span></a></li>
          </ul>
          
           
          
        </div>

        <!-- pengisian konten -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >

            
          
         

            <?php

                $kategori = "SELECT * FROM tbl_kategori";
                $buku1 = "SELECT * FROM tbl_buku";
                $order = "SELECT * FROM vorder";
                $orderdetail = "SELECT * FROM vorderdetail";
                $pelanggan = "SELECT * FROM tbl_pelanggan";
                $user  = "SELECT * FROM tbl_user";

                $count1 = $db->rowCount($kategori);
                $count2 = $db->rowCount($buku1);
                $count3 = $db->rowCount($order);
                $count4 = $db->rowCount($orderdetail);
                $count5 = $db->rowCount($pelanggan);
                $count6 = $db->rowCount($user);
                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f= $_GET['f'];
                    $m=  $_GET['m'];

                    $file = '../'.$f.'/'.$m.'.php';
                    require_once $file;
                }else {
                  echo '
                  <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data Kategori
                      </div>
                      <div class="panel-body">
                        <center><h3> 
                          '.$count1.'
                        </h3></center>
                      </div>
                    </div>
                  </div>
                
      
                
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data Buku
                      </div>
                      <div class="panel-body">
                        <center><h3>'.$count2.'</h3></center>
                      </div>
                    </div>
                  </div>
                
      
                
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data Order
                      </div>
                      <div class="panel-body">
                        <center><h3>'.$count3.'</h3></center>
                      </div>
                    </div>
                  </div>
                
      
                
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data Order Detail
                      </div>
                      <div class="panel-body">
                        <center><h3>'.$count4.'</h3></center>
                      </div>
                    </div>
                  </div>
                
      
                
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data Pelanggan
                      </div>
                      <div class="panel-body">
                        <center><h3>'.$count5.'</h3></center>
                      </div>
                    </div>
                  </div>
                
      
                
                  <div class="col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Data User
                      </div>
                      <div class="panel-body">
                        <center><h3>
                        '.$count6.'
                        </h3></center>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  ';
                }
            
            ?>       
     
       
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../dist/js/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="../bootstrap/js/tooltip.js"></script>
  </body>
</html>
