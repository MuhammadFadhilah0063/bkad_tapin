<?php
require_once("../fungsi_indotgl.php");
require_once("../fungsi_rupiah.php");
require_once("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/logo/tapin.png" />

  <title>Data Mutasi Pegawai</title>

  <!-- Bootstrap start -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap4/dist/css/bootstrap-reboot.min.css.map">
  <!-- Bootstrap end -->

  <style>
    .text-content {
      text-indent: 50px;
    }

    .ttd {
      margin-left: 65%;
    }

    #isi {
      line-height: 1.7;
    }

    .kiri {
      margin-top: -35px;
      margin-left: 5%;
      position: absolute;
      width: 110px;
    }

    .tengah {
      margin-left: -18%;
      margin-top: -2%;
      position: absolute;
      width: 380px;
    }

    .kanan {
      margin-top: -7%;
      margin-left: 82%;
      width: 115px;
      position: absolute;
    }

    hr {
      border: solid;
      color: #333;
    }

    .tujuan {
      margin-left: 70%;
      margin-top: -12%;
    }

    h5,
    td,
    h2,
    h4,
    h6 {
      color: black;
    }

    table#tableData td,
    table#tableData th {
      border: 1px solid black;
      vertical-align: middle;
    }
  </style>
</head>

<body>
  <div class="container" style="font-family: Times;"><br>

    <h3 class="text-center"><b>PEMERINTAH KABUPATEN TAPIN</b></h3>
    <img src="../assets/img/logo/tapin.png" class="float-left kiri">
    <h3 class="text-center wew"><b>BADAN KEUANGAN DAN ASET DAERAH</b></h3>
    <h5 class="text-center">JL. Datu Nuraya Rt. 01 Rantau Kiwa, Kec. Tapin Utara, Kabupaten Tapin</h5>
    <h6 class="text-center"><b>RANTAU</b></h6>
    <h6 class="text-right"><b>Kode Pos 71111</b></h6>
    <hr>
    <br>

    <table class="">
      <tbody>
        <tr>
          <td>
            <h5>Nomor</h5>
          </td>
          <td>:</td>
          <td>
            <h5>442.7/ 775.C-AGS / BKAD-SET / 2023</h5>
          </td>
        </tr>
        <tr>
          <td>
            <h5>Sifat</h5>
          </td>
          <td>:</td>
          <td>
            <h5>Penting</h5>
          </td>
        </tr>
        <tr>
          <td>
            <h5>Lampiran</h5>
          </td>
          <td>:</td>
          <td>
            <h5>- 1 Lembar</h5>
          </td>
        </tr>
        <tr>
          <td>
            <h5>Perihal</h5>
          </td>
          <td>:</td>
          <td>
            <h5>Laporan Data Mutasi Pegawai</h5>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="tujuan">
      <h5>
        <p>Rantau <?php echo tgl_indo(date('Y-m-d')); ?></p>
        <p>
          Kepada&ensp;&ensp;&ensp;:
        <p>
          Yth. Kepala Dinas BKAD.Kabupaten Tapin
        <p>
          Di&ensp;-
        <p>
          &ensp;&ensp;&ensp;Tempat
        </p>
        </p>
        </p>
        </p>
      </h5>
    </div>
    <br>

    <div class="container">
      <h2 class="text-center">DAFTAR DATA MUTASI PEGAWAI</h2>
      <h3 class="invoice-header text-center mb-5">Badan Keuangan dan Aset Daerah</h3>
      <table class="table table-bordered table-hover table-sm" style="margin: 0 auto;" id="tableData">
        <thead class="">
          <tr class="text-center" style="background-color: beige;">
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">No.</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">Tanggal SK Mutasi</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">Tujuan</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">NIP</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">Nama</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">Jabatan Baru</th>
            <th style="vertical-align: middle; font-weight: bold; font-size: 13pt;">Status Mutasi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $bulan = '';
          $tahun = '';

          if (isset($_POST['cetak'])) {
            $bulan = getNoBulan($_REQUEST['bulan-cetak']);
            $tahun = $_REQUEST['tahun-cetak'];
            $query = mysqli_query(
              $koneksi,
              "SELECT * FROM mutasi 
              INNER JOIN t_pegawai ON mutasi.id_pg=t_pegawai.id_pg 
              INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan 
              WHERE MONTH(mutasi.tgl_sk) = $bulan
              AND YEAR(mutasi.tgl_sk) = $tahun
              ORDER BY mutasi.tgl_sk ASC"
            );
          } else {
            $query = mysqli_query(
              $koneksi,
              "SELECT * FROM mutasi 
              INNER JOIN t_pegawai ON mutasi.id_pg=t_pegawai.id_pg 
              INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan"
            );
          }

          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr class="text-center">
              <td style="vertical-align: middle;"><?= $no++; ?></td>
              <td><?= tgl_indo($data['tgl_sk']) ?></td>
              <td><?= $data['tujuan'] ?></td>
              <td><?= $data['nip'] ?></td>
              <td><?= $data['nama_lengkap'] ?></td>
              <td><?= $data['new_jabatan'] ?></td>
              <td>
                <?php
                if ($data['status_mutasi'] == 'Sedang Diproses Atasan') {
                  echo "<p><b>Sedang Diproses Atasan</b></p>";
                } else if ($data['status_mutasi'] == 'Disetujui Atasan') {
                  echo "<p><b>Disetujui Atasan</b></p>";
                } else if ($data['status_mutasi'] == "Data Ditolak Atasan") {
                  echo "<p><b>Data Ditolak Atasan</b></p>";
                }
                ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <br>
      <br>
      <table class="text-center ttd">
        <tbody>
          <tr>
            <td>
              <h5><b>Kepala Badan Keuangan dan Aset Daerah Kabupaten Tapin,</b></h5>
            </td>
          </tr>

          <tr>
            <td><br>
              <br>
              <br>
              <br>
            </td>
          </tr>

          <tr>
            <td>
              <h5><b><u>Dr. H. SUFIANSYAH, M.AP</u>
                  <p>NIP. 19700616 199003 1 002</p>
                </b></h5>
            </td>
          </tr>

          <tr>
            <td>
              <h5><b></b></h5>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    window.print();
  </script>
</body>

</html>