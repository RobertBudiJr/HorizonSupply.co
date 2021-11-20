-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 01:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_petugas`, `username`, `password`) VALUES
(1, 'Jon', 'Jon123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_barang` int(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id_barang` int(11) NOT NULL,
  `judul_barang` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `foto2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id_barang`, `judul_barang`, `deskripsi`, `harga`, `foto`, `foto2`) VALUES
(1, 'DIE4U Longsleeve', 'Classic fit white longsleeve with cuffs, featuring imagery from the music video for Bring Me The Horizon\'s new single DiE4u.\r\n\r\n100% cotton.\r\n\r\nWash with like colours at 30 degrees. Do not tumble dry. Iron on reverse', 776000, 'http://localhost/TokoOnline/src/HSC_DiE4u_Longsleeve_Front_grande.jpg', 'http://localhost/TokoOnline/src/HSC_DiE4u_Longsleeve_Back_500x_crop_center@2x.jpg'),
(2, 'Grafter Jacket', 'Black heavy cotton work style jacket featuring Bring Me The Horizon\'s hex printed on the back, Horizon Supply Co embroidered patch on the chest, H enamel pin on collar and orange lining. The zip fastened jacket has 3 exterior pockets and 1 interior.\r\n\r\nOuter - 100% Cotton, Lining - 100% nylon\r\n\r\nWash low. Do not tumble dry. Do not iron.\r\n', 2328000, 'http://localhost/TokoOnline/src/HSC_Grafter_Jacket_Frontcopy_grande.jpg', 'http://localhost/TokoOnline/src/HSC_Grafter_Jacket_Back_grande.jpg'),
(3, 'Survival Horror Hoodie', 'A classic black pullover hoodie featuring a large Hex front print and the back is home to a printed patch of the artwork from Bring Me The Horizon\'s new EP, POST HUMAN: SURVIVAL HORROR. The patch has raw hems designed to fray over time. \r\n\r\nWash at 30 with like colours. Do not tumble dry. Iron on reverse. ', 1365000, 'http://localhost/TokoOnline/src/HSC_Hoodie_SurvivalHorror_B_F01_grande.jpg', 'http://localhost/TokoOnline/src/HSC_Hoodie_SurvivalHorror_B_B01_grande.jpg'),
(4, 'Kingslayer Longsleeve', 'A classic fit, white longsleeve t-shirt with front, back and sleeve prints inspired by the Bring Me The Horizon track ‘Kingslayer ft Babymetal’. The right sleeve reads \'I WANNA BE A KINGSLAYER\' whilst the left reads \'HSC_0114  S.H-21\'.\r\n\r\n100% cotton.\r\nWash with like colours at 30 degrees. Do not tumble dry. Iron on reverse\r\n\r\nArtwork by Death and Milk', 780000, 'http://localhost/TokoOnline/src/HSC_Kingslayer_L_S_Front_grande.jpg', 'http://localhost/TokoOnline/src/HSC_Kingslayer_L_S_Back_grande.jpg'),
(5, 'Survival Horror T-Shirt', 'Classic white T-Shirt featuring artwork from the new Bring Me The Horizon EP POST HUMAN: SURVIVAL HORROR\r\n\r\n100% combed organic cotton (Quality cotton grown without the use of herbicides or pesticides - GOTS Global Organic Textile Standard - certified).\r\n\r\nWash at 30 degrees. Do not tumble dry. Iron Low.', 585000, 'http://localhost/TokoOnline/src/Survival_Horror_Front_grande.jpg', 'http://localhost/TokoOnline/src/Survival_Horror_Back_grande.jpg'),
(6, 'BMTH Necklale', 'Necklace with BMTH pendant.\r\n\r\n16\" adjustable chain.\r\n\r\nComes in a black velvet branded pouch.\r\n\r\nAvailable in black chrome, gold and silver.\r\n\r\nThis is costume jewellery, so please avoid direct contact with perfumes, hairspray and water.\r\nNickel and gilt coated iron.', 244000, 'http://localhost/TokoOnline/src/HSC_BMTHNecklace_Black_07389c4b-f05c-403b-8b8b-a6111a1a3c8e_grande.jpg', 'http://localhost/TokoOnline/src/HSC_BMTHNecklace_Gold_41e9ae61-2b71-4c6b-9011-dc556ef095ec_grande.jpg'),
(7, '0114 Beanie', 'A staple grey beanie featuring a Horizon Supply Co \'0114\' patch stitched on the front.', 390000, 'http://localhost/TokoOnline/src/HSC_Beanie_C01_grande.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`),
  ADD KEY `id_cart` (`id_cart`,`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_detail_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `store` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
