-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2022 at 01:08 PM
-- Server version: 5.7.37-log
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reservasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin01', 'meongmeong1\r\n\r\n\r\n'),
('admin2', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_user`
--

CREATE TABLE `relasi_user` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `tgl_check-in` date NOT NULL,
  `tgl_check-out` date NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `No HP` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`tgl_check-in`, `tgl_check-out`, `Nama`, `Alamat`, `No HP`) VALUES
('2022-05-26', '2022-05-27', 'Hasna Y', 'Cepu', 1234567890),
('2022-05-03', '2022-05-05', 'Afi', 'Cepu', 123567),
('2022-05-09', '2022-05-10', 'Salma', 'Cepu', 1234567897),
('2022-05-15', '2022-05-16', 'Dea', 'Cepu', 12356787);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_booking` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(13) NOT NULL,
  `email` text NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `jumlah_kamar` int(10) NOT NULL,
  `tgl_ci` date NOT NULL,
  `tgl_co` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_booking`, `nama`, `alamat`, `telepon`, `email`, `tipe_kamar`, `jumlah_kamar`, `tgl_ci`, `tgl_co`) VALUES
('B001', 'afi', 'cepu', 81234556, 'afi@gmail.com', 'Deluxe', 1, '2022-06-14', '2022-06-15'),
('B002', 'salma', 'cepu', 63176573, 'salma@gmail.com', 'Suite', 2, '2022-06-21', '2022-06-22'),
('B003', 'Dea Salsabilla ', 'Sitimulyo Lr. IV/7 Cepu', 123456, 'deasalsabilla19@gmail.com', 'Deluxe', 2, '2022-06-22', '2022-06-23'),
('B004', 'habizar', 'cepu', 64747687, 'habizarroro@gmail.com', 'Deluxe', 5, '2022-06-22', '2022-06-25'),
('B005', 'siapa', 'aku siapa', 123456789, 'aku@gmail.com', 'Deluxe', 10, '2022-06-25', '2022-06-26'),
('B006', 'nana', 'balun', 3456789, 'nana@gmail.com', 'Deluxe', 2, '2022-06-26', '2022-06-27'),
('B007', 'rika', 'sidodadi', 3456789, 'rika@gmail.com', 'Deluxe', 2, '2022-06-22', '2022-06-23'),
('B008', 'santi', 'blora', 11223344, 'santi@gmail.com', 'Deluxe', 4, '2022-06-26', '2022-06-27'),
('B009', 'farah', 'wonorejo', 12345678, 'farah@gmail.com', 'Deluxe', 2, '2022-06-24', '2022-06-26'),
('B010', 'andini', 'blora', 1234556, 'adfhg@gmail.com', 'Deluxe', 2, '2022-06-23', '2022-06-24'),
('B011', 'cici', 'cepu', 1234567, 'cici@gmail.com', 'Deluxe', 2, '2022-06-24', '2022-06-25'),
('B012', 'faiz', 'jakarta', 23456789, 'faiz@gmail.com', 'Deluxe', 2, '2022-06-23', '2022-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statuskmr`
--

CREATE TABLE `tb_statuskmr` (
  `no_kamar` int(10) NOT NULL,
  `Tipe_kamar` varchar(30) NOT NULL,
  `status_kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_statuskmr`
--

INSERT INTO `tb_statuskmr` (`no_kamar`, `Tipe_kamar`, `status_kamar`) VALUES
(101, 'Junior Suite', 'Occupied'),
(102, 'Deluxe', 'Vacant'),
(103, 'Deluxe', 'Vacant'),
(104, 'Junior Suite', 'Vacant'),
(105, 'Deluxe', 'Occupied'),
(106, 'Deluxe', 'Occupied'),
(107, 'Deluxe', 'Vacant'),
(108, 'Junior Suite', 'Occupied'),
(109, 'Junior Suite', 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('coba', '$2y$10$5/4J4IzegudyuoGVSQSoFe85QfDmL5Rgm.72p1fHxE2kOO3XjdIG.'),
('admin', '$2y$10$67WZToJfmsYMw0DjXdeX3.le/9AnHx/ukjQKhukQ0yTYeFl7ps1K2'),
('aku', '$2y$10$Bo64fmblB0QehbgGcDMbjOfD5gz0AqJK2kEfGzeczQJS3D5cX0k/C'),
('dea', '$2y$10$EDjFRYV78RqmkIXrcUXswu4DfsJRQCqAmXhIjmK9c2JT6Yp5iyE5a'),
('afi', '$2y$10$P/h6Wm0i1I6joltPj8X/1enEGc8Cqe.kbETkstY0.hPCtQ.ykTFbK'),
('andini', '$2y$10$u9pM4QSEZqgmF4Rybc3AyOlJfZjpz2c6vOHUe.WbWShhOZmOpmFfK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relasi_user`
--
ALTER TABLE `relasi_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_booking`),
  ADD UNIQUE KEY `id_booking` (`id_booking`);

--
-- Indexes for table `tb_statuskmr`
--
ALTER TABLE `tb_statuskmr`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relasi_user`
--
ALTER TABLE `relasi_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasi_user`
--
ALTER TABLE `relasi_user`
  ADD CONSTRAINT `relasi_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `relasi_user_ibfk_2` FOREIGN KEY (`password`) REFERENCES `user` (`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
