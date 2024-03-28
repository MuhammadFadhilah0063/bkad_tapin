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

				<!-- Data Master Start -->
				<li class="menu-header small text-uppercase">
					<span class="menu-header-text">Data Master</span>
				</li>
				<li class="menu-item">
					<a href="javascript:void(0);" class="menu-link menu-toggle">
						<i class="menu-icon fas fa-server"></i>
						<div data-i18n="Data Master">Data Master</div>
					</a>
					<ul class="menu-sub">
						<li class="menu-item">
							<a href="jabatan.php" class="menu-link">
								<div data-i18n="Jabatan">Jabatan</div>
							</a>
						</li>
						<li class="menu-item">
							<a href="pegawai.php" class="menu-link">
								<div data-i18n="Pegawai">Pegawai</div>
							</a>
						</li>
					</ul>
				</li>
				<!-- Data Master End -->

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
						<li class="menu-item">
							<a href="absensi.php" class="menu-link">
								<div data-i18n="Absensi">Rekap Absensi</div>
							</a>
						</li>
						<li class="menu-item">
							<a href="gaji.php" class="menu-link">
								<div data-i18n="Gaji">Gaji</div>
							</a>
						</li>
						<li class="menu-item">
							<a href="kegiatan.php" class="menu-link">
								<div data-i18n="Disposisi Surat Agenda">Disposisi Surat Agenda/kegiatan</div>
							</a>
						</li>
						<li class="menu-item active">
							<a href="cuti.php" class="menu-link">
								<div data-i18n="Disposisi Surat Cuti">Disposisi Surat Pengajuan Cuti</div>
							</a>
						</li>
						<li class="menu-item">
							<a href="mutasi.php" class="menu-link">
								<div data-i18n="Disposisi Surat Mutasi">Disposisi Surat Mutasi Pegawai</div>
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
									<img src="../assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
								</div>
							</a>

							<!-- Dropdown User Start -->
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="#">
										<div class="d-flex">
											<div class="flex-shrink-0 me-3">
												<div class="avatar avatar-online">
													<img src="../assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
												</div>
											</div>
											<div class="flex-grow-1">
												<span class="fw-semibold d-block"><?php echo $user_row['username']; ?></span>
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
					<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Transaksi /</span> Disposisi Surat Pengajuan Cuti</h4>

					<div class="row">
						<div class="col-md-6 col-lg-4 col-xl-12 order-0 mb-4">
							<div class="card">
								<div class="card-header pb-3">
									<h4 class="mb-2 d-inline-block">Data Permohonan Surat Cuti Pegawai</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<!-- Table Start -->
										<table class="table table-striped table-hover table-fixed table-flush" id="table1" width="100%">
											<thead>
												<tr>
													<th style="vertical-align: middle;" class="text-center">No.</th>
													<th style="vertical-align: middle;" class="text-center">Nama Pegawai</th>
													<th style="vertical-align: middle;" class="text-center">Keterangan Cuti</th>
													<th style="vertical-align: middle;" class="text-center">Keterangan Surat</th>
													<th style="vertical-align: middle;" class="text-center">Status Surat</th>
													<th style="vertical-align: middle;" class="text-center">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query = mysqli_query(
													$koneksi,
													"SELECT * FROM cuti 
													INNER JOIN t_pegawai ON cuti.id_pg=t_pegawai.id_pg 
													INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan
													ORDER BY id_cuti DESC"
												);

												$no = 1;
												while ($data = mysqli_fetch_array($query)) { ?>
													<tr>
														<td style="vertical-align: middle;" class="text-center">
															<?= $no++ ?>
														</td>
														<td style="vertical-align: middle;" class="text-center text-nowrap"><?= $data['nama_lengkap'] ?></td>
														<td style="vertical-align: middle;" class="text-center"><?= $data['keterangan']; ?></td>
														<td style="vertical-align: middle;" class="text-center"><?= $data['ket_cuti'] ?></td>
														<td style="vertical-align: middle;" class="text-center">
															<?php
															if ($data['status_cuti'] == 'Surat Sedang Diproses Atasan') {
																echo "<span class='badge rounded-pill bg-warning'><b>Sedang Proses</b></span>";
															} else if ($data['status_cuti'] == 'Disetujui Atasan') {
																echo "<span class='badge rounded-pill bg-success'><b>Disetujui</b></span>";
															} else if ($data['status_cuti'] == "Data Ditolak Atasan") {
																echo "<span class='badge rounded-pill bg-danger'><b>Data Ditolak</b></span>";
															}
															?>
														</td>
														<td style="vertical-align: middle;" class="text-center">
															<div class="btn-group" role="group">
																<button data-id="<?= $data['id_cuti']; ?>" onclick="isiIdCuti(this)" data-bs-toggle="modal" data-bs-target="#disposisiModal" type="button" title="Disposisi Surat Permohonan Cuti" class="btn btn-sm btn-success d-flex align-items-center justify-content-center py-2">
																	<i class="fas fa-envelope-open-text fs-5"></i>
																</button>
																<a title="Detail Surat Cuti" href="detail_cuti.php?id_cuti=<?= $data['id_cuti']; ?>" class="btn btn-sm btn-info d-flex align-items-center justify-content-center py-2">
																	<i class="fas fa-info-circle fs-5"></i>
																</a>
															</div>
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

				<!-- Modal Disposisi Start -->
				<div class="modal fade" id="disposisiModal" tabindex="-1" aria-labelledby="disposisiModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="disposisiModalLabel">Disposisi Surat Permohonan Cuti Pegawai</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="" method="POST">
									<div class="mb-3">
										<label for="keterangan" class="col-form-label">Keterangan</label>
										<input type="text" class="form-control" name="keterangan" id="keterangan" required autofocus placeholder="Isi keterangan disetujui atau tolak">
										<input type="hidden" class="form-control" name="id_cuti" id="id_cuti" required>
									</div>
									<div class="text-center pt-2">
										<button type="reset" class="btn btn-secondary" title="Hapus">
											<i class="fas fa-eraser fs-5 fw-bold"></i>
										</button>
										<button type="submit" name="setuju" class="btn btn-success" title="Setuju">
											<i class="fas fa-check fs-5 fw-bold"></i>
										</button>
										<button type="submit" name="tolak" class="btn btn-danger" title="Tolak">
											<i class="fas fa-times fs-5 fw-bold"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Disposisi End -->


				<!-- Proses disposisi -->
				<?php
				// proses tolak
				if (isset($_POST['tolak'])) {
					$id_cuti = $_POST['id_cuti'];
					$ket_cuti = $_POST['keterangan'];

					$update = mysqli_query(
						$koneksi,
						"UPDATE cuti SET 
						ket_cuti = '$ket_cuti',
						status_cuti = 'Data Ditolak Atasan' 
						WHERE cuti.id_cuti = $id_cuti;"
					);

					if ($update) {
						echo "<script>
										alert('Berhasil Ditolak!');
										window.location = 'cuti.php';
									</script><?php";
					} else {
						echo "<script>
										alert('Gagal, cek kembali!.');
										window.location = 'cuti.php';
									</script>";
					}
				}

				// proses setuju
				if (isset($_POST['setuju'])) {
					$id_cuti = $_POST['id_cuti'];
					$ket_cuti = $_POST['keterangan'];

					$update = mysqli_query(
						$koneksi,
						"UPDATE cuti SET 
						ket_cuti = '$ket_cuti',
						status_cuti = 'Disetujui Atasan' 
						WHERE cuti.id_cuti = $id_cuti;"
					);

					if ($update) {
						echo "<script>	
						         alert('Berhasil Disetujui!');
											window.location = 'cuti.php';
										</script><?php";
					} else {
						echo "<script>
											alert('Gagal, cek kembali!.');
											window.location = 'cuti.php';
										</script>";
					}
				}
				?>

				<script>
					// script untuk mengisi input hidden id_cuti, ketika tombol disposisi diklik
					function isiIdCuti(e) {
						var dataId = e.getAttribute('data-id');
						var inputIdCuti = document.getElementById('id_cuti');
						inputIdCuti.value = dataId;
					}
				</script>