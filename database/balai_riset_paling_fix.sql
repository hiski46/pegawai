-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 12:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balai_riset`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_kal`
--

CREATE TABLE `jabatan_kal` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_kal`
--

INSERT INTO `jabatan_kal` (`id`, `jabatan`) VALUES
(1, 'Kepala'),
(2, 'Manajer Mutu'),
(3, 'Supervisor Mutu'),
(4, 'Manajer Teknis'),
(5, 'Supervisor Teknis'),
(6, 'Manajer Administrasi'),
(7, 'Supervisor Administrasi'),
(8, 'Manajer Pengembangan SDM'),
(9, 'Supervisor Pengembangan SDM'),
(10, 'Petugas Kalibrasi');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_lit`
--

CREATE TABLE `jabatan_lit` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_lit`
--

INSERT INTO `jabatan_lit` (`id`, `jabatan`) VALUES
(2, 'Kepala'),
(3, 'Manajer Mutu'),
(4, 'Supervisior Mutu'),
(5, 'Manajer Teknis'),
(6, 'Supervisor Teknis Emisi & Ambien'),
(7, 'Supervisor Teknis Mokrobiologi'),
(8, 'Manajer Administrasi'),
(9, 'Manajer Pengembangan SDM'),
(10, 'Staf Pengembangan SDM'),
(11, 'Inspektur '),
(12, 'Pembantu Lapangan'),
(13, 'Supervisor Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_lspro`
--

CREATE TABLE `jabatan_lspro` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_lspro`
--

INSERT INTO `jabatan_lspro` (`id`, `jabatan`) VALUES
(1, 'Kepala'),
(2, 'Manajer Mutu'),
(3, 'Penyelia Mutu'),
(4, 'Manajer Administrasi'),
(5, 'Penyelia Administrasi'),
(6, 'Staf Administrasi'),
(7, 'Manajer Operasional'),
(8, 'Penyelia Operasional'),
(9, 'Manajer SDM'),
(10, 'Penyelia SDM'),
(11, 'Lead Auditor/Auditor'),
(12, 'Auditor'),
(13, 'Petugas Pengambil Contoh'),
(14, 'Evaluator'),
(15, 'Kepala Balai Riset dan Standarisasi Industri '),
(16, 'Manajer Mutu'),
(17, 'Penyelia Mutu'),
(18, 'Manajer Administrasi'),
(19, 'Penyelia Administrasi'),
(20, 'Staf Administrasi'),
(21, 'Manajer Operasional'),
(22, 'Penyelia Operasional'),
(23, 'Manajer SDM'),
(24, 'Penyelia SDM'),
(25, 'Lead Auditor/Auditor'),
(26, 'Auditor'),
(27, 'Petugas Pengambil Contoh'),
(28, 'Evaluator');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_peng`
--

CREATE TABLE `jabatan_peng` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_peng`
--

INSERT INTO `jabatan_peng` (`id`, `jabatan`) VALUES
(1, 'Kepala'),
(2, 'Manajer Mutu'),
(3, 'Supervisor Mutu'),
(4, 'Staf Mutu'),
(5, 'Manajer Teknis'),
(6, 'Supervisor Teknis Air dan Air Limbah'),
(7, 'Supervisor Teknis Mikrobiologi'),
(8, 'Supervisor Teknis Produk Aneka'),
(9, 'Manajer Administrasi'),
(10, 'Supervisor Administrasi'),
(11, 'Manajer Pengembangan SDM'),
(12, 'Supervisor Pengembangan SDM'),
(13, 'Analis'),
(14, 'Petugas Pengambil Contoh'),
(15, 'Maintenance Alat Lab Uji');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sdm`
--

CREATE TABLE `jabatan_sdm` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tmt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_sdm`
--

INSERT INTO `jabatan_sdm` (`id`, `id_lembaga`, `nip`, `jabatan`, `tmt`) VALUES
(29, 2, '12345678901234', 'Manajer Mutu', ''),
(31, 4, '12345678901234', 'Manajer Teknis', 'Juni 2020'),
(32, 4, '12345678901234', 'Supervisor Administrasi', 'Juli 2019'),
(33, 1, '12345678901234', 'Manajer Mutu', 'Juli 2019'),
(34, 3, '12345678901234', 'Supervisor Teknis Air dan Air Limbah', 'Juni 2020'),
(35, 1, '111111111122222222', 'Kepala', 'J'),
(36, 1, '111111111122222222', 'Manajer Operasional', 'Juli 2019');

-- --------------------------------------------------------

--
-- Table structure for table `kel_produk`
--

CREATE TABLE `kel_produk` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_kalibrasi`
--

