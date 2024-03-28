SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `bulan` varchar(22) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_pg` int(11) NOT NULL,
  `hadir` varchar(11) NOT NULL,
  `sakit` varchar(11) NOT NULL,
  `izin` varchar(11) NOT NULL,
  `tanpa_ket` varchar(11) NOT NULL,
  `tgl_sakit` varchar(25) NOT NULL,
  `tgl_ijin` varchar(25) NOT NULL,
  `tgl_tk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `absensi` (`id_absensi`, `tgl`, `bulan`, `tahun`, `id_pg`, `hadir`, `sakit`, `izin`, `tanpa_ket`, `tgl_sakit`, `tgl_ijin`, `tgl_tk`) VALUES
(4, '2023-02-03', 'Januari', '2023', 4, '30', '1', '2', '0', '12', '22 & 23', '-'),
(5, '2023-02-03', 'Januari', '2023', 1, '31', '0', '0', '0', '-', '-', '-'),
(6, '2023-02-03', 'Januari', '2023', 3, '30', '0', '1', '0', '-', '20', '-'),
(7, '2023-02-03', 'Januari', '2023', 2, '30', '0', '1', '0', '-', '11', '-'),
(8, '2023-02-03', 'Januari', '2023', 5, '31', '0', '0', '0', '-', '-', '-'),
(11, '2023-07-09', 'Januari', '2023', 14, '30', '0', '0', '0', '-', '-', '-'),
(12, '2023-07-02', 'Februari', '2023', 13, '25', '2', '1', '2', '10-11', '15', '20-21'),
(13, '2023-07-09', 'Maret', '2023', 18, '30', '0', '0', '0', '-', '-', '-'),
(14, '2023-07-09', 'April', '2023', 20, '27', '0', '3', '0', '-', '10-11-12', '-'),
(15, '2023-07-09', 'Mei', '2023', 15, '30', '0', '0', '0', '-', '-', '-'),
(17, '2023-08-02', 'Januari', '2025', 31, '6', '20', '8', '10', '1-2', '-', '-');

