#
# TABLE STRUCTURE FOR: admin
#

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id`, `username`, `password`) VALUES (1, 'admin', '123123');


#
# TABLE STRUCTURE FOR: jabatan_kal
#

DROP TABLE IF EXISTS `jabatan_kal`;

CREATE TABLE `jabatan_kal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (1, 'Kepala');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (2, 'Manajer Mutu');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (3, 'Supervisor Mutu');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (4, 'Manajer Teknis');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (5, 'Supervisor Teknis');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (6, 'Manajer Administrasi');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (7, 'Supervisor Administrasi');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (8, 'Manajer Pengembangan SDM');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (9, 'Supervisor Pengembangan SDM');
INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES (10, 'Petugas Kalibrasi');


#
# TABLE STRUCTURE FOR: jabatan_lit
#

DROP TABLE IF EXISTS `jabatan_lit`;

CREATE TABLE `jabatan_lit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (2, 'Kepala');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (3, 'Manajer Mutu');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (4, 'Supervisior Mutu');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (5, 'Manajer Teknis');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (6, 'Supervisor Teknis Emisi & Ambien');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (7, 'Supervisor Teknis Mokrobiologi');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (8, 'Manajer Administrasi');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (9, 'Manajer Pengembangan SDM');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (10, 'Staf Pengembangan SDM');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (11, 'Inspektur ');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (12, 'Pembantu Lapangan');
INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES (13, 'Supervisor Administrasi');


#
# TABLE STRUCTURE FOR: jabatan_lspro
#

DROP TABLE IF EXISTS `jabatan_lspro`;

CREATE TABLE `jabatan_lspro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (1, 'Kepala');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (2, 'Manajer Mutu');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (3, 'Penyelia Mutu');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (4, 'Manajer Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (5, 'Penyelia Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (6, 'Staf Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (7, 'Manajer Operasional');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (8, 'Penyelia Operasional');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (9, 'Manajer SDM');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (10, 'Penyelia SDM');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (11, 'Lead Auditor/Auditor');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (12, 'Auditor');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (13, 'Petugas Pengambil Contoh');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (14, 'Evaluator');


#
# TABLE STRUCTURE FOR: jabatan_peng
#

DROP TABLE IF EXISTS `jabatan_peng`;

CREATE TABLE `jabatan_peng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (1, 'Kepala');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (2, 'Manajer Mutu');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (3, 'Supervisor Mutu');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (4, 'Staf Mutu');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (5, 'Manajer Teknis');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (6, 'Supervisor Teknis Air dan Air Limbah');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (7, 'Supervisor Teknis Mikrobiologi');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (8, 'Supervisor Teknis Produk Aneka');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (9, 'Manajer Administrasi');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (10, 'Supervisor Administrasi');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (11, 'Manajer Pengembangan SDM');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (12, 'Supervisor Pengembangan SDM');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (13, 'Analis');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (14, 'Petugas Pengambil Contoh');
INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES (15, 'Maintenance Alat Lab Uji');


#
# TABLE STRUCTURE FOR: jabatan_sdm
#

DROP TABLE IF EXISTS `jabatan_sdm`;

CREATE TABLE `jabatan_sdm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tmt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `jabatan_sdm_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `jabatan_sdm_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (29, 2, '12345678901234', 'Manajer Mutu', '');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (31, 4, '12345678901234', 'Manajer Teknis', 'Juni 2020');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (32, 4, '12345678901234', 'Supervisor Administrasi', 'Juli 2019');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (33, 1, '12345678901234', 'Manajer Mutu', 'Juli 2019');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (34, 3, '12345678901234', 'Supervisor Teknis Air dan Air Limbah', 'Juni 2020');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (35, 1, '111111111122222222', 'Kepala', 'J');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (36, 1, '111111111122222222', 'Manajer Operasional', 'Juli 2019');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (38, 3, '123456789123456789', 'Kepala', '');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (39, 3, '123456789123456789', 'Supervisor Pengembangan SDM', '');
INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES (40, 4, '123456789123456789', 'Manajer Teknis', '');


#
# TABLE STRUCTURE FOR: kel_produk
#

DROP TABLE IF EXISTS `kel_produk`;

CREATE TABLE `kel_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `kel_produk_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `kel_produk_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: lab_kalibrasi
#

DROP TABLE IF EXISTS `lab_kalibrasi`;

CREATE TABLE `lab_kalibrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lab_kalibrasi_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lab_kalibrasi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`) VALUES (5, 4, '12345678901234');
INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`) VALUES (8, 4, '123456789123456789');


#
# TABLE STRUCTURE FOR: lab_pengujian
#

DROP TABLE IF EXISTS `lab_pengujian`;

CREATE TABLE `lab_pengujian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lab_pengujian_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lab_pengujian_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`) VALUES (3, 3, '12345678901234');
INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`) VALUES (6, 3, '123456789123456789');


#
# TABLE STRUCTURE FOR: lembaga
#

DROP TABLE IF EXISTS `lembaga`;

CREATE TABLE `lembaga` (
  `id_lembaga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lembaga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_lembaga`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES (1, 'Lembaga Sertifikasi Produk (LSPRO)');
INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES (2, 'Lembaga Inspeksi Teknis (LIT)');
INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES (3, 'Laboratorium Pengujian');
INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES (4, 'Laboratorium Kalibrasi');


#
# TABLE STRUCTURE FOR: lit
#

DROP TABLE IF EXISTS `lit`;

CREATE TABLE `lit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lit_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lit_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lit` (`id`, `id_lembaga`, `nip`) VALUES (8, 2, '12345678901234');
INSERT INTO `lit` (`id`, `id_lembaga`, `nip`) VALUES (11, 2, '123456789123456789');


#
# TABLE STRUCTURE FOR: lspro
#

DROP TABLE IF EXISTS `lspro`;

CREATE TABLE `lspro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lspro_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lspro_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`) VALUES (13, 1, '12345678901234');
INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`) VALUES (14, 1, '123456789012345678');
INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`) VALUES (15, 1, '111111111122222222');
INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`) VALUES (18, 1, '123456789123456789');


