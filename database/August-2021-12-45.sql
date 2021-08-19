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
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (15, 'Kepala Balai Riset dan Standarisasi Industri ');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (16, 'Manajer Mutu');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (17, 'Penyelia Mutu');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (18, 'Manajer Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (19, 'Penyelia Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (20, 'Staf Administrasi');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (21, 'Manajer Operasional');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (22, 'Penyelia Operasional');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (23, 'Manajer SDM');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (24, 'Penyelia SDM');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (25, 'Lead Auditor/Auditor');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (26, 'Auditor');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (27, 'Petugas Pengambil Contoh');
INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES (28, 'Evaluator');


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
# TABLE STRUCTURE FOR: lab_kalibrasi
#

DROP TABLE IF EXISTS `lab_kalibrasi`;

CREATE TABLE `lab_kalibrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lab_kalibrasi_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lab_kalibrasi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (25, 4, '123456789', '', '', '', '');
INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (26, 4, '123455432', '', '', '', '');


#
# TABLE STRUCTURE FOR: lab_pengujian
#

DROP TABLE IF EXISTS `lab_pengujian`;

CREATE TABLE `lab_pengujian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lab_pengujian_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lab_pengujian_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (1, 3, '987654321', '', '', '', '');
INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (5, 3, '123456789', '', '', '', '');
INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (6, 3, '123455432', '', '', '', '');


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
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lit_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lit_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lit` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (7, 2, '123456789', '', '', '', '');


#
# TABLE STRUCTURE FOR: lspro
#

DROP TABLE IF EXISTS `lspro`;

CREATE TABLE `lspro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_lembaga` (`id_lembaga`),
  KEY `nip` (`nip`),
  CONSTRAINT `lspro_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  CONSTRAINT `lspro_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (14, 1, '222222222', '', '', '', '');
INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES (16, 1, '222222222', '', 'Evaluator', '', '');


#
# TABLE STRUCTURE FOR: portofolio
#

DROP TABLE IF EXISTS `portofolio`;

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(9) NOT NULL,
  `nama_pelatihan` varchar(50) NOT NULL,
  `tahun_pelatihan` year(4) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `form_evaluasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_portofolio`),
  KEY `nip` (`nip`),
  CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: sdm
#

DROP TABLE IF EXISTS `sdm`;

CREATE TABLE `sdm` (
  `nip` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sdm` (`nip`, `nama`, `pendidikan_terakhir`) VALUES ('123455432', 'asdklhada', 'sma');
INSERT INTO `sdm` (`nip`, `nama`, `pendidikan_terakhir`) VALUES ('123456789', 'Hiskia Perdamen Pulungan', 'sma');
INSERT INTO `sdm` (`nip`, `nama`, `pendidikan_terakhir`) VALUES ('222222222', 'ayu', 'sma');
INSERT INTO `sdm` (`nip`, `nama`, `pendidikan_terakhir`) VALUES ('987654321', 'aswsda', 's1');


