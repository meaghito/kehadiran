<?php
session_start();
include 'Qoneksi/_connek.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Advance table lib -->
  
  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../lib/swal2/sweetalert2.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  <!-- data tables -->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css">
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" name="user" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
        </div>
      </form>
      <?php
                        // error_reporting(0);
                        if (isset($_POST['submit']))
                        {
                            $user = mysqli_real_escape_string($connection, ($_POST['user']));
                            $pass = mysqli_real_escape_string($connection, md5($_POST['pass']));
                            // $user = $_POST['user'];
                            // $pass = $_POST['pass'];
                            ////////////////////////////////////////////////////////////////////////////////////////////
                            $admin = $connection->query("SELECT * FROM admin WHERE user_name='$user' AND pass='$pass'"); 
                            $ada = $admin->num_rows;
                           ////////////////////////////////////////////////////////////////////////////////////////////
                                if ($ada==1)
                                    {
                                        $_SESSION['admin'] = $admin->fetch_assoc();

                                            echo "<div class='alert alert-info'>Login Sukses</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                    }
                                else
                                    {
                                            echo "<div class='alert alert-danger'>Login Gagal! Pastikan username dan password telah benar</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                                    }
                        }
                        ?>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="../lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../lib/jquery.scrollTo.min.js"></script>
  <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="../lib/common-scripts.js"></script>
  <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
  <script type="text/javascript" src="../lib/swal2/sweetalert2.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