#
# TABLE STRUCTURE FOR: pd_terakhir
#

DROP TABLE IF EXISTS `pd_terakhir`;

CREATE TABLE `pd_terakhir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  CONSTRAINT `pd_terakhir_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (16, '12345678901234', 'SMA Negreri 2 Kabanjahe', '2014-2017');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (17, '12345678901234', 'SMPN 1 Kabanjahe', '2011-2014');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (18, '12345678901234', 'S1 Teknik Informatika', '2014-2017');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (19, '12345678901234', 'TK gelahgolit2', '2016-2023');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (20, '123456789012345678', 'S1 Teknik Informatika', '2021');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (21, '123456789012345678', 'S2 Teknik Elektro', '2022');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (22, '111111111122222222', 'S1 Teknik Informatika', '2020');
INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES (25, '123456789123456789', 'S1 Teknik Informatika', '2020');


#
# TABLE STRUCTURE FOR: pengalaman
#

DROP TABLE IF EXISTS `pengalaman`;

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pengalaman` varchar(200) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `pengalaman_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO `pengalaman` (`id`, `id_lembaga`, `nip`, `pengalaman`, `tahun`) VALUES (9, 1, '111111111122222222', 'penaglaman', '2020');


#
# TABLE STRUCTURE FOR: penjenjangan
#

DROP TABLE IF EXISTS `penjenjangan`;

CREATE TABLE `penjenjangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `penjenjangan` text NOT NULL,
  `tahun` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `penjenjangan_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `penjenjangan_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: portofolio
#

DROP TABLE IF EXISTS `portofolio`;

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `nama_pelatihan` varchar(200) NOT NULL,
  `tahun_pelatihan` year(4) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `form_evaluasi` varchar(50) NOT NULL,
  `surat_kerja` varchar(50) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  PRIMARY KEY (`id_portofolio`),
  KEY `nip` (`nip`),
  CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO `portofolio` (`id_portofolio`, `nip`, `nama_pelatihan`, `tahun_pelatihan`, `penyelenggara`, `sertifikat`, `form_evaluasi`, `surat_kerja`, `bukti`) VALUES (14, '12345678901234', 'Pelatihan PHP', '2020', 'itera', '4_struktur_membran-sukawi.pdf', '', '', '');
INSERT INTO `portofolio` (`id_portofolio`, `nip`, `nama_pelatihan`, `tahun_pelatihan`, `penyelenggara`, `sertifikat`, `form_evaluasi`, `surat_kerja`, `bukti`) VALUES (15, '12345678901234', 'CSS', '2019', 'ITERA', '', '', '', '');
INSERT INTO `portofolio` (`id_portofolio`, `nip`, `nama_pelatihan`, `tahun_pelatihan`, `penyelenggara`, `sertifikat`, `form_evaluasi`, `surat_kerja`, `bukti`) VALUES (16, '111111111122222222', 'CSS', '2019', 'ITERA', 'p887.pdf', '19.pdf', '6639-19564-1-SM.pdf', 'Struktur_Kabel_dan_Lengkung3.pdf');
INSERT INTO `portofolio` (`id_portofolio`, `nip`, `nama_pelatihan`, `tahun_pelatihan`, `penyelenggara`, `sertifikat`, `form_evaluasi`, `surat_kerja`, `bukti`) VALUES (17, '111111111122222222', 'PHP', '2010', 'UNILA', '11260-39112-1-SM.pdf', '109_-_Candra_Putra_Susanto.pdf', 'PENGGUNAAN_METODE_CENTER_OF_GRAVITY_DALAM_PENENTUA', 'CVSPreprocessing_MSR2004.pdf');


#
# TABLE STRUCTURE FOR: riwayat_jabatan
#

DROP TABLE IF EXISTS `riwayat_jabatan`;

CREATE TABLE `riwayat_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  KEY `id_lembaga` (`id_lembaga`),
  CONSTRAINT `riwayat_jabatan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`),
  CONSTRAINT `riwayat_jabatan_ibfk_2` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `riwayat_jabatan` (`id`, `nip`, `id_lembaga`, `jabatan`, `tahun`) VALUES (4, '12345678901234', 2, 'Kepala', '2017');
