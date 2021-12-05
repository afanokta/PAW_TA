-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 12:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_ta_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `ID_ALBUM` int(11) NOT NULL,
  `ID_PENYANYI` int(11) NOT NULL,
  `JUDUL_ALBUM` varchar(255) DEFAULT NULL,
  `TAHUN_TERBIT_ALBUM` year(4) DEFAULT NULL,
  `DELETED_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`ID_ALBUM`, `ID_PENYANYI`, `JUDUL_ALBUM`, `TAHUN_TERBIT_ALBUM`, `DELETED_AT`) VALUES
(3, 1, 'Monokrom', 2016, NULL),
(6, 2, 'Walk The Talk', 2018, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID_GENRE` int(11) NOT NULL,
  `GENRE` varchar(50) DEFAULT NULL,
  `DELETED_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID_GENRE`, `GENRE`, `DELETED_AT`) VALUES
(1, 'POP', NULL),
(2, 'JAZZ', NULL),
(5, 'ROCK', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `ID_LAGU` int(11) NOT NULL,
  `ID_PENYANYI` int(11) NOT NULL,
  `ID_ALBUM` int(11) DEFAULT NULL,
  `JUDUL_LAGU` varchar(255) DEFAULT NULL,
  `FILE_LAGU` varchar(255) DEFAULT NULL,
  `TAHUN_TERBIT_LAGU` year(4) DEFAULT NULL,
  `ID_GENRE` int(11) NOT NULL,
  `DELETED_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`ID_LAGU`, `ID_PENYANYI`, `ID_ALBUM`, `JUDUL_LAGU`, `FILE_LAGU`, `TAHUN_TERBIT_LAGU`, `ID_GENRE`, `DELETED_AT`) VALUES
(3, 1, 3, 'Manusia Kuat', '1041543358.mp3', 2016, 1, NULL),
(4, 1, 3, 'Pamit', '1500419750.mp3', 2016, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mendengarkan`
--

CREATE TABLE `mendengarkan` (
  `ID_LAGU` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyanyi`
--

CREATE TABLE `penyanyi` (
  `ID_PENYANYI` int(11) NOT NULL,
  `NAMA_PENYANYI` varchar(100) DEFAULT NULL,
  `TGL_LAHIR_PENYANYI` date DEFAULT NULL,
  `FOTO` varchar(255) DEFAULT NULL,
  `DELETED_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyanyi`
--

INSERT INTO `penyanyi` (`ID_PENYANYI`, `NAMA_PENYANYI`, `TGL_LAHIR_PENYANYI`, `FOTO`, `DELETED_AT`) VALUES
(1, 'Tulus', '1987-08-20', '2088631787.jpg', NULL),
(2, 'Pamungkas', '1993-04-14', '709745213.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `STATUS_USER` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `DELETED_AT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `STATUS_USER`, `EMAIL`, `DELETED_AT`) VALUES
(1, 'Andi 123', '$2y$10$ATwmqZw.al.W4fp/c4D0ZuSHx5lt0mVvU4zIUYesSBmJRfOSezXDS', 'ADMIN', 'andi@gmail.com', NULL),
(7, 'rafli', '$2y$10$iYAq8TcvoI6OO/26uV/39uXjYK5wfst8C7GSIqaQr1RNFsZeg8bZG', 'REGULER', 'rafli@gmail.com', NULL),
(10, 'afan', '$2y$10$gzC6HGKRL.3K./4ljR9NEeKlTfqnejykNPFhYlTXHilFQoiUNoY2W', 'ADMIN', 'afan@gmail.com', NULL),
(11, 'candra', '$2y$10$c7gAF0KnPuN6U/AhzUZPVOw5Q8PhV5idcEPfvOHmSDPTkEpIAmITi', 'REGULER', 'candra@gmail.com', NULL),
(12, 'afan123', '$2y$10$uCE7U6utR3sWC0r6wQOFQ.J1qM5zUPbA3GnmOFYzJREiB9FkuMgxO', 'REGULER', 'afan123@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`ID_ALBUM`),
  ADD UNIQUE KEY `ALBUM_PK` (`ID_ALBUM`),
  ADD KEY `MERILIS_FK` (`ID_PENYANYI`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_GENRE`),
  ADD UNIQUE KEY `GENRE_PK` (`ID_GENRE`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`ID_LAGU`),
  ADD UNIQUE KEY `LAGU_PK` (`ID_LAGU`),
  ADD KEY `MEMPUNYAI_FK` (`ID_GENRE`),
  ADD KEY `MENYANYIKAN_FK` (`ID_PENYANYI`),
  ADD KEY `MEMILIKI_FK` (`ID_ALBUM`);

--
-- Indexes for table `mendengarkan`
--
ALTER TABLE `mendengarkan`
  ADD PRIMARY KEY (`ID_LAGU`,`ID_USER`),
  ADD UNIQUE KEY `MENDENGARKAN_PK` (`ID_LAGU`,`ID_USER`),
  ADD KEY `MENDENGARKAN_FK2` (`ID_LAGU`),
  ADD KEY `MENDENGARKAN_FK` (`ID_USER`);

--
-- Indexes for table `penyanyi`
--
ALTER TABLE `penyanyi`
  ADD PRIMARY KEY (`ID_PENYANYI`),
  ADD UNIQUE KEY `PENYANYI_PK` (`ID_PENYANYI`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `USER_PK` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `ID_ALBUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_GENRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `ID_LAGU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `penyanyi`
--
ALTER TABLE `penyanyi`
  MODIFY `ID_PENYANYI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`ID_PENYANYI`) REFERENCES `penyanyi` (`ID_PENYANYI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lagu`
--
ALTER TABLE `lagu`
  ADD CONSTRAINT `lagu_ibfk_1` FOREIGN KEY (`ID_GENRE`) REFERENCES `genre` (`ID_GENRE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lagu_ibfk_2` FOREIGN KEY (`ID_PENYANYI`) REFERENCES `penyanyi` (`ID_PENYANYI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lagu_ibfk_3` FOREIGN KEY (`ID_ALBUM`) REFERENCES `album` (`ID_ALBUM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mendengarkan`
--
ALTER TABLE `mendengarkan`
  ADD CONSTRAINT `mendengarkan_ibfk_1` FOREIGN KEY (`ID_LAGU`) REFERENCES `lagu` (`ID_LAGU`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mendengarkan_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
