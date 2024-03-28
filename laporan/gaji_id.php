<?php
require_once("../fungsi_indotgl.php");
require_once("../fungsi_rupiah.php");
require_once("../koneksi.php");

$id_gaji = $_GET['id_gaji'];

$query = mysqli_query(
  $koneksi,
  "SELECT * FROM gaji 
  INNER JOIN absensi ON gaji.id_absensi=absensi.id_absensi 
  INNER JOIN t_pegawai ON absensi.id_pg=t_pegawai.id_pg 
  INNER JOIN jabatan ON t_pegawai.id_jabatan=jabatan.id_jabatan 
  WHERE id_gaji = $id_gaji"
);

$row = mysqli_fetch_array($query); {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/tapin.png" />

    <title>Data Gaji Pegawai</title>

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
              <h5>442.7/ 775.C-AGS / BKAD-SET / 2022</h5>
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
              <h5>Data Gaji Pegawai</h5>
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
        <div class="card">
          <div class="card-body">
            <h4 class="invoice-header text-center">Badan Keuangan dan Aset Daerah</h4>
            <div class="row">
              <div class="col-6">
                <div class="invoice-from">
                  <address class="mt-5 mb-5">
                    NIP <br />
                    <strong>
                      <h5><?php echo $row['nip']; ?></h5>
                    </strong><br />
                    Nama <br />
                    <strong>
                      <h5><?php echo $row['nama_lengkap']; ?></h5>
                    </strong><br />

                  </address>
                </div>
              </div>

              <div class="col-6">
                <div class="invoice-from">
                  <address class="mt-5 mb-5  float-right">
                    Kode Slip gaji <br />
                    <strong>
                      <h5><?php echo $row['no_slip']; ?></h5>
                    </strong><br />
                    Gaji Periode <br />
                    <strong>
                      <h5><?php echo tgl_indo($row['tgl_gaji']); ?></h5>
                    </strong><br />

                  </address>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">
                <table class="table table-invoice">
                  <thead>
                    <tr style="vertical-align: middle;">
                      <th>DESKRIPSI</th>
                      <th></th>
                      <th></th>
                      <th class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Gaji Pokok<br />
                      </td>
                      <td></td>
                      <td></td>
                      <td align="right"><?php echo 'Rp.' . number_format($row['gajipok']); ?></td>
                    </tr>
                    <tr>
                      <td>
                        Tunjangan<br />
                      </td>
                      <td></td>
                      <td></td>
                      <td align="right"><?php echo 'Rp.' . number_format($row['tunjangan']); ?></td>
                    </tr>
                    <tr>
                      <td>
                        Potongan<br />
                      </td>
                      <td></td>
                      <td></td>
                      <td align="right"><?php echo 'Rp.' . number_format($row['potongan']); ?></td>
                    </tr>
                    <tr>
                      <td>
                        Gaji Bersih
                      </td>
                      <td></td>
                      <td></td>
                      <input type="hidden" name="tanpa_ket" value="<?= $row['tanpa_ket'] ?>">
                      <input type="hidden" name="gajipok" value="<?= $row['gajipok'] ?>">
                      <input type="hidden" name="tunjangan" value="<?= $row['tunjangan'] ?>">
                      <input type="hidden" name="potongan" value="<?= $row['potongan'] ?>">

                      <td align="right"><?php echo 'Rp.' . number_format($row['gaji_bersih']) ?></td>
                    <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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