INSERT INTO `riwayat_jabatan` (`id`, `nip`, `id_lembaga`, `jabatan`, `tahun`) VALUES (5, '12345678901234', 4, 'Kepala', '2017');
INSERT INTO `riwayat_jabatan` (`id`, `nip`, `id_lembaga`, `jabatan`, `tahun`) VALUES (7, '12345678901234', 1, 'Ketua', '2022');
INSERT INTO `riwayat_jabatan` (`id`, `nip`, `id_lembaga`, `jabatan`, `tahun`) VALUES (8, '111111111122222222', 1, 'Kepala', '2017');


#
# TABLE STRUCTURE FOR: ruang_linkup
#

DROP TABLE IF EXISTS `ruang_linkup`;

CREATE TABLE `ruang_linkup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `ruang_linkup_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `ruang_linkup_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: sdm
#

DROP TABLE IF EXISTS `sdm`;

CREATE TABLE `sdm` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `tmt_pangkat` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `telepon_kantor` varchar(12) NOT NULL,
  `telepon_rumah` varchar(12) NOT NULL,
  `jabatan_terakhir` text DEFAULT NULL,
  `tmt_jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sdm` (`nip`, `nama`, `pangkat`, `tmt_pangkat`, `unit_kerja`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan_terakhir`, `telepon_kantor`, `telepon_rumah`, `jabatan_terakhir`, `tmt_jabatan`) VALUES ('111111111122222222', 'budi', '', '', 'Baristand Industri Bandar Lampung', '', 'Laki-laki', 'Menikah', '  aslaa\r\nskaasas\r\nsakasaskas', 'S1 Teknik Informatika', '', '', '', '');
INSERT INTO `sdm` (`nip`, `nama`, `pangkat`, `tmt_pangkat`, `unit_kerja`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan_terakhir`, `telepon_kantor`, `telepon_rumah`, `jabatan_terakhir`, `tmt_jabatan`) VALUES ('12345678901234', 'Hiskia Perdamen Pulungan', 'IVA', '16 November 2021', 'Baristand Industri Bandar Lampung', 'Kabanjahe 26 Januari 1999', 'Laki-laki', 'Belum Menikah', ' Jalkot', 'S1 Teknik Informatika', '081264914260', '20957', '', '');
INSERT INTO `sdm` (`nip`, `nama`, `pangkat`, `tmt_pangkat`, `unit_kerja`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan_terakhir`, `telepon_kantor`, `telepon_rumah`, `jabatan_terakhir`, `tmt_jabatan`) VALUES ('123456789012345678', 'ayu', '', '', 'Baristand Industri Bandar Lampung', '', 'Perempuan', 'Belum Menikah', ' ', 'S1 Teknik Informatika', '', '', '', '');
INSERT INTO `sdm` (`nip`, `nama`, `pangkat`, `tmt_pangkat`, `unit_kerja`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan_terakhir`, `telepon_kantor`, `telepon_rumah`, `jabatan_terakhir`, `tmt_jabatan`) VALUES ('123456789123456789', 'budi', '4A', '16 November 2021', 'Baristand Industri Bandar Lampung', '', 'Laki-laki', 'Belum Menikah', ' ', 'S1 Teknik Informatika', '', '', 'Kepala dan Ketua', '12 November 2021');


#
# TABLE STRUCTURE FOR: sub_kel_produk
#

DROP TABLE IF EXISTS `sub_kel_produk`;

CREATE TABLE `sub_kel_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `sub_kel_produk_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `sub_kel_produk_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tugas
#

DROP TABLE IF EXISTS `tugas`;

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tugas` text NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `tugas_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES (3, 1, '111111111122222222', 'ini Tugas', '');
INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES (7, 3, '12345678901234', 'Ini Tugas', '');
INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES (9, 4, '12345678901234', '1. Ini Tugas 1\r\n2. Ini Tugas 2', 'Supervisior Administrasi');
INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES (10, 4, '12345678901234', '1. askaskaskas\r\n2. sakasksak\r\n3. aslaasdna', 'Supervisior Administrasi');
INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES (11, 3, '123456789123456789', 'ini tugas', 'Kepala');


