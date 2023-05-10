-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 04:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'Christina', 'christina@gmail.com', '1234'),
(2, 'Arinda', 'arinda@gmail.com', '1212'),
(3, 'Michael', 'michael@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `password`) VALUES
(1, 'member1', 'member1@gmail.com', 'member1'),
(2, 'member2', 'member2@gmail.com', 'member2'),
(3, 'member3', 'member3@gmail.com', 'member3'),
(4, 'Rezky', 'rezky@gmail.com', '1234'),
(5, 'eggy', 'eggy@gmail.com', '0000'),
(6, 'putra', 'sebrang@gmail.com', 's'),
(7, 'michael', 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jumlah`) VALUES
(12, 'King Size Bed', 20),
(13, 'Single Bed', 20),
(14, 'TV', 20),
(15, 'AC', 20),
(16, 'Telepon', 20),
(17, 'Meja', 20),
(18, 'Sofa', 20),
(19, 'Lemari', 20),
(20, 'Pemanas Air', 20),
(21, 'Bathup', 20),
(22, 'Hair Dryer', 20);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tgl_checkin`, `tgl_checkout`, `nama`, `tipe`, `id_member`, `id_room`) VALUES
(10, '2023-10-10', '2023-10-12', 'arsel', '3', 1, 102),
(11, '2023-10-10', '2023-10-20', 'michael', '3', 1, 203),
(12, '2023-02-10', '2023-03-12', 'michaellagi', '3', 1, 305),
(13, '2023-10-10', '2023-10-20', 'arin', '3', 2, 102),
(14, '2023-05-07', '2023-05-08', 'Michael', '3', 1, 305),
(15, '2023-05-20', '2023-05-21', 'Ryanda', '1', 1, 103),
(16, '2023-05-10', '2023-05-12', 'Arsel', '1', 1, 101),
(17, '2023-05-11', '2023-05-19', 'Chris', '1', 1, 101);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `no_room` int(3) NOT NULL,
  `kapasitas` int(1) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `no_room`, `kapasitas`, `harga`, `id_tipe`, `status`) VALUES
(1, 101, 2, '500000', 1, 'Tersedia'),
(2, 102, 2, '500000', 1, 'Tersedia'),
(3, 103, 2, '500000', 1, 'Tersedia'),
(4, 104, 4, '750000', 1, 'Tersedia'),
(5, 105, 4, '750000', 1, 'Tersedia'),
(6, 201, 2, '800000', 2, 'Tersedia'),
(7, 202, 2, '800000', 2, 'Tersedia'),
(8, 203, 2, '800000', 2, 'Tersedia'),
(9, 204, 4, '1000000', 2, 'Tersedia'),
(10, 205, 4, '1000000', 2, 'Tersedia'),
(11, 301, 2, '1000000', 3, 'Tersedia'),
(12, 302, 2, '1000000', 3, 'Tersedia'),
(13, 303, 2, '1000000', 3, 'Tersedia'),
(14, 304, 4, '1250000', 3, 'Tersedia'),
(15, 305, 4, '1250000', 3, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `email`, `job`, `password`) VALUES
(1, 'Staff1', 'staff1@gmail.com', 'Cleaning Service', 'staff1'),
(2, 'Staff2', 'staff2@gmail.com', 'Resepsionis', 'staff2'),
(3, 'Staff3', 'staff3@gmail.com', 'Porter', 'staff3'),
(5, 'Michael', 'm@gmail.com', 'Bos', '1234'),
(7, 'Arselll', 'arsel@gmail.com', 'Magang', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(11) NOT NULL,
  `tipe_room` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `tipe_room`, `deskripsi`) VALUES
(1, 'Standard Room', 'Kamar dengan ukuran standard yang memiliki desain minimalis dan nyaman sehingga dapat menjadi pilihan yang tepat bagi para tamu yang mencari akomodasi yang terjangkau dan nyaman.'),
(2, 'Deluxe Room', 'Dilengkapi dengan fasilitas modern dan elegan, kamar ini memberikan pengalaman istimewa bagi para tamu yang mencari tempat yang nyaman dan mewah untuk bermalam.'),
(3, 'Suite Room', 'Suite Room adalah pilihan terbaik untuk Anda yang ingin merasakan kemewahan dan ruang yang luas dengan fasilitas mewah dan modern selama liburan Anda.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD UNIQUE KEY `nama` (`id_reservasi`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `room_ibfk_1` (`id_tipe`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id_tipe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
