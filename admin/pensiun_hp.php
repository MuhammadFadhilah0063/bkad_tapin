<?php
require_once('../koneksi.php');

$id_pensiun = $_REQUEST['id_pensiun'];

mysqli_query($koneksi, "DELETE FROM t_pensiun WHERE id_pensiun='$id_pensiun'") or die(mysqli_error($koneksi));

echo "<script>alert('Berhasil Dihapus!'); window.location = 'pensiun.php';</script>";
