-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bm_datasiswa`
--

CREATE TABLE `bm_datasiswa` (
  `siswa_id` varchar(12) NOT NULL,
  `siswa_nama` varchar(100) NOT NULL,
  `siswa_jurusan` set('RPL','MM','KEP','FAR','PB','AK','AP') NOT NULL,
  `siswa_tahunmasuk` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bm_datasiswa`
--

INSERT INTO `bm_datasiswa` (`siswa_id`, `siswa_nama`, `siswa_jurusan`, `siswa_tahunmasuk`) VALUES
('12345', 'Siswa 1', 'RPL', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `bm_konten`
--

CREATE TABLE `bm_konten` (
  `konten_id` int(12) NOT NULL,
  `konten_judul` varchar(100) NOT NULL,
  `konten_isi` text NOT NULL,
  `konten_kategori` enum('identitas','profil','jurusan','berita','pengumuman','jadwal','lsp','bkk','kesiswaan','galeri') NOT NULL,
  `konten_subkategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bm_user`
--

CREATE TABLE `bm_user` (
  `user_username` varchar(12) NOT NULL,
  `user_password` varchar(12) NOT NULL,
  `user_status` varchar(12) NOT NULL,
  `user_active` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bm_user`
--

INSERT INTO `bm_user` (`user_username`, `user_password`, `user_status`, `user_active`) VALUES
('adminweb', 'adminweb', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bm_datasiswa`
--
ALTER TABLE `bm_datasiswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `bm_konten`
--
ALTER TABLE `bm_konten`
  ADD PRIMARY KEY (`konten_id`);

--
-- Indexes for table `bm_user`
--
ALTER TABLE `bm_user`
  ADD PRIMARY KEY (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bm_konten`
--
ALTER TABLE `bm_konten`
  MODIFY `konten_id` int(12) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