CREATE TABLE `absen_pegawai` (
  `id` int(11) NOT NULL,
  `id_pg` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `absen` tinyint(4) NOT NULL DEFAULT 1,
  `absen_masuk` time DEFAULT NULL,
  `absen_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `absen_pegawai` (`id`, `id_pg`, `tanggal`, `absen`, `absen_masuk`, `absen_pulang`) VALUES
(1, 12, '2023-08-12', 1, '17:40:37', NULL),
(2, 13, '2023-07-14', 1, NULL, NULL),
(3, 12, '2023-07-13', 1, '17:40:56', '13:40:56'),
(5, 12, '2023-07-14', 1, '10:40:56', NULL),
(6, 13, '2023-07-15', 1, NULL, NULL),
(7, 12, '2023-07-15', 1, NULL, '12:40:56'),
(8, 12, '2023-07-16', 1, NULL, '11:40:56'),
(9, 26, '2023-07-16', 1, NULL, NULL),
(10, 26, '2023-07-01', 1, NULL, NULL),
(11, 12, '2023-08-11', 1, '13:40:56', NULL),
(12, 12, '2023-08-10', 1, NULL, NULL),
(13, 13, '2023-07-01', 1, NULL, NULL),
(14, 13, '2023-07-02', 1, NULL, NULL),
(15, 13, '2023-07-03', 1, NULL, NULL),
(16, 13, '2023-07-04', 1, NULL, NULL),
(17, 26, '2023-07-17', 1, NULL, NULL),
(18, 12, '2023-07-17', 1, NULL, NULL),
(19, 27, '2023-07-17', 1, NULL, NULL),
(20, 28, '2023-07-17', 1, NULL, NULL),
(21, 13, '2023-07-05', 1, NULL, NULL),
(22, 13, '2023-07-06', 1, NULL, NULL),
(23, 13, '2023-07-07', 1, NULL, NULL),
(24, 13, '2023-07-08', 1, NULL, NULL),
(25, 13, '2023-07-09', 1, NULL, NULL),
(26, 13, '2023-07-10', 1, NULL, NULL),
(27, 13, '2023-07-11', 1, NULL, NULL),
(30, 13, '2023-07-12', 1, NULL, NULL),
(31, 13, '2023-07-13', 1, NULL, NULL),
(32, 13, '2023-07-16', 1, NULL, NULL),
(33, 13, '2023-07-18', 1, NULL, NULL),
(34, 13, '2023-07-25', 1, NULL, NULL),
(35, 29, '2023-07-17', 1, NULL, NULL),
(36, 12, '2023-07-24', 1, NULL, NULL),
(37, 26, '2023-07-24', 1, NULL, NULL),
(38, 26, '2023-07-24', 1, NULL, NULL),
(39, 28, '2023-07-24', 1, NULL, NULL),
(40, 12, '2023-07-24', 1, NULL, NULL),
(43, 12, '2023-07-25', 1, '23:25:31', '23:30:09'),
(46, 26, '2023-08-05', 1, '08:30:21', NULL),
(52, 26, '2023-08-06', 1, '07:09:51', '16:08:32');

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_pg` int(11) NOT NULL,
  `tgl_aw` date NOT NULL,
  `tgl_ak` date NOT NULL,
  `lama_cuti` varchar(5) NOT NULL,
  `keterangan` varchar(199) NOT NULL,
  `ket_cuti` varchar(210) NOT NULL,
  `no_cuti` varchar(11) NOT NULL,
  `status_cuti` varchar(55) NOT NULL,
  `file_cuti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cuti` (`id_cuti`, `id_pg`, `tgl_aw`, `tgl_ak`, `lama_cuti`, `keterangan`, `ket_cuti`, `no_cuti`, `status_cuti`, `file_cuti`) VALUES
(3, 1, '2023-01-02', '2023-01-09', '7', 'Opname Dirumah Sakit', 'Di Izinkan', '2881', 'Disetujui Atasan', '9923Muhammad.Azhari.Surat.Magang.PDF'),
(4, 4, '2023-02-01', '2023-02-08', '8', 'Opname Dirumah Sakit', 'Surat Sedang Di Proses Atasan', '8305', 'Surat Sedang Diproses Atasan', '2216pengantar.pdf'),
(5, 3, '2023-02-03', '2023-02-06', '3', 'Acara Pernikahan Keluarga', 'Surat Sedang Di Proses Atasan', '2093', 'Surat Sedang Diproses Atasan', '3791pengantar.pdf'),
(6, 2, '2023-02-06', '2023-02-09', '4', 'Sakit', 'Surat Sedang Di Proses Atasan', '5940', 'Surat Sedang Diproses Atasan', '2551pengantar.pdf'),
(7, 13, '2023-02-07', '2023-02-12', '10', 'Opname Dirumah Sakit 2', 'Surat Sedang Di Proses Atasan', '3241', 'Surat Sedang Diproses Atasan', '60888074pengantar.pdf'),
(8, 12, '2023-07-10', '2023-07-14', '5', 'acara keluarga', 'Surat Sedang Di Proses Atasan', '7997', 'Surat Sedang Diproses Atasan', '4942surat.cuti.pegawai.docx'),
(12, 14, '2023-08-03', '2023-08-04', '1', 'test', 'Surat Sedang Di Proses Atasan', '5799', 'Surat Sedang Diproses Atasan', '60448074pengantar.pdf'),
(13, 14, '2023-08-04', '2023-08-07', '2', 'test', 'tes haja nah', '1181', 'Data Ditolak Atasan', '9134'),
(14, 12, '2023-08-04', '2023-08-04', '2', 'test', 'tes haja nah', '3139', 'Disetujui Atasan', '70198074pengantar.pdf'),
(17, 28, '2023-08-12', '2023-08-05', '7', 'Pulang Kampung Ke Barabai', 'Surat Sedang Di Proses Atasan', '7683', 'Surat Sedang Diproses Atasan', '24518074pengantar.pdf'),
(18, 26, '2023-08-05', '2023-08-12', '11', 'test', 'Surat Sedang Di Proses Atasan', '2307', 'Surat Sedang Diproses Atasan', '90418074pengantar.pdf');

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `no_slip` varchar(12) NOT NULL,
  `bulan` varchar(12) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `gaji_bersih` varchar(11) NOT NULL,
  `gajipok` varchar(11) NOT NULL,
  `tunjangan` varchar(11) NOT NULL,
  `potongan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `gaji` (`id_gaji`, `tgl_gaji`, `no_slip`, `bulan`, `tahun`, `id_absensi`, `gaji_bersih`, `gajipok`, `tunjangan`, `potongan`) VALUES
(24, '2022-12-31', '9o6R41047T', 'Januari', '2022', 4, '4500000', '2500000', '2000000', '0'),
(25, '2023-02-03', 'B1LgbbK9dp', 'Februari', '2023', 5, '4500000', '1500000', '2500000', '0'),
(26, '2023-02-03', 'V5zCTNyiKy', 'Maret', '2023', 7, '2850000', '1200000', '1200000', '0'),
(27, '2023-02-03', '3q52lrXslk', 'Januari', '2023', 6, '23450000', '3000000', '20000000', '0'),
(28, '2023-02-03', '2ymzkye8t9', 'Januari', '2023', 8, '3900000', '1200000', '2200000', '0'),
(31, '2023-07-09', 'ISu0dQNsxu', 'Maret', '2023', 13, '3000000', '2000000', '1000000', '0'),
(32, '2023-07-09', 'Ke48kRqbKk', 'April', '2023', 14, '3000000', '2000000', '1000000', '0'),
(33, '2023-08-02', '8pAlVYropP', 'Januari', '2025', 17, '1500000', '2000000', '1000000', '1500000'),
(34, '2023-08-02', 'gRSsyWfGXH', 'Februari', '2023', 12, '14200000', '4500000', '10000000', '300000');

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(85) NOT NULL,
  `gajipok` varchar(13) NOT NULL,
  `tunjangan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gajipok`, `tunjangan`) VALUES
(4, 'Sekretaris', '4500000', '10000000'),
(7, 'Kepala Badan Keuangan dan Aset Daerah Kabupaten Tapin', '5000000', '20000000'),
(8, 'Staff', '2000000', '1000000'),
(9, 'Sub Bagian Umum & Kepegawaian', '3000000', '7500000'),
(10, 'Sub Bagian Keuangan', '3000000', '7500000'),
(11, 'Sub Bagian Perencanaan & Pelaporan', '3000000', '7500000'),
(12, 'Kabid Anggaran', '3000000', '6500000'),
(13, 'Kabid Perbendaharaan', '3000000', '6500000'),
(14, 'Kabid Akuntansi dan Pelaporan', '3000000', '6500000'),
(15, 'Kabid Pengelolaan Barang Milik Daerah', '3000000', '6500000'),
(16, 'Kasubid Anggaran I', '2500000', '5000000'),
(17, 'Kasubid Anggaran II', '2500000', '5000000'),
(18, 'Kasubid Pembendaharaan I', '2500000', '5000000'),
(19, 'Kasubid Pembendaharaan II', '2500000', '5000000'),
(20, 'Kasubid Pembukuan', '2500000', '5000000'),
(21, 'Kasubid Pelaporan  Keuangan', '2500000', '5000000'),
(22, 'Kasubid Penata Usahaan', '2500000', '5000000'),
(23, 'Kasubid Pemeliharaan & Pengamanan', '2500000', '5000000');

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `lokasi_kegiatan` varchar(255) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `waktu_kegiatan` time NOT NULL,
  `tujuan_kegiatan` varchar(255) NOT NULL,
  `nip` varchar(55) NOT NULL,
  `no_surat` varchar(10) NOT NULL,
  `ket_kegiatan` varchar(55) NOT NULL,
  `status_kegiatan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `lokasi_kegiatan`, `tgl_kegiatan`, `waktu_kegiatan`, `tujuan_kegiatan`, `nip`, `no_surat`, `ket_kegiatan`, `status_kegiatan`) VALUES
