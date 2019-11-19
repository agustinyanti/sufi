-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2019 at 01:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10591173_db_sufi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int(11) NOT NULL,
  `nama_ikan` varchar(15) NOT NULL,
  `frekuensi_warna_merah` int(5) NOT NULL,
  `frekuensi_warna_hijau` int(5) NOT NULL,
  `frekuensi_warna_biru` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `nama_ikan`, `frekuensi_warna_merah`, `frekuensi_warna_hijau`, `frekuensi_warna_biru`) VALUES
(1, 'bandeng', 14582, 1978, 451),
(2, 'ikan asin', 14729, 1559, 4384),
(3, 'ikan lele', 15567, 1711, 2371),
(5, 'ikan patin', 15855, 802, 5284),
(6, 'ikan kakap', 14407, 1535, 641),
(7, 'ikan sapu-sapu', 15191, 1711, 3507),
(9, 'Kakap', 15179, 406, 2534),
(10, 'Koi', 200, 33, 10),
(11, 'ikan pari', 8544, 2859, 172);

-- --------------------------------------------------------

--
-- Table structure for table `pengujian`
--

CREATE TABLE `pengujian` (
  `id_uji` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `nama_ikan` varchar(15) NOT NULL,
  `nilai_R` int(5) NOT NULL,
  `nilai_G` int(5) NOT NULL,
  `nilai_B` int(5) NOT NULL,
  `konsentrasi` decimal(3,2) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengujian`
--

INSERT INTO `pengujian` (`id_uji`, `id_user`, `id_ikan`, `nama_ikan`, `nilai_R`, `nilai_G`, `nilai_B`, `konsentrasi`, `status`) VALUES
(1, 4, 0, 'bandeng', 193, 23, 5, 2.83, 'bahaya'),
(2, 2, 0, 'ikan asin', 195, 18, 47, 3.62, 'bahaya'),
(3, 2, 0, 'ikan lele', 206, 20, 26, 3.44, 'bahaya'),
(4, 7, 0, 'Bandeng', 184, 25, 70, 3.99, 'bahaya'),
(5, 2, 0, 'ikan patin', 210, 9, 57, 1.09, 'bahaya'),
(6, 2, 0, 'ikan kakap', 191, 18, 7, 0.85, 'iritasi mata'),
(7, 4, 0, 'ikan sapu-sapu', 201, 20, 38, 1.02, 'bahaya'),
(8, 4, 0, 'ikan sapu-sapu', 165, 28, 41, 0.92, 'iritasi mata'),
(9, 8, 0, 'Kakap', 201, 5, 27, 0.92, 'iritasi mata'),
(10, 9, 0, 'Koi', 3, 0, 0, 0.01, 'iritasi mata'),
(11, 2, 0, 'ikan pari', 113, 33, 2, 0.58, 'iritasi mata'),
(12, 8, 0, 'kakap', 151, 8, 56, 0.85, 'iritasi mata');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'agustin', 'agustin', 'agustin'),
(3, 'aaaa', 'aaaa', 'aaaa'),
(4, 'Echo', 'test', 'test'),
(5, 'baru', 'baru', 'baru'),
(6, 'kk', 'kk', 'kk'),
(7, 'Dadang', 'dadang01', 'dadang'),
(8, 'Aoban', 'Franky', '123'),
(9, 'Eko', 'Koko', 'kokopanda'),
(10, 'Sastra', 'Caca', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`),
  ADD UNIQUE KEY `nama_ikan` (`nama_ikan`);

--
-- Indexes for table `pengujian`
--
ALTER TABLE `pengujian`
  ADD PRIMARY KEY (`id_uji`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengujian`
--
ALTER TABLE `pengujian`
  MODIFY `id_uji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