CREATE TABLE `lab_kalibrasi` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_kalibrasi`
--

INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`) VALUES
(5, 4, '12345678901234');

-- --------------------------------------------------------

--
-- Table structure for table `lab_pengujian`
--

CREATE TABLE `lab_pengujian` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_pengujian`
--

INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`) VALUES
(3, 3, '12345678901234');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`) VALUES
(1, 'Lembaga Sertifikasi Produk (LSPRO)'),
(2, 'Lembaga Inspeksi Teknis (LIT)'),
(3, 'Laboratorium Pengujian'),
(4, 'Laboratorium Kalibrasi');

-- --------------------------------------------------------

--
-- Table structure for table `lit`
--

CREATE TABLE `lit` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lit`
--

INSERT INTO `lit` (`id`, `id_lembaga`, `nip`) VALUES
(8, 2, '12345678901234');

-- --------------------------------------------------------

--
-- Table structure for table `lspro`
--

CREATE TABLE `lspro` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lspro`
--

INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`) VALUES
(13, 1, '12345678901234'),
(14, 1, '123456789012345678'),
(15, 1, '111111111122222222');

-- --------------------------------------------------------

--
-- Table structure for table `pd_terakhir`
--

CREATE TABLE `pd_terakhir` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pd_terakhir`
--

INSERT INTO `pd_terakhir` (`id`, `nip`, `pendidikan`, `tahun`) VALUES
(16, '12345678901234', 'SMA Negreri 2 Kabanjahe', '2014-2017'),
(17, '12345678901234', 'SMPN 1 Kabanjahe', '2011-2014'),
(18, '12345678901234', 'S1 Teknik Informatika', '2014-2017'),
(19, '12345678901234', 'TK gelahgolit2', '2016-2023'),
(20, '123456789012345678', 'S1 Teknik Informatika', '2021'),
(21, '123456789012345678', 'S2 Teknik Elektro', '2022'),
(22, '111111111122222222', 'S1 Teknik Informatika', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pengalaman` varchar(200) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `id_lembaga`, `nip`, `pengalaman`, `tahun`) VALUES
(9, 1, '111111111122222222', 'penaglaman', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_pelatihan` varchar(200) NOT NULL,
  `tahun_pelatihan` year(4) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `form_evaluasi` varchar(50) NOT NULL,
  `surat_kerja` varchar(50) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `nip`, `nama_pelatihan`, `tahun_pelatihan`, `penyelenggara`, `sertifikat`, `form_evaluasi`, `surat_kerja`, `bukti`) VALUES
(14, '12345678901234', 'Pelatihan PHP', 2020, 'itera', '4_struktur_membran-sukawi.pdf', '', '', ''),
(15, '12345678901234', 'CSS', 2019, 'ITERA', '', '', '', ''),
(16, '111111111122222222', 'CSS', 2019, 'ITERA', 'p887.pdf', '19.pdf', '6639-19564-1-SM.pdf', 'Struktur_Kabel_dan_Lengkung3.pdf'),
(17, '111111111122222222', 'PHP', 2010, 'UNILA', '11260-39112-1-SM.pdf', '109_-_Candra_Putra_Susanto.pdf', 'PENGGUNAAN_METODE_CENTER_OF_GRAVITY_DALAM_PENENTUA', 'CVSPreprocessing_MSR2004.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_jabatan`
--

INSERT INTO `riwayat_jabatan` (`id`, `nip`, `id_lembaga`, `jabatan`, `tahun`) VALUES
(4, '12345678901234', 2, 'Kepala', '2017'),
(5, '12345678901234', 4, 'Kepala', '2017'),
(7, '12345678901234', 1, 'Ketua', '2022'),
(8, '111111111122222222', 1, 'Kepala', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_linkup`
--

CREATE TABLE `ruang_linkup` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

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
  `telepon_rumah` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`nip`, `nama`, `pangkat`, `tmt_pangkat`, `unit_kerja`, `ttl`, `jenis_kelamin`, `status`, `alamat`, `pendidikan_terakhir`, `telepon_kantor`, `telepon_rumah`) VALUES
('111111111122222222', 'budi', '', '', 'Baristand Industri Bandar Lampung', '', 'Laki-laki', 'Menikah', ' ', 'S1 Teknik Informatika', '', ''),
('12345678901234', 'Hiskia Perdamen Pulungan', 'IVA', '16 November 2021', 'Baristand Industri Bandar Lampung', 'Kabanjahe 26 Januari 1999', 'Laki-laki', 'Belum Menikah', ' Jalkot', 'S1 Teknik Informatika', '081264914260', '20957'),
('123456789012345678', 'ayu', '', '', 'Baristand Industri Bandar Lampung', '', 'Perempuan', 'Belum Menikah', ' ', 'S1 Teknik Informatika', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kel_produk`
--

CREATE TABLE `sub_kel_produk` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tugas` text NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `id_lembaga`, `nip`, `tugas`, `jabatan`) VALUES
(3, 1, '111111111122222222', 'ini Tugas', ''),
(5, 4, '12345678901234', 'Ini Tugas 1', 'Supervisior Administrasi'),
(6, 4, '12345678901234', 'Ini Tugas 2', ''),
(7, 3, '12345678901234', 'Ini Tugas', ''),
(8, 4, '12345678901234', 'Ini Tugas 3', 'Supervisior Administrasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_kal`
--
ALTER TABLE `jabatan_kal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_lit`
--
ALTER TABLE `jabatan_lit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_lspro`
--
ALTER TABLE `jabatan_lspro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_peng`
--
ALTER TABLE `jabatan_peng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_sdm`
--
ALTER TABLE `jabatan_sdm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `kel_produk`
--
ALTER TABLE `kel_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `lab_kalibrasi`
--
ALTER TABLE `lab_kalibrasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `lab_pengujian`
--
ALTER TABLE `lab_pengujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `lit`
--
ALTER TABLE `lit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `lspro`
--
ALTER TABLE `lspro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pd_terakhir`
--
ALTER TABLE `pd_terakhir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_lembaga` (`id_lembaga`);

--
-- Indexes for table `ruang_linkup`
--
ALTER TABLE `ruang_linkup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `sub_kel_produk`
--
ALTER TABLE `sub_kel_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lembaga` (`id_lembaga`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan_kal`
--
ALTER TABLE `jabatan_kal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan_lit`
--
ALTER TABLE `jabatan_lit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jabatan_lspro`
--
ALTER TABLE `jabatan_lspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jabatan_peng`
--
ALTER TABLE `jabatan_peng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jabatan_sdm`
--
ALTER TABLE `jabatan_sdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kel_produk`
--
ALTER TABLE `kel_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lab_kalibrasi`
--
ALTER TABLE `lab_kalibrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab_pengujian`
--
ALTER TABLE `lab_pengujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lit`
--
ALTER TABLE `lit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lspro`
--
ALTER TABLE `lspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pd_terakhir`
--
ALTER TABLE `pd_terakhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ruang_linkup`
--
ALTER TABLE `ruang_linkup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_kel_produk`
--
ALTER TABLE `sub_kel_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jabatan_sdm`
--
ALTER TABLE `jabatan_sdm`
  ADD CONSTRAINT `jabatan_sdm_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `jabatan_sdm_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `kel_produk`
--
ALTER TABLE `kel_produk`
  ADD CONSTRAINT `kel_produk_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `kel_produk_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `lab_kalibrasi`
--
ALTER TABLE `lab_kalibrasi`
  ADD CONSTRAINT `lab_kalibrasi_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `lab_kalibrasi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `lab_pengujian`
--
ALTER TABLE `lab_pengujian`
  ADD CONSTRAINT `lab_pengujian_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `lab_pengujian_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `lit`
--
ALTER TABLE `lit`
  ADD CONSTRAINT `lit_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `lit_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `lspro`
--
ALTER TABLE `lspro`
  ADD CONSTRAINT `lspro_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `lspro_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `pd_terakhir`
--
ALTER TABLE `pd_terakhir`
  ADD CONSTRAINT `pd_terakhir_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `pengalaman_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD CONSTRAINT `riwayat_jabatan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`),
  ADD CONSTRAINT `riwayat_jabatan_ibfk_2` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`);

--
-- Constraints for table `ruang_linkup`
--
ALTER TABLE `ruang_linkup`
  ADD CONSTRAINT `ruang_linkup_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `ruang_linkup_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `sub_kel_produk`
--
ALTER TABLE `sub_kel_produk`
  ADD CONSTRAINT `sub_kel_produk_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `sub_kel_produk_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`),
  ADD CONSTRAINT `tugas_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
