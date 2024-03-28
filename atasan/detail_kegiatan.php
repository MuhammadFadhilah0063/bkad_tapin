<?php
require_once("../fungsi_indotgl.php");
require_once('../head.php');

$id_kegiatan  = $_GET['id_kegiatan'];

$query = mysqli_query(
  $koneksi,
  "SELECT * FROM kegiatan 
  INNER JOIN t_pegawai ON kegiatan.nip=t_pegawai.nip 
  WHERE id_kegiatan = '$id_kegiatan'"
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
            <li class="menu-item">
              <a href="absensi.php" class="menu-link">
                <div data-i18n="Absensi">Rekap Absensi</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="gaji.php" class="menu-link">
                <div data-i18n="Gaji">Gaji</div>
              </a>
            <li class="menu-item active">
              <a href="kegiatan.php" class="menu-link">
                <div data-i18n="Disposisi Surat Agenda">Disposisi Surat Agenda/kegiatan</div>
              </a>
            </li>
            <li class="menu-item">
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
            <span class="text-muted fw-light">Surat Agenda atau Kegiatan /</span>
            <span>Detail</span>
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="kegiatan.php">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                  </a>
                </li>
              </ul>

              <div class="card">
                <div class="card-header pb-3">
                  <h4 class="mb-2 d-inline-block">Detail Surat Kegiatan</h4>
                </div>

                <hr class="my-0" />

                <div class="card-body">
                  <h3 class="text-center text-dark">Badan Keuangan dan Aset Daerah</h3>

                  <table class="mt-5 fs-5 text-dark">
                    <tr>
                      <td>Nomor Surat</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['no_surat'] ?></td>
                    </tr>
                    <tr>
                      <td>Nama Kegiatan</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['nama_kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <td>Lokasi Kegiatan</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['lokasi_kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Kegiatan</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= tgl_indo($row['tgl_kegiatan']) ?></td>
                    </tr>
                    <tr>
                      <td>Waktu Kegiatan</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['waktu_kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <td>Tujuan Kegiatan</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['tujuan_kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <td>Yang Membuat Rencana</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['nama_lengkap'] ?></td>
                    </tr>
                    <tr>
                      <td>Keterangan Surat</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3"><?= $row['ket_kegiatan'] ?></td>
                    </tr>
                    <tr>
                      <td>Status Surat</td>
                      <td width="100px" class="text-end">:</td>
                      <td class="ps-3">
                        <?php
                        if ($row['status_kegiatan'] == 'Surat Sedang Diproses Atasan') {
                          echo "<span class='badge bg-warning'><b>Proses</b></span>";
                        } else if ($row['status_kegiatan'] == 'Disetujui Atasan') {
                          echo "<span class='badge bg-success'><b>Disetujui</b></span>";
                        } else if ($row['status_kegiatan'] == "Data Ditolak Atasan") {
                          echo "<span class='badge bg-danger'><b>Data Ditolak</b></span>";
                        }
                        ?>
                      </td>
                    </tr>
                  </table>
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