<?php
require_once('../koneksi.php');

$id_pg = $_REQUEST['id_pg'];

// Hapus pegawai
mysqli_query($koneksi, "DELETE FROM t_pegawai WHERE id_pg='$id_pg'") or die(mysqli_error($koneksi));
// Hapus akun pegawai
mysqli_query($koneksi, "DELETE FROM t_admin WHERE id_pg='$id_pg'") or die(mysqli_error($koneksi));

echo "<script>alert('Berhasil Dihapus!'); window.location = 'pegawai.php';</script>";
