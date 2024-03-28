<?php
require_once('../koneksi.php');

$id_kenaikan = $_REQUEST['id_kenaikan'];

mysqli_query($koneksi, "DELETE FROM kenaikan_jabatan WHERE id_kenaikan='$id_kenaikan'") or die(mysqli_error($koneksi));

echo "<script>alert('Berhasil Dihapus!'); window.location = 'kenaikan.php';</script>";
