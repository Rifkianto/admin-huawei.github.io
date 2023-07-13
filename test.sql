-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 07:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(8, 'Rifki', '2a5c4c5a5ba1c332279685ddec507cd9', 'Rifkianto Ganggi', NULL),
(9, 'Vigo', 'b737e588c11314cecf35749cb7684be2', 'Vigo Afi Antony', NULL),
(10, 'Ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'Ahmad', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `spek` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk`, `spek`, `jenis`, `gambar`, `harga`) VALUES
(2, 'Mate X2', 'HUAWEI Kirin 9000Octa-coreEMUI 11.0 (Based on Android 10)8 GB RAM + 256/512 GB ROM50 MP Ultra Vision Camera16 MP Selfie Camera', 'smartphone', 'matexs21.png', 41000000),
(3, 'Matebook X Pro', 'Windows 10 Home13.9 inches11th Gen Intel® Core™ i7-1165G7 Processor16 GB 3733MHz512 GB / 1 TB NVMe PCIe SSD', 'laptop', 'matebook_x_pro1.png', 12500000),
(4, 'Huawei Watch 3', '1.43 inches AMOLED color screenSupport full-screen touch operations466 x 466 pixelsROM 16 GBRAM 2 GB5 ATM water-resistant', 'accessories', 'watch 3.jpg', 9500000),
(5, 'Matepad Pro', '12.6 inches*WQXGA 2560 x 1600***, 240 PPI OLEDHUAWEI Kirin 9000EHarmonyOS 2256 GB*13 MP/8 MP', 'tablet', 'matepad_pro.png', 8000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
