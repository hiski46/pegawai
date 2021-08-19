-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 07:03 PM
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
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `nip` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`nip`, `nama`, `pendidikan_terakhir`) VALUES
('123456789', 'Hiskia Perdamen Pulungan', 'sma'),
('222222222', 'ayu', 'sma'),
('987654321', 'aswsda', 's1');

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
-- Table structure for table `lab_kalibrasi`
--

CREATE TABLE `lab_kalibrasi` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_kalibrasi`
--

INSERT INTO `lab_kalibrasi` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES
(25, 4, '123456789', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_pengujian`
--

CREATE TABLE `lab_pengujian` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_pengujian`
--

INSERT INTO `lab_pengujian` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES
(1, 3, '987654321', '', '', '', ''),
(5, 3, '123456789', '', '', '', '');

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
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lit`
--

INSERT INTO `lit` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES
(7, 2, '123456789', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lspro`
--

CREATE TABLE `lspro` (
  `id` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `ruang_lingkup` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kel_produk` varchar(50) NOT NULL,
  `sub_kel_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lspro`
--

INSERT INTO `lspro` (`id`, `id_lembaga`, `nip`, `ruang_lingkup`, `jabatan`, `kel_produk`, `sub_kel_produk`) VALUES
(14, 1, '222222222', '', '', '', ''),
(16, 1, '222222222', '', 'Evaluator', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nip` varchar(9) NOT NULL,
  `nama_pelatihan` varchar(50) NOT NULL,
  `tahun_pelatihan` year(4) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `form_evaluasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------



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
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`nip`);

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
-- AUTO_INCREMENT for table `lab_kalibrasi`
--
ALTER TABLE `lab_kalibrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lab_pengujian`
--
ALTER TABLE `lab_pengujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lit`
--
ALTER TABLE `lit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lspro`
--
ALTER TABLE `lspro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `sdm` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
