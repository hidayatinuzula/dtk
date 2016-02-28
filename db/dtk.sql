-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 03:48 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ttrayek`
--

CREATE TABLE IF NOT EXISTS `ttrayek` (
  `id_angkot` int(11) NOT NULL,
  `no_angkot` varchar(10) NOT NULL,
  `trayek_asal` varchar(40) NOT NULL,
  `trayek_tujuan` varchar(40) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `tarif_dekat` int(11) NOT NULL,
  `tarif_jauh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `email`, `phone`, `created_date`) VALUES
(1, 'hidayatinuzula', '25d55ad283aa400af464c76d713c07ad', 'idayzula16@gmail.com', '085778917220', '2016-02-23 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ttrayek`
--
ALTER TABLE `ttrayek`
  ADD PRIMARY KEY (`id_angkot`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttrayek`
--
ALTER TABLE `ttrayek`
  MODIFY `id_angkot` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
