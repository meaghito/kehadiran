<?php 

//PROTEKSI!ada yang ingin mengakses halaman tanpa login dan Secara paksa di URL
if (!isset($_SESSION['admin']))
{
  echo "<script>alert ('login dulu');</script>";
  echo "<script>location='500.php' ;</script>";
  header('location:500.php');
  exit();
}
?>

<?php
//sesi admin logout di hancurkan
session_destroy();
echo "<script> alert('Anda telah Logout Admin');</script>";
echo "<script> location = 'login.php';</script>";
?>
