<?php
$ambil = $connection->query("SELECT * FROM kehadiran WHERE id_auto='$_GET[idm]'");
$pecah = $ambil->fetch_assoc();

$connection->query("DELETE FROM kehadiran WHERE id_auto='$_GET[idm]'");

echo "<script>alert('Data telah dihapus');</script>";
echo "<script>location='index.php?halaman=kehadiran-data';</script>";
?>
