<?php
require_once("../fungsi_indotgl.php");
require_once('../head.php');

// Cek apakah sudah absen
date_default_timezone_set('Asia/Makassar');
$tgl = date('Y-m-d');
$id_pg = $user_row['id_pg'];

$queryAbsen = mysqli_query(
	$koneksi,
	"SELECT * FROM absen_pegawai 
	WHERE id_pg = $id_pg
	AND tanggal = '$tgl'"
);

$row = mysqli_fetch_array($queryAbsen);
?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
	<div class="layout-container">

		<!-- Aside Start -->
		<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
			<div class="app-brand demo d-grid">
				<a href="index.php" class="app-brand-link">
					<!-- Logo -->
					<span class="app-brand-logo demo">
						<img src="../assets/img/logo/tapin.png" width="35" class="img-fluid">
					</span>
					<!-- Logo Text -->
					<span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">BKAD</span>
				</a>

				<!-- Arrow Left Close -->
				<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
					<i class="bx bx-chevron-left bx-sm align-middle"></i>
				</a>
			</div>

			<div class="menu-inner-shadow"></div>

			<!-- Menu Start -->
			<ul class="menu-inner py-1">
				<!-- Dashboard -->
				<li class="menu-item">
					<a href="index.php" class="menu-link">
						<i class="menu-icon fas fa-tachometer-alt"></i>
						<div data-i18n="Dashboard">Dashboard</div>
					</a>
				</li>

				<!-- Transaksi Start -->
				<li class="menu-header small text-uppercase">
					<span class="menu-header-text">Transaksi</span>
				</li>
				<li class="menu-item active open">
					<a href="javascript:void(0);" class="menu-link menu-toggle">
						<i class="menu-icon fas fa-exchange-alt"></i>
						<div data-i18n="Transaksi">Transaksi</div>
					</a>
					<ul class="menu-sub">
						<li class="menu-item active">
							<a href="absensi.php" class="menu-link">
								<div data-i18n="Absensi">Absensi</div>
							</a>
						</li>
						<li class="menu-item">
							<a href="cuti.php" class="menu-link">
								<div data-i18n="cuti">Cuti</div>
							</a>
						</li>
					</ul>
				</li>
				<!-- Transaksi End -->
			</ul>
		</aside>
		<!-- Aside End -->

		<!-- Layout Container Start -->
		<div class="layout-page">
			<!-- Navbar Start -->
			<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
				<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
					<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
						<i class="bx bx-menu bx-sm"></i>
					</a>
				</div>

				<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
					<ul class="navbar-nav flex-row align-items-center ms-auto">
						<!-- User Start -->
						<li class="nav-item navbar-dropdown dropdown-user dropdown">
							<!-- Gambar User -->
							<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
								<div class="avatar avatar-online">
									<?php
									if ($user_row['file_foto'] != null) {
									?>
										<img src="../assets/img/pegawai/<?= $user_row['file_foto'] ?>" alt class="w-px-40 h-auto rounded-circle" />
									<?php
									} else {
									?>
										<img src="../assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
									<?php
									}
									?>
								</div>
							</a>

							<!-- Dropdown User Start -->
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="#">
										<div class="d-flex">
											<div class="flex-shrink-0 me-3">
												<div class="avatar avatar-online">
													<?php
													if ($user_row['file_foto'] != null) {
													?>
														<img src="../assets/img/pegawai/<?= $user_row['file_foto'] ?>" alt class="w-px-40 h-auto rounded-circle" />
													<?php
													} else {
													?>
														<img src="../assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
													<?php
													}
													?>
												</div>
											</div>
											<div class="flex-grow-1">
												<span class="fw-semibold d-block"><?php echo $user_row['nama_lengkap'] ?></span>
												<small class="text-muted"><?php echo $user_row['level'] ?></small>
											</div>
										</div>
									</a>
								</li>
								<li>
									<div class="dropdown-divider"></div>
								</li>
								<li>
									<a class="dropdown-item" href="../logout.php">
										<i class="bx bx-power-off me-3"></i>
										<span class="align-middle">Keluar</span>
									</a>
								</li>
							</ul>
							<!-- Dropdown User End -->
						</li>
						<!--/ User -->
					</ul>
				</div>
			</nav>
			<!-- Navbar End -->

			<!-- Content Wrapper Start -->
			<div class="content-wrapper">
				<!-- Content Start -->
				<div class="container-xxl flex-grow-1 container-p-y">
					<!-- BreadCrumb -->
					<h4 class="fw-bold py-3 mb-4">
						<span class="text-muted fw-light">Data Master /</span>
						<span class="text-muted fw-light">Absensi /</span>
						<span>Absen</span>
					</h4>

					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-pills flex-column flex-md-row mb-3">
								<li class="nav-item">
									<a class="nav-link active" href="absensi.php">
										<i class="fas fa-arrow-left me-1"></i>
										Kembali
									</a>
								</li>
							</ul>
							<div class="card mb-4">
								<h5 class="card-header">
									<?php
									// Atur zona waktu ke "Asia/Makassar" (Waktu Indonesia Tengah)
									date_default_timezone_set('Asia/Makassar');

									// Mendapatkan jam saat ini (format 24 jam)
									$jam_sekarang = date('H');

									// Mengubah jam ke dalam format 01-24 menjadi 1-24 (tanpa angka 0 di depan)
									$jam_sekarang = ltrim($jam_sekarang, '0');

									// Cek apakah jam saat ini merupakan absen masuk atau absen pulang
									if ($jam_sekarang >= 7 && $jam_sekarang <= 8) {
										echo 'Absen Masuk';
									} else if ($jam_sekarang >= 16 && $jam_sekarang <= 17) {
										echo 'Absen Pulang';
									} else {
										echo 'Absen';
									}
									?>
								</h5>

								<!-- Form Start -->
								<form action="" method="POST">
									<div class="card-body">
										<div class="row">
											<div class="mb-3 col-md-6">
												<label for="tgl" class="form-label">Tanggal</label>
												<input class="form-control" type="text" id="tgl" name="tgl" readonly value="<?= tgl_indo(date('Y-m-d')) ?>" />
											</div>
											<div class="mb-3 col-md-6">
												<label for="nama" class="form-label">Nama</label>
												<input class="form-control" type="text" name="nama" id="nama" readonly value="<?php echo $user_row['nama_lengkap']; ?>" />
											</div>
											<input type="hidden" name="id_pg" value="<?= $user_row['id_pg']; ?>">
											<div class="mt-2">
												<!-- Cek apakah jam saat ini merupakan absen masuk atau absen pulang -->
												<?php
												// Jam Absen Masuk //
												if ($jam_sekarang >= 7 && $jam_sekarang <= 8) {
													if (isset($row)) {
														if ($row['absen_masuk'] == '') {
															echo '<button type="submit" name="absenMasuk" class="btn btn-primary me-2">Absen Masuk</button>';
														} else {
															echo '<button type="submit" name="absenMasuk" disabled class="btn btn-primary me-2">Sudah Absen Masuk</button>';
														}
													} else {
														echo '<button type="submit" name="absenMasuk" class="btn btn-primary me-2">Absen Masuk</button>';
													}
												}
												// Jam Absen Pulang //
												else if ($jam_sekarang >= 16 && $jam_sekarang <= 17) {
													if (isset($row)) {
														if ($row['absen_pulang'] == '') {
															echo '<button type="submit" name="absenPulang" class="btn btn-primary me-2">Absen Pulang</button>';
														} else {
															echo '<button type="submit" name="absenPulang" disabled class="btn btn-primary me-2">Sudah Absen Pulang</button>';
														}
													} else {
														echo '<button type="submit" name="absenPulang" class="btn btn-primary me-2">Absen Pulang</button>';
													}
												} else {
													echo '<button type="button" disabled class="btn btn-primary me-2">Belum Waktu Absen</button>';
												}
												?>
											</div>
										</div>
								</form>
							</div>
							<!-- Form End -->
						</div>
					</div>
				</div>
			</div>
			<!-- Content End -->

			<!-- Footer Start -->
			<?php require_once("../footer.php"); ?>
			<!-- Footer End -->


			<!-- Proses Input Data Start -->
			<?php
			// Absen Masuk
			if (isset($_POST['absenMasuk'])) {

				$tgl = date('Y-m-d');
				$masuk = date('H:i:s');
				$id_pg = $_REQUEST['id_pg'];

				$tambah = mysqli_query(
					$koneksi,
					"INSERT INTO absen_pegawai ( id_pg, tanggal, absen_masuk ) VALUES(
          '$id_pg',
          '$tgl',
          '$masuk')"
				);

				if ($tambah) {
					echo "<script>
									alert('Berhasil Absen Masuk!');
									window.location = 'absensi.php';
								</script>";
				} else {
					echo "<script>
									alert('Gagal!');
									window.location = 'absensi_in.php';
								</script>";
				}
			}
			// Absen Pulang
			else if (isset($_POST['absenPulang'])) {

				$tgl = date('Y-m-d');
				$jamAbsen = date('H:i:s');
				$id_pg = $_REQUEST['id_pg'];

				$query = mysqli_query(
					$koneksi,
					"SELECT id FROM absen_pegawai 
					WHERE id_pg = " . $id_pg . " 
					AND tanggal = '" . $tgl . "'"
				);

				$rowData = mysqli_fetch_assoc($query);

				// Cek apakah sudah absen masuk
				if (isset($rowData)) {
					$idAbsensi = $rowData['id'];

					$ubah = mysqli_query(
						$koneksi,
						"UPDATE absen_pegawai SET 
						absen_pulang = '$jamAbsen' 
						WHERE id = '$idAbsensi'"
					);

					if ($ubah) {
						echo "<script>
										alert('Berhasil Absen Pulang!');
										window.location = 'absensi.php';
									</script>";
					} else {
						echo "<script>
										alert('Gagal!');
										window.location = 'absensi_in.php';
									</script>";
					}
				}

				// Jika belum absen pulang
				else {
					$tambah = mysqli_query(
						$koneksi,
						"INSERT INTO absen_pegawai (id_pg, tanggal, absen_pulang) VALUES(
						'$id_pg',
						'$tgl',
						'$jamAbsen')"
					);

					if ($tambah) {
						echo "<script>
										alert('Berhasil Absen Pulang!');
										window.location = 'absensi.php';
									</script>";
					} else {
						echo "<script>
										alert('Gagal!');
										window.location = 'absensi_in.php';
									</script>";
					}
				}
			}
			?>
			<!-- Proses Input Data End -->