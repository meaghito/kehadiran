<?php 
session_start();
include 'Qoneksi/_connek.php';

if (!isset($_SESSION['admin']))
{
  echo "<script>alert ('Admin...Silahkan Login');</script>";
  echo "<script>location='login.php' ;</script>";
  header('location:login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Administrator</title>

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
      <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>BY ADMIN</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#" title="Pemberitahuan Booking Meja">
              <i class="fa fa-pencil-square-o"></i>
             <!--  <span class="badge bg-theme"> 0 </span> -->
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 1 pending tasks</p>
              </li> 

              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">name</div>
                    <div class="percent">40%</div>
                  </div>
                </a>
              </li>
            </ul>
     
          </li>
          <!-- settings end -->

          <!-- inbox dropdown start PESAN MASUK-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle inbox-notif " href="index.php" title="Pemberitahuan Pesan Masuk">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme count"></span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="subject">
                  <span class="time">Tanggal</span> 
                  <span class="from">Nama</span>
                  </span>
                  <span class="message">
                 Pesan
                  </span>
                </a>
              </li>
              <li>
                <a href="index.php?halaman=kotak">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->

        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php?halaman=logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">ADMIN</h5>

          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li >
            <a href="index.php?halaman=kehadiran-data"><i class="fa fa-pencil-square-o"></i>
               <span>Kehadiran
              </span>
              </a>
          </li>

            <li class="mt">
              <a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i>
               <span>Logout</span>
              </a>
            </li>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
                          <?php
                            if (isset($_GET['halaman'])) 
                            {
                                if ($_GET['halaman']=="kehadiran-data")
                                {
                                    include 'kehadiran.php';
                                }
                                elseif ($_GET['halaman']=="edit-kehadiran") 
                                {
                                  include 'edit.php';
                                }
                                elseif ($_GET['halaman']=="hapus-kehadiran")
                                {
                                  include 'hapus.php';
                                }
                                elseif ($_GET['halaman']=="tambah-kehadiran") 
                                {
                                  include 'tambah.php';
                                }
                                elseif ($_GET['halaman']=="logout")
                                {
                                 include 'logout.php';
                                }

                            }
                            else
                            {
                                include 'dashboard.php';
                            }
                       ?>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Copyright template by <a href="https://templatemag.com/">TemplateMag</a> 2019
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
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
  <!--script for this page-->
      <script src="../../js/bootstrap-datepicker.js"></script>
    <script src="../../js/jquery.timepicker.min.js"></script>
    
    <script src="../../js/jquery.animateNumber.min.js"></script>

    <script src="../../js/main.js"></script>

<!-- script datatables  type client-side -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#sarapan-pagi').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#makan-siang').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#makan-malam').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#booking').DataTable();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#kotak_masuk').DataTable();
  });
</script>
<!-- End DataTable -->

<!-- script notification inbox kotak masuk-->
<script type="text/javascript">

  $('#m_date').datepicker({
    'format': 'm/d/yyyy',
    'autoclose': true
  });

  $('#m_tanggal').datepicker({
    'format': 'm/d/yyyy',
    'autoclose': true
  });

  $('#m_time').timepicker();




</script>
<!-- End notification inbox kotak masuk -->



</body>

</html>
