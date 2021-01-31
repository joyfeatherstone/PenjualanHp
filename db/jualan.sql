-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 05:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko_hp`
--

CREATE TABLE `toko_hp` (
  `ID_HP` int(11) NOT NULL,
  `Merk_HP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Spesifikasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gambar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko_hp`
--

INSERT INTO `toko_hp` (`ID_HP`, `Merk_HP`, `Harga`, `Spesifikasi`, `Gambar`) VALUES
(11, 'XIAOMI', 1200000, 'Murah', 'images/3037aa54-cc1a-4c53-80b3-64ccedf52a70.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko_hp`
--
ALTER TABLE `toko_hp`
  ADD PRIMARY KEY (`ID_HP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko_hp`
--
ALTER TABLE `toko_hp`
  MODIFY `ID_HP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
