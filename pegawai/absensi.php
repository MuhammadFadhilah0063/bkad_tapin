<?php
require_once("../fungsi_indotgl.php");
require_once('../head.php');
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
												<span class="fw-semibold d-block"><?php echo $user_row['nama_lengkap']; ?></span>
												<small class="text-muted"><?php echo $user_row['level']; ?></small>
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
					<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Absensi</h4>

					<div class="row">
						<div class="col-md-6 col-lg-4 col-xl-12 order-0 mb-4">
							<div class="card">
								<div class="card-header pb-3">
									<h4 class="mb-2 d-inline-block">Data Absensi Pegawai</h4>
									<a class="btn btn-primary ms-3" href="absensi_in.php">
										<i class="fas fa-plus me-1"></i>
										Absen
									</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<!-- Table Start -->
										<table class="table table-striped table-hover table-fixed table-flush" id="table1" width="100%">
											<thead>
												<tr>
													<th style="vertical-align: middle;" class="text-center">No.</th>
													<th style="vertical-align: middle;" class="text-center">Tanggal</th>
													<th style="vertical-align: middle;" class="text-center">Absen Masuk</th>
													<th style="vertical-align: middle;" class="text-center">Absen Pulang</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query = mysqli_query(
													$koneksi,
													"SELECT * FROM absen_pegawai 
													INNER JOIN t_pegawai ON absen_pegawai.id_pg=t_pegawai.id_pg 
													WHERE absen_pegawai.id_pg = " . $user_row['id_pg'] . " 
													ORDER BY id DESC"
												);

												$no = 1;
												while ($data = mysqli_fetch_array($query)) { ?>
													<tr>
														<td style="vertical-align: middle;" class="text-center">
															<?= $no++ ?>
														</td>
														<td style="vertical-align: middle;" class="text-center"><?= tgl_indo($data['tanggal']) ?></td>
														<td style="vertical-align: middle;" class="text-center">
															<?php
															if ($data['absen_masuk']) {
																echo $data['absen_masuk'];
															} else {
																echo '-';
															}
															?>
														</td>
														<td style="vertical-align: middle;" class="text-center">
															<?php
															if ($data['absen_pulang']) {
																echo $data['absen_pulang'];
															} else {
																echo '-';
															}
															?>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
										<!-- Table End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content End -->

				<!-- Footer Start -->
				<?php require_once("../footer.php"); ?>
				<!-- Footer End -->