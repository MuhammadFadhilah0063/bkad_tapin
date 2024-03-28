<?php
require_once('../head.php');

$id_cuti  = $_GET['id_cuti'];

$query = mysqli_query(
  $koneksi,
  "SELECT * FROM cuti 
  INNER JOIN t_pegawai ON cuti.id_pg=t_pegawai.id_pg 
  WHERE id_cuti = '$id_cuti'"
);

$row = mysqli_fetch_array($query);
?>

<!-- beautify ignore:start -->
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
						<li class="menu-item">
							<a href="absensi.php" class="menu-link">
								<div data-i18n="Absensi">Absensi</div>
							</a>
						</li>
						<li class="menu-item active">
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
                        <span class="fw-semibold d-block"><?= $user_row['nama_lengkap']; ?></span>
                        <small class="text-muted"><?= $user_row['level']; ?></small>
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
            <span class="text-muted fw-light">Transaksi /</span>
            <span class="text-muted fw-light">Surat Pengajuan Cuti /</span>
            <span>Ubah</span>
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="cuti.php">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                  </a>
                </li>
              </ul>
              <div class="card mb-4">
                <h5 class="card-header">Ubah Surat Pengajuan Cuti Baru</h5>

                <!-- Form Start -->
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="id_pg" class="form-label">Nama Pegawai</label>
                        <select name="id_pg" id="id_pg" class="select2 form-select">
                          <option value="">Pilih Pegawai</option>
                          <?php
                          $query = mysqli_query(
                            $koneksi,
                            "SELECT * FROM t_pegawai ORDER BY nama_lengkap ASC"
                          );

                          while ($rowPegawai = mysqli_fetch_array($query)) {
                          ?>
                            <option value="<?= $row['id_pg']; ?>" 
                            <?php if ($row['id_pg'] == $rowPegawai['id_pg']) {
                              echo 'selected';
                            } ?>>
                            <?= $rowPegawai['nip']; ?> | <?= $rowPegawai['nama_lengkap']; ?>
                          </option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="keterangan" class="form-label">Keterangan Mengajukan Cuti</label>
                        <input class="form-control" type="text" name="keterangan" id="keterangan" value="<?= $row['keterangan'] ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_aw" class="form-label">Tanggal Awal Cuti</label>
                        <input class="form-control" type="date" name="tgl_aw" id="tgl_aw" value="<?= $row['tgl_aw'] ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_ak" class="form-label">Tanggal Selesai Cuti</label>
                        <input class="form-control" type="date" name="tgl_ak" id="tgl_ak" value="<?= $row['tgl_ak'] ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="file_cuti" class="form-label">File Surat Pengantar</label>
                        <input class="form-control" type="file" id="file_cuti" name="file_cuti" accept=".pdf"  />
                        <p class="text-muted mb-0">File surat pengantar cuti | pdf | maximal 2mb</p>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lama_cuti" class="form-label">Jumlah Hari Cuti</label>
                        <input class="form-control" type="number" name="lama_cuti" id="lama_cuti" value="<?= $row['lama_cuti'] ?>" required />
                      </div>
                      <div class="mb-3 col-12 text-center" id="iframeContainer">
                      <iframe src="../assets/file/pengantar/<?= $row['file_cuti'] ?>" width="700px" height="600px"></iframe>

                        <!-- script pdf preview -->
                        <script>
                          document.getElementById('file_cuti').addEventListener('change', function() {
                            var fileInput = document.getElementById('file_cuti');
                            var file = fileInput.files[0];

                            if (file) {
                              // Periksa apakah file yang dipilih adalah PDF atau DOCX
                              if (file.type === 'application/pdf' || file.type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                                var reader = new FileReader();

                                reader.onload = function() {
                                  var pdfData = reader.result;
                                  var iframe = document.createElement('iframe');

                                  // Tetapkan atribut untuk elemen iframe yang dibuat
                                  iframe.src = pdfData;
                                  iframe.width = "700px";
                                  iframe.height = "600px";

                                  // Hapus konten wadah sebelumnya (opsional)
                                  var container = document.getElementById('iframeContainer');
                                  container.innerHTML = '';

                                  // Tambahkan elemen iframe ke wadah
                                  container.appendChild(iframe);
                                };

                                reader.readAsDataURL(file);
                              } else {
                                alert('Tolong upload file jenis pdf');
                              }
                            }
                          });
                        </script>
                      </div>
                      <input type="hidden" name="id_cuti" value="<?= $row['id_cuti'] ?>">
                      <hr>
                      <div class="mt-2">
                        <button type="submit" name="ubah" class="btn btn-primary me-2">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Form End -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Content End -->

      <!-- Footer Start -->
      <?php require_once("../footer.php"); ?>
      <!-- Footer End -->

      <!-- Proses Ubah Data Start -->
      <?php
      if (isset($_POST['ubah'])) {

        $id_cuti = $_POST['id_cuti'];
        $id_pg = $_POST['id_pg'];
        $tgl_aw = $_POST['tgl_aw'];
        $tgl_ak = $_POST['tgl_ak'];
        $lama_cuti = $_POST['lama_cuti'];
        $keterangan = $_POST['keterangan'];

        if ($_FILES['file_cuti']['size'] != 0) {
          $namaFile = $_FILES['file_cuti']['name'];
          $x = explode('.', $namaFile);
          $ekstensi = strtolower(end($x));
          $ukuran = $_FILES['file_cuti']['size'];
          $file_tmp = $_FILES['file_cuti']['tmp_name'];

          if ($ekstensi == 'pdf') {
            if ($ukuran <= 2048000) {
              // Hapus file lama start
              $query = mysqli_query($koneksi, "SELECT file_cuti FROM cuti WHERE id_cuti = '$id_cuti'");

              $row = mysqli_fetch_array($query);
              $filePath = '../assets/file/pengantar/' . $row['file_cuti'];

              if (file_exists($filePath)) {
                unlink($filePath);
              }
              // Hapus file lama end

              // Simpan file
              $namabaru = rand(1000, 9999) . preg_replace("/[^a-zA-Z0-9]/", ".", $namaFile);
              move_uploaded_file($file_tmp, '../assets/file/pengantar/' . $namabaru);

              // Ini proses ubah untuk jika ada perubahan file pengantar
              $ubah = mysqli_query(
                $koneksi,
                "UPDATE cuti SET 
                id_pg='$id_pg',
                tgl_aw='$tgl_aw',
                tgl_ak='$tgl_ak',
                lama_cuti='$lama_cuti',
                keterangan='$keterangan',
                file_cuti='$namabaru'
                WHERE id_cuti = $id_cuti"
              );
            }
          }
        } else {
          // Ini proses ubah untuk jika tidak ada perubahan file pengantar
          $ubah = mysqli_query(
            $koneksi,
            "UPDATE cuti SET 
            id_pg='$id_pg',
            tgl_aw='$tgl_aw',
            tgl_ak='$tgl_ak',
            lama_cuti='$lama_cuti',
            keterangan='$keterangan'
            WHERE id_cuti = $id_cuti"
          );
        }

        // Jika perubahan berhasil
        if ($ubah) {
          echo "<script>
                  alert('Berhasil Diubah!');
                  window.location = 'cuti_ed.php?id_cuti=" . $id_cuti . "';
                </script>";
        } else {
          echo "<script>
                  alert('Gagal, cek kembali!.');
                  window.location = 'cuti_ed.php?id_cuti=" . $id_cuti . "';
                </script>";
        }
        $koneksi->close();
      }
      ?>