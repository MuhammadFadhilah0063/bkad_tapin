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
        <li class="menu-item active open">
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
            <li class="menu-item active">
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
            <span class="text-muted fw-light">Data Master /</span>
            <span class="text-muted fw-light">Pegawai /</span>
            <span>Tambah</span>
          </h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="pegawai.php">
                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali
                  </a>
                </li>
              </ul>
              <div class="card mb-4">
                <h5 class="card-header">Tambah Pegawai Baru</h5>

                <!-- Foto Profil Start -->
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body pt-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <img id="gambar" src="../assets/img/avatars/user.png" alt="foto-user" class="d-block img-thumbnail rounded" height="100" width="100" id="gambar" />

                      <div class="button-wrapper">
                        <div class="mb-3">
                          <label for="file_foto" class="form-label">Gambar</label>
                          <input class="form-control" type="file" id="file_foto" name="file_foto" />
                        </div>

                        <p class="text-muted mb-0">Upload gambar hanya jenis JPG, JPEG atau PNG. Ukuran maksimal 1mb.</p>
                      </div>

                      <!-- Script Image Preview -->
                      <script>
                        function tampilkanPratinjau() {
                          var fileInput = document.getElementById('file_foto');
                          var imgPreview = document.getElementById('gambar');

                          if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                              imgPreview.src = e.target.result;
                              imgPreview.style.display = 'block';
                            };

                            reader.readAsDataURL(fileInput.files[0]);
                          }
                        }

                        // Panggil fungsi tampilkanPratinjau() ketika pengguna memilih file gambar
                        document.getElementById('file_foto').addEventListener('change', tampilkanPratinjau);
                      </script>

                    </div>
                  </div>
                  <!-- Foto Profil End -->
                  <hr class="my-0" />

                  <!-- Form Profil Start -->
                  <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required autofocus />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="nip" class="form-label">Nip</label>
                        <input class="form-control" type="text" name="nip" id="nip" type="text" placeholder="NIP" maxlength="18" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="id_jabatan" class="form-label">Jabatan</label>
                        <select id="id_jabatan" name="id_jabatan" class="select2 form-select" required>
                          <option value="">Pilih Jabatan</option>
                          <?php
                          $query = mysqli_query($koneksi, "SELECT id_jabatan, nama_jabatan FROM jabatan");
                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <option name="id_jabatan" value="<?= $row['id_jabatan']; ?>"><?= $row['nama_jabatan']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="golongan" class="form-label">Golongan</label>
                        <input class="form-control" type="text" name="golongan" id="golongan" placeholder="Golongan" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="pegawai" class="form-label">Pegawai</label>
                        <select name="pegawai" id="pegawai" class="select2 form-select" required>
                          <option value="">Pilih Pegawai</option>
                          <option value="asn">ASN</option>
                          <option value="non asn">NON ASN</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="select2 form-select" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" id="agama" class="select2 form-select" required>
                          <option value="">Pilih Agama</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="select2 form-select" required>
                          <option value="">Pilih Status</option>
                          <option value="Belum Kawin">Belum Kawin</option>
                          <option value="Kawin">Kawin</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="alamat_rumah" class="form-label">Alamat Rumah</label>
                        <input class="form-control" type="text" name="alamat_rumah" id="alamat_rumah" placeholder="Alamat Rumah" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="no_telpon" class="form-label">No. Telepon</label>
                        <input class="form-control" type="text" name="no_telpon" id="no_telpon" placeholder="No. Telepon" maxlength="14" required />
                      </div>
                      <div class="mt-2">
                        <button type="submit" name="simpan" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" title="Reset" class="btn btn-outline-danger">Batal</button>
                      </div>
                    </div>
                </form>
              </div>
              <!-- Form Profil End -->
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

        $nip = $_REQUEST['nip'];
        $nama_lengkap = $_REQUEST['nama_lengkap'];
        $id_jabatan = $_REQUEST['id_jabatan'];
        $jenis_kelamin = $_REQUEST['jenis_kelamin'];
        $agama = $_REQUEST['agama'];
        $status = $_REQUEST['status'];
        $tempat_lahir = $_REQUEST['tempat_lahir'];
        $tanggal_lahir = $_REQUEST['tanggal_lahir'];
        $alamat_rumah = $_REQUEST['alamat_rumah'];
        $no_telpon = $_REQUEST['no_telpon'];
        $pegawai = $_REQUEST['pegawai'];
        $golongan = $_REQUEST['golongan'];

        // Cek apakah ada file foto yang diupload
        if ($_FILES['file_foto']['size'] != 0) {
          $ekstensi_diperbolehkan = array('jpg', 'jpeg', 'png');
          $namafoto = $_FILES['file_foto']['name'];
          $x = explode('.', $namafoto);
          $ekstensi = strtolower(end($x));
          $ukuran = $_FILES['file_foto']['size'];
          $file_tmp = $_FILES['file_foto']['tmp_name'];

          if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 2048000) {
              $namaFotoBaru = rand(1000, 9999) . preg_replace("/[^a-zA-Z0-9]/", ".", $namafoto);
              move_uploaded_file($file_tmp, '../assets/img/pegawai/' . $namaFotoBaru);

              $tambah = mysqli_query(
                $koneksi,
                "INSERT INTO t_pegawai ( nip, nama_lengkap, id_jabatan, jenis_kelamin, agama, status, tempat_lahir,tanggal_lahir, alamat_rumah, no_telpon, file_foto, pegawai, golongan) VALUES(
                '$nip',
                '$nama_lengkap',
                '$id_jabatan',
                '$jenis_kelamin',
                '$agama',
                '$status',
                '$tempat_lahir',
                '$tanggal_lahir',
                '$alamat_rumah',
                '$no_telpon',
                '$namaFotoBaru',
                '$pegawai',
                '$golongan')"
              );
            }
          }
        } else {
          $tambah = mysqli_query(
            $koneksi,
            "INSERT INTO t_pegawai ( nip, nama_lengkap, id_jabatan, jenis_kelamin, agama, status, tempat_lahir,tanggal_lahir, alamat_rumah, no_telpon, pegawai, golongan) VALUES(
            '$nip',
            '$nama_lengkap',
            '$id_jabatan',
            '$jenis_kelamin',
            '$agama',
            '$status',
            '$tempat_lahir',
            '$tanggal_lahir',
            '$alamat_rumah',
            '$no_telpon',
            '$pegawai',
            '$golongan')"
          );
        }

        // Buat akun pegawai untuk login dan kembali ke halaman sebelumnya jika berhasil
        if ($tambah) {
          $id_pg = mysqli_insert_id($koneksi);

          mysqli_query($koneksi, "INSERT INTO t_admin (id_pg, username, password, level) VALUES(
          '$id_pg',
          '$nip',
          '$nip',
          'pegawai')");
      ?>
          <script>
            alert('Berhasil Disimpan!');
            window.location = 'pegawai.php';
          </script>
        <?php
        } else {
        ?>
          <script>
            alert('Gagal, cek kembali!.');
            window.location = 'pegawai_in.php';
          </script>
      <?php
        }
      }
      ?>
      <!-- Proses Input Data End -->