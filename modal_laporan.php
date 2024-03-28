<!-- modal pegawai -->
<div class="modal fade" id="pegawaiModal" tabindex="-1" aria-labelledby="pegawaiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pegawaiModalLabel">Cetak Laporan Pegawai</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_pegawai.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- modal gaji -->
<div class="modal fade" id="gajiModal" tabindex="-1" aria-labelledby="gajiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="gajiModalLabel">Cetak Laporan Gaji</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_gaji.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT tahun FROM gaji GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_gaji.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>

<!-- modal mutasi -->
<div class="modal fade" id="mutasiModal" tabindex="-1" aria-labelledby="mutasiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="mutasiModalLabel">Cetak Laporan Mutasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_mutasi.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT YEAR(tgl_m) AS tahun FROM mutasi GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_mutasi.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>

<!-- modal agenda kegiatan -->
<div class="modal fade" id="agendaModal" tabindex="-1" aria-labelledby="agendaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="agendaModalLabel">Cetak Laporan Kegiatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_agenda.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT YEAR(tgl_kegiatan) AS tahun FROM kegiatan GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_agenda.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>

<!-- modal cuti -->
<div class="modal fade" id="cutiModal" tabindex="-1" aria-labelledby="cutiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cutiModalLabel">Cetak Laporan Cuti</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_cuti.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT YEAR(tgl_aw) AS tahun FROM cuti GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_cuti.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>

<!-- modal pensiun -->
<div class="modal fade" id="pensiunModal" tabindex="-1" aria-labelledby="pensiunModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pensiunModalLabel">Cetak Laporan Pensiun</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_pensiun.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT YEAR(tgl_pensiun) AS tahun FROM t_pensiun GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_pensiun.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>

<!-- modal kinerja -->
<div class="modal fade" id="kinerjaModal" tabindex="-1" aria-labelledby="kinerjaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="kinerjaModalLabel">Cetak Laporan Kinerja Pegawai</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_kinerja.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT tahun FROM absensi GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- modal kenaikan -->
<div class="modal fade" id="kenaikanModal" tabindex="-1" aria-labelledby="kenaikanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="kenaikanModalLabel">Cetak Laporan Kenaikan Jabatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../laporan/data_kenaikan.php" method="post" target="_blank">
          <div class="row">
            <div class="mb-3 col">
              <label for="bulan-cetak" class="form-label">Berdasarkan Bulan</label>
              <select name="bulan-cetak" id="bulan-cetak" class="select2 form-select">
                <option readonly="">-Pilih bulan-</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col">
              <label for="tahun-cetak" class="form-label">Berdasarkan Tahun</label>
              <select name="tahun-cetak" id="tahun-cetak" class="select2 form-select">
                <option readonly="">-Pilih tahun-</option>
                <?php $qrytahun = mysqli_query($koneksi, "SELECT YEAR(tanggal) AS tahun FROM kenaikan_jabatan GROUP BY tahun"); ?>
                <?php if (mysqli_num_rows($qrytahun)) { ?>
                  <?php while ($row = mysqli_fetch_array($qrytahun)) { ?>
                    <option><?php echo $row['tahun'] ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <button type="submit" name="cetak" class="btn btn-primary">CETAK</button>
        </form>

      </div>
      <hr class="mx-3 p-0 mt-0 ">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="../laporan/data_kenaikan.php" target="_blank" class="btn btn-primary">Cetak Semua</a>
      </div>
    </div>
  </div>
</div>