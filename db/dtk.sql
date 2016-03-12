-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 10:08 AM
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
-- Table structure for table `tjenis_trayek`
--

CREATE TABLE IF NOT EXISTS `tjenis_trayek` (
  `id_jenis_trayek` int(10) NOT NULL,
  `jenis_trayek` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjenis_trayek`
--

INSERT INTO `tjenis_trayek` (`id_jenis_trayek`, `jenis_trayek`) VALUES
(1, 'Trayek Angkutan Dalam Kota'),
(2, 'Trayek Angkutan Antar Kota Dalam Propinsi');

-- --------------------------------------------------------

--
-- Table structure for table `ttrayek`
--

CREATE TABLE IF NOT EXISTS `ttrayek` (
  `id_angkot` int(11) NOT NULL,
  `no_angkot` varchar(30) NOT NULL,
  `trayek_asal` varchar(40) NOT NULL,
  `trayek_tujuan` varchar(40) NOT NULL,
  `rute` varchar(500) NOT NULL,
  `tarif_dekat` int(11) NOT NULL,
  `tarif_jauh` int(11) NOT NULL,
  `id_jenis_trayek` int(10) NOT NULL,
  `id_warna_angkot` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttrayek`
--

INSERT INTO `ttrayek` (`id_angkot`, `no_angkot`, `trayek_asal`, `trayek_tujuan`, `rute`, `tarif_dekat`, `tarif_jauh`, `id_jenis_trayek`, `id_warna_angkot`) VALUES
(1, 'D.01(Jalur 1)', 'Depok I Dalam', 'Terminal Depok', 'Terminal Depok – Jl. A.R. Hakim – Jl. Ridwan Rais – Jl. Taufiqurrahman – Jl. Ridwan Rais – Jl. A.R. Hakim – Jl. Nusantara Raya – Jl. Salak – Jl. Rambutan – Jl. Gurame – Jl. Tenggiri – Jl. Nuri – Jl. Merpati – Jl. Melati – Jl. Nusantara Raya – Jl. Dewi Sartika – Jl. Margonda Raya – Terminal Depok', 3000, 4000, 1, 4),
(2, 'D.01(Jalur 2)', 'Depok I Dalam', 'Terminal Depok', 'Terminal Depok – Jl. A.R Hakim – Jl. Ridwan Rais – Jl.Taufiqurrahman – Jl. Ridwan Rais – Jl. A.R. Hakim–Nusantara Raya – Jl. Melati – Jl. Merpati – Jl. Nuri – Jl. Tenggiri –Jl. Gurame – Jl. Rambutan – Jl. Salak – Jl. Dewi Sartika – Jl. Margonda Raya – Terminal Depok', 3000, 4000, 1, 4),
(3, 'D.02', 'Depok II', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Siliwangi – Jl. Tole Iskandar – Jl. Kemakmuran –                    Jl. Proklamasi –  Jl. Keadilan – Jl. Indragiri – Jl. Mahakam –        Jl. Mahoni – Jl.Jati – Jl. Keadilan – Jl. Bahagia, putar depan Polsek Sukamjaya – Jl. Bahagia – Jl. Proklamasi –                     Jl. Kemakmuran – Jl. Tole Iskandar – Jl. Siliwangi – Jl. Margonda Raya – Terminal Depok', 3000, 5000, 1, 1),
(4, 'D.03', 'Parung', 'Terminal Depok', 'Terminal Depok – Jl. A.R. Hakim – Nusantara Raya – Jl. Sawangan Raya – Jl. Muchtar Raya – Jl. Raya Parung – Terminal Parung – Jl. Raya Parung – Jl. Muhtar Raya –              Jl. Sawangan Raya – Jl. Rambutan – Jl.Mangga – Jl. Nusantara Raya – Jl. Dewi Sartika – Jl. Margonda Raya – Terminal Depok', 3000, 6000, 1, 1),
(5, 'D.04(Jalur 1)', 'Srengseng Sawah', 'Terminal Depok', 'Terminal Depok – Jl. A.R Hakim – Jl.Nusantara Raya – Jl. H. Asmawi – Jl. Kukusan – Srengseng Sawah – Jl. Kukusan – Jl. H. Asmawi – Jl.Nusantara Raya – Jl. Dewi Sartika – Jl. Margonda Raya – Terminal Depok', 3000, 5000, 1, 1),
(6, 'D.04(Jalur 2)', 'Srengseng Sawah', 'Stasiun Depok Baru', 'Stasiun Depok Baru – Jl. H. Asmawi – Jl. Kukusan – Srengseng Sawah – Jl. Kukusan – Jl. H. Asmawi – Stasiun Depok Baru', 3000, 4000, 1, 1),
(7, 'D.05', 'Bojong Gede', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Kartini – Jl. Citayam – Bojonggede – Jl. Citayam – Jl. Kartini – Jl. Margonda Raya –  Terminal Depok', 3000, 7000, 1, 5),
(8, 'D.06', 'Pasar Cisalak', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Siliwangi – Jl. Tole Iskandar – Simpangan (Jl. Raya Jakarta – Bogor) – Ps. Cisalak – Simpangan (Jl. Raya Jakarta – Bogor) –  Jl. Tole Iskandar – Jl. Siliwangi – Jl. Margonda Raya – Terminal Depok', 3000, 7000, 1, 3),
(9, 'D.07', 'Rawa Denok', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Dewi Sartika – Jl. Pitara – Jemb. Serong – Rawa Denok – Jemb. Serong – Jl. Pitara – Jl. Dewi Sartika –  Jl. Margonda Raya – Terminal Depok', 3000, 6000, 1, 2),
(10, 'D.07A', 'Citayam', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Dewi Sartika – Jl. Pitara – Jemb. Serong – Jl. Bojong gede Raya – Citayam – Jl. Bojonggede Raya – Jemb. Serong – Jl. Pitara –  Jl. Dewi Sartika – Jl. Margonda Raya – Terminal Depok', 3000, 7000, 1, 2),
(11, 'D.08', 'Kampung Sawah', 'Terminal Depok', 'Terminal Depok – Belok Kanan Jl. Margonda Raya – Jl. Siliwangi – Jl. Tole Iskandar – Jl. H. Dimun (BBM) –  Jl. Divisi I Kostrad – Jl. Abd. Gani Raya – Jl. Abd. Gani I – Jl. Abd. Gani II – Jl. Al Ridho – Kp. Sawah – Jl. Al Ridho – Jl. Abd. Gani II – Jl. Abd. Gani I –     Jl. Abd. Gani Raya – Jl. Divisi I Kostrad – Jl. H. Dimun (BBM) – Jl. Tole Iskandar – Jl. Siliwangi – Terminal Depok', 3000, 5000, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama`, `username`, `password`, `email`, `phone`, `created_date`) VALUES
(1, 'Hidayati Nuzula', 'hidayatinuzula', '25d55ad283aa400af464c76d713c07ad', 'idayzula16@gmail.com', '085778917220', '2016-02-23 22:00:00'),
(2, 'Riska Apriliyanti', 'riskaapriliya', '25d55ad283aa400af464c76d713c07ad', 'apriliyantiriska@gmail.com', '085780917300', '2016-03-03 21:24:36'),
(3, 'Roniarta Sitinjak', 'artasitinjak', '25d55ad283aa400af464c76d713c07ad', 'arta.sitinjak@gmail.com', '081213324164', '2016-03-05 13:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `twarna_angkot`
--

CREATE TABLE IF NOT EXISTS `twarna_angkot` (
  `id_warna_angkot` int(10) NOT NULL,
  `warna_angkot` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twarna_angkot`
--

INSERT INTO `twarna_angkot` (`id_warna_angkot`, `warna_angkot`) VALUES
(1, 'Biru Dongker'),
(2, 'Biru Muda'),
(3, 'Hijau'),
(4, 'Kuning'),
(5, 'Merah'),
(6, 'Orange'),
(7, 'Pink'),
(8, 'Putih'),
(9, 'Ungu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tjenis_trayek`
--
ALTER TABLE `tjenis_trayek`
  ADD PRIMARY KEY (`id_jenis_trayek`);

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
-- Indexes for table `twarna_angkot`
--
ALTER TABLE `twarna_angkot`
  ADD PRIMARY KEY (`id_warna_angkot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttrayek`
--
ALTER TABLE `ttrayek`
  MODIFY `id_angkot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
