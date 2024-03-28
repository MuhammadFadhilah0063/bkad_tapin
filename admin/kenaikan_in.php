<?php
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
            <li class="menu-item active">
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
            <span class="text-muted fw-light">Kenaikan Jabatan /</span>
            <span>Tambah</span>
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="kenaikan.php">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                  </a>
                </li>
              </ul>
              <div class="card mb-4">
                <h5 class="card-header">Tambah Kenaikan Jabatan Baru</h5>

                <!-- Form Start -->
                <form action="" method="POST">
                  <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="id_pg" class="form-label">NIP</label>
                        <select name="id_pg" id="id_pg" class="select2 form-select" onchange='changeValue(this.value)'>
                          <option value="">Pilih NIP</option>
                          <?php
                          $query = mysqli_query(
                            $koneksi,
                            "SELECT * FROM t_pegawai
                             INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan
                             ORDER BY nama_lengkap ASC"
                          );

                          // Definisi variabel array javascript
                          $nama  = "var nama = new Array();\n";
                          $jabatanLama  = "var jabatanLama = new Array();\n";
                          $golongan  = "var golongan = new Array();\n";

                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <option value="<?= $row['id_pg']; ?>"><?= $row['nip']; ?> | <?= $row['nama_lengkap']; ?></option>
                          <?php
                            // Isi data dari query ke variabel array
                            $nama .= "nama['" . $row['id_pg'] . "'] = {nama:'" . addslashes($row['nama_lengkap']) . "'};\n";
                            $jabatanLama .= "jabatanLama['" . $row['id_pg'] . "'] = {jabatanLama:'" . addslashes($row['nama_jabatan']) . "'};\n";
                            $golongan .= "golongan['" . $row['id_pg'] . "'] = {golongan:'" . addslashes($row['golongan']) . "'};\n";
                            $nip .= "nip['" . $row['id_pg'] . "'] = {nip:'" . addslashes($row['nip']) . "'};\n";
                          }
                          ?>
                        </select>
                      </div>
                      <input type="hidden" name="nip" id="nip">
                      <input type="hidden" name="id_jabatan_baru" id="id_jabatan_baru">
                      <div class="mb-3 col-md-6">
                        <label for="bidang" class="form-label">Bidang</label>
                        <input class="form-control" type="text" name="bidang" id="bidang" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" id="nama" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="jabatan_baru" class="form-label">Jabatan</label>
                        <select id="jabatan_baru" name="jabatan_baru" class="select2 form-select" required>
                          <option value="">Pilih Jabatan</option>
                          <?php
                          $query = mysqli_query($koneksi, "SELECT id_jabatan, nama_jabatan FROM jabatan");
                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <option value="<?= $row['nama_jabatan'] . '/' . $row['id_jabatan'] ?>"><?= $row['nama_jabatan']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="jabatan_lama" class="form-label">Jabatan Lama</label>
                        <input class="form-control" type="text" name="jabatan_lama" id="jabatan_lama" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="golongan_baru" class="form-label">Golongan Baru</label>
                        <input class="form-control" type="text" name="golongan_baru" id="golongan_baru" placeholder="Tidak wajib. Diisi jika ingin menambahkan golongan baru" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="golongan" class="form-label">Golongan</label>
                        <input class="form-control" type="text" name="golongan" id="golongan" readonly />
                      </div>
                      <div class="mt-2">
                        <button type="submit" name="simpan" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" title="Reset" class="btn btn-outline-danger">Batal</button>
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


      <!-- Proses Input Data Start -->
      <?php
      if (isset($_POST['simpan'])) {

        $tglSekarang = date('Y-m-d');

        $nip = $_REQUEST['nip'];
        $bidang = $_REQUEST['bidang'];
        $request_jabatan_baru = $_REQUEST['jabatan_baru'];
        $id_jabatan_baru = $_REQUEST['id_jabatan_baru'];
        $golongan_baru = $_REQUEST['golongan_baru'];
        $golongan_lama = $_REQUEST['golongan'];

        $data_jabatan_baru = explode('/', $request_jabatan_baru);
        $jabatan_baru = $data_jabatan_baru[0];
        $id_jabatan_baru = intval($data_jabatan_baru[1]);

        // Cek apakah tidak ada golongan baru
        if (!$golongan_baru) {
          $golongan_baru = '-';
        }

        // tambah kenaikan
        $tambah = mysqli_query(
          $koneksi,
          "INSERT INTO kenaikan_jabatan (nip, bidang, jabatan_baru, golongan_baru, tanggal) VALUES(
          '$nip',
          '$bidang',
          '$jabatan_baru',
          '$golongan_baru',
          '$tglSekarang')"
        );

        // Cek apakah ada golongan baru
        if ($golongan_baru) {
          $golongan = $golongan_baru;
        } else {
          $golongan = $golongan_lama;
        }

        // ubah data pegawai
        $ubah = mysqli_query(
          $koneksi,
          "UPDATE t_pegawai SET
          id_jabatan = $id_jabatan_baru, 
          golongan = '$golongan' 
          WHERE nip = $nip"
        );

        if ($tambah) {
      ?>
          <script>
            alert('Data kenaikan sudah di tambahkan!');
            window.location = 'kenaikan.php';
          </script>
        <?php
        } else {
        ?>
          <script>
            alert('Gagal, cek kembali!.');
            window.location = 'kenaikan_in.php';
          </script>
      <?php
        }
      }
      ?>
      <!-- Proses Input Data End -->

      <!-- Script untuk isi data form otomatis start -->
      <script type="text/javascript">
        // Tampilkan variabel pada html, untuk bisa diakses oleh script
        <?php
        echo $nama;
        echo $jabatanLama;
        echo $golongan;
        echo $nip;
        ?>

        // Fungsi ubah value data form
        function changeValue(id) {
          document.getElementById('nip').value = nip[id].nip;
          document.getElementById('nama').value = nama[id].nama;
          document.getElementById('jabatan_lama').value = jabatanLama[id].jabatanLama;
          document.getElementById('golongan').value = golongan[id].golongan;
        }
      </script>
      <!-- Script untuk isi data form otomatis end -->