(1, 'Monitoring Pemograman', 'Kantor Gubernur Kalimantan Selatan', '2023-01-02', '09:00:00', 'Evaluasi', '197006161990031002', '12345678', 'tes haja nah', 'Disetujui Atasan'),
(2, 'Sosialisasi dan ekspose', 'Tapin Utara', '2022-09-05', '15:33:00', 'Sosialisasi', '197006161990031002', '4566', 'tes haja nah', 'Data Ditolak Atasan'),
(3, 'Rapat KUA PPAS Perubahan', '', '2022-08-06', '14:58:00', 'Rapat KUA', '197406042009041003', '5636', 'tes haja nah', 'Disetujui Atasan');

CREATE TABLE `kenaikan_jabatan` (
  `id_kenaikan` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `jabatan_baru` varchar(255) NOT NULL,
  `golongan_baru` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `kenaikan_jabatan` (`id_kenaikan`, `nip`, `bidang`, `jabatan_baru`, `golongan_baru`, `tanggal`) VALUES
(1, '197006161990031002', 'anggaran', 'staff', 'eselon IIA', '2023-07-15'),
(6, '197406042009041003', 'Akuntansi', 'Kepala Bidang ', 'III', '2023-07-24'),
(13, '197406042009041003', 'serah ja', 'Kasubid Pemeliharaan & Pengamanan', 'III', '2023-08-03');

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `tgl_m` date NOT NULL,
  `id_pg` int(11) NOT NULL,
  `no_sk` varchar(55) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `new_jabatan` varchar(55) NOT NULL,
  `ket_mutasi` varchar(155) NOT NULL,
  `file_p` varchar(200) NOT NULL,
  `status_mutasi` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `mutasi` (`id_mutasi`, `tgl_m`, `id_pg`, `no_sk`, `tgl_sk`, `tujuan`, `new_jabatan`, `ket_mutasi`, `file_p`, `status_mutasi`) VALUES
(19, '2022-01-01', 12, 'no./2/SK/M/2022', '2023-01-02', 'Diskominfo Banjarbaru', 'Sekretaris', 'Surat Disetujui', '2069Muhammad.Azhari.Surat.Magang.PDF', 'Disetujui Atasan'),
(20, '2023-02-03', 13, 'no./2/SK/M/2022', '2023-02-03', 'Mutasi Jabatan', 'Kepala Bidang Akuntansi Dan Pelaporan', 'Sedang Diproses Atasan', '5743mutasi.pdf', 'Sedang Diproses Atasan'),
(21, '2023-02-03', 21, 'no./2/SK/M/2022', '2023-02-03', 'Mutasi Jabatan', 'Kepala Bidang Pengelolaan Barang Milik Daerah', 'Sedang Diproses Atasan', '2029mutasi.pdf', 'Sedang Diproses Atasan'),
(29, '2023-08-03', 14, '106/UNISKA-FTI/A.15/IV/2023', '2023-08-04', 'Belajar', 'Kasubid Penata Usahaan', 'tes haja nah', '41908074pengantar.pdf', 'Data Ditolak Atasan'),
(30, '2023-08-03', 30, '106/UNISKA-FTI/A.15/IV/2023', '2023-08-04', 'Belajar 2', 'Sekretaris', 'tes haja nah', '36758074pengantar.pdf', 'Disetujui Atasan');

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `id_pg` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `t_admin` (`id_admin`, `id_pg`, `username`, `password`, `level`) VALUES
(1, NULL, 'admin', 'admin', 'admin'),
(2, NULL, 'atasan', 'atasan', 'atasan'),
(3, 12, 'pegawai', 'pegawai', 'pegawai'),
(4, 13, 'pegawai2', 'pegawai', 'pegawai'),
(8, 26, '197406042009041333', '197406042009041333', 'pegawai'),
(9, 27, '199709202020121007', '199709202020121007', 'pegawai'),
(10, 28, '199408152020122005', '199408152020122005', 'pegawai'),
(11, 29, '199406152020122014', '199406152020122014', 'pegawai');

CREATE TABLE `t_pegawai` (
  `id_pg` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_rumah` varchar(200) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `file_foto` varchar(255) DEFAULT NULL,
  `pegawai` enum('asn','non asn') NOT NULL,
  `golongan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `t_pegawai` (`id_pg`, `nip`, `nama_lengkap`, `id_jabatan`, `jenis_kelamin`, `agama`, `status`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `no_telpon`, `file_foto`, `pegawai`, `golongan`) VALUES
(12, '197006161990031002', 'DR. H. SUFIANSYAH, M.AP', 7, 'Laki-laki', 'Islam', 'Kawin', 'Banjarmasin', '1975-06-10', 'Jl.Pembangunan', '08524767654', '1.jpg', 'asn', ''),
(13, '197406262005011005', 'HARIS FADHILAH, SE, MM', 4, 'Laki-laki', 'Islam', 'Kawin', 'Banua Halat', '1978-01-10', 'Jl.Penghulu', '0813478976', '1.jpg', 'asn', ''),
(14, '197406042009041003', 'ABDUL RAZAK, S.KOM', 23, 'Laki-laki', 'Islam', 'Kawin', 'Rantau', '1970-03-05', 'Jl.Rangda Malingkung', '08124765871', '1.jpg', 'asn', 'III'),
(21, '197609032000121006', 'ZAINAL ABIDIN, SKM', 17, 'Laki-laki', 'Islam', 'Kawin', 'Rantau', '1977-11-09', 'Jl.Mtq', '08525677412', '1.jpg', 'asn', ''),
(26, '197406042009041333', 'Imam SP', 7, 'Laki-laki', 'Islam', 'Belum Kawin', 'Banjarmasin', '2023-07-16', 'Banjarmasin', '2323323232323', '464122049522.4300.10.02.jpg', 'asn', '12'),
(27, '199709202020121007', 'MUHAMMAD ZAINI, A.Md.Ak', 8, 'Laki-laki', 'Islam', 'Belum Kawin', 'Banjarmasin', '1995-06-05', 'Jl.Kesehatan', '08124765890', '1.jpg', 'asn', 'Eselon II A'),
(28, '199408152020122005', 'RIDA AHYANI, SE', 8, 'Perempuan', 'Islam', 'Kawin', 'Martapura', '1996-08-09', 'Jl.Penghulu', '085243567898', '1.jpg', 'asn', 'Eselon II A'),
(29, '199406152020122014', 'FITRI NORKOMARIAHYUSTIN, S.Ak', 8, 'Perempuan', 'Islam', 'Kawin', 'Kandangan', '1994-01-22', 'Sungai Raya', '081347532876', '1.jpg', 'asn', 'IV'),
(30, '199406152020122013', 'Ipul Hadi Wicaksono, S.Ak', 8, 'Perempuan', 'Islam', 'Kawin', 'Kandangan', '1994-01-22', 'Sungai Raya', '081347532876', '12.jpg', 'asn', 'IV'),
(31, '199406152020122015', 'Iman Amiri Hadi, S.Ak', 8, 'Perempuan', 'Islam', 'Kawin', 'Kandangan', '1994-01-22', 'Sungai Raya', '081347532876', '11.jpg', 'asn', 'IV');

CREATE TABLE `t_pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `alamat_pensiun` text NOT NULL,
  `pangkat_gol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `t_pensiun` (`id_pensiun`, `nip`, `no_surat`, `tgl_surat`, `tgl_pensiun`, `alamat_pensiun`, `pangkat_gol`) VALUES
(4, '197006161990031002', '123', '2023-06-13', '2023-06-19', 'Rantau', 'Penata Tk.II'),
(5, '197609032000121006', '2345678', '2023-08-02', '2023-08-03', 'Kupang Tambak', 'Penata Tk. I');


ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_pegawai` (`id_pg`);

ALTER TABLE `absen_pegawai`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `id_pg` (`id_pg`);

ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `nip` (`nip`);

ALTER TABLE `kenaikan_jabatan`
  ADD PRIMARY KEY (`id_kenaikan`);

ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_pg` (`id_pg`,`new_jabatan`);

ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id_pg`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`);

ALTER TABLE `t_pensiun`
  ADD PRIMARY KEY (`id_pensiun`);


ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `absen_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `kenaikan_jabatan`
  MODIFY `id_kenaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `t_pegawai`
  MODIFY `id_pg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

ALTER TABLE `t_pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
