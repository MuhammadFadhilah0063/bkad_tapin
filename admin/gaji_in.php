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
            <li class="menu-item active">
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
            <span class="text-muted fw-light">Gaji /</span>
            <span>Tambah</span>
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="gaji.php">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                  </a>
                </li>
              </ul>
              <div class="card mb-4">
                <h5 class="card-header">Tambah Gaji Baru</h5>

                <!-- Form Start -->
                <form action="" method="POST">
                  <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="id_absensi" class="form-label">NIP</label>
                        <select class="select2 form-select" name="id_absensi" id="id_absensi" onchange='changeValue(this.value)'>
                          <option value="">Pilih NIP</option>
                          <?php
                          $query = mysqli_query(
                            $koneksi,
                            "SELECT * FROM absensi 
                            INNER JOIN t_pegawai ON absensi.id_pg=t_pegawai.id_pg 
                            INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan"
                          );

                          // Definisi variabel array javascript
                          $gajiPok  = "var gajipok = new Array();\n";
                          $tunjangan  = "var tunjangan = new Array();\n";
                          $hadir  = "var hadir = new Array();\n";
                          $sakit  = "var sakit = new Array();\n";
                          $izin  = "var izin = new Array();\n";
                          $tanpaKet  = "var tanpa_ket = new Array();\n";
                          $bulan  = "var bulan = new Array();\n";
                          $tahun  = "var tahun = new Array();\n";

                          while ($data = mysqli_fetch_array($query)) {
                          ?>
                            <option name="id_absensi" value="<?= $data['id_absensi'] ?>"><?= $data['nip']; ?> | <?= $data['nama_lengkap']; ?> ( <?= tgl_indo($data['bulan']) ?> ) <?= $data['tahun'] ?></option>
                          <?php
                            // Isi data dari query ke variabel array
                            $gajiPok .= "gajipok['" . $data['id_absensi'] . "'] = {gajipok:'" . addslashes($data['gajipok']) . "'};\n";
                            $tunjangan .= "tunjangan['" . $data['id_absensi'] . "'] = {tunjangan:'" . addslashes($data['tunjangan']) . "'};\n";
                            $hadir .= "hadir['" . $data['id_absensi'] . "'] = {hadir:'" . addslashes($data['hadir']) . "'};\n";
                            $sakit .= "sakit['" . $data['id_absensi'] . "'] = {sakit:'" . addslashes($data['sakit']) . "'};\n";
                            $izin .= "izin['" . $data['id_absensi'] . "'] = {izin:'" . addslashes($data['izin']) . "'};\n";
                            $tanpaKet .= "tanpa_ket['" . $data['id_absensi'] . "'] = {tanpa_ket:'" . addslashes($data['tanpa_ket']) . "'};\n";
                            $bulan .= "bulan['" . $data['id_absensi'] . "'] = {bulan:'" . addslashes($data['bulan']) . "'};\n";
                            $tahun .= "tahun['" . $data['id_absensi'] . "'] = {tahun:'" . addslashes($data['tahun']) . "'};\n";
                          }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="bulan" class="form-label">Bulan</label>
                        <input class="form-control" type="text" name="bulan" id="bulan" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input class="form-control" type="number" name="tahun" id="tahun" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="gajipok" class="form-label">Gaji Pokok</label>
                        <input class="form-control" type="text" name="gajipok" id="gajipok" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tunjangan" class="form-label">Tunjangan</label>
                        <input class="form-control" type="text" name="tunjangan" id="tunjangan" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="hadir" class="form-label">Hadir</label>
                        <input class="form-control" type="text" name="hadir" id="hadir" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="sakit" class="form-label">Sakit</label>
                        <input class="form-control" type="text" name="sakit" id="sakit" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="izin" class="form-label">Izin</label>
                        <input class="form-control" type="number" name="izin" id="izin" required readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tanpa_ket" class="form-label">Tanpa Keterangan</label>
                        <input class="form-control" type="number" name="tanpa_ket" id="tanpa_ket" required readonly />
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
        // Fungsi untuk buat angka random
        function random($panjang)
        {
          $karakter = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $string = '';
          for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter[$pos];
          }
          return $string;
        }

        $tglSekarang = date('Y-m-d');
        $no_slip = random(10); // contoh: jFodd9UWwG

        $bulan = $_REQUEST['bulan'];
        $tahun = $_REQUEST['tahun'];
        $id_absensi = $_REQUEST['id_absensi'];
        $gajipok = $_REQUEST['gajipok'];
        $tunjangan = $_REQUEST['tunjangan'];
        $potongan = $_REQUEST['potongan'];
        $tanpa_ket = $_REQUEST['tanpa_ket'];

        $gajiBersih = $gajipok + $tunjangan;

        // Proses ambil data no slip dan bulan gaji lama, agar data tidak duplikasi - start
        $query = mysqli_query($koneksi, "SELECT no_slip FROM gaji WHERE id_absensi = '$id_absensi'");
        $dataGajiLama = mysqli_fetch_array($query);

        $queryBulan = mysqli_query($koneksi, "SELECT bulan FROM gaji WHERE id_absensi = '$id_absensi' AND tahun = '$tahun'");
        $dataBulanGajiLama = mysqli_fetch_array($queryBulan);
        // Proses ambil data no slip dan bulan gaji lama, agar data tidak duplikasi - end

        // Proses cek data
        if ($no_slip == $dataGajiLama['no_slip']) {
          echo "<script>alert('No. Slip Gaji Tidak Boleh Sama Dengan Data yang Ada!'); window.location = 'gaji.php';</script>";
          return false;
        } else if ($bulan == $dataBulanGajiLama['bulan']) {
          echo "<script>alert('sudah Ada!'); window.location = 'gaji.php';</script>";
          return false;
        }

        $tambah = mysqli_query(
          $koneksi,
          "INSERT INTO gaji (tgl_gaji, no_slip, bulan, tahun, id_absensi, gaji_bersih, gajipok, tunjangan, potongan) VALUES(
          '$tglSekarang',
          '$no_slip',
          '$bulan',
          '$tahun',
          '$id_absensi',
          '$gajiBersih',
          '$gajipok',
          '$tunjangan',
          '$potongan')"
        );

        if ($tambah) {
      ?>
          <script>
            alert('Absensi pada bulan ini telah di lakukan!');
            window.location = 'gaji.php';
          </script>
        <?php
        } else {
        ?>
          <script>
            alert('Gagal, cek kembali!.');
            window.location = 'gaji_in.php';
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
        echo $gajiPok;
        echo $tunjangan;
        echo $hadir;
        echo $sakit;
        echo $izin;
        echo $tanpaKet;
        echo $bulan;
        echo $tahun;
        ?>

        // Fungsi ubah value data form
        function changeValue(id) {
          document.getElementById('gajipok').value = gajipok[id].gajipok;
          document.getElementById('tunjangan').value = tunjangan[id].tunjangan;
          document.getElementById('hadir').value = hadir[id].hadir;
          document.getElementById('sakit').value = sakit[id].sakit;
          document.getElementById('izin').value = izin[id].izin;
          document.getElementById('tanpa_ket').value = tanpa_ket[id].tanpa_ket;
          document.getElementById('bulan').value = bulan[id].bulan;
          document.getElementById('tahun').value = tahun[id].tahun;
        }
      </script>
      <!-- Script untuk isi data form otomatis end -->