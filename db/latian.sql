-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 06:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latian`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `durasi` int(11) NOT NULL,
  `jumlah_pemain` int(11) NOT NULL,
  `no_lapangan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deposito` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `no_telepon`, `tanggal`, `waktu`, `durasi`, `jumlah_pemain`, `no_lapangan`, `harga`, `deposito`, `keterangan`) VALUES
(56, 'persigal', '081392316329', '2023-06-10', '20:00:00', 2, 10, 4, 200000, '200000', 'bayar tf'),
(57, 'persitim', '0838232167821', '2023-06-11', '16:00:00', 1, 10, 1, 100000, '100000', 'bayar cash di tempat'),
(58, 'meteor fc', '083863530212', '2023-06-12', '15:00:00', 2, 10, 1, 200000, '200000', 'bayar cash shap'),
(59, 'kesy apriansyah', '08138888888888', '2023-06-12', '17:00:00', 2, 10, 1, 200000, '200000', 'utang'),
(60, 'denpa fc', '088183633580', '2023-06-11', '20:00:00', 2, 10, 2, 200000, '200000', 'cash'),
(61, 'kesy apriansyah', '08138888888888', '2023-06-15', '20:43:00', 1, 10, 2, 100000, '200000', 'cash'),
(62, 'bayoran fc', '081234351773', '2023-06-18', '22:00:00', 2, 10, 2, 0, '200000', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Kesy Apriansyah', '202cb962ac59075b964b07152d234b70'),
('Somad', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `username` varchar(25) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`username`, `password`) VALUES
('admingaul', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `isipesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `isipesan`) VALUES
(2, 'ciparine sebelah ndi mas'),
(3, 'sepatu ku ketinggalan mas simpen na dong'),
(4, 'mas anu banyu nginume ne nang kono seger banget'),
(5, 'mas sewa sepatu ne di muraih dong'),
(6, 'bang buka 24 jam dong'),
(7, 'lapangan nya enak bang'),
(8, 'PENJAGANE GANTENG'),
(9, 'bang tutup lamain dong'),
(10, 'innfo hari libur buka ngga mas'),
(11, 'info mas ada turnamen ngaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
