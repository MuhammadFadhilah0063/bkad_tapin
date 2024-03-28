<?php require_once('../head.php'); ?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Aside -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo d-grid">
        <a href="index.php" class="app-brand-link">
          <span class="app-brand-logo demo">
            <img src="../assets/img/logo/tapin.png" width="35" class="img-fluid">
          </span>
          <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">BKAD</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
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

        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Transaksi</span>
        </li>
        <!-- Transaksi -->
        <li class="menu-item">
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
      </ul>
    </aside>
    <!-- / Aside -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->
      <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="../assets/img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </a>
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
            </li>
            <!--/ User -->
          </ul>
        </div>
      </nav>
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <!-- Menu -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="kegiatan.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-envelope-open-text fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Disposisi Surat Agenda/kegiatan</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="cuti.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-envelope-open-text fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Disposisi Surat Pengajuan Cuti</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="mutasi.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-envelope-open-text fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Disposisi Surat Mutasi Pegawai</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="pegawai.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-user fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Pegawai</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="jabatan.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-id-card fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Jabatan</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="absensi.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-clipboard-check fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Absensi</span>
                  </span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
              <a href="gaji.php" class="card h-100 py-4 btn btn-light">
                <div class="card-body text-center d-flex justify-content-center align-items-center">
                  <span class="d-flex align-items-center">
                    <i class="fas fa-coins fs-1 text-dark me-3"></i>
                    <span class="fs-4 text-dark fw-bold">Gaji Pegawai</span>
                  </span>
                </div>
              </a>
            </div>
            <!--/ Menu -->
          </div>
        </div>
        <!-- / Content -->

        <?php require_once('../footer.php'); ?>