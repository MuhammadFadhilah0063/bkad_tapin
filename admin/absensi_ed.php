<?php
require_once("../fungsi_indotgl.php");
require_once('../head.php');

$id_absensi  = $_GET['id_absensi'];

$query = mysqli_query(
  $koneksi,
  "SELECT * FROM absensi 
  INNER JOIN t_pegawai ON absensi.id_pg=t_pegawai.id_pg 
  WHERE absensi.id_absensi = $id_absensi"
);

$row = mysqli_fetch_array($query);
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
            <li class="menu-item active">
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
              <a href="kenaikan.php" class="menu-link">
                <div data-i18n="Kenaikan Jabatan">Kenaikan Jabatan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="pensiun.php" class="menu-link">
                <div data-i18n="Pensiun">Pensiun</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="agenda.php" class="menu-link">
                <div data-i18n="Surat Agenda">Surat Agenda/Kegiatan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="cuti.php" class="menu-link">
                <div data-i18n="Surat Pengajuan Cuti">Surat Pengajuan Cuti</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="mutasi.php" class="menu-link">
                <div data-i18n="Surat Mutasi Pegawai">Surat Mutasi Pegawai</div>
              </a>
            </li>
          </ul>
        </li>
        <!-- Transaksi End -->

        <!-- Laporan Start -->
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Laporan</span>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon far fa-file-alt"></i>
            <div data-i18n="Laporan">Laporan</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#pegawaiModal">
                <div data-i18n="Laporan Pegawai">Pegawai</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#gajiModal">
                <div data-i18n="Laporan Gaji Pegawai">Gaji Pegawai</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#mutasiModal">
                <div data-i18n="Laporan Surat Mutasi">Surat Mutasi Pegawai</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#agendaModal">
                <div data-i18n="Laporan Agenda">Agenda/Kegiatan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#cutiModal">
                <div data-i18n="Laporan Pengajuan Cuti">Pengajuan Cuti Pegawai</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#pensiunModal">
                <div data-i18n="Laporan Pensiun">Pensiun</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#kinerjaModal">
                <div data-i18n="Laporan Penilaian Kinerja">Penilaian Kinerja Pegawai</div>
              </a>
            </li>
            <li class="menu-item mb-5">
              <a href="#" class="menu-link" data-bs-toggle="modal" data-bs-target="#kenaikanModal">
                <div data-i18n="Laporan Kenaikan Jabatan">Kenaikan Jabatan</div>
              </a>
            </li>
          </ul>
        </li>
        <!-- Laporan End -->
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
                        <span class="fw-semibold d-block"><?= $user_row['username']; ?></span>
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
            <span class="text-muted fw-light">Rekap Absensi /</span>
            <span>Ubah</span>
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
                <h5 class="card-header">Ubah Data Rekap Absensi</h5>

                <!-- Form Start -->
                <form action="" method="POST">
                  <!-- beautify ignore:start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="tgl" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" name="tgl" id="tgl" value="<?= $row['tgl']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select class="select2 form-select" name="bulan" id="bulan">
                          <option value="">Pilih Bulan</option>
                          <?php
                          $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                          foreach ($bulan as $item) { ?>
                          <option value="<?= $item ?>" 
														<?php if ($item == $row['bulan']) {
                              echo 'selected';
                            } ?>>
															<?= $item ?>
														</option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tahun" class="form-label">Tahun</label>
                        <select name="tahun" id="tahun" class="select2 form-select">
                          <option value="">Pilih Tahun</option>
                          <?php
                          for ($i = 2023; $i < 2035; $i++) { ?>
                            <option value="<?= $i ?>" 
														<?php if ($i == $row['tahun']) {
                              echo 'selected';
                            } ?>>
															<?= $i ?>
														</option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="nip" class="form-label">NIP</label>
                        <select name="id_pg" id="nip" class="select2 form-select">
                          <option value="">Pilih NIP</option>
                          <?php
                          $queryPegawai = mysqli_query(
                            $koneksi,
                            "SELECT * FROM t_pegawai ORDER BY nama_lengkap ASC"
                          );

                          while ($rowPegawai = mysqli_fetch_array($queryPegawai)) {
                          ?>
                          <option value="<?= $rowPegawai['id_pg']; ?>" 
                          <?php if ($rowPegawai['nip'] . '|' . $rowPegawai['nama_lengkap'] == $row['nip'] . '|' . $row['nama_lengkap']) {
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
                        <label for="hadir" class="form-label">Hadir</label>
                        <input class="form-control" type="number" name="hadir" id="hadir" placeholder="0" value="<?= $row['hadir']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="sakit" class="form-label">Sakit</label>
                        <input class="form-control" type="number" name="sakit" id="sakit" placeholder="0" value="<?= $row['sakit']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="izin" class="form-label">Izin</label>
                        <input class="form-control" type="number" name="izin" id="izin" placeholder="0" value="<?= $row['izin']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tanpa_ket" class="form-label">Tanpa Keterangan</label>
                        <input class="form-control" type="number" name="tanpa_ket" id="tanpa_ket" placeholder="0" value="<?= $row['tanpa_ket']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_sakit" class="form-label">Tanggal Saat Sakit (tanggalnya saja)</label>
                        <input class="form-control" type="text" name="tgl_sakit" id="tgl_sakit" placeholder="-" value="<?= $row['tgl_sakit']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_ijin" class="form-label">Tanggal Saat Izin (tanggalnya saja)</label>
                        <input class="form-control" type="text" name="tgl_ijin" id="tgl_ijin" placeholder="-" value="<?= $row['tgl_ijin']; ?>" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_tk" class="form-label">Tanggal Saat Tanpa Keterangan (tanggalnya saja)</label>
                        <input class="form-control" type="text" name="tgl_tk" id="tgl_tk" placeholder="-" value="<?= $row['tgl_tk']; ?>" required />
                      </div>
                      <div class="mt-2">
                        <button type="submit" name="ubah" class="btn btn-primary me-2">Simpan</button>
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

        $tgl = $_REQUEST['tgl'];
        $bulan = $_REQUEST['bulan'];
        $tahun = $_REQUEST['tahun'];
        $id_pg = $_REQUEST['id_pg'];
        $hadir = $_REQUEST['hadir'];
        $sakit = $_REQUEST['sakit'];
        $izin = $_REQUEST['izin'];
        $tanpa_ket = $_REQUEST['tanpa_ket'];
        $tgl_sakit = $_REQUEST['tgl_sakit'];
        $tgl_ijin = $_REQUEST['tgl_ijin'];
        $tgl_tk = $_REQUEST['tgl_tk'];

        $ubah = mysqli_query(
          $koneksi,
          "UPDATE absensi SET 
          tgl = '$tgl', 
          bulan = '$bulan', 
          tahun = '$tahun', 
          id_pg = '$id_pg', 
          hadir = '$hadir',
          sakit = '$sakit',
          izin = '$izin', 
          tanpa_ket = '$tanpa_ket', 
          tgl_sakit = '$tgl_sakit', 
          tgl_ijin = '$tgl_ijin', 
          tgl_tk = '$tgl_tk' 
          WHERE id_absensi = $id_absensi"
        );

        if ($ubah) {
      ?>
          <script>
            alert('Absensi ini Berhasil di Ubah!');
            window.location = 'absensi_ed.php?id_absensi=<?= $id_absensi ?>';
          </script>
        <?php
        } else {
        ?>
          <script>
            alert('Gagal, cek kembali!.');
            window.location = 'absensi_ed.php?id_absensi=<?= $id_absensi ?>';
          </script>
      <?php
        }
      }
      ?>
      <!-- Proses Ubah Data End -->