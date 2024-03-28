<?php
// membuat format rupiah
function rupiah($angka)
{
	$hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');

	return $hasil_rupiah;
}
