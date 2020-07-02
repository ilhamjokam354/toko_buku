<?php
    session_start();
    require_once '../dbcontroller.php';
    $db = new DB;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Bootstrap-3-Offline-Docs-master/favicon.ico">

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css_new/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <center>
      <div class="col-md-5 col-md-offset-3">
          <div class="panel panel-primary">
          <div class="panel-heading">
            <h2 > <span class="glyphicon glyphicon-book"> </span> ADMIN</h2>
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


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = hash('sha256', $_POST['pass']);

        $sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$pass'";
        $count = $db->rowCount($sql);
        if ($count == 0) {
            echo '<script>
            alert("Email Atau Password Salah");
            document.location.href="login.php";
            </script>';
        }else {
            $sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$pass'";
            $row = $db->getItem($sql);

            $_SESSION['user']=$row['email'];
            $_SESSION['level']=$row['level'];
            $_SESSION['iduser']=$row['id_user'];
            
            echo '<script>
            alert("Login Berhasil!");
            document.location.href="index.php";
            </script>';

        }

    }

?>