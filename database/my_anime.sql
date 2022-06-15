-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2022 at 10:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `listAnime`
--

CREATE TABLE `listAnime` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listAnime`
--

INSERT INTO `listAnime` (`id`, `nama`) VALUES
(1, 'sdsd'),
(2, 'spy x family'),
(3, 'one punch man'),
(4, 'kimi no nawa'),
(5, 'barakamon'),
(6, 'sdaassd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `gambar`, `deskripsi`, `toko`) VALUES
(14, 'Action figure One Piece Monkey D Luffy statue gear 3 g3 wano kuni arc', 'Rp530.000', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/16/73fff7de-25bc-4deb-821d-c8b0b3b15ae9.jpg', 'Action figure One Piece - Monkey D. Luffy Gear 3 Wano Kuni Arc version - tinggi produk : 28cm - tidak ada artikulasi - berat produk : 1260 gr - lengkap dengan box sesuai dengan foto - dimensi box : 26 x 26 x 31cm', 'https://www.tokopedia.com/indoactionfigure/action-figure-one-piece-monkey-d-luffy-statue-gear-3-g3-wano-kuni-arc?src=topads'),
(15, 'ACTION FIGURE ONE PIECE LUFFY ZERO PORTGAS D ACE MODEL', 'Rp115.000', 'https://images.tokopedia.net/img/cache/900/product-1/2020/5/1/64608365/64608365_f58d0bf7-0e5d-43e9-b673-97bad0a9b8ce_1125_1125', 'ACTION FIGURE ONE PIECE LUFFY ZERO PORTGAS D ACE MODEL KWS Packaging : With Box +Detail Sangat Bagus Sesuai Foto +Ukuran 14 cm Medium Size +Material High Quality Pvc, Padat', 'https://www.tokopedia.com/tcoll/action-figure-one-piece-luffy-zero-portgas-d-ace-model?extParam=ivf%3Dfalse%26src%3Dsearch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$PIbm1ACc2HheRQx7zNBsJu2lIK06FUHzN4gMqbWp4P7XuA1Cpb6T6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listAnime`
--
ALTER TABLE `listAnime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listAnime`
--
ALTER TABLE `listAnime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
