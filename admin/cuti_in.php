<?php
require_once('../head.php');
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
            <li class="menu-item active">
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
            <span class="text-muted fw-light">Surat Pengajuan Cuti /</span>
            <span>Tambah</span>
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
                <h5 class="card-header">Tambah Surat Pengajuan Cuti Baru</h5>

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

                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <option value="<?= $row['id_pg']; ?>"><?= $row['nip']; ?> | <?= $row['nama_lengkap']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="ket_cuti" class="form-label">Keterangan Mengajukan Cuti</label>
                        <input class="form-control" type="text" name="ket_cuti" id="ket_cuti" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_aw" class="form-label">Tanggal Awal Cuti</label>
                        <input class="form-control" type="date" name="tgl_aw" id="tgl_aw" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="tgl_ak" class="form-label">Tanggal Selesai Cuti</label>
                        <input class="form-control" type="date" name="tgl_ak" id="tgl_ak" required />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="file_cuti" class="form-label">File Surat Pengantar</label>
                        <input class="form-control" type="file" id="file_cuti" name="file_cuti" accept=".pdf" required />
                        <p class="text-muted mb-0">File surat pengantar cuti | pdf | maximal 2mb</p>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lama_cuti" class="form-label">Jumlah Hari Cuti</label>
                        <input class="form-control" type="number" name="lama_cuti" id="lama_cuti" required />
                      </div>
                      <div class="mb-3 col-12 text-center" id="iframeContainer">
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
                      <hr>
                      <div class="mt-2">
                        <button type="submit" name="simpan" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" title="Reset" class="btn btn-outline-danger">Batal</button>
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

      <!-- Proses Input Data Start -->
      <?php
      if (isset($_POST['simpan'])) {
        // fungsi random angka
        function random($panjang)
        {
          $karakter = '1234567890';
          $string = '';
          for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter[$pos];
          }
          return $string;
        }

        $no_cuti = random(4); // contoh: jFodd9UWwG  
        $id_pg = $_POST['id_pg'];
        $tgl_aw = $_POST['tgl_aw'];
        $tgl_ak = $_POST['tgl_ak'];
        $lama_cuti = $_POST['lama_cuti'];
        $keterangan = $_POST['ket_cuti'];

        $namaFile = $_FILES['file_cuti']['name'];
        $x = explode('.', $namaFile);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file_cuti']['size'];
        $file_tmp = $_FILES['file_cuti']['tmp_name'];

        if ($ekstensi == 'pdf') {
          if ($ukuran <= 2048000) {
            $namabaru = rand(1000, 9999) . preg_replace("/[^a-zA-Z0-9]/", ".", $namaFile);
            move_uploaded_file($file_tmp, '../assets/file/pengantar/' . $namabaru);

            $tambah = mysqli_query(
              $koneksi,
              "INSERT INTO cuti SET 
              id_pg='$id_pg',
              tgl_aw='$tgl_aw',
              tgl_ak='$tgl_ak',
              lama_cuti='$lama_cuti',
              keterangan='$keterangan',
              ket_cuti='Surat Sedang Di Proses Atasan',
              no_cuti='$no_cuti',
              status_cuti='Surat Sedang Diproses Atasan',
              file_cuti='$namabaru'"
            );

            if ($tambah) {
              echo "<script>
                      alert('Data Berhasil Ditambah!');
                      window.location = 'cuti.php';
                    </script>";
            } else {
              echo "<script>
                      alert('Gagal, cek kembali!.');
                    </script>";
            }
          }
        } else {
          echo "<script>
                  alert('Gagal, file harus jenis pdf!');
                </script>";
        }
      